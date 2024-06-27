<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CustomPage extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'subtitle1', 'subtitle2', 'desc1', 'desc2', 'main1', 'main2', 'seo_title', 'seo_subtitle', 'seo_keywords'];
    public function advantages()
    {
        return $this->hasMany(Advantage::class);
    }
}
