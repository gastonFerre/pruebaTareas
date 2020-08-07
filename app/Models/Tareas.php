<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    protected $guarded = ['id'];

    protected static function boot() {
        parent::boot();
        if( !app()->runningInConsole()){
            self::creating(function ($table){
                $table->creador = auth()->id();
            });
        }
    }
}
