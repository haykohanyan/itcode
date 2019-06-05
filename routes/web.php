<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MyController@index')->name('main.index');
Route::get('/about', 'MyController@about')->name('main.about');
Route::get('/courses', 'MyController@courses')->name('main.courses');
Route::get('/portfolio', 'MyController@portfolio')->name('main.portfolio');
Route::get('/contact', 'MyController@contact')->name('main.contact');
Route::get('/information', 'MyController@information')->name('main.information');
Route::post('/email', 'MailController@mail')->name('email');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', 'AdminController@index')->name('index');
    Route::get('/about', 'AdminController@about')->name('about');
    Route::get('/courses', 'AdminController@courses')->name('courses');
    Route::get('/portfolio', 'AdminController@portfolio')->name('portfolio');
    Route::get('/programmers', 'AdminController@programmers')->name('programmers');


    Route::get('/add_main_slide', 'AdminController@add_main_slide')->name('add_main_slide');
    Route::post('/main_slide_store', 'MainController@main_slide_store')->name('main_slide_store');
    Route::post('/main_slide_update', 'MainController@main_slide_update')->name('main_slide_update');
    Route::post('/main_slide_destroy', 'MainController@main_slide_destroy')->name('main_slide_destroy');

    Route::get('/add_main_why', 'AdminController@add_main_why')->name('add_main_why');
    Route::post('/main_why_store', 'MainController@main_why_store')->name('main_why_store');
    Route::post('/main_why_update', 'MainController@main_why_update')->name('main_why_update');
    Route::post('/main_why_destroy', 'MainController@main_why_destroy')->name('main_why_destroy');


    Route::get('/add_main_team', 'AdminController@add_main_team')->name('add_main_team');
    Route::post('/main_team_store', 'MainController@main_team_store')->name('main_team_store');
    Route::post('/main_team_update', 'MainController@main_team_update')->name('main_team_update');
    Route::post('/main_team_destroy', 'MainController@main_team_destroy')->name('main_team_destroy');

    Route::get('/add_main_comment', 'AdminController@add_main_comment')->name('add_main_comment');
    Route::post('/main_comment_store', 'MainController@main_comment_store')->name('main_comment_store');
    Route::post('/main_comment_update', 'MainController@main_comment_update')->name('main_comment_update');
    Route::post('/main_comment_destroy', 'MainController@main_comment_destroy')->name('main_comment_destroy');

    Route::get('/add_main_company', 'AdminController@add_main_company')->name('add_main_company');
    Route::post('/companies_store', 'CompaniesController@companies_store')->name('companies_store');
    Route::post('/companies_update', 'CompaniesController@companies_update')->name('companies_update');
    Route::post('/companies_destroy', 'CompaniesController@companies_destroy')->name('companies_destroy');


    Route::get('/add_about_about', 'AdminController@add_about_about')->name('add_about_about');
    Route::post('/about_about_store', 'AboutController@about_about_store')->name('about_about_store');
    Route::post('/about_about_update', 'AboutController@about_about_update')->name('about_about_update');
    Route::post('/about_about_destroy', 'AboutController@about_about_destroy')->name('about_about_destroy');

    Route::get('/add_about_daily', 'AdminController@add_about_daily')->name('add_about_daily');
    Route::post('/about_daily_store', 'AboutController@about_daily_store')->name('about_daily_store');
    Route::post('/about_daily_update', 'AboutController@about_daily_update')->name('about_daily_update');
    Route::post('/about_daily_destroy', 'AboutController@about_daily_destroy')->name('about_daily_destroy');

    Route::get('/add_about_student', 'AdminController@add_about_student')->name('add_about_student');
    Route::post('/about_student_store', 'AboutController@about_student_store')->name('about_student_store');
    Route::post('/about_student_update', 'AboutController@about_student_update')->name('about_student_update');
    Route::post('/about_student_destroy', 'AboutController@about_student_destroy')->name('about_student_destroy');


    Route::get('/add_course', 'AdminController@add_course')->name('add_course');
    Route::get('/course_preview/{id?}', 'AdminController@course_preview')->name('course_preview');

    Route::post('/course_store', 'CoursesController@course_store')->name('course_store');
    Route::post('/course_update', 'CoursesController@course_update')->name('course_update');
    Route::post('/course_destroy', 'CoursesController@course_destroy')->name('course_destroy');

    Route::post('/row_store', 'CoursesController@row_store')->name('row_store');
    Route::post('/row_update', 'CoursesController@row_update')->name('row_update');
    Route::post('/row_destroy', 'CoursesController@row_destroy')->name('row_destroy');


    Route::post('/course_list_store', 'CoursesController@course_list_store')->name('course_list_store');
    Route::post('/course_list_update', 'CoursesController@course_list_update')->name('course_list_update');
    Route::post('/course_list_destroy', 'CoursesController@course_list_destroy')->name('course_list_destroy');


    Route::post('/sub_row_store', 'CoursesController@sub_row_store')->name('sub_row_store');
    Route::post('/sub_row_update', 'CoursesController@sub_row_update')->name('sub_row_update');
    Route::post('/sub_row_destroy', 'CoursesController@sub_row_destroy')->name('sub_row_destroy');

    Route::get('/add_course_daily', 'AdminController@add_course_daily')->name('add_course_daily');
    Route::post('/courses_daily_store', 'CoursesController@courses_daily_store')->name('courses_daily_store');
    Route::post('/courses_daily_update', 'CoursesController@courses_daily_update')->name('courses_daily_update');
    Route::post('/courses_daily_destroy', 'CoursesController@courses_daily_destroy')->name('courses_daily_destroy');


     Route::get('/add_work', 'AdminController@add_work')->name('add_work');
    Route::get('/add_category', 'AdminController@add_category')->name('add_category');
    Route::get('/add_cat', 'AdminController@add_cat')->name('add_cat');
    Route::get('/work_preview/{id?}', 'AdminController@work_preview')->name('work_preview');
    Route::post('/work_store', 'PortfolioController@work_store')->name('work_store');
    Route::post('/work_update', 'PortfolioController@work_update')->name('work_update');
    Route::post('/work_destroy', 'PortfolioController@work_destroy')->name('work_destroy');
    Route::get('/wc_destroy/{id1}/{id2}', 'PortfolioController@wc_destroy')->name('wc_destroy');
    Route::get('/wcat_destroy/{id1}/{id2}', 'PortfolioController@wcat_destroy')->name('wcat_destroy');
    Route::post('/category_store', 'PortfolioController@category_store')->name('category_store');
    Route::post('/category_update', 'PortfolioController@category_update')->name('category_update');
    Route::post('/category_destroy', 'PortfolioController@category_destroy')->name('category_destroy');
    Route::post('/cat_store', 'PortfolioController@cat_store')->name('cat_store');
    Route::post('/cat_update', 'PortfolioController@cat_update')->name('cat_update');
    Route::post('/cat_destroy', 'PortfolioController@cat_destroy')->name('cat_destroy');

    Route::get('/add_programmer_section', 'AdminController@add_programmer_section')->name('add_programmer_section');
    Route::post('/programmer_section_store', 'ProgrammerController@programmer_section_store')->name('programmer_section_store');
    Route::post('/programmer_section_update', 'ProgrammerController@programmer_section_update')->name('programmer_section_update');
    Route::post('/programmer_section_destroy', 'ProgrammerController@programmer_section_destroy')->name('programmer_section_destroy');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/login/custom', 'LoginController@login')->name('login.custom');
