<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public static $rules = array(
        'content' => ['required'|'min:0'|'max:20']
        );

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
