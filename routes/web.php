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

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('new', function () {
    return view('new');
})->middleware('auth');

Route::get('/', function () {
    return view('login');
});

Route::get('tvseries',[
    'uses'=>'UserController@tvshow',
    'as'=>'tvshow'
])->middleware('auth');

Route::get('tvseries1',[
    'uses'=>'UserController@tvshow1',
    'as'=>'tvshow1'
])->middleware('auth');

Route::get('movie',[
    'uses'=>'UserController@movie',
    'as'=>'movie'
])->middleware('auth');

Route::get('movie1',[
    'uses'=>'UserController@movie1',
    'as'=>'movie1'
])->middleware('auth');

Route::get('GOT',[
    'uses'=>'UserController@got',
    'as'=>'GOT'
])->middleware('auth');

Route::get('BB',[
    'uses'=>'UserController@breakingBad',
    'as'=>'BB'
])->middleware('auth');

Route::get('PB',[
    'uses'=>'UserController@prisonBreak',
    'as'=>'PB'
])->middleware('auth');

Route::post('register',[
    'uses'=>'UserController@RegisterUser',
    'as' => 'signup'
]);

Route::post('loginUser',[
    'uses'=>'UserController@LoginUser',
    'as' => 'signin'
]);

Route::get('home',[
    'uses'=>'UserController@welcome',
    'as'=>'welcome'
])->middleware('auth');


Route::get('signout',[
    'uses'=>'UserController@logout',
    'as'=>'signout'
]);

Route::get('hundred',[
    'uses'=>'UserController@hundred',
    'as'=>'hundred'
]);

Route::get('badLand',[
    'uses'=>'UserController@Badlands',
    'as'=>'badLand'
]);

Route::get('walkingDead',[
    'uses'=>'UserController@walkingDead',
    'as'=>'walkingDead'
]);

Route::get('sherLock',[
    'uses'=>'UserController@sherLock',
    'as'=>'sherLock'
]);

Route::get('homeLand',[
    'uses'=>'UserController@homeLand',
    'as'=>'homeLand'
]);

Route::get('lost',[
    'uses'=>'UserController@lost',
    'as'=>'lost'
]);


Route::get('shannara',[
    'uses'=>'UserController@shannara',
    'as'=>'shannara'
]);

Route::get('narnia',[
    'uses'=>'UserController@narnia',
    'as'=>'narnia'
]);

Route::get('hobbit',[
    'uses'=>'UserController@hobbit',
    'as'=>'hobbit'
]);

Route::get('harryPotter',[
    'uses'=>'UserController@harryPotter',
    'as'=>'harryPotter'
]);

Route::get('twilight',[
    'uses'=>'UserController@twilight',
    'as'=>'twilight'
]);

Route::get('Allegiant',[
    'uses'=>'UserController@Allegiant',
    'as'=>'Allegiant'
]);

Route::get('jhonWick',[
    'uses'=>'UserController@jhonWick',
    'as'=>'johnWick'
]);

Route::get('ipMan',[
    'uses'=>'UserController@narnia',
    'as'=>''
]);







