<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public $fillable = ['name','make','model','license_number','weight','registration_year'];
    public $guarded = ['age'];
    public $table = 'cars';
    public $timestamps = true;
}
