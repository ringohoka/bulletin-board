<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stumessage extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'stumessages';
    protected $primaryKey = 'stucon_no';

    public function subjects(){
        return $this -> hasOne('App\Models\Subject');
    }

    public function students(){
        return $this -> hasOne('App\Models\Student');
    }

    public function teamessages(){
        return $this -> hasOne('App\Models\Teamessage');
    }
}
