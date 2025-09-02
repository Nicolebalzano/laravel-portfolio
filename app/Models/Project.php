<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  public function technologies(){
return $this->belongsToMany(Technology::class);
  }
}
