<?php




Route::get('/' ,
    function()
    {
        return view('welcome');
    }
)->name('home');

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);

Route :: get('/dashboard', [
    'uses' => 'PostController@getDashboard',
    'as' => 'dashboard'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin',

]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'logout'
]);

Route :: post('/createpost', [
    'uses' => 'PostController@postCreatePost',
    'as' => 'post.create'
]);

Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@getDeletePost',
    'as' => 'post.delete'
]);









