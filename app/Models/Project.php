<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    // use Translatable;

    protected $table = "projects";

    protected $fillable = ['title', 'cover_img'];

    // protected $translatable = ['title', 'cover_img'];

    //--------------------------------------
    public function images(){
        return $this->hasMany('App\Models\ProjectsImages');
    }
}
