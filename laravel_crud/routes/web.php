<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Middleware\UserAcsess;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Middleware\UserAccess;

Route::get('/', function () {
    return view('loginpage');
});
Route::get('/admin', function () {
    return view('admindashboard');
})->name('admin.dashboard');

Route::post('/login', [Authentication::class, 'login'])->name('login');
Route::get('/login', [Authentication::class,'login']);
//patinente ait tüm routlar
Route::resource('patient',PatientController::class);


//doktora ait tüm routlar
Route::resource('doctor',DoctorController::class);


Route::get('/doctorpage', function () {
    return view('layouts.doctor.doctorpage');
})->name('doctorpage');

//Annoucement
use App\Http\Controllers\AnnouncementController;
Route::get('/announcement', function () {
    return view('layouts.admin.announcement');
})->name('announcement');
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcement.create');
Route::post('/announcement', [AnnouncementController::class, 'store'])->name('announcement.store');



