<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceStatus extends Model
{
    use HasFactory;

    protected $table = 'invoice_statuses';
	protected $fillable = [
        'name', 
        'description',
        'updated_by', 
        'created_at', 
        'updated_at'
    ];
}
