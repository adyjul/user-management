<?php
namespace App\Repositories\Auth;

use App\Models\Master\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRepository
{
    private $user_model;
    public function __construct()
    {
        $this->user_model = new User();
    }

    public function storeUser($validate){

        $this->user_model->create([
            'ID_USER' => $this->user_model->generateUniqeID(),
            'NAMA_USER' => $validate['NAMA_USER'],
            'USERNAME' => $validate['USERNAME'],
            'PASSWORD' => $validate['PASSWORD'],
            'EMAIL' => $validate['EMAIL'],
            'NO_HP' => $validate['NO_HP'],
            'WA' => $validate['WA'],
            'PIN' => $validate['PIN'],
            'ID_JENIS_USER' => 1,
            'CREATE_DATE' => Carbon::now()->format('Y-m-d h:i:s'),
            'STATUS_USER' => $validate['USERNAME'],
        ]);
    }

    public function loginUser($validate){
        $user = $this->user_model->where('username',$validate['USERNAME'])->first();
        if ($user == null) {
            return false;
        }
        if (!Hash::check($validate['USERNAME'], $validate['PASSWORD'])) {
            return false;
        }
        $remember = $validate['remember'] ? true : false;
        Auth::loginUsingId($user->id, $remember);
        return true;
    }
}
