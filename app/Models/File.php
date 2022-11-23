<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'files';
	protected $fillable = [
        'url', 
        'invoice_id', 
        'file_type_id', 
        'notes', 
        'is_active', 
        'created_by', 
        'updated_by', 
        'created_at', 
        'updated_at'
    ];
    
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function fileType()
    {
        return $this->belongsTo(FileType::class);
    }
}
