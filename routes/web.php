<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PersionalinfoController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\SkillController;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ResumeController::class, "index"]);

//Login system 

//show login form
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
//process submited login details
Route::post('/login', [AuthController::class, 'login']);

//contact
Route::post('contact', [ResumeController::class, 'sendMessage'])->name('contact.send');



//only logged in user can see it
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
    //logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    //admin pages

    //info
    Route::get('info', [PersionalinfoController::class, 'show']);
    Route::view('/infoForm', 'Forms.infoForm')->middleware('auth');
    Route::post('/info', [PersionalinfoController::class, 'store'])->name('personal_info.store');
    Route::get('/infoEdit/{id}', [PersionalinfoController::class, 'edit'])->name('infoEdit');
    Route::post('/infoUpdate', [PersionalinfoController::class, 'update']);
    Route::get('/deleteInfo/{id})', [PersionalinfoController::class, 'delete'])->name('deleteInfo');


    //skill
    Route::get('/skill', [SkillController::class, 'adminShow']);
    //Route::get('/skills', [SkillController::class, 'show']);
    Route::view('/skillForm', 'Forms.skillForm')->middleware('auth');
    Route::post('/skill', [SkillController::class, 'newSkill'])->name('skills.store');
    Route::get('/skillEdit/{id}', [SkillController::class, 'edit'])->name('skillEdit');
    Route::post('/skillUpdate', [SkillController::class, 'update']);
    Route::get('/deleteSkill/{id})', [SkillController::class, 'delete'])->name('skillDelete');

    //Education
    Route::get('/education', [EducationController::class, 'show'])->name('education');
    Route::view('/educationForm', 'Forms.educationForm')->middleware('auth');
    Route::post('/education', [EducationController::class, 'store'])->name('education.store');
    Route::get('/educationEdit/{id}', [EducationController::class, 'edit'])->name('educationEdit');
    Route::post('/educationUpdate', [EducationController::class, 'update']);
    Route::get('/deleteEduInfo/{id})', [EducationController::class, 'delete'])->name('deleteEduInfo');


    //Experience
    Route::get('/experience', [ExperienceController::class, 'show']);
    Route::view('/experinceForm', 'Forms.experienceForm')->middleware('auth');
    Route::post('/experience', [ExperienceController::class, 'store'])->name('experiences.store');
    Route::get('/experienceEdit/{id}', [ExperienceController::class, 'edit'])->name('experienceEdit');
    Route::post('/experienceUpdate', [ExperienceController::class, 'update']);
    Route::get('/deleteExperience/{id})', [ExperienceController::class, 'delete'])->name('deleteExperience');


    //project
    Route::get('/project', [ProjectController::class, 'show']);
    Route::view('/projectForm', 'Forms.projectForm')->middleware('auth');
    Route::post('/project', [ProjectController::class, 'project'])->name('projects.store');
    Route::get('/projectEdit/{id}', [ProjectController::class, 'edit'])->name('projectEdit');
    Route::post('/projectUpdate', [ProjectController::class, 'update']);
    Route::get('/deleteProject/{id}', [ProjectController::class, 'delete'])->name('deleteProject');
});

