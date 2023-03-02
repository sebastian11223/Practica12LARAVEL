<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middleware'=>['adb']],function() {
    Route::get('articulos', [ControladorAdmin::class, 'articulos']) -> name('PAGINAprincipal');
    Route::get('clientes', [ControladorAdmin::class, 'clientes']) -> name('PAGINAclientes');
    Route::get('facturacion', [ControladorAdmin::class, 'Facturacion']) -> name('PAGINAfacturacion');
    Route::get('contabilidad', [ControladorAdmin::class, 'Contabilidad']) -> name('PAGINAcontabilidad');
    
});