<?php


use App\Http\Controllers\Admin\DashboardController;

Route::controller('DashboardController')->name('admin.')->group(function () {
    Route::get('/login', 'getLogin')->name('getLogin')->middleware('guest');
    Route::post('/login', 'login')->name('login')->middleware('guest');
});

Route::middleware('auth')->group(function () {

    Route::get('logout', 'DashboardController@logout')->name('admin.logout');


    Route::get('unauthorized', function () {
        return view('admin.errors.403');
    })->name('admin.unauthorized');
    Route::controller('DashboardController')->name('admin')->group(function () {
        Route::get('/dashboard', 'index')->name('.dashboard');
        Route::get('logout', 'logout')->name('.logout');
    });

    Route::controller('CategoryController')->prefix('categories')->name('admin.categories')->group(function () {
        Route::get('/', 'index')->name('.all');
        Route::get('getCategory', 'getCategory');
        Route::get('/add', 'add')->name('.add');
        Route::post('/store', 'store')->name('.store');
        Route::get('update-status/{id}', 'status')->name('.status');
        Route::get('edit/{id}', 'edit')->name('.edit');
    });

    Route::controller('PublicationController')->prefix('publications')->name('admin.publications')->group(function () {
        Route::get('add/{category_id}', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
        Route::get('/{id}', 'index')->name('.all');
        Route::get('getPublications/{category_id}', 'getPublication');
        Route::get('update-status/{id}', 'status')->name('.status');
        Route::get('delete/{id}', 'delete')->name('.delete');
        Route::get('edit/{id}', 'edit')->name('.edit');
        Route::post('update/{id}', 'update')->name('.update');
        Route::get('show/{id}', 'show')->name('.show');

    });

    Route::controller('AttachmentController')->prefix('attachment')->name('admin.attachment')->group(function () {
        Route::get('add/{category_id}', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
        Route::get('/{id}', 'index')->name('.all');
        Route::get('getAttachment/{category_id}', 'getAttachment');
        Route::get('edit/{id}', 'edit')->name('.edit');
        Route::post('update/{id}', 'update')->name('.update');
        Route::get('delete/{id}', 'delete')->name('.delete');
        Route::get('update-status/{id}', 'status')->name('.status');
    });

    Route::controller('MunicipalCouncilMemberController')->prefix('municipal-members')->name('admin.municipalMember')->group(function () {
        Route::get('add', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
        Route::get('getMunicipal', 'getMunicipal');
        Route::get('/', 'index')->name('.all');
        Route::get('update-status/{id}', 'status')->name('.status');
        Route::get('delete/{id}', 'delete')->name('.delete');
        Route::get('show/{id}', 'show')->name('.show');
        Route::get('edit/{id}', 'edit')->name('.edit');
        Route::post('update/{id}', 'update')->name('.update');


    });

    Route::controller('ServiceController')->prefix('services')->name('admin.services')->group(function () {
        Route::get('add', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
        Route::get('getService', 'getService');
        Route::get('/', 'index')->name('.all');
        Route::get('update-status/{id}', 'status')->name('.status');
        Route::get('delete/{id}', 'delete')->name('.delete');
        Route::get('show/{id}', 'show')->name('.show');
        Route::get('edit/{id}', 'edit')->name('.edit');
        Route::post('update/{id}', 'update')->name('.update');
    });

    Route::controller('AboutUsController')->prefix('about-us')->name('admin.aboutUs')->group(function () {
        Route::get('add', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
    });

    Route::controller('ConnectUsController')->prefix('connect-us')->name('admin.connectUs')->group(function () {
        Route::get('add', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
    });

    Route::controller('PosterController')->prefix('poster')->name('admin.poster')->group(function () {
        Route::get('add', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
        Route::get('/', 'index')->name('.all');
        Route::get('getPoster', 'getPoster');
        Route::get('edit/{id}', 'edit')->name('.edit');
        Route::post('update/{id}', 'update')->name('.update');
        Route::get('delete/{id}', 'delete')->name('.delete');
        Route::get('update-status/{id}', 'status')->name('.status');
        Route::get('show/{id}', 'show')->name('.show');
    });
    Route::controller('PeopleContactUsController')->prefix('people-contact-us')->name('admin.peopleContactUs')->group(function () {
        Route::get('/', 'index')->name('.all');
        Route::get('getPeopleContactUs', 'getPeopleContactUs');
        Route::get('show/{id}', 'show')->name('.show');
    });

    Route::controller('AlbumsController')->prefix('albums')->name('admin.albums')->group(function () {
        Route::get('add', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
        Route::get('getAlbums', 'getAlbums');
       Route::get('/', 'index')->name('.all');
        Route::get('update-status/{id}', 'status')->name('.status');
        Route::get('delete/{id}', 'delete')->name('.delete');
        Route::get('show/{id}', 'show')->name('.show');
        Route::get('edit/{id}', 'edit')->name('.edit');
        Route::post('update/{id}', 'update')->name('.update');
        Route::get('delete-photo/{id}', 'deletePhoto')->name('.delete.photo');
    });
    Route::controller('JobController')->prefix('job')->name('admin.job')->group(function () {
        Route::get('add', 'add')->name('.add');
        Route::post('store', 'store')->name('.store');
        Route::get('getJobs', 'getJobs');
       Route::get('/', 'index')->name('.all');
        Route::get('update-status/{id}', 'status')->name('.status');
        Route::get('delete/{id}', 'delete')->name('.delete');
        Route::get('show/{id}', 'show')->name('.show');
        Route::get('edit/{id}', 'edit')->name('.edit');
    Route::post('update/{id}', 'update')->name('.update');
   });
});
