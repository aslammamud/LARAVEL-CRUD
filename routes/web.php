<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\DataController@index');

Route::get('/clearSQLserverData', function(){
	DB::table('datas')->delete();
	return redirect('/');
});


Route::get('/getjson', function(){
	$json = file_get_contents(storage_path('data.json'));
 	$objs = json_decode($json,true);
	foreach ($objs as $obj)  {
		foreach ($obj as $key => $value) {
			$insertArr[$key] = $value;
		}
		DB::table('datas')->insert($insertArr);
	}
	return redirect('/datas');
});

Route::resource('/datas', 'App\Http\Controllers\DataController');
