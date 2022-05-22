<?php

namespace App\Models;

use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    // use Translatable;    

    protected $table = "contact_us";

    protected $fillable = ['name', 'email', 'subject', 'message'];

    // protected $translatable = ['name', 'email', 'subject', 'message'];
}
