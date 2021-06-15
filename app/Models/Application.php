<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'domain',
        'company_name',
        'logo',
        'gender',
        'dob',
        'occupation',
        'photo',
        'address',
        'district',
        'state',
        'country',
        'webpage',
        'user_id',
        'set',
        'app_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
