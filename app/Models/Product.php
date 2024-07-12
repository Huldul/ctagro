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
    protected $translatable = ['title', 'dscription1', 'dscription2', 'desc_title1', 'desc_title2', 'desc_title3', 'desc_title4', 'desc_main1', 'desc_main2', 'desc_main3', 'desc_main4', 'seo_title', 'seo_subtitle', 'seo_keywords', 'desc_hidden_main1', 'desc_hidden_main2', 'desc_hidden_main3', 'desc_hidden_main4'];

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
    public function blocks()
    {
        return $this->hasMany(ExtraBlock::class);
    }
    public function news()
    {
        return $this->hasMany(AdvNews::class);
    }
}
