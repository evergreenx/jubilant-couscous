<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

$users = [
    [
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'john@example.com',
    ],
    [
        'id' => 2,
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
    ],
    // Add more dummy user data as needed
];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {


    $users = [
        [
            'id' => 1,
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ],
        [
            'id' => 2,
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
        ],
        // Add more dummy user data as needed
    ];
    return response($users, 200)
        ->header('Content-Type', 'text/json');
});



    Route::get('/users', function () {
        $users = [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'john@example.com',
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
            ],
            // Add more dummy user data as needed
        ];
    
        return response()->json($users);
    });