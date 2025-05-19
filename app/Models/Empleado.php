<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function departamento() {
    return $this->belongsTo(Departamento::class);
}
protected $fillable = ['nombre', 'email', 'dni', 'departamento_id'];

}
