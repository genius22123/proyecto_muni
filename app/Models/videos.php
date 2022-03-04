<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    protected $fillable=['titulo','etiqueta','color','url','imagen'];
    use HasFactory;
}
