<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public static $rules = array(
        'name' => 'required',
        'tel' => 'required|numeric',
        'email' => 'required|email',
        'representative' => 'required'
    );

    public function property(){
        return $this->belongsTo('App\Models\Property');
    }
}
