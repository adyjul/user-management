<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login\LoginUserRequest;
use App\Http\Requests\Auth\Register\StoreUserRequest;
use App\Models\Master\User;
use App\Repositories\Auth\LoginRepository;
use App\Utils\FlashMessageHelper;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    private $login_repo;

    public function __construct()
    {
        $this->login_repo = new LoginRepository();
    }

    public function loginGet(){
        return view('auth.login');
    }

    public function registerGet(){
        return view('auth.register');
    }

    public function registerPost(StoreUserRequest $request){
        $validate = $request->validated();

        $this->login_repo->storeUser($validate);
        return response()->json([
                'code' => 200,
                'message' => 'Data Berhasil Masuk'
        ]);
    }

    public function loginPost(LoginUserRequest $request){
        $validate= $request->validated();

        $login = $this->login_repo->loginUser($validate);

        if(!$login){
            FlashMessageHelper::swal([
                'icon' => 'error',
                'title' => 'Username atau password salah!'
            ]);
            return back();
        }
        if($login){
            FlashMessageHelper::swal([
                'icon' => 'success',
                'title' => 'Berhasil'
            ]);
            return redirect()->intended(route('admin.dashboard.index'));
        }

    }
}
