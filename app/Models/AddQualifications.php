<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddQualifications extends Model
{
    use HasFactory;

    protected $casts = [        
        'options' => 'array'
    ];

    protected $fillable = ['title','options'];

    public function setQualification()
    {
        return $this->hasMany(SetQualification::class);
    }
}
