<?php

use App\Models\User;
use App\Models\Curso;
use App\Models\Review_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [CursosController::class, 'index']);

//rota curso unicos
Route::get('/pos-graduacoes/{thisCurso}-{slug}', 'App\Http\Controllers\CursosController@curso'); // thisCurso é o ID

// rota do CL
Route::get('/pos-graduacoes/CL/{thisCurso}-{slug}', 'App\Http\Controllers\CursosController@cursoCL');


//rotas dos cursos
Route::controller(CursosController::class)->group(function () {
    Route::get('/pos-graduacoes', 'page_posgraduacoes');

    Route::get('/psicologia', 'page_psicologia');

    Route::get('/engenharia',  'page_engenharia');
    
    Route::get('/educacao', 'page_educacao');

    Route::get('/direito', 'page_direito');

    Route::get('/gestao-de-negocios', 'page_gestao');

    Route::get('/saude', 'page_saude');

    Route::get('/tecnologia', 'page_tecnologia');

    Route::get('/educacao-corporativa', 'page_corporativa');

    Route::get('/cursos-de-aperfeicoamento', 'page_aperfeicoamento');
});

// educação corporativa
//  --
Route::get('/educacao-corporativa', function(){
    return view('educacao-corporativa');
});

Route::get('/universidade-corporativa', function(){
    return view('cursos.educacao-corporativa.universidade-corporativa');
});

Route::get('/tecnico-operacional', function(){
    return view('cursos.educacao-corporativa.tecnico-operacional');
});

Route::get('/formacao-de-executivos', function(){
    return view('cursos.educacao-corporativa.formacao-executiva');
});

Route::get('/consultoria-educacional', function(){
    return view('cursos.educacao-corporativa.consultoria-educacional');
});
// --

Route::get('/quem-somos', function(){
    return view('quem-somos');
});

Route::get('/politicas-de-privacidade', function(){
    return view('politicas');
});

Route::get('/termos-de-uso', function() {
    return view('termos');
});


// config for display pagination without page reload
Route::get('reviews-getmore', function(Request $request){
    if($request->ajax()) {
        $reviews_ajax = Review_model::latest()->get();
        return view('partials.testimonial', compact('reviews_ajax'))->render();
    }
})->name('reviews-getmore');

// teste
Route::get('/teste', function(){
    return view('teste', [
        'reviews' => Review_Model::latest()->get()
    ]);
});

// Route::get('/setup', function(){
//     $credentials = [
//         'email' => 'admin@admin.com',
//         'password' => 'password'
//     ];

//     if (!Auth::attempt($credentials)) {
//         $user = new \App\Models\User();

//         $user->name = 'admin';
//         $user->email = $credentials['email'];
//         $user->password = Hash::make($credentials['password']);

//         $user->save();

//         if (Auth::attempt($credentials)) {
//             $user = Auth::user();

//             $adminToken = $user->createToken('admin-token', ['create', 'update', 'delete']);
//             $updateToken = $user->createToken('update-token', ['create', 'update']);
//             $basicToken = $user->createToken('basic-token', ['none']);

//             return [
//                 'admin' => $adminToken->plainTextToken,
//                 'update' => $updateToken->plainTextToken,
//                 'basic' => $basicToken->plainTextToken
//             ];
//         }
//     }

// });

//adminControler
Auth::routes();


