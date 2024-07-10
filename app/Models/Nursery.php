<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nursery extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $primaryKey='id';
    public $table='nurseries';
}
