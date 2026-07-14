<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });


//1.Nessa rota qualquer usuário tem acesso a tela inicial, com os botões de Login/Registro
Route::get('/', function () {
    return view('welcome');
});


 // Rota que leva o usuario para tela inicial.
 Route::middleware(['auth', 'verified'])->group(function () {
     //Rota Raiz apontando para o painel de controle dinâmico
     Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');     
   //rotas existentes de Admin e Operador continuam abaixo...
 });// Mantém compatibilidade com o Breeze(fim da rota)


//2. ROTAS PROTEGIDAS: Só entra quem estiver cadastrado e verificado
Route::middleware(['auth', 'verified'])->group(function () {
    // Quando o usuário logar, ele vai para o /dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Outras rotas do seu sistema que precisam de login ficam aqui dentro...
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// 🔒 GRUPO 1: Rotas protegidas apenas por Login (Tanto Admin quanto Operador acessam)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Lista os produtos e categorias (Telas de visualização)
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    
    // Telas de criação e salvamento de dados
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
});

// 🛡️ GRUPO 2: Rotas exclusivas de ADMINISTRADORES (Usa o nosso Middleware 'admin')
Route::middleware(['auth', 'admin'])->group(function () {
    
    // Apenas Admins podem editar, atualizar ou excluir registros do sistema
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});
