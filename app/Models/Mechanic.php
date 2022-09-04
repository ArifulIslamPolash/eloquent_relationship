<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function carOwner(){
        return $this->hasOneThrough(Owner::class, Car::class);
       // return $this->hasOneThrough(final_table_nameORjeti_ber_korbo::class, intermediate_tableORpivot_tableORjer_maddhome_berkorbo::class);
    }
    public function car(){
        return $this->hasOne(Car::class);
    }
}
