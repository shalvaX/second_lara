<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public $fillable = ['name','make','model','license_number','weight','registration_year'];
    public $guarded = ['age'];
    public $table = 'cars';
    public $timestamps = true;

    public function getAge(){
        $diff = abs(strtotime(date("Y-m-d")) - strtotime($this->registration_year));
        $age = floor($diff/(365*60*60*24));

        return $age;
    }
}
