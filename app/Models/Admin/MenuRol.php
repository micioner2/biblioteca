<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MenuRol extends Model
{
    protected $table = "menu_roles";
    protected $fillable = ['nombre','url','icono'];
    protected $guarded = ['id'];
    public $timestamp  = false;
}
