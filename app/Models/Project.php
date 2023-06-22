<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'type_id',
      'slug',
      'date',
      'image_name',
      'image_path',
      'description'
    ];

    public function type() {
      return $this->belongsTo(Type::class);
    }

    public function technologies() {
      return $this->belongsToMany(Technology::class);
    }

}
