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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','Fontend\aboutController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('users')->group(function()
{
    Route::get('/view','Backend\usersController@view')->name('users.view');
    Route::post('/store','Backend\usersController@store')->name('users.store');
    Route::get('/edit/{id}','Backend\usersController@edit')->name('users.edit');
    Route::post('/update/{id}','Backend\usersController@update')->name('users.update');
    Route::get('/delet/{id}','Backend\usersController@delet')->name('users.delet');

});

Route::prefix('menu')->group(function()
{
    Route::get('/view','Backend\menuController@view')->name('menu.view');
    Route::post('/store','Backend\menuController@store')->name('menu.store');
    Route::get('/edit/{id}','Backend\menuController@edit')->name('menu.edit');
    Route::post('/update/{id}','Backend\menuController@update')->name('menu.update');
    Route::get('/delet/{id}','Backend\menuController@delet')->name('menu.delet');

});



//slider part
Route::prefix('slider')->group(function()
{
    Route::get('/view','Backend\sliderController@sliderView')->name('slider.view');
    Route::post('/store','Backend\sliderController@sliderStore')->name('slider.store');
    Route::get('/edit/{id}','Backend\sliderController@edit')->name('slider.edit');
    Route::post('/update/{id}','Backend\sliderController@update')->name('slider.update');
    Route::get('/delet/{id}','Backend\sliderController@delet')->name('slider.delet');

});




//slider part
Route::prefix('onlineExam')->group(function()
{
    Route::get('/view','Backend\onlineexamController@onlineExamView')->name('onlineExam.view');
    Route::post('/store','Backend\onlineexamController@onlineExamStore')->name('onlineExam.store');
    Route::get('/edit/{id}','Backend\onlineexamController@edit')->name('onlineExam.edit');
    Route::get('/delet/{id}','Backend\onlineexamController@delet')->name('onlineExam.delet');

});




//Online class

Route::prefix('onlineClass')->group(function()
{
    Route::get('/view/{id}','Backend\onlineexamController@onlineClassView')->name('onlineclass.view');

});

    Route::get('/onlineclassEng/{id}','Backend\homeExamTestShedule@onlineclassEng');

    Route::post('/onlineStore','Backend\onlineexamController@classSubStore');

    Route::post('/onlineUpdate/{id}','Backend\onlineexamController@onlineUpdate');

    Route::post('/onlineEdit/{id}','Backend\onlineexamController@classSubEdit');

    Route::get('/deletSubject/{SubId}','Backend\homeExamTestShedule@deletSubject');

    Route::get('/editSubject/{SubId}','Backend\onlineexamController@editSubject');

    Route::post('/editClassUpdate/{SubId}','Backend\onlineexamController@editClassUpdate');


    Route::get('/remark','Backend\remarksController@viewRemark');

    Route::post('/remarkStore','Backend\remarksController@remarkStore');

    Route::get('/remarkEdit/{id}','Backend\remarksController@remarkEdit');
    Route::post('/remarkUpdate/{id}','Backend\remarksController@remarkUpdate');



    Route::get('/mainPatron','Fontend\aboutController@mainPatron');
    Route::get('/chairmanspeech','Fontend\aboutController@chairmanspeech');
    Route::get('/principlespeech','Fontend\aboutController@principlespeech');
    Route::get('/history','Fontend\aboutController@history');
    Route::get('/missionVission','Fontend\aboutController@missionVission');
    Route::get('/governingbody','Fontend\aboutController@governingbody');
    Route::get('/teacherInformation','Fontend\aboutController@teacherInformation');
    Route::get('/youtube','Fontend\aboutController@youtube');


    Route::get('/dresscode','Fontend\academicController@dresscode');
    Route::get('/lessonplan','Fontend\academicController@lessonplan');
    Route::get('/routine','Fontend\academicController@routine');
    Route::get('/syllabus','Fontend\academicController@syllabus');
    Route::get('/prospectus','Fontend\academicController@prospectus');


    Route::get('/notice','Fontend\informationController@notice');
    Route::get('/facilities','Fontend\informationController@facilities');

    Route::prefix('notice')->group(function()
    {
        Route::get('/view/{id}','Fontend\informationController@noticeview')->name('notice.view');
    });

    Route::get('/apply','Fontend\admissionController@apply');
    Route::get('/fastFact','Fontend\admissionController@fastFact');
    Route::get('/feespayment','Fontend\admissionController@feespayment');
    Route::get('/scholarship','Fontend\admissionController@scholarship');
    Route::get('/transfer','Fontend\admissionController@transfer');

    Route::get('/contactUs','Fontend\admissionController@contactUs');







    //OnlineClass

    Route::get('/examOnline','Backend\onlineexamController@examOnline');
    Route::get('/banglaversion/{id}','Backend\onlineexamController@examFontendShedule');




    //IS ACTIVE CLASS
    Route::post('/isActive/{SubId}','Backend\onlineexamController@isActive');
 











    //calss wise Routine

    Route::get('/routineMorning1','Fontend\classRoutineControll@routineMorning1');
    Route::get('/routineMorning2','Fontend\classRoutineControll@routineMorning2');
    Route::get('/routineMorning3','Fontend\classRoutineControll@routineMorning3');
    Route::get('/routineMorning4','Fontend\classRoutineControll@routineMorning4');
    Route::get('/routineMorning5','Fontend\classRoutineControll@routineMorning5');
    Route::get('/routineMorning6','Fontend\classRoutineControll@routineMorning6');
    Route::get('/routineMorning7','Fontend\classRoutineControll@routineMorning7');
    Route::get('/routineMorning8','Fontend\classRoutineControll@routineMorning8');
    Route::get('/routineMorning9','Fontend\classRoutineControll@routineMorning9');
    Route::get('/routineMorning10','Fontend\classRoutineControll@routineMorning10');
    Route::get('/routineMorning11','Fontend\classRoutineControll@routineMorning11');
    Route::get('/routineMorning12','Fontend\classRoutineControll@routineMorning12');


    Route::get('/routineDay1','Fontend\classRoutineControll@routineDay1');
    Route::get('/routineDay2','Fontend\classRoutineControll@routineDay2');
    Route::get('/routineDay3','Fontend\classRoutineControll@routineDay3');
    Route::get('/routineDay4','Fontend\classRoutineControll@routineDay4');
    Route::get('/routineDay5','Fontend\classRoutineControll@routineDay5');
    Route::get('/routineDay6','Fontend\classRoutineControll@routineDay6');
    Route::get('/routineDay7','Fontend\classRoutineControll@routineDay7');
    Route::get('/routineDay8','Fontend\classRoutineControll@routineDay8');
    Route::get('/routineDay9','Fontend\classRoutineControll@routineDay9');
    Route::get('/routineDay10','Fontend\classRoutineControll@routineDay10');

