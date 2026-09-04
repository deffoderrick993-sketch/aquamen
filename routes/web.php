<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\membreController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\activiteController;
use App\Http\Controllers\annonceController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\VolunteerController;

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

Route::get('/',[welcomeController::class,'welcome'])->name('welcome');
Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
Route::post('/volontariat/apply', [VolunteerController::class, 'store'])->name('volontariat.apply');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin');
    })->name('dashboard');
});


// Forced Password Change (For newly created accounts on first login)
Route::middleware(['auth'])->group(function () {
    Route::get('/force-change-password', [adminController::class, 'forceChangePasswordView'])->name('force_change_password');
    Route::post('/force-change-password', [adminController::class, 'updateForcedPassword'])->name('update_forced_password');
});

// gestion panel admin
Route::middleware(['auth', 'role:admin'])->group(function () {
Route::get('admin/', [adminController::class,'index'])->name('admin');
Route::get('welcom/', [welcomeController::class,'welcome'])->name('welcom');
Route::get('addadmin/', [adminController::class, 'addAdminView'])->name('admin.add_admin');
Route::post('storeadmin/', [adminController::class, 'storeAdmin'])->name('admin.store_admin');
Route::delete('deleteadmin/{id}', [adminController::class, 'deleteAdmin'])->name('admin.delete_admin');
Route::get('admin/alerts', [adminController::class, 'adminAlertsView'])->name('admin.alerts');
Route::post('admin/alerts/send', [adminController::class, 'sendAlertBroadcast'])->name('admin.alerts.send');
Route::delete('admin/subscribers/{id}', [adminController::class, 'deleteSubscriber'])->name('admin.subscribers.delete');
Route::get('admin/signalements', [adminController::class, 'adminSignalementsView'])->name('admin.signalements');
Route::patch('admin/signalements/{id}/read', [adminController::class, 'markSignalementAsRead'])->name('admin.signalements.read');
Route::delete('admin/signalements/{id}', [adminController::class, 'deleteSignalement'])->name('admin.signalements.delete');
Route::get('admin/volontaires', [adminController::class, 'adminVolontairesView'])->name('admin.volontaires');
Route::patch('admin/volontaires/{id}/read', [adminController::class, 'markVolunteerAsRead'])->name('admin.volontaires.read');
Route::delete('admin/volontaires/{id}', [adminController::class, 'deleteVolunteer'])->name('admin.volontaires.delete');
Route::get('admin/testimonials', [adminController::class, 'testimonialsView'])->name('admin.testimonials');
Route::post('admin/testimonials', [adminController::class, 'storeTestimonial'])->name('admin.testimonials.store');
Route::delete('admin/testimonials/{id}', [adminController::class, 'deleteTestimonial'])->name('admin.testimonials.delete');
Route::get('addactivite/', [activiteController::class,'index'])->name('addactivite');
Route::get('editoneactivite/{id}', [activiteController::class,'edit'])->name('editoneactivite');
Route::put('updateprojets/{id}', [activiteController::class,'updateprojet'])->name('updateprojets');
Route::get('editonemembre/{id}', [membreController::class,'edit'])->name('editonemembre');
Route::put('updatemembre/{id}', [membreController::class,'updatemembre'])->name('updatemembre');
Route::post('storeactivite/', [activiteController::class,'store'])->name('addactivitestore');
Route::get('addmembre/', [membreController::class,'index'])->name('addmembre');
Route::post('storemembre/', [membreController::class,'store'])->name('addmembrestore');
Route::get('editmembre/', [membreController::class,'editmembre'])->name('membreedit');
Route::delete('deletemembre/{id}', [membreController::class,'deletemembre'])->name('membredelete');
Route::get('editactivite/',[activiteController::class,'aditactivite'] )->name('editactivite');
Route::delete('delactivite/{id}',[activiteController::class,'deleteactivite'] )->name('delactivite');
Route::post('storeimagegallery/',[GalleryController::class,'storeimg'] )->name('gallerystore');
Route::get('addimagetogallery/',[GalleryController::class,'index'] )->name('galleryadd');
Route::get('addraport/', [pdfController::class,'index'])->name('addraport');
Route::post('storeraport/', [pdfController::class,'storerapport'])->name('storeraport');
Route::get('articles/', [ArticleController::class,'article'])->name('articles');
Route::post('storearticle/', [ArticleController::class,'storearticle'])->name('storearticle');
Route::post('annonce/', [annonceController::class,'storeannonce'])->name('storeannonce');
});


// gestion user space

Route::get('user', [userController::class,'user'])->name('user');
Route::get('about/', [pageController::class,'about'])->name('aboutus');
Route::get('activite/', [pageController::class,'activite'])->name('activite');
Route::get('rapport/', [pageController::class,'rapport'])->name('rapport');
Route::get('detailmembre/{id}', [pageController::class,'Membre'])->name('detilmembre');
Route::get('detailactivite/{id}', [pageController::class,'detailactivite'])->name('detailactivite');
Route::get('gallerys/', [pageController::class,'gallery'])->name('gallerys');
Route::get('volontariat/', [pageController::class,'volontariat'])->name('volontariat');
Route::get('aquarticle/', [pageController::class,'article'])->name('Aquarticle');
Route::get('aquarticle/{id}', [ArticleController::class,'downloadarticle'])->name('downloadarticle');

// gestion des rapport
Route::get('downloadrapport/{id}', [pdfController::class,'downloadrapport'])->name('downloadrapport');

// gestion du chatbot
Route::post('chatbot/message', [ChatbotController::class, 'handleMessage'])->name('chatbot.message');
