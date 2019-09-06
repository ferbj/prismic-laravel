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

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Preview route
|--------------------------------------------------------------------------
|
| Route for prismic.io preview functionality
|
*/
/*
Route::get('/preview', function (Request $request) {
    $token = $request->input('token');
    if (!isset($token)) {
        return abort(400, 'Bad Request');
    }
    $url = $request->attributes->get('api')->previewSession($token, $request->attributes->get('linkResolver'), '/');
    return response(null, 302)->header('Location', $url);
});

/*
|--------------------------------------------------------------------------
| Index route
|--------------------------------------------------------------------------
*/

/*Route::get('/', function () {
    return redirect('/tutorial');
});

/*
|--------------------------------------------------------------------------
| Tutorial route
|--------------------------------------------------------------------------
*/

Route::get('/tutorial', function () {
    return view('tutorial');
});

/*
|--------------------------------------------------------------------------
| 404 Page Not Found
|--------------------------------------------------------------------------
*/

/*Route::get('/{path}', function () {
    return view('404');
});


*/
// Get page by UID
Route::get('/page/{uid}','PrismicController@index'); /*{
    // Query the API
    
    $document = $request->attributes->get('api')->getByUID('page', $uid);

    // Display the 404 page if no document is found
    if (!$document) {
        return view('404');
    }

    // Render the page
    return view('page', ['document' => $document]);
});*/