<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email'
    ];

    public function posts(){
        return $this->hasMany(Post::class ,'user_id','id');
    }
}
