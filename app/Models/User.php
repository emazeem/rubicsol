<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'designation',
        'department',
        'joining',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function userProfile(){

        if(file_exists('storage/profile/'.$this->profile)){
            return Storage::disk('local')->url('profile/'.$this->profile);
        }
        return url('profile.png');
    }
    public function userCV(){

        if(file_exists('storage/cv/'.$this->cv)){
            return Storage::disk('local')->url('cv/'.$this->cv);
        }
        return url('cv.png');
    }
    public function userCNIC(){

        if(file_exists('storage/cnic/'.$this->cnic)){
            return Storage::disk('local')->url('cnic/'.$this->cnic);
        }
        return url('cnic.png');
    }
}
