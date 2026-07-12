<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $blueprint) {
            // Adiciona o estoque mínimo após a coluna de quantidade (ou ajuste conforme suas colunas)
            $blueprint->integer('minimum_stock')->default(0)->after('quantity');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $blueprint) {
            $blueprint->dropColumn('minimum_stock');
        });
    }
};