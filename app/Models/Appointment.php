<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
   protected $fillable = [
      'title',
      'description',
      'tattoo_artist',
      'user_id',
      'type',
      'appointment_date',
      'appointment_turn',
   ];

   protected $table = "_appointments";
   protected $attributes = [
      'description' => '', // Establece un valor predeterminado para 'description'
   ];
}
