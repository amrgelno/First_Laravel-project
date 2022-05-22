<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsImages extends Model
{
    use HasFactory;

    protected $table = "projects_images";

    protected $fillable = ['project_id', 'img_path'];


    //--------------------------------------------
    public function project(){
        return $this->belongsTo('App\Models\Project');
    }
}
