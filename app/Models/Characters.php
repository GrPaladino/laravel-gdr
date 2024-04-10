<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'attack', 'defence', 'speed', 'life'];

<<<<<<< HEAD
    public function type() {
        return $this->belongsTo(Type::class);
=======
    public function items()
    {
        return $this->belongsToMany(Item::class);
>>>>>>> 763f302803f48de39d7c1da99e932cf3e302eabc
    }
}
