<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectionb extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'dpiit_radiobox',
        'dpittno',
        'dpittcr',
        'nameentity',
        'legalentity',
        'cin',
        'incorporationdate',
        'incorporationcertificate',
        'pan',
        'copypan',
        'gst',
        'copygst',
        'aadhaar',
        'copyaadhaar',

        'roadd1',
        'roadd2',
        'rocity',
        'rodistrict',
        'rostate',
        'ropincode',


        'hoadd1',
        'hoadd2',
        'hocity',
        'hodistrict',
        'hostate',
        'hopincode',
        'sector',
        'industry',

        'nofounder',
        'sharecer',
        'noofemployees',
        'declaration',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);       
    }
}
