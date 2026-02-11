<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.auth.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LgIcmkLrzMNdWVIZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.auth.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.pages.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/account' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.account',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/form-attachments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.form-attachments.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/articles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.articles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/articles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.articles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/crop-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crop-categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/crop-categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crop-categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/crop-items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crop-items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/crop-items/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crop-items.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/crops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crops.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/crops/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crops.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/sub-topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.sub-topics.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/sub-topics/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.sub-topics.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/topic-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.topic-details.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/topic-details/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.topic-details.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.topics.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/resources/topics/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.topics.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mgobz6eZHu7icC0k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hs3lln3XbzTnG9Nw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-profile-information.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hNOy23dQt4tnpGbY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-password-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/two-factor-challenge' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ac4BufiGRm6iiQZi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.enable',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.disable',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-two-factor-authentication' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-qr-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.qr-code',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-secret-key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.secret-key',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/two-factor-recovery-codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'two-factor.recovery-codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::56hkHcx02FLCCphS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b6wFbbflNyC7ZvpL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1AQsMetvx3HuPdTk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xpDqr5eW8zwNUoZt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m7mW0gSg2wJhiGZt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vet-vaccinations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sdQYuhVqQQPXyDHv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/farmer-adoptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LzGYs86XCEjLdySV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livestock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livestock.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/crops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'crops.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forestry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'forestry.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fisheries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fisheries.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facilities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/media' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'media.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contactus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contactus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities/anti_tick_vaccine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facilities.anti_tick_vaccine',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities/greenhouses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facilities.greenhouses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities/libraries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'facilities.libraries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities/anti-tick-vaccine/vets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'anti-tick-vaccine.vets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities/anti-tick-vaccine/farmers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'anti-tick-vaccine.farmers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities/anti-tick-vaccine/publications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'anti-tick-vaccine.publications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/facilities/anti-tick-vaccine/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'anti-tick-vaccine.faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subtopics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subtopics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/crops' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.crops',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/admin/(?|assets/(.*)(*:28)|res(?|et\\-password/([^/]++)(*:62)|ources/(?|articles/([^/]++)/edit(*:101)|crop(?|\\-(?|categories/([^/]++)/edit(*:145)|items/([^/]++)/edit(*:172))|s/([^/]++)/edit(*:196))|sub\\-topics/([^/]++)/edit(*:230)|topic(?|\\-details/([^/]++)/edit(*:269)|s/([^/]++)/edit(*:292))))|image/(.*)(*:313)|users/([^/]++)/edit(*:340))|/reset\\-password/([^/]++)(*:374)|/livewire/message/([^/]++)(*:408)|/([^/]++)/livewire/message/([^/]++)(*:451)|/livewire/preview\\-file/([^/]++)(*:491)|/admin/debug/topic\\-detail/([^/]++)(*:534))/?$}sDu',
    ),
    3 => 
    array (
      28 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.asset',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      62 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.auth.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.articles.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crop-categories.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crop-items.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.crops.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.sub-topics.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      269 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.topic-details.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.resources.topics.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.image',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filament.users.edit',
          ),
          1 => 
          array (
            0 => 'record',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      374 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wWvWkt3l6FsK9c93',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'filament.asset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/assets/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Http\\Controllers\\AssetController@__invoke',
        'controller' => 'Filament\\Http\\Controllers\\AssetController',
        'as' => 'filament.asset',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.auth.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\RedirectIfAuthenticated',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Http\\Livewire\\Auth\\Login@__invoke',
        'controller' => 'Filament\\Http\\Livewire\\Auth\\Login',
        'as' => 'filament.auth.login',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.auth.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\RedirectIfAuthenticated',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Http\\Livewire\\Auth\\RequestPassword@__invoke',
        'controller' => 'Filament\\Http\\Livewire\\Auth\\RequestPassword',
        'as' => 'filament.auth.password.request',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.auth.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\RedirectIfAuthenticated',
          9 => 'Illuminate\\Routing\\Middleware\\ValidateSignature',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Http\\Livewire\\Auth\\ResetPassword@__invoke',
        'controller' => 'Filament\\Http\\Livewire\\Auth\\ResetPassword',
        'as' => 'filament.auth.password.reset',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.image' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/image/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Http\\Controllers\\ImageController@__invoke',
        'controller' => 'Filament\\Http\\Controllers\\ImageController',
        'as' => 'filament.image',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.pages.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Pages\\Dashboard@__invoke',
        'controller' => 'App\\Filament\\Pages\\Dashboard',
        'as' => 'filament.pages.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Http\\Livewire\\Dashboard@__invoke',
        'controller' => 'Filament\\Http\\Livewire\\Dashboard',
        'as' => 'filament.dashboard',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.account' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/account',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Http\\Livewire\\EditAccount@__invoke',
        'controller' => 'Filament\\Http\\Livewire\\EditAccount',
        'as' => 'filament.account',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.form-attachments.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/form-attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Forms\\Http\\Controllers\\FormAttachmentController@__invoke',
        'controller' => 'Filament\\Forms\\Http\\Controllers\\FormAttachmentController',
        'as' => 'filament.form-attachments.upload',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.articles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\ArticleResource\\Pages\\ListArticles@__invoke',
        'controller' => 'App\\Filament\\Resources\\ArticleResource\\Pages\\ListArticles',
        'as' => 'filament.resources.articles.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.articles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/articles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\ArticleResource\\Pages\\CreateArticle@__invoke',
        'controller' => 'App\\Filament\\Resources\\ArticleResource\\Pages\\CreateArticle',
        'as' => 'filament.resources.articles.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.articles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/articles/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\ArticleResource\\Pages\\EditArticle@__invoke',
        'controller' => 'App\\Filament\\Resources\\ArticleResource\\Pages\\EditArticle',
        'as' => 'filament.resources.articles.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crop-categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crop-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropCategoryResource\\Pages\\ListCategories@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropCategoryResource\\Pages\\ListCategories',
        'as' => 'filament.resources.crop-categories.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crop-categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crop-categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropCategoryResource\\Pages\\CreateCategory@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropCategoryResource\\Pages\\CreateCategory',
        'as' => 'filament.resources.crop-categories.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crop-categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crop-categories/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropCategoryResource\\Pages\\EditCategory@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropCategoryResource\\Pages\\EditCategory',
        'as' => 'filament.resources.crop-categories.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crop-items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crop-items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropItemResource\\Pages\\ListItems@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropItemResource\\Pages\\ListItems',
        'as' => 'filament.resources.crop-items.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crop-items.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crop-items/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropItemResource\\Pages\\CreateItem@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropItemResource\\Pages\\CreateItem',
        'as' => 'filament.resources.crop-items.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crop-items.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crop-items/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropItemResource\\Pages\\EditItem@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropItemResource\\Pages\\EditItem',
        'as' => 'filament.resources.crop-items.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropResource\\Pages\\ListCrops@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropResource\\Pages\\ListCrops',
        'as' => 'filament.resources.crops.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crops.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crops/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropResource\\Pages\\CreateCrop@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropResource\\Pages\\CreateCrop',
        'as' => 'filament.resources.crops.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.crops.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/crops/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\CropResource\\Pages\\EditCrop@__invoke',
        'controller' => 'App\\Filament\\Resources\\CropResource\\Pages\\EditCrop',
        'as' => 'filament.resources.crops.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.sub-topics.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/sub-topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\SubTopicResource\\Pages\\ListSubTopics@__invoke',
        'controller' => 'App\\Filament\\Resources\\SubTopicResource\\Pages\\ListSubTopics',
        'as' => 'filament.resources.sub-topics.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.sub-topics.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/sub-topics/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\SubTopicResource\\Pages\\CreateSubTopic@__invoke',
        'controller' => 'App\\Filament\\Resources\\SubTopicResource\\Pages\\CreateSubTopic',
        'as' => 'filament.resources.sub-topics.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.sub-topics.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/sub-topics/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\SubTopicResource\\Pages\\EditSubTopic@__invoke',
        'controller' => 'App\\Filament\\Resources\\SubTopicResource\\Pages\\EditSubTopic',
        'as' => 'filament.resources.sub-topics.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.topic-details.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/topic-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\TopicDetailResource\\Pages\\ListTopicDetails@__invoke',
        'controller' => 'App\\Filament\\Resources\\TopicDetailResource\\Pages\\ListTopicDetails',
        'as' => 'filament.resources.topic-details.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.topic-details.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/topic-details/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\TopicDetailResource\\Pages\\CreateTopicDetail@__invoke',
        'controller' => 'App\\Filament\\Resources\\TopicDetailResource\\Pages\\CreateTopicDetail',
        'as' => 'filament.resources.topic-details.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.topic-details.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/topic-details/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\TopicDetailResource\\Pages\\EditTopicDetail@__invoke',
        'controller' => 'App\\Filament\\Resources\\TopicDetailResource\\Pages\\EditTopicDetail',
        'as' => 'filament.resources.topic-details.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.topics.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\TopicResource\\Pages\\ListTopics@__invoke',
        'controller' => 'App\\Filament\\Resources\\TopicResource\\Pages\\ListTopics',
        'as' => 'filament.resources.topics.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.topics.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/topics/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\TopicResource\\Pages\\CreateTopic@__invoke',
        'controller' => 'App\\Filament\\Resources\\TopicResource\\Pages\\CreateTopic',
        'as' => 'filament.resources.topics.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.resources.topics.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/resources/topics/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'App\\Filament\\Resources\\TopicResource\\Pages\\EditTopic@__invoke',
        'controller' => 'App\\Filament\\Resources\\TopicResource\\Pages\\EditTopic',
        'as' => 'filament.resources.topics.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
          9 => 'Filament\\Http\\Middleware\\AuthorizeAdmins',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Resources\\UserResource\\Pages\\ListUsers@__invoke',
        'controller' => 'Filament\\Resources\\UserResource\\Pages\\ListUsers',
        'as' => 'filament.users.index',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
          9 => 'Filament\\Http\\Middleware\\AuthorizeAdmins',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Resources\\UserResource\\Pages\\CreateUser@__invoke',
        'controller' => 'Filament\\Resources\\UserResource\\Pages\\CreateUser',
        'as' => 'filament.users.create',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filament.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{record}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Filament\\Http\\Middleware\\EncryptCookies',
          1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
          2 => 'Illuminate\\Session\\Middleware\\StartSession',
          3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
          4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
          5 => 'Filament\\Http\\Middleware\\VerifyCsrfToken',
          6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
          8 => 'Filament\\Http\\Middleware\\Authenticate',
          9 => 'Filament\\Http\\Middleware\\AuthorizeAdmins',
        ),
        'domain' => NULL,
        'uses' => 'Filament\\Resources\\UserResource\\Pages\\EditUser@__invoke',
        'controller' => 'Filament\\Resources\\UserResource\\Pages\\EditUser',
        'as' => 'filament.users.edit',
        'namespace' => NULL,
        'prefix' => 'admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mgobz6eZHu7icC0k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:login',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mgobz6eZHu7icC0k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hs3lln3XbzTnG9Nw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Hs3lln3XbzTnG9Nw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-profile-information.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile-information',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-profile-information.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hNOy23dQt4tnpGbY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hNOy23dQt4tnpGbY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirmed-password-status',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ac4BufiGRm6iiQZi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'two-factor-challenge',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:two-factor',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ac4BufiGRm6iiQZi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.enable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirmed-two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedTwoFactorAuthenticationController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.disable' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/two-factor-authentication',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorAuthenticationController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.disable',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.qr-code' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-qr-code',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorQrCodeController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.qr-code',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.secret-key' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-secret-key',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\TwoFactorSecretKeyController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.secret-key',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'two-factor.recovery-codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@index',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'two-factor.recovery-codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::56hkHcx02FLCCphS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/two-factor-recovery-codes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
          2 => 'password.confirm',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RecoveryCodeController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::56hkHcx02FLCCphS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
        ),
        'uses' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'controller' => 'Laravel\\Jetstream\\Http\\Controllers\\Livewire\\UserProfileController@show',
        'namespace' => 'Laravel\\Jetstream\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b6wFbbflNyC7ZvpL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::b6wFbbflNyC7ZvpL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1AQsMetvx3HuPdTk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::1AQsMetvx3HuPdTk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xpDqr5eW8zwNUoZt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::xpDqr5eW8zwNUoZt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m7mW0gSg2wJhiGZt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008d80000000000000000";}";s:4:"hash";s:44:"oBfLY+KG+grLdnDjmFxC1MxbvZ0Gl7o/zt3yy8yc8hc=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::m7mW0gSg2wJhiGZt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sdQYuhVqQQPXyDHv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vet-vaccinations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\VetVaccinationController@index',
        'controller' => 'App\\Http\\Controllers\\VetVaccinationController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::sdQYuhVqQQPXyDHv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LzGYs86XCEjLdySV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/farmer-adoptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\FarmerAdoptionController@index',
        'controller' => 'App\\Http\\Controllers\\FarmerAdoptionController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LzGYs86XCEjLdySV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'welcome2',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LgIcmkLrzMNdWVIZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Filament\\Http\\Livewire\\Auth\\Login@__invoke',
        'controller' => 'Filament\\Http\\Livewire\\Auth\\Login',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LgIcmkLrzMNdWVIZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livestock.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livestock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'livestock.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.livestock',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'crops.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'crops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'crops.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.crops',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'forestry.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forestry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'forestry.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.forestry',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fisheries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fisheries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fisheries.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.fisheries',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facilities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facilities.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'media.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'media',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'media.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.media',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contactus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contactus.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.media',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facilities.anti_tick_vaccine' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities/anti_tick_vaccine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facilities.anti_tick_vaccine',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities.anti_tick_vaccine',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facilities.greenhouses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities/greenhouses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facilities.greenhouses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities.greenhouses',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'facilities.libraries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities/libraries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'facilities.libraries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities.libraries',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'anti-tick-vaccine.vets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities/anti-tick-vaccine/vets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'anti-tick-vaccine.vets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities.anti_tick_vaccine.vets',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'anti-tick-vaccine.farmers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities/anti-tick-vaccine/farmers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'anti-tick-vaccine.farmers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities.anti_tick_vaccine.farmers',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'anti-tick-vaccine.publications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities/anti-tick-vaccine/publications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'anti-tick-vaccine.publications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities.anti_tick_vaccine.publications',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'anti-tick-vaccine.faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'facilities/anti-tick-vaccine/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'anti-tick-vaccine.faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'sections.facilities.anti_tick_vaccine.faqs',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:272:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:54:"function () {
        return \\view(\'dashboard\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008ee0000000000000000";}";s:4:"hash";s:44:"y6gKslEzAVcvN+zhmC2+398XpbUAiIkyLSZuoFX2P8g=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.topics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.topics',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subtopics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subtopics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.subtopics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.subtopics',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.details',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.crops' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/crops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.crops',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.crops',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.categories',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'auth',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.items',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'admin.items',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wWvWkt3l6FsK9c93' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/debug/topic-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:sanctum',
          2 => 'Laravel\\Jetstream\\Http\\Middleware\\AuthenticateSession',
          3 => 'verified',
          4 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:325:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:106:"function ($id) {
            return \\response()->json(\\App\\Models\\TopicDetail::findOrFail($id));
        }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008f80000000000000000";}";s:4:"hash";s:44:"ZRrXVfwOgr4R2NwwToVVyP9rFCBlq5FSL98nR7R5jrY=";}}',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wWvWkt3l6FsK9c93',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
