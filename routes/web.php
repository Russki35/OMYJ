<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

	$tasks = DB::table('tasks')->latest()->get();
	//Entre ('tasks')-> et get(), on peut passer une fonction. Exemple : ('tasks')->latest()->get(); pour trier dans un ordre particulier



    return view('welcome', compact('tasks'));

});

//Trouver une tâche en particulier dans la table tasks

Route::get('/tasks/{id}', function ($id) {
// Ici on passe des paramètres pour afficher par id

	dd($id);

	$tasks = DB::table('tasks')->latest()->get();



    return view('welcome', compact('tasks'));

});
