<?php

namespace App\Modules\Admin\Support\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportEloquent extends Model
{
    use HasFactory;

    protected $table = 'supports';

    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
}
