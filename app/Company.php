<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Company extends Model
{
    protected $fillable = [
        'company',
        'location',
        'address',
        'Tel',
        'email'
    ];
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function jobs() {

        return $this->hasMany('App\Jobs');

    }
}
