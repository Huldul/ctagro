<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Advantage extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'main'];

    public function custom_page()
    {
        return $this->belongsTo(CustomPage::class);
    }
}
