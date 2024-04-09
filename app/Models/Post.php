<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class Post extends Model
{
    public function userPost(){

        if(file_exists('storage/post/'.$this->post)){
            return Storage::disk('local')->url('post/'.$this->post);
        }
        return url('post.png');
    }
}
