<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
 

        // criando usuario
        // $user = User::query()->create([
        //     'name' => 'Alvaro',
        //     'email' => 'alvaro18555silva@gmail.com',
        //     'password' => 'admin@123',
        // ]);

        // testando atualização da coluna email_verified_at
        // $user = User::find(1);
        // // $user -> email_verified_at = now();
        // // $user -> save;
        // // // ou
        // // // $user-> update (['email_verified_at'=> now()]);
        // // dd($user->email_verified_at);
        // Auth::login($user);
        // Auth::logout();



        return view('welcome');
    }
}
