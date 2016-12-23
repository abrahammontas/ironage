<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'https'], function() {

    Route::auth();

    Route::get('/register', function() {
       return redirect()->to('/');
    });

    Route::get('/', function () {
        return view('main.index');
    });

    Route::get('/products/{type}', function($type) {
        return redirect()->to('products')->with('type', $type);
    });

    Route::get('/products', function() {
        $type = session('type');
        return view('main.products', ['type' => $type]);
    });

    Route::get('/commercial', function() {
       return view('main.commercial');
    });

    Route::get('/contact', function() {
        return view('main.contact');
    });

    Route::get('/gallery', function() {
        return view('main.gallery');
    });

    Route::get('/getting-started', function() {
        return view('main.getting-started');
    });

    Route::get('/in-the-news', function() {
        return view('main.in-the-news');
    });

    Route::get('/our-story', function() {
       return view('main.our-story');
    });

    Route::get('/stains', function() {
        return view('main.stains');
    });

    Route::get('/trade', function() {
        return view('main.trade');
    });

    Route::group(['middleware' => 'auth'], function() {

        Route::get('admin/dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
        Route::post('admin/dashboard', ['as' => 'post.create', 'uses' => 'AdminController@createPost']);
        Route::post('admin/dashboard/{id}', ['as' => 'post.edit', 'uses' => 'AdminController@editPost']);
        Route::put('admin/dashboard/{id}', ['as' => 'post.update', 'uses' => 'AdminController@updatePost']);
        Route::delete('admin/dashboard/{id}', ['as' => 'post.delete', 'uses' => 'AdminController@deletePost']);

    });

    Route::get('/blog', ['as' => 'blog', 'uses' => 'MainController@getPosts']);
    Route::get('/blog/{id}', ['as' => 'post', 'uses' => 'MainController@getPost']);


    Route::group(['prefix' => 'product'], function() {

        Route::get('bastille-workstation', function() {
            return view('main.product.bastille-workstation');
        });

        Route::get('carruca-workbenct', function() {
            return view('main.product.carruca-workbench');
        });

        Route::get('carruca-workstation', function() {
            return view('main.product.carruca-workstation');
        });

        Route::get('harding-conference-table', function() {
            return view('main.product.harding-conference-table');
        });

        Route::get('credenza-part-2', function() {
            return view('main.product.credenza-part-2');
        });

        Route::get('credenza', function() {
            return view('main.product.credenza');
        });

        Route::get('harrod-carruca-workstation', function() {
            return view('main.product.harrod-carruca-workstation');
        });

        Route::get('edwin-workstation', function() {
            return view('main.product.edwin-workstation');
        });

        Route::get('glenn-table', function() {
            return view('main.product.glenn-table');
        });

        Route::get('helvetica-shelving', function() {
            return view('main.product.helvetica-shelving');
        });

        Route::get('hybrid-desk', function() {
            return view('main.product.hybrid-desk');
        });

        Route::get('filing-cabinet', function() {
            return view('main.product.filing-cabinet');
        });

        Route::get('l-shape-brooklyn', function() {
            return view('main.product.l-shape-brooklyn');
        });

        Route::get('l-shape-carruca', function() {
            return view('main.product.l-shape-carruca');
        });

        Route::get('long-island', function() {
            return view('main.product.long-island');
        });

        Route::get('rowan-console-table', function() {
            return view('main.product.rowan-console-table');
        });

        Route::get('saxon-storage-doors', function() {
            return view('main.product.saxon-storage-doors');
        });

        Route::get('saxon-storage-open', function() {
            return view('main.product.saxon-storage-open');
        });

        Route::get('squadra-team-desk', function() {
            return view('main.product.squadra-team-desk');
        });

        Route::get('standard-carruca', function() {
            return view('main.product.standard-carruca');
        });

        Route::get('standing-long-island', function() {
            return view('main.product.standing-long-island');
        });

        Route::get('tanto', function() {
            return view('main.product.tanto');
        });

        Route::get('torkel-coffee-table', function() {
            return view('main.product.torkel-coffee-table');
        });

        Route::get('u-shape-carruca', function() {
            return view('main.product.u-shape-carruca');
        });

        Route::get('credenza', function() {
            return view('main.product.credenza');
        });



    });
});




