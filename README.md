<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## Project setup & running locally ✅

This project uses Laravel + Livewire + Filament. The instructions below will get you up and running on a new device (Windows examples use PowerShell where helpful).

### Prerequisites

- PHP 8.0+ with required extensions (mbstring, bcmath, PDO, OpenSSL, tokenizer, xml, zip, fileinfo)
- Composer
- Node.js (16+) and npm or Yarn
- A database (MySQL / MariaDB / SQLite / PostgreSQL)
- Git

### Clone the repository

```bash
git clone <repo-url>
cd NAROinfoHub
```

### Install PHP & JS dependencies

```bash
composer install --no-interaction --prefer-dist --optimize-autoloader
npm install
# or using yarn
# yarn install
```

### Environment

Copy the example env and set your credentials:

```bash
cp .env.example .env
# in PowerShell
# copy .env.example .env
```

Set these at minimum in `.env`:
- `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
- `APP_URL` (e.g. `http://127.0.0.1:8000`)

Generate app key:

```bash
php artisan key:generate
```

Optional: create a storage symlink for uploads (if using local disk):

```bash
php artisan storage:link
```

### Database migrations & seeders

Run migrations and the base seeder. For a fresh start you can run:

```bash
php artisan migrate
php artisan db:seed
```

If you want to run only the livestock seed (example):

```bash
php artisan db:seed --class=LivestockSeeder
```

Notes for Windows/PowerShell: in some environments the fully-qualified namespaced seeder argument may fail; use the short class name shown above, or quote the FQCN:

```bash
php artisan db:seed --class='Database\\Seeders\\LivestockSeeder'
```

If you add new classes and artisan can't find them, regenerate Composer's autoload files:

```bash
composer dump-autoload
```

### Build frontend assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

### Run the local server

```bash
php artisan serve --host=127.0.0.1 --port=8000
```

Visit the public pages:
- http://127.0.0.1:8000/livestock
- http://127.0.0.1:8000/crops

### Filament admin panel

Filament is mounted under `/admin` by default (e.g. `http://127.0.0.1:8000/admin`). Create an admin user via registration, the `AdminSeeder`, or Tinker and sign in to manage content (resources exist for Topics/SubTopics/Details and the new Livestock Category/Variety/Detail resources).

Create a quick admin user (Tinker example):

```bash
php artisan tinker
>>> \App\Models\User::create(['name' => 'Admin', 'email' => 'admin@example.com', 'password' => bcrypt('password')]);
```

Seed a default admin (recommended for fresh installs)

- By default the `AdminSeeder` creates an admin with email `admin@example.com` and password `ChangeMe123!` (you can override these with env vars):

```bash
# set these values in .env if you want different creds
ADMIN_EMAIL=admin@example.com
ADMIN_PASSWORD=ChangeMe123!

# run seeder
php artisan db:seed --class=AdminSeeder
```

Reset admin password via Tinker

```bash
php artisan tinker
>>> \App\Models\User::where('email','admin@example.com')->update(['password' => bcrypt('NewStrongPass!')]);
```

Security note: change the admin password after first login and avoid checking production admin credentials into source control.

### Common gotchas

- Filament v1: some resource Create pages use manual Livewire public properties and `create()` overrides to collect form data and avoid a known CreateRecord form-state issue. When adding new resources, follow the pattern used in existing resources and avoid naming form fields `slug` (use `*_slug` instead) to prevent collisions with the Page `slug` property.
- If a newly added class isn't found by Artisan, run `composer dump-autoload`.
- Windows PowerShell quotings: when passing FQCNs to Artisan use single quotes and double-escaped backslashes as shown above.

### Tests

Run the PHPUnit tests with:

```bash
php artisan test
# or
vendor/bin/phpunit
```

We added a basic test for the Livestock public page: `tests/Feature/LivestockTest.php`.

---

If you'd like, I can add a `scripts` section to `composer.json` that bundles common commands (migrate+seed, test, setup) to make onboarding one-command friendly. Let me know and I’ll add it.

### Importing static content

We included an Artisan command to import static content from JSON or a directory of JSON files:

```bash
# Dry-run (no DB writes):
php artisan import:static crops database/seeders/import_samples/crops_sample.json --dry-run

# Run the import and persist to DB:
php artisan import:static crops database/seeders/import_samples/crops_sample.json

# Import livestock sample:
php artisan import:static livestock database/seeders/import_samples/livestock_sample.json
```

The command supports `crops` or `livestock`, a path to a JSON file or directory, and `--dry-run` to preview changes without writing to the DB. Imports are idempotent and match on `slug` (or title for details) to avoid duplicate records.

