<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OCR_ extends Model
{
    use HasFactory;
    protected $table = 'ocr';
    protected $primarykey='id';
    public $incrementing= true;
   protected $fillable=['content'];
}
