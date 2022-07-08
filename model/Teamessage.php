<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teamessage extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'teamessages';
    protected $primaryKey = 'teacon_no';

    public function Stumessage(){
        return $this -> belongsTo('App\Models\Stumessage');
    }
}
