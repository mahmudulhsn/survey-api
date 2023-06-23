<?php

namespace App\Models;

use App\Casts\Json;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    use HasFactory;

    // protected $casts = ['data' => 'array'];

    protected $fillable = ['id', 'type', 'question', 'description', 'data', 'survey_id'];
}
