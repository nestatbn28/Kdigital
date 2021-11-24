<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory,Uuids;
    protected $table = 'tiket';
    public $timestamps = false;
    protected $fillable = [
        'subject',
        'message',
        'status',
        'priority',
    ];
}
