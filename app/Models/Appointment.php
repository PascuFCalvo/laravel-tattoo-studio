<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
   use HasFactory;

   //mass assginment para evitar el error al crear un rol
   protected $fillable = [
      'title',
   ];

   protected $table = "_appointments";
}
