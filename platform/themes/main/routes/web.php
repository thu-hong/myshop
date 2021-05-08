<?php

// Custom routes
// You can delete this route group if you don't need to add your custom routes.
Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        // Add your custom route here
        // Ex: Route::get('hello', 'MainController@getHello');
        Route::get('/san-pham', 'MainController@getproducts')
        ->name('public.products');
        Route::get('/about-us-2', 'MainController@getabout')
        ->name('public.about-us-2');
        Route::get('/about-us', 'MainController@getabout1')
        ->name('public.about-us');
        Route::get('/blog-2', 'MainController@getblog2')
        ->name('public.blog-2');
        Route::get('/blog-post-2', 'MainController@getblogpost2')
        ->name('public.blog-post-2');
        Route::get('/blog-post', 'MainController@getblogpost')
        ->name('public.blog-post');
        Route::get('/blog', 'MainController@getblog')
        ->name('public.blog');
        Route::get('/cart-2', 'MainController@getcart2')
        ->name('public.cart-2');
        Route::get('/cart', 'MainController@getcart')
        ->name('public.cart');
        Route::get('/contact-us-2', 'MainController@getcontact2')
        ->name('public.contact-us-2');
        Route::get('/contact-us', 'MainController@getcontact')
        ->name('public.contact-us');
        Route::get('/help', 'MainController@gethelp')
        ->name('public.help');
        Route::get('/index-2', 'MainController@getindex2')
        ->name('public.index-2');
        Route::get('/page-not-found-2', 'MainController@getpage2')
        ->name('public.page-not-found-2');
        Route::get('/page-not-found', 'MainController@getpage')
        ->name('public.page-not-found');
        Route::get('/product-2', 'MainController@getproduct2')
        ->name('public.product-2');
        Route::get('/product', 'MainController@getproduct')
        ->name('public.product');
        Route::get('/products-2', 'MainController@getproducts2')
        ->name('public.products-2');
        Route::get('/template-guide', 'MainController@gettemplate')
        ->name('public.template-guide');
    });

});
 
Theme::routes();

Route::group(['namespace' => 'Theme\Main\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(apply_filters(BASE_FILTER_GROUP_PUBLIC_ROUTE, []), function () {

        Route::get('/', 'MainController@getIndex')
            ->name('public.index');

        Route::get('sitemap.xml', 'MainController@getSiteMap')
            ->name('public.sitemap');

        Route::get('{slug?}' . config('core.base.general.public_single_ending_url'), 'MainController@getView')
            ->name('public.single');

    });
});
