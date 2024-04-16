<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Attempts_level;
use App\Models\Attempts_question;
use App\Models\Players_progress;
use App\Models\Questions;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        try
        {
            $validateUser = Validator::make($request->all(), 
            [
                'name' => 'required',
                'age'   => 'required|numeric',
                'email'=> 'required|email|unique:users,email',
                'password'=> 'required',
            ]);

            if ($validateUser->fails()) 
            {
                return response()->json(
                    [
                        'status' => false,
                        'message'=> 'validation error',
                        'errors' => $validateUser->errors()
                    ],401);
            }

            $user = User::create([
                'name'     => $request->name,
                'age'      => $request->age,
                'email'    => $request->email,
                'password' => $request->password
            ]);

            return response()->json(
                [
                    'status' => true,
                    'message'=> 'User created successfully',
                    'token' => $user->createToken('API Token')->plainTextToken
                ],200);

        }catch(\Throwable $th){
            return response()->json(
                [
                    'status' => false,
                    'message'=> $th->getMessage(),
                ],500);
        }

    }


    public  function login(Request $request){
        try
        {
            $validateUser = Validator::make($request->all(), 
            [
                'email'=> 'required|email',
                'password'=> 'required',
            ]);

            if ($validateUser->fails()) 
            {
                return response()->json(
                    [
                        'status' => false,
                        'message'=> 'validation error',
                        'errors' => $validateUser->errors()
                    ],401);
            }

            if(!Auth::attempt($request->only(['email','password']))){
                return response()->json([
                    "status" => false,
                    "message"=> "Email & password doesn't match with our record.",
                    "errors" => ""

                ], 401);
            }

            $user = User::where("email",$request->email)->first();
            return response()->json(
                [
                    'status' => true,
                    'message'=> 'User logged in successfully',
                    'token' => $user->createToken('API Token')->plainTextToken
                ],200);


        }catch(\Throwable $th){
            return response()->json(
                [
                    'status' => false,
                    'message'=> $th->getMessage(),
                    'errors' => ''
                ],500);
        }
    }

    public function profile()
    {
        $userData = auth() -> user();
        return response()->json(
            [
                'status' => true,
                'message'=> 'Profile Information',
                'token' => $userData,
                'id' => auth() -> user() -> id
            ],200);
    }
    public function logout()
    {
        auth() -> user() -> tokens() -> delete();
        return response()->json(
            [
                'status' => true,
                'message'=> 'User logged out',
                'data' => [],
            ],200);
    }


    //Game

    public function set_level(Request $request, $user_id){

        $player_progress = Players_progress::where('user_id', $user_id)->first();

        // Verificar si el registro existe
        if ($player_progress) {
            // Actualizar el nivel para el usuario
            $player_progress->level_id = request() -> level_id;
            $player_progress->save();

            // Devolver una respuesta adecuada
            return response()->json(['message' => 'Nivel asignado correctamente']);
        } else {
            // Devolver un mensaje de error si el usuario no existe en players_progress

            $playerProgress = new Players_progress;
            $playerProgress->user_id = $user_id;
            $playerProgress->level_id = request() -> level_id;
            $playerProgress->save();

            return response()->json(['error' => 'Nivel asignado correctamente y creado el registro'], 204);
        }
    }

    public function get_level(Request $request, $user_id)
    {
        $level = Players_progress::where('user_id', $user_id)->first();
        return response()->json([
            'level_id'=> $level->level_id,
        ]);
    }

    public function get_questions( $level_id)
    {
        $questions = Questions::where('level_id', $level_id)->get();
        return response()->json(['questions' => $questions]);
    }

    public function attempts_level(Request $request, $user_id, $level_id)
    {

        $attempts_level = Attempts_level::where('user_id', $user_id)
                                    ->where('level_id', $level_id)
                                    ->first();

                // Verificar si el registro existe
        if ($attempts_level) {
            // Actualizar el nivel para el usuario
            $attempts_level->attempts += request() -> attempts;
            $attempts_level->save();

            // Devolver una respuesta adecuada
            return response()->json(['message' => 'Intentos agregados correctamente']);
        } else {
            // Devolver un mensaje de error si el usuario no existe en players_progress

            $attempts_level = new Attempts_level;
            $attempts_level->attempts = request() -> attempts;
            $attempts_level->user_id = $user_id;
            $attempts_level->level_id = $level_id;
            $attempts_level->save();

            return response()->json(['insersion' => 'Se agregado el registro con los intentos'], 204);
        }
    }

    public function attempts_question(Request $request, $user_id, $question_id)
    {
        $attempts_question = Attempts_question::where('user_id', $user_id)
                                    ->where('question_id', $question_id)
                                    ->first();

                // Verificar si el registro existe
        if ($attempts_question) {
            // Actualizar el nivel para el usuario
            $attempts_question->attempts += request() -> attempts;
            $attempts_question->save();

            // Devolver una respuesta adecuada
            return response()->json(['message' => 'Intentos agregados correctamente a la pregunta']);
        } else {
            // Devolver un mensaje de error si el usuario no existe en players_progress

            $attempts_question = new Attempts_question;
            $attempts_question->attempts = request() -> attempts;
            $attempts_question->user_id = $user_id;
            $attempts_question->question_id = $question_id;
            $attempts_question->save();

            return response()->json(['insersion' => 'Se agregado el registro con los intentos a la pregunta'], 204);
        }
    }


}
