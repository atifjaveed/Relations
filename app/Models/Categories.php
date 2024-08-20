<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description'
    ];
    // protected $attributes = [
    //     'description' => 'default '
    // ];
    public function post(){
        return $this->belongsToMany(Post::class);
    }
}
