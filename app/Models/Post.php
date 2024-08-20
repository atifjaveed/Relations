<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'title',
        'description'
    ];

    public function comments(){
        return $this->hasMany(Comment::class,'post_id','id');
    }
    public function userprofile(){
        return $this->belongsTo(UserProfile::class);
    }

    Public function categories(){
        return $this->belongsToMany(Categories::class,'post_categories','post_id','category_id');
    }

}
