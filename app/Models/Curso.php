<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* protected $fillable = ['name', 'descripcion', 'categoria']; */
    protected $guarded = []; //colocar los campos protegidos e ignorar los campos permitidos.

    // /* Parte para el slug "URL'S amigables" añadida desde la clase Model de la que extiende este modelo Curso */
    public function getRouteKeyName()
    {
        return "slug";
    }

}
