<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a few topics with subtopics and details for the crops page
        \App\Models\Topic::factory()->count(6)->create()->each(function($topic) {
            $sub = \App\Models\SubTopic::factory()->count(5)->make();
            $topic->subTopics()->saveMany($sub);

            $topic->subTopics->each(function($s) {
                \App\Models\TopicDetail::factory()->count(1)->state(['sub_topic_id' => $s->id])->create();
            });
        });
    }
}
