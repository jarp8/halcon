<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materials';
	protected $fillable = [
        'name', 
        'cost', 
        'price',  
        'amount',  
        'updated_by', 
        'created_at', 
        'updated_at'
    ];
}
