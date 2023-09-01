<?php

namespace App\Models\Master;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends BaseModel
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'user';

    public function generateUniqeID(){
        return 'user_'.time();
    }
}
