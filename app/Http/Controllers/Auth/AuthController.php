<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Client;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        try {
            $email = $request->input('email');
            $password = $request->input('password');

            $user = User::where('email', $email)
                        ->where('password', $password)
                        ->firstOrFail();

            session(['userSession' => $user]);

            return view('home');
        } catch (\Throwable $th) {
            return back()->with('error', 'Usuario no existe');
        }
    }

    public function extena() {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', "posts");
        $data = json_decode($response->getBody());

        dd($data);

        return $data;
    }

}
