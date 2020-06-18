<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   //protected $fillable = ['name', 'email', 'status'];
    protected $guarded = ['id'];
    protected $attributes = [
        'status' => 0
    ];
//    public static function status()
//    {
//        /*return self::all()->where('status', '*', 2);*/
//        return self::all();
//    }

   public function entreprise(){

       return $this->belongsTo('App\Entreprise');
   }

   public function scopeStatus($query) {
       return $query->where('status', 1)->get();
   }

   public function getStatusAttribute($attributes) {
    return [
        '0' => 'Inactif',
        '1' => 'Actif',
        '2' => 'En attente'
    ][$attributes];
   }

   public function getStatusOptions() {
    return [
        '0' => 'Inactif',
        '1' => 'Actif',
        '2' => 'En attente'
    ];
   }
}
