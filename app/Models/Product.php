<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = ['title', 'dscription1', 'dscription2', 'desc_title1', 'desc_title2', 'desc_main1', 'desc_main2', 'seo_title', 'seo_subtitle', 'seo_keywords'];

    public static function boot(){
        parent::boot();

        self::creating(function($model){
            $slug = Str::slug($model->title);
            $model->slug = Product::where('slug', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });

        self::updating(function($model){
            $slug = Str::slug($model->title);
            $model->slug = Product::where('slug', '!=', $model->slug)->where('slug', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Define the relationship to Type
    public function subtype()
    {
        return $this->belongsTo(Subtype::class);
    }
}
