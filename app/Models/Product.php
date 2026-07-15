<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use HasFactory;

    // // Campos permitidos para cadastro
    // // protected $fillable = ['category_id', 'name', 'sku', 'quantity', 'expiration_date'];
    // protected $fillable = [
    //     'category_id',
    //     'name',
    //     'sku',
    //     'quantity',
    //     'minimum_stock',
    //     'price',
    //     'expiration_date',
    //     'created_at',
    //     'updated_at',
    //     ];
    use HasFactory;

    // Garanta que 'category_id' esteja nesta lista!
    protected $fillable = [
        'category_id', 
        'name', 
        'sku', 
        'quantity', 
        'minimum_stock', 
        'price', 
        'expiration_date'
    ];

    // Garante que o Laravel trate a data de expiração como um objeto de data do PHP
    protected $casts = [
        'expiration_date' => 'date',
    ];

    // Relacionamento: O produto pertence a uma categoria (Muitos para 1)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
