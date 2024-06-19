<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\AcceuilsiteController;
use App\Http\Controllers\ApropossiteController;
use App\Http\Controllers\OrgasiteController;
use App\Http\Controllers\MotpressiteController;
use App\Http\Controllers\ProjetencoursController;
use App\Http\Controllers\ProjetsréalisésController;
use App\Http\Controllers\AtcController;
use App\Http\Controllers\AutodeskformationController;
use App\Http\Controllers\SoftsolutionController;
use App\Http\Controllers\ActualitesiteController;
use App\Http\Controllers\ContactController;
//use App\Http\Controllers\ProjetsiteController;
use App\Http\Controllers\ProjetsingleController;
use App\Http\Controllers\ActualiteuneController;
use App\Http\Controllers\ClientsiteController;
use App\Http\Controllers\RecrutController;
use App\Http\Controllers\DetailjobController;
use App\Http\Controllers\OffreController;








Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
 
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');



    Route::controller(ProjetController::class)->prefix('projets')->group(function () {
        Route::get('', 'index')->name('projets');
        Route::get('create', 'create')->name('projets.create');
        Route::post('store', 'store')->name('projets.store');
        Route::get('show/{id}', 'show')->name('projets.show');
        Route::get('edit/{id}', 'edit')->name('projets.edit');
        Route::put('edit/{id}', 'update')->name('projets.update');
        Route::delete('destroy/{id}', 'destroy')->name('projets.destroy');
    });



    Route::controller(ClientController::class)->prefix('clients')->group(function () {
        Route::get('', 'index')->name('clients');
        Route::get('create', 'create')->name('clients.create');
        Route::post('store', 'store')->name('clients.store');
        Route::get('show/{id}', 'show')->name('clients.show');
        Route::get('edit/{id}', 'edit')->name('clients.edit');
        Route::put('edit/{id}', 'update')->name('clients.update');
        Route::delete('destroy/{id}', 'destroy')->name('clients.destroy');
    });


    Route::controller(ActualiteController::class)->prefix('actualites')->group(function () {
        Route::get('', 'index')->name('actualites');
        Route::get('create', 'create')->name('actualites.create');
        Route::post('store', 'store')->name('actualites.store');
        Route::get('show/{id}', 'show')->name('actualites.show');
        Route::get('edit/{id}', 'edit')->name('actualites.edit');
        Route::put('edit/{id}', 'update')->name('actualites.update');
        Route::delete('destroy/{id}', 'destroy')->name('actualites.destroy');
    });





    Route::controller(OffreController::class)->prefix('Offres')->group(function () {
        Route::get('', 'index')->name('Offres');
        Route::get('create', 'create')->name('Offres.create');
        Route::post('store', 'store')->name('Offres.store');
        Route::get('show/{id}', 'show')->name('Offres.show');
        Route::get('edit/{id}', 'edit')->name('Offres.edit');
        Route::put('edit/{id}', 'update')->name('Offres.update');
        Route::delete('destroy/{id}', 'destroy')->name('Offres.destroy');
    });
});



Route::get('/Projetencours/{id}', [ProjetencoursController::class , 'detail'])->name('projetencours.detail');
Route::get('/Projetencours', [ProjetencoursController::class , 'index_site'])->name('projetsencours');



Route::get('/Actualitesite/{id}', [ActualitesiteController::class , 'detail'])->name('actualitésite.detail');
Route::get('/Actualitesite', [ActualitesiteController::class , 'index_site'])->name('actualitésite');



Route::get('/Recrut/{id}', [RecrutController::class , 'detail'])->name('recrut.detail');
Route::get('/Recrut', [RecrutController::class , 'index_site'])->name('recrut');


Route::get('/Projetsréalisés/{id}', [ProjetsréalisésController::class , 'detail'])->name('projetsréalisés.detail');
Route::get('/Projetsréalisés', [ProjetsréalisésController::class , 'index_site'])->name('projetsréalisés');



Route::get('/test', [TestController::class , 'index']);

Route::get('/Contact', [ContactController::class , 'index'])->name('contact');

Route::get('/Acceuilsite', [AcceuilsiteController::class , 'index_site'])->name('acceuilsite');

Route::get('/Apropossite', [ApropossiteController::class , 'index_site'])->name('apropos');

Route::get('/orgasite', [OrgasiteController::class , 'index_site'])->name('orga');

Route::get('/Motpressite', [MotpressiteController::class , 'index_site'])->name('motprés');

Route::get('/Autodeskformation', [AutodeskformationController::class , 'index_site'])->name('formation');

Route::get('/Atc', [AtcController::class , 'index_site'])->name('atc');

Route::get('/Softsolution', [SoftsolutionController::class , 'index_site'])->name('softsolution');

Route::get('/Projetsite', [ProjetsiteController::class , 'index_site'])->name('projetsite');

Route::get('Projetsingle', [ProjetencoursController::class , 'index_site']);

Route::get('/Actualiteune', [ActualiteuneController::class , 'index_site'])->name('actualitésingle');

Route::get('/Clientsite', [ClientsiteController::class , 'index_site'])->name('clientsite');

Route::get('/Detailjob', [DetailjobController::class , 'detail'])->name('Detailjob');




