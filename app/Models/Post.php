<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // column we can get data on them avery time
    protected $fillable = [
      'title', 'slug', 'description', 'image_path', 'user_id'
    ];


    // this will give us user table and we can acces it in relation with Post  posts->user->name or posts->user->id etc...
    public function user(){ // here it called propery not method
      return $this->belongsTo(User::class);
    }


}
