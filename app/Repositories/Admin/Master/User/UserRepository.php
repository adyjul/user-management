<?php

namespace App\Repositories\Admin\Master\User;

use App\Models\Master\User;

class UserRepository
{
   public function storeUser($validate){
        User::create([
            'NAMA_USER' => $validate['NAMA_USER'],
            'USERNAME' => $validate['USERNAME'],
            'PASSWORD' => $validate['PASSWORD'],
            'EMAIL' => $validate['EMAIL'],
            'NO_HP' => $validate['NO_HP'],
            'WA' => $validate['WA'],
            'PIN' => $validate['PIN'],
            'ID_JENIS_USER' => 1,
            'STATUS_USER' => $validate['USERNAME'],
        ]);
   }

}
