<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [HomeController::class, 'index'])->name('home');                                //Route de la page d'accueil

Route::get('/jobs', [HomeController::class,'find'])->name('liste.find');                        //Route de la page liste des emplois

Route::get('/jobsDetail/{id}', [HomeController::class, 'detail'])->name('jobDetail');           //Route de la page de detail des jobs

Route::get('/appliedJob/{id}', [HomeController::class, 'appliedJob'])->name('appliedJob');      //Route pour postuler à un job

Route::get('/savedJob/{id}', [HomeController::class, 'savedJob'])->name('savedJob');            //Route pour postuler à un job

Route::get('/employers', [HomeController::class,'employer'])->name('liste.employer');           //Route de la page liste des employeurs

Route::get('/candidates', [HomeController::class,'candidat'])->name('liste.candidat');          //Route de la page liste des candidats

//Route::get('/blog', [BlogController::class,'blog'])->name('blog');                              //Route de la page de blog

//Route::get('/about', [AboutController::class,'about'])->name('pages.about');                    //Route de la page about

Route::get('/faq', [AboutController::class,'faq'])->name('pages.faq');                          //Route de la page FaQ's

Route::get('/element', [AboutController::class,'element'])->name('pages.element');              //Route de la page UI Element

//Route::get('/contact', [AboutController::class,'contact'])->name('pages.contact');              //Route de la page contact

Route::get('/forgotPassword', [AuthController::class,'forgotPassword'])->name('auth.forgotPassword'); //Routes de password oublié
Route::post('/doforgotPassword', [AuthController::class,'doforgotPassword'])->name('auth.doforgotPassword'); 
Route::get('/resetPassword/{token}', [AuthController::class,'resetPassword'])->name('auth.resetPassword'); //Routes de changement du password
Route::post('/doresetPassword/{token}', [AuthController::class,'doresetPassword'])->name('auth.doresetPassword'); 




Route::group(['prefix' => 'admin', 'middleware' => 'checkRole'], function() {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');      //Route de l'admin

    Route::get('/users',[UserController::class, 'index'])->name('admin.users.userlist');          //Route de la liste des users

    Route::get('/users/{id}',[UserController::class, 'edit'])->name('admin.users.edit');          //Routes de l'édition d'un user
    Route::post('/users/{id}',[UserController::class, 'update'])->name('admin.users.update');          

    Route::get('/users/{id}',[UserController::class, 'delete'])->name('admin.users.delete');      //Route de suppression des users 

    Route::get('/jobs',[JobController::class, 'index'])->name('admin.jobs');                      //Route d'affichage des jobs

    Route::get('/jobs/edit/{id}',[JobController::class, 'edit'])->name('admin.jobs.edit');        //Routes de l'édition des jobs 
    Route::post('/jobs/edit/{id}',[JobController::class, 'update'])->name('admin.jobs.update');     
    
    Route::get('/jobs/{id}',[JobController::class, 'delete'])->name('admin.jobs.delete');         //Route de suppression des jobs 

    Route::get('/jobApplied',[JobController::class, 'jobsApplied'])->name('admin.jobsApplied');    //Route des postulants aux jobs

    Route::get('/jobApplied/{id}',[JobController::class, 'destroy'])->name('admin.jobsApplied.destroy'); //Route de suppression des jobs postuléz 

});

Route::group(['auth'], function() {

    Route::group(['middleware' => 'guest'], function() {
        Route::get('/register',[AuthController::class, 'register'])->name('auth.register');      //Routes de la page d'inscription
        Route::post('/register',[AuthController::class, 'doregister'])->name('auth.doregister');

        Route::get('/login',[AuthController::class, 'login'])->name('auth.login');              //Routes de la page de connexion
        Route::post('/login',[AuthController::class, 'dologin'])->name('auth.dologin');
    });

    Route::group(['middleware' => 'auth'], function() {
        Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('auth.dashboard');  //Route du dashboard du candidat

        Route::get('/myprofile', [AuthController::class, 'profile'])->name('auth.profile');      //Routes du profil
        Route::post('/myprofile', [AuthController::class, 'doprofile'])->name('auth.doprofile');
        //Route::post('/updateProfile', [AuthController::class, 'updateProfile'])->name('auth.updateProfile'); //changer la photo de profile

       
       //Route::get('/jobsApplied', [AuthController::class, 'jobsApplied'])->name('auth.jobsApplied');//Route de jobs applied


        Route::get('/jobslist', [AuthController::class, 'jobslist'])->name('auth.jobslist');        //Route pour voir les jobs sauvegardés

        Route::get('/removeSaveJob/{id}', [AuthController::class, 'removeSaveJob'])->name('auth.removeSaveJob'); //Route de suppression des jobs sauvegardés

        Route::get('/changePassword', [AuthController::class, 'changePassword'])->name('auth.changePassword');//Route de changement de mot de passe
        Route::post('/updatePassword', [AuthController::class, 'updatePassword'])->name('auth.updatePassword');//Route de changement de mot de passe

        Route::get('/Passwordchange', [AuthController::class, 'Passwordchange'])->name('auth.Passwordchange');//Route de changement de mot de passe
        Route::post('/UpdatePassword', [AuthController::class, 'UUpdatePassword'])->name('auth.UUpdatePassword');//Route de changement de mot de passe

        Route::get('/deleteProfile', [AuthController::class, 'deleteProfile'])->name('auth.deleteProfile');   //Route de suppression de profile
       
        Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');                        //Route de déconnexion

        Route::get('/createJob', [AuthController::class, 'createJob'])->name('auth.createJob');               //Route pour créer un job
        Route::post('/createJob', [AuthController::class, 'saveJob'])->name('auth.saveJob');

        Route::get('/myJobs', [AuthController::class, 'myJobs'])->name('auth.myJobs');                       //Route d'affichage des jobs

        Route::get('/myJobsApplied', [AuthController::class, 'myJobsApplied'])->name('auth.myJobsApplied');   //Route d'affichage des postulants
        Route::get('/removeJobs/{id}', [AuthController::class, 'removeJobs'])->name('auth.removeJobs');       //Route de suppression des jobs

        Route::get('/editJob/{jobId}', [AuthController::class, 'editJob'])->name('auth.editJob');            //Route d'édition des jobs
        Route::post('/updateJob/{jobId}', [AuthController::class, 'updateJob'])->name('auth.updateJob');

        Route::get('/deleteJob/{jobId}', [AuthController::class, 'deleteJob'])->name('auth.deleteJob');     //Route pour la suppression des jobs
    });
});