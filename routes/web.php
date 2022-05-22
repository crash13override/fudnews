<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    $fudNews = [];
    $folder = 'images/fudnews/';
    $files = Storage::disk('localpublic')->allFiles($folder);
    foreach($files as $file){
        if(!Str::contains($file, ['.DS_Store'])){
            $name = str_replace($folder,'', $file);
            $volName = str_replace('.jpeg', '', $name);
            $volName = str_replace('.jpg', '', $volName);
            $volName = str_replace('.png', '', $volName);
            $volName = str_replace('.gif', '', $volName);

            $fudNews[] = [
                'path' => $file,
                'name' => $volName
            ];


        }
    }
    return view('home')->with(['fudNews' => $fudNews]);

});


Route::get('volumes/{id}', function ($id) {
    $fudPages = [];
    $folder = 'images/volumes/'.$id.'/';
    $files = Storage::disk('localpublic')->allFiles($folder);
    foreach($files as $file){
        if(!Str::contains($file, ['.DS_Store'])){
            $fudPages[] = '/'.$file;
        }
    }
    return view('volume')->with(['fudPages' => $fudPages]);

});
