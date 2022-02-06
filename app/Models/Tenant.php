<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Tenant extends Model
{
    use HasFactory;
     protected $fillable=['subdominio','status','nome','dados_cadastrais','sistema_info'];

     public static function boot(){

        parent::boot();
        self::creating(function($model){
            $model->uuid = Str::uuid();
        });
     }





}
