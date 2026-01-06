<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ImportStaticContent extends Command
{
    protected $signature = 'import:static {type : crops|livestock} {path : file or directory} {--dry-run}';

    protected $description = 'Import static content (JSON or directory of markdown) into the DB (topics/subtopics/details or livestock).';

    public function handle()
    {
        $type = $this->argument('type');
        $path = $this->argument('path');
        $dryRun = $this->option('dry-run');

        if (! in_array($type, ['crops', 'livestock'])) {
            return $this->error('Invalid type. Use "crops" or "livestock"');
        }

        // Accept files or directories
        if (! file_exists($path)) {
            return $this->error('Path does not exist: ' . $path);
        }

        $this->info("Importing $type from $path" . ($dryRun ? ' (dry-run)' : ''));

        // Load JSON file
        if (is_file($path)) {
            $content = file_get_contents($path);
            $data = json_decode($content, true);
            if ($data === null) {
                return $this->error('Failed to parse JSON or file is empty');
            }
        } else {
            // directory: find .json files or .md files
            $files = glob(rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . '*');
            $data = [];
            foreach ($files as $f) {
                if (is_file($f) && Str::endsWith($f, ['.json'])) {
                    $json = json_decode(file_get_contents($f), true);
                    if ($json) {
                        $data = array_merge($data, $json);
                    }
                }
            }
            if (empty($data)) {
                return $this->error('No JSON files found in directory or files were empty');
            }
        }

        if ($type === 'crops') {
            $this->importCrops($data, $dryRun);
        } else {
            $this->importLivestock($data, $dryRun);
        }

        $this->info('Import complete.');

        return 0;
    }

    protected function importCrops(array $topics, bool $dryRun)
    {
        $bar = $this->output->createProgressBar(count($topics));
        $bar->start();

        foreach ($topics as $topic) {
            $name = $topic['name'] ?? null;
            $slug = $topic['slug'] ?? Str::slug($name);

            if (!$name) {
                $this->warn('Skipping topic with no name');
                continue;
            }

            if ($dryRun) {
                $this->line("[DRY] Topic: $name ($slug)");
            } else {
                $model = \App\Models\Topic::firstOrCreate(['slug' => $slug], [
                    'name' => $name,
                    'description' => $topic['description'] ?? null,
                    'image' => $topic['image'] ?? null,
                    'status' => $topic['status'] ?? true,
                ]);
                $this->line("Created/Found Topic: {$model->id} - {$model->name}");

                foreach ($topic['subtopics'] ?? [] as $sub) {
                    $sname = $sub['name'] ?? null;
                    $sslug = $sub['slug'] ?? Str::slug($sname);
                    if (!$sname) { continue; }

                    $smodel = \App\Models\SubTopic::firstOrCreate(['slug' => $sslug, 'topic_id' => $model->id], [
                        'name' => $sname,
                        'description' => $sub['description'] ?? null,
                        'status' => $sub['status'] ?? true,
                    ]);

                    foreach ($sub['details'] ?? [] as $d) {
                        $dtitle = $d['title'] ?? null;
                        if (!$dtitle) { continue; }

                        $detail = \App\Models\TopicDetail::firstOrCreate([
                            'sub_topic_id' => $smodel->id,
                            'title' => $dtitle,
                        ], [
                            'content' => $d['content'] ?? null,
                            'attributes' => $d['attributes'] ?? null,
                            'image' => $d['image'] ?? null,
                        ]);
                    }
                }
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
    }

    protected function importLivestock(array $categories, bool $dryRun)
    {
        $bar = $this->output->createProgressBar(count($categories));
        $bar->start();

        foreach ($categories as $cat) {
            $name = $cat['name'] ?? null;
            $slug = $cat['slug'] ?? Str::slug($name);

            if (!$name) { $this->warn('Skipping category with no name'); continue; }

            if ($dryRun) {
                $this->line("[DRY] Category: $name ($slug)");
            } else {
                $model = \App\Models\LivestockCategory::firstOrCreate(['slug' => $slug], [
                    'name' => $name,
                    'description' => $cat['description'] ?? null,
                    'image' => $cat['image'] ?? null,
                    'status' => $cat['status'] ?? true,
                ]);

                foreach ($cat['varieties'] ?? [] as $v) {
                    $vname = $v['name'] ?? null;
                    $vslug = $v['slug'] ?? Str::slug($vname);
                    if (!$vname) { continue; }

                    $vmodel = \App\Models\LivestockVariety::firstOrCreate(['slug' => $vslug, 'livestock_category_id' => $model->id], [
                        'name' => $vname,
                        'description' => $v['description'] ?? null,
                        'image' => $v['image'] ?? null,
                        'status' => $v['status'] ?? true,
                    ]);

                    foreach ($v['details'] ?? [] as $d) {
                        $dtitle = $d['title'] ?? null;
                        if (!$dtitle) { continue; }

                        $detail = \App\Models\LivestockDetail::firstOrCreate([
                            'livestock_variety_id' => $vmodel->id,
                            'title' => $dtitle,
                        ], [
                            'content' => $d['content'] ?? null,
                            'attributes' => $d['attributes'] ?? null,
                            'image' => $d['image'] ?? null,
                        ]);
                    }
                }
            }

            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
    }
}
