<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;


//Register 
Route::post('/register', [ApiController::class, "register"]);  

//Login
Route::post('/login', [ApiController::class, "login"]);  

Route::group([
    'middleware' => ['auth:sanctum']
], function()
{
    //Profile
    Route::get("/profile", [ApiController::class,"profile"]);

    //logout
    Route::get("/logout", [ApiController::class,"logout"]);

    //Game
    
    //set_level
    Route::post("/level/{user_id}", [ApiController::class,"set_level"]);

    //get level
    Route::get("/level/{user_id}", [ApiController::class,"get_level"]);

    //get questions level
    Route::get("/level/{level_id}/questions", [ApiController::class,"get_questions"]);

    //post attempts level
    Route::post("/level/{user_id}/attempts/{level_id}", [ApiController::class,"attempts_level"]);

    //post attempts question 
    Route::post("/{user_id}/level/{level_id}/questions/{question_id}/attempts", [ApiController::class,"attempts_question"]);

});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// min video 34:40