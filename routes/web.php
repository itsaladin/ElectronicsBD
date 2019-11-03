<?php

/*
index pages route
*/
Route::get('/', 'frontend\PagesController@index')->name('index');
Route::get('/contact', 'frontend\PagesController@contact')->name('contact');

/*
Product Route
All the routes for our product for Front-end
*/
Route::get('/products', 'frontend\ProductsController@index')->name('products');
Route::get('/product/{slug}', 'frontend\ProductsController@show')->name('products.show');



//Admin Routes
Route::group(['prefix'=>'admin'],function(){
    Route::get('/', 'Backend\PagesController@index')->name('admin.index');

    //Products Routes
    Route::group(['prefix'=>'/products'],function(){
        Route::get('/', 'Backend\ProductsController@index')->name('admin.products');
        Route::get('/create', 'Backend\ProductsController@create')->name('admin.product.create');
        Route::get('/edit/{id}', 'Backend\ProductsController@edit')->name('admin.product.edit');

        Route::post('/store', 'Backend\ProductsController@store')->name('admin.product.store');

        Route::put('/edit/{id}', 'Backend\ProductsController@update')->name('admin.product.update');        
        Route::delete('/delete/{id}', 'Backend\ProductsController@delete')->name('admin.product.delete');
    });
    //Categorices Routes
    Route::group(['prefix'=>'/categories'],function(){
        Route::get('/', 'Backend\CategoriesController@index')->name('admin.categories');
        Route::get('/create', 'Backend\CategoriesController@create')->name('admin.category.create');
        Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('admin.category.edit');

        Route::post('/store', 'Backend\CategoriesController@store')->name('admin.category.store');

        Route::put('/edit/{id}', 'Backend\CategoriesController@update')->name('admin.category.update');        
        Route::delete('/delete/{id}', 'Backend\CategoriesController@delete')->name('admin.category.delete');
    });
});


// php artisan config:cache
// php artisan view:clear
// conmposer dump-autoload