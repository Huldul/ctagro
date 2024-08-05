<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Str;

class Subtype extends Model
{
    use HasFactory;
    use Translatable;

    protected $translatable = ['title', 'subtitle', 'main', 'seo_title', 'seo_subtitle', 'seo_keywords'];

    public static function boot(){
        parent::boot();

        self::creating(function($model){
            $slug = Str::slug($model->title);
            $model->slug = Subtype::where('slug', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });

        self::updating(function($model){
            $slug = Str::slug($model->title);
            $model->slug = Subtype::where('slug', '!=', $model->slug)->where('slug', $slug)->exists() ? $slug.'-'.uniqid() : $slug;
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class, 'type_subtypes', 'subtype_id', 'type_id');
    }

    public function parentSubtype()
    {
        return $this->belongsTo(Subtype::class, 'subtype_id');
    }

    public function subtypes()
    {
        return $this->hasMany(Subtype::class, 'subtype_id');
    }
}

