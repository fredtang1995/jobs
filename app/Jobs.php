<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Jobs extends Model
{
    protected $fillable = [
        'company_id',
        'job',
        'salary',
        'job_information',
        'email'
    ];
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
