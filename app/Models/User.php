<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Determine whether the user can access Filament admin.
     * By default this allows the admin seeded via ADMIN_EMAIL in .env.
     *
     * @return bool
     */
    public function canAccessFilament(): bool
    {
        // Allow access when running in local/dev environment for convenience.
        if (env('APP_ENV', 'production') === 'local') {
            return true;
        }

        $adminEmail = env('ADMIN_EMAIL', 'admin@example.com');

        // If you later add roles, replace this logic with role checks.
        return $this->email === $adminEmail;
    }

    /**
     * Return an avatar URL for Filament's avatar component.
     * Uses the Jetstream profile photo when available, otherwise falls back to Gravatar.
     *
     * @return string
     */
    public function getFilamentAvatar(): string
    {
        if (! empty($this->profile_photo_path) || ! empty($this->profile_photo_url)) {
            return $this->profile_photo_url;
        }

        $email = strtolower(trim($this->email ?? ''));
        $hash = md5($email);

        // Default to the 'mp' (mystery person) Gravatar fallback
        return "https://www.gravatar.com/avatar/{$hash}?s=80&d=mp";
    }

    /**
     * Backwards-compatible helper used by Filament to check admin status.
     * Delegates to `canAccessFilament()` to keep logic in one place.
     *
     * @return bool
     */
    public function isFilamentAdmin(): bool
    {
        return $this->canAccessFilament();
    }
}
