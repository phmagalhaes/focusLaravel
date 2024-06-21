<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['userId', 'title', 'description', 'deliveryDate', 'concluded'];

    protected $dates = ['date'];
}
