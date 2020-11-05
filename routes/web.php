<?php

use App\Http\Middleware\RoleCheck;
use Illuminate\Support\Facades\Route;

//Guest user or visitor can access this routes
Route::get('/sitesetup', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $routeClear = Artisan::call('route:clear');
    echo "Route cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:clear');
    echo "Config cleared<br>";

    $cascheconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

    $storageLink = Artisan::call('storage:link');
    echo "Storage Link Created<br>";

     $dbMigrate = Artisan::call('migrate:refresh');
     echo "Database Migration Complete<br>";

     $dbSeed = Artisan::call('db:seed');
     echo "Database Seed Complete<br>";


});
Route::get('/', 'PageController@index')->name('index');
Route::post('/employee', 'PageController@getEmployeeDetails')->name('employee_details');
Route::get('/exam_paper/1', 'PageController@getExamPager')->name('exam.paper');
Route::post('/exam_paper/{id}', 'PageController@updateExamPager')->name('exam.update');
Route::get('/result', 'PageController@showResult')->name('exam.result');


//Authenticated user or logged in user can access this route s
Auth::routes();


//User who has role of admin can access this routes
//Create a middleware group for user role check
Route::middleware(['auth', 'moderator'])->group(function () {
    Route::middleware(['auth', 'super.admin'])->group(function () {
        // User Controller Routes
        Route::get('/users', 'Admin\UserController@index')->name('users.index');
        Route::get('/users/create', 'Admin\UserController@create')->name('user.create');
        Route::get('/users/destroy/{id}', 'Admin\UserController@destroy')->name('user.destroy');
        Route::get('/users/show/{id}', 'Admin\UserController@show')->name('user.show');
        Route::get('/users/edit/{id}', 'Admin\UserController@edit')->name('user.edit');
        Route::post('/users/store', 'Admin\UserController@store')->name('user.store');
        Route::post('/users/update/{id}', 'Admin\UserController@update')->name('user.update');

        // Department controller routes
        Route::get('/departments', 'Admin\DepartmentController@index')->name('department.index');
        Route::get('/departments/create', 'Admin\DepartmentController@create')->name('department.create');
        Route::get('/departments/destroy/{id}', 'Admin\DepartmentController@destroy')->name('department.destroy');
        Route::get('/departments/show/{id}', 'Admin\DepartmentController@show')->name('department.show');
        Route::get('/departments/edit/{id}', 'Admin\DepartmentController@edit')->name('department.edit');
        Route::post('/departments/store', 'Admin\DepartmentController@store')->name('department.store');
        Route::post('/departments/update/{id}', 'Admin\DepartmentController@update')->name('department.update');

        // Employee controller routes
        Route::get('/employees', 'Admin\EmployeesController@index')->name('employee.index');
        Route::get('/employees/create', 'Admin\EmployeesController@create')->name('employee.create');
        Route::get('/employees/destroy/{id}', 'Admin\EmployeesController@destroy')->name('employee.destroy');
        Route::get('/employees/show/{id}', 'Admin\EmployeesController@show')->name('employee.show');
        Route::get('/employees/edit/{id}', 'Admin\EmployeesController@edit')->name('employee.edit');
        Route::post('/employees/store', 'Admin\EmployeesController@store')->name('employee.store');
        Route::post('/employees/update/{id}', 'Admin\EmployeesController@update')->name('employee.update');

        // Designation controller routes
        Route::get('/designations', 'Admin\DesignationController@index')->name('designation.index');
        Route::get('/designations/create', 'Admin\DesignationController@create')->name('designation.create');
        Route::get('/designations/destroy/{id}', 'Admin\DesignationController@destroy')->name('designation.destroy');
        Route::get('/designations/show/{id}', 'Admin\DesignationController@show')->name('designation.show');
        Route::get('/designations/edit/{id}', 'Admin\DesignationController@edit')->name('designation.edit');
        Route::post('/designations/store', 'Admin\DesignationController@store')->name('designation.store');
        Route::post('/designations/update/{id}', 'Admin\DesignationController@update')->name('designation.update');

        // Segments controller routes
        Route::get('/segments', 'Admin\SegmentsController@index')->name('segment.index');
        Route::get('/segments/create', 'Admin\SegmentsController@create')->name('segment.create');
        Route::get('/segments/destroy/{id}', 'Admin\SegmentsController@destroy')->name('segment.destroy');
        Route::get('/segments/show/{id}', 'Admin\SegmentsController@show')->name('segment.show');
        Route::get('/segments/edit/{id}', 'Admin\SegmentsController@edit')->name('segment.edit');
        Route::post('/segments/store', 'Admin\SegmentsController@store')->name('segment.store');
        Route::post('/segments/update/{id}', 'Admin\SegmentsController@update')->name('segment.update');

        // Question Banks controller routes
        Route::get('/question_banks', 'Admin\QuestionBanksController@index')->name('question_bank.index');
        Route::get('/question_banks/create', 'Admin\QuestionBanksController@create')->name('question_bank.create');
        Route::get('/question_banks/destroy/{id}', 'Admin\QuestionBanksController@destroy')->name('question_bank.destroy');
        Route::get('/question_banks/show/{id}', 'Admin\QuestionBanksController@show')->name('question_bank.show');
        Route::get('/question_banks/edit/{id}', 'Admin\QuestionBanksController@edit')->name('question_bank.edit');
        Route::post('/question_banks/store', 'Admin\QuestionBanksController@store')->name('question_bank.store');
        Route::post('/question_banks/update/{id}', 'Admin\QuestionBanksController@update')->name('question_bank.update');

        // Answers controller routes
        Route::get('/answers', 'Admin\AnswersController@index')->name('answer.index');
        Route::get('/answers/create', 'Admin\AnswersController@create')->name('answer.create');
        Route::get('/answers/destroy/{id}', 'Admin\AnswersController@destroy')->name('answer.destroy');
        Route::get('/answers/show/{id}', 'Admin\AnswersController@show')->name('answer.show');
        Route::get('/answers/edit/{id}', 'Admin\AnswersController@edit')->name('answer.edit');
        Route::post('/answers/store', 'Admin\AnswersController@store')->name('answer.store');
        Route::post('/answers/update/{id}', 'Admin\AnswersController@update')->name('answer.update');

        // Result controller routes
        Route::get('/results', 'Admin\ResultController@index')->name('result.index');
        Route::get('/results/export/', 'Admin\ResultController@resultExport')->name('result.export');

        // Settings Controller Routes
        Route::get('/settings', 'Admin\SettingController@index')->name('setting.index');
        Route::post('/settings/update', 'Admin\SettingController@update')->name('setting.update');

    });

    Route::middleware(['auth', 'site.admin'])->group(function () {
        // User Controllers Routes
        Route::get('/users', 'Admin\UserController@index')->name('users.index');
        Route::get('/users/show/{id}', 'Admin\UserController@show')->name('user.show');

    });

    Route::middleware(['auth', 'editor'])->group(function () {

    });

    Route::middleware(['auth', 'moderator'])->group(function () {

    });

    Route::middleware(['auth', 'content.writer'])->group(function () {

    });

    Route::get('/home', 'Admin\DashboardController@home')->name('home');


});

