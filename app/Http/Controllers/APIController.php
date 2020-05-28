<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class APIController extends Controller
{
    public $loginAfterSignUp = true;

    public function login(Request $request){
        $token = null;

        $json_fields = json_decode($request->getContent(), JSON_OBJECT_AS_ARRAY);

        $credentials = [
            'email' => $json_fields['email'],
            'password' => $json_fields['password']
        ];

        try {
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json([
                    'success' => false,
                    'message' => 'Credenciais inválidas'
                ], 401);
            }
        } catch (JWTException $e){
            return response()->json([
                'error' => 'Token não criado'
            ], 500);
        }

        return response()->json([
            'login' => true,
            'token' => $token
        ]);
    }

    public function logout(Request $request){
        $this->validate($request, ['token' => 'required']);

        try{
            JWTAuth::invalidate($request->token);

            return response()->json([
                'success' => true,
                'message' => 'Adeus'
            ],200);
        }catch(JWTException $e){
            return response()->json([
                'success' => false,
                'message' => 'Erro!'
            ], 500);
        }
    }
}
