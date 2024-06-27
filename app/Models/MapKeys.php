<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class MapKeys extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['head_title','title1','title2','title3','title4', 'subtitle1', 'subtitle2'];
    // protected $translatable = ['head_title','title1','title2','title3','title4', 'subtitle1', 'subtitle2', 'name1','name2','name3','name4','num1','num2','num3','num4','email1','email2','email3','email4'];
}
