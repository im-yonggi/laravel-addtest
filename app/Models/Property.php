<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $rules = array(
        'property' => 'required'
    );

    public function getProperty(){
        return $this->property;
    }
}
