<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\TTLEnum;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    public function isAdmin(): bool
    {
        return $this->is_admin();
    }

    public function is_admin(): bool
    {
        return $this->email === 'andrei@danielpetrica.com';

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<\App\Models\UserFlag, $this>
     */
    public function userFlags(): HasMany
    {
        return $this->hasMany(UserFlag::class);
    }

    public function getFlag(string $name): ?bool
    {
        $key = $this->flagCacheKey(name: $name);

        return Cache::remember(key: $key, ttl: TTLEnum::SixHours->getSeconds(), callback: function () use ($name): ?bool {
            $record = UserFlag::query()
                ->where('user_id', $this->id)
                ->where('name', $name)
                ->first();

            return $record?->value;
        });
    }

    public function hasFlag(string $name): bool
    {
        return (bool) ($this->getFlag($name) === true);
    }

    public function setFlag(string $name, bool $value): void
    {
        UserFlag::query()->updateOrCreate(
            [
                'user_id' => $this->id,
                'name' => $name,
            ],
            [
                'value' => $value,
            ]
        );

        Cache::forget($this->flagCacheKey($name));

        self::getFlag($name);
    }

    protected function flagCacheKey(string $name): string
    {
        return 'user:'.$this->id.':flag:'.$name;
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->isAdmin() && $this->hasVerifiedEmail();
    }

    public function canComment(): bool
    {
        // your conditional logic here
        return $this->is_admin();
    }

    public function name(): string
    {
        return $this->name;
    }

    // Teams/tenancy removed from the application.
}
