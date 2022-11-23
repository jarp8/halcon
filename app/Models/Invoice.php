<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    
    protected $table = 'invoices';
	protected $fillable = [
        'total', 
        'delivery_address', 
        'date', 
        'client_id', 
        'invoice_status_id', 
        'updated_by', 
        'created_at', 
        'updated_at'
    ];
    
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function invoiceRows()
    {
        return $this->hasMany(InvoiceRow::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function invoiceStatus()
    {
        return $this->belongsTo(InvoiceStatus::class);
    }
}
