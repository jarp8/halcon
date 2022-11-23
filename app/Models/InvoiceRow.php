<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceRow extends Model
{
    use HasFactory;

    protected $table = 'invoice_rows';
	protected $fillable = [
        'amount', 
        'invoice_id', 
        'material_id',  
        'updated_by', 
        'created_at', 
        'updated_at'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material_id');
    }

}
