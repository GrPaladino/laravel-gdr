<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img', 'description'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function getAbstract($n_chars = 100)
    {
        return (strlen($this->description) > $n_chars) ? substr($this->description, 0, $n_chars) . '...' : $this->description;
    }
}
