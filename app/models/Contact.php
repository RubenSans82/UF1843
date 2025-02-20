<?php
namespace Ruben\models;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model{
    protected $table = 'contactos';
    protected $primaryKey = 'contactos_id';
    public $timestamps = false;
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion', 'create_date'];
}
?>