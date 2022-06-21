<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stumessage extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'stumessages';
    protected $primaryKey = 'id';

    public function subjects(){
        return $this -> belongsTo('App\Models\Subject');
    }

    public function students(){
        return $this -> belongsTo('App\Models\Student');
    }

    public function teamessages(){
        return $this -> belongsTo('App\Models\Teamessage');
    }
   
}
