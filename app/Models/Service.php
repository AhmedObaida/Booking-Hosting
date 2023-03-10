<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public $timestemps= false;

    public function properties()
    {
        return $this->belongsToMany(Property::class,'Propertyservice');
        
    }   

    
}
