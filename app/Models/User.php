<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'anon_name',
        'desc',
        'slug',
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class)->latest();
    }

    public static function getInstanceOfUser($slug): User
    {
        return User::where('slug', $slug)->with('messages')->firstOrFail();
    }
}
