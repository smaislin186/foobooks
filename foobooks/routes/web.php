<?php

Route::get('/books', 'BookController@index');

Route::get('books/{title?}', 'BookController@view');

Route::get('/', 'WelcomeController');


/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

/**
* Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');
