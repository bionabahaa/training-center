<?php



    Route::get('/lang/{lang}','Backend\LanguageController@index')->name('dashboard_changelang');


    Route::group(['middleware' => 'Lang'], function () {


        Route::get('/', 'Backend\HomeController@index')->name('dahboard_index');

        Route::get('/home', 'Backend\HomeController@index')->name('dahboard');




        //categories

        Route::get('/categories','Backend\CategoriesController@index')->name('categories');
        Route::get('/categories/create','Backend\CategoriesController@create')->name('create_categories');
        Route::post('/categories/create','Backend\CategoriesController@store')->name('store_categories');
        Route::get('/categories/show/{id}','Backend\CategoriesController@show')->name('show_categories');
        Route::get('/categories/edit/{id}','Backend\CategoriesController@edit')->name('edit_categories');
        Route::post('/categories/update/{id}','Backend\CategoriesController@update')->name('update_categories');
        Route::get('/categories/delete/{id}','Backend\CategoriesController@destroy')->name('delete_categories');
        Route::get('/categories/view','Backend\CategoriesController@view')->name('view_categories');





        //courses

        Route::get('/courses','Backend\CourseController@index')->name('courses');
        Route::get('/courses/create','Backend\CourseController@create')->name('create_courses');
        Route::post('/courses/create','Backend\CourseController@store')->name('store_courses');
        Route::get('/courses/show/{id}','Backend\CourseController@show')->name('show_courses');
        Route::get('/courses/edit/{id}','Backend\CourseController@edit')->name('edit_courses');
        Route::post('/courses/update/{id}','Backend\CourseController@update')->name('update_courses');
        Route::get('/courses/course_details/{id}', 'Backend\CourseController@viewcourse_details')->name('course_details');
        Route::get('/courses/delete/{id}','Backend\CourseController@destroy')->name('delete_courses');
        Route::get('/courses/view','Backend\CourseController@view')->name('view_courses');





        //instructors

        Route::get('/instructors','Backend\InstructorsController@index')->name('instructors');
        Route::get('/instructors/create','Backend\InstructorsController@create')->name('create_instructors');
        Route::post('/instructors/create','Backend\InstructorsController@store')->name('store_instructors');
        Route::get('/instructors/show/{id}','Backend\InstructorsController@show')->name('show_instructors');
        Route::get('/instructors/edit/{id}','Backend\InstructorsController@edit')->name('edit_instructors');
        Route::post('/instructors/update/{id}','Backend\InstructorsController@update')->name('update_instructors');
        Route::get('/instructors/instructor_details/{id}', 'Backend\InstructorsController@viewinstructor_details')->name('instructor_details');
        Route::get('/instructors/delete/{id}','Backend\InstructorsController@destroy')->name('delete_instructors');
        Route::get('/instructors/view','Backend\InstructorsController@view')->name('view_instructors');




        //students

        Route::get('/students','Backend\StudentsController@index')->name('students');
        Route::get('/students/create','Backend\StudentsController@create')->name('create_students');
        Route::post('/students/create','Backend\StudentsController@store')->name('store_students');
        Route::get('/students/show/{id}','Backend\StudentsController@show')->name('show_students');
        Route::get('/students/edit/{id}','Backend\StudentsController@edit')->name('edit_students');
        Route::post('/students/update/{id}','Backend\StudentsController@update')->name('update_students');
        Route::get('/students/delete/{id}','Backend\StudentsController@destroy')->name('delete_students');

        //book the course

        Route::get('/bookthecourse','Backend\StudentsController@bookthecourse')->name('bookthecourse');





        //employees

        Route::get('/employees','Backend\EmployeeController@index')->name('employees');
        Route::get('/employees/create','Backend\EmployeeController@create')->name('create_employees');
        Route::post('/employees/create','Backend\EmployeeController@store')->name('store_employees');
        Route::get('/employees/show/{id}','Backend\EmployeeController@show')->name('show_employees');
        Route::get('/employees/edit/{id}','Backend\EmployeeController@edit')->name('edit_employees');
        Route::post('/employees/update/{id}','Backend\EmployeeController@update')->name('update_employees');
        Route::get('/employees/delete/{id}','Backend\EmployeeController@destroy')->name('delete_employees');




        //subjects

        Route::get('/subjects','Backend\SubjectsController@index')->name('subjects');
        Route::get('/subjects/create','Backend\SubjectsController@create')->name('create_subjects');
        Route::post('/subjects/create','Backend\SubjectsController@store')->name('store_subjects');
        Route::get('/subjects/show/{id}','Backend\SubjectsController@show')->name('show_subjects');
        Route::get('/subjects/edit/{id}','Backend\SubjectsController@edit')->name('edit_subjects');
        Route::post('/subjects/update/{id}','Backend\SubjectsController@update')->name('update_subjects');
        Route::get('/subjects/delete/{id}','Backend\SubjectsController@destroy')->name('delete_subjects');





        //sessions

        Route::get('/sessions','Backend\SessionController@index')->name('sessions');
        Route::get('/sessions/create','Backend\SessionController@create')->name('create_sessions');
        Route::post('/sessions/create','Backend\SessionController@store')->name('store_sessions');
        Route::get('/sessions/show/{id}','Backend\SessionController@show')->name('show_sessions');
        Route::get('/sessions/edit/{id}','Backend\SessionController@edit')->name('edit_sessions');
        Route::post('/sessions/update/{id}','Backend\SessionController@update')->name('update_sessions');
        Route::get('/sessions/delete/{id}','Backend\SessionController@destroy')->name('delete_sessions');





        //exams

        Route::get('/exams','Backend\ExamController@index')->name('exams');
        Route::get('/exams/create','Backend\ExamController@create')->name('create_exams');
        Route::post('/exams/create','Backend\ExamController@store')->name('store_exams');
        Route::get('/exams/show/{id}','Backend\ExamController@show')->name('show_exams');
        Route::get('/exams/edit/{id}','Backend\ExamController@edit')->name('edit_exams');
        Route::post('/exams/update/{id}','Backend\ExamController@update')->name('update_exams');
        Route::get('/exams/delete/{id}','Backend\ExamController@destroy')->name('delete_exams');




        //quizzes

        Route::get('/quizzes','Backend\QuizController@index')->name('quizzes');
        Route::get('/quizzes/create','Backend\QuizController@create')->name('create_quizzes');
        Route::post('/quizzes/create','Backend\QuizController@store')->name('store_quizzes');
        Route::get('/quizzes/show/{id}','Backend\QuizController@show')->name('show_quizzes');
        Route::get('/quizzes/edit/{id}','Backend\QuizController@edit')->name('edit_quizzes');
        Route::post('/quizzes/update/{id}','Backend\QuizController@update')->name('update_quizzes');
        Route::get('/quizzes/delete/{id}','Backend\QuizController@destroy')->name('delete_quizzes');

    });


    //subscribers


Route::get('/subscribers','Backend\SubscribersController@index')->name('subscribers');
Route::get('/subscribers/create','Backend\SubscribersController@create')->name('create_subscribers');
Route::post('/subscribers/create','Backend\SubscribersController@store')->name('store_subscribers');
//Route::get('/subscribers/show/{id}','Backend\SubjectsController@show')->name('show_subscribers');
//Route::get('/subscribers/edit/{id}','Backend\SubjectsController@edit')->name('edit_subscribers');
//Route::post('/subscribers/update/{id}','Backend\SubjectsController@update')->name('update_subscribers');
Route::get('/subscribers/delete/{id}','Backend\SubjectsController@destroy')->name('delete_subscribers');








?>