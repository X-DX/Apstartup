<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectionc extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id',        
        'final_product',
        'about_idea',
        'problem',
        'solution',
        'uniqueness',
        'innovative',
        'business_model',
        'revenue_model',
        'employment',
        'stage',

        'patent',
        'patent_certf',

        'awards',
        'awards_describe',
        'awards_certificate',

        'fund',
        'fund_describe',
        'fund_certificate',

        'incu',
        'incu_dec',
        'incu_period',

        'moa',
        'businessplan',
        'financialproject',
        'pitchdeck',
        'websitelink',
        'videolink',
        'othercrt',



    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
