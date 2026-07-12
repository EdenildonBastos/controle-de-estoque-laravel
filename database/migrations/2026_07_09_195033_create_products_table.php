<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // Cria a chave estrangeira ligando o produto à categoria.
        // O 'cascadeOnDelete' garante que se uma categoria for excluída, os produtos dela também somem.
        $table->foreignId('category_id')->constrained()->cascadeOnDelete();
        $table->string('name');
        $table->string('sku')->unique()->nullable(); // Código de barras ou identificador único do produto
        $table->integer('quantity');
        $table->decimal('price', 8, 2)->nullable();
        $table->date('expiration_date'); // A data de validade que usaremos para o alerta!
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
