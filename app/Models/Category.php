<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Define quais campos podem ser cadastrados no banco
    protected $fillable = ['name', 'description'];

    // Relacionamento: Uma categoria tem muitos produtos (1 para Muitos)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
