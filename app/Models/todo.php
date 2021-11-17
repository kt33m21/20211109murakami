<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{

    public function gettimestamp()
    {
        $time = ''.$this->created_at ;
        return $time;
    }

    public function getcontent()
    {
        $txt = ''.$this->content;
        return $txt;
    }
}
