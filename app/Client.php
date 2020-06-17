<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Entreprise;

class                                                                                                                                                                                                                                   Client extends Model
{
   // protected $fillable = ['name', 'email', 'status'];
    protected $guarded = ['id'];

    public static function status()
    {
        /*return self::all()->where('status', '*', 2);*/
        return self::all();
    }

    public function enterprises(){
        return $this->belongsTo('Entreprise');
    }
}
