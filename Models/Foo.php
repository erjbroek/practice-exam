<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public float $Kazaam = 99;
    public function getKazaam() {
        return $this->wombat ? $this->thud : $this->thud * 3.141592653;
    }

    public function post() // --> belongsTo function is enkelvoud / / in de model waar je inzit verwijst naar je relatie model
    {
        return $this->belongsTo(Post::class, 'skwal');
    }
}

