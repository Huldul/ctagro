<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class AboutPage extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable = [
        'head_title', 'head_subtitle', 'head_main', 'head_desc',
        'sec_main', 'sec_desc', 'tr_main', 'adv_title1',
        'adv_title2', 'adv_title3', 'adv_title4', 'adv_main1',
        'adv_main2', 'adv_main3', 'adv_main4', 'four_title',
        'four_main', 'mission_title', 'mission_main',
        'princ_head_title', 'princ_title1', 'princ_title2',
        'princ_title3', 'princ_main1', 'princ_main2',
        'princ_main3', 'seo_title', 'seo_description', 'seo_keywords'
    ];
}
