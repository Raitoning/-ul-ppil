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
 // page d'accueil 

Route::get('/',function(){
  if(Session::has('utilisateur'))
    return redirect('accueil');
  else
    return view('login');
});

// Accès anonyme

Route::get('/publicsEvents',function(){
  if(Session::has('utilisateur'))
    return redirect('accueil');
  else
    return view('publicsEvents');
});

//inscription - deconnexion

Route::get('/login',function(){
  if(Session::has('utilisateur'))
    return redirect('accueil');
  else
    return redirect('/');
});

Route::get('/inscription',function(){
  if(Session::has('utilisateur'))
    return redirect('accueil');
  else return view('signup');
});

Route::get('/lostpw',function(){
  if(Session::has('utilisateur'))
    return redirect('accueil');
  else return view('lostpw');
});


// page d'accueil de l'utilisateur

Route::get('/accueil',function(){
  if(Session::has('utilisateur'))
    return view('accueil');
  else return redirect('login');  
});

Route::get('/contacts',function(){
  if(Session::has('utilisateur'))
    return view('contacts');
  else return redirect('login');
});

Route::get('/account',function(){
  if(Session::has('utilisateur'))
    return view('account');
  else return redirect('login');
});


// Evenements

Route::get('/newEvent',function(){
  if(Session::has('utilisateur'))
    return view('newEvent');
  else return redirect('login');  
});

Route::get('/events',function(){
  if(Session::has('utilisateur'))
    return view('events');
  else return redirect('login');  
});

Route::get('/event',function(){
  if(Session::has('utilisateur'))
    return view('event');
  else return redirect('login');  
});


// Tâches

Route::get('/newTask',function(){
  if(Session::has('utilisateur'))
    return view('newTask');
  else return redirect('login');  
});

Route::post('/','ControllerConnexion@connexion');
Route::post('/deconnexion','ControllerConnexion@deconnexion');
Route::post('/inscription','ControllerInscription@inscription');
Route::post('/newEvent','ControllerEvenement@newEvent');