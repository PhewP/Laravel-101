<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model {
    use HasFactory;
    
    // No nos haría falta ya que la tabla
    // tiene como nombre el mismo que el Modelo pero en plural.
    protected $table = 'articulos'; 

    protected $fillable = ['titulo', 'descripcion', 'cuerpo'];
}