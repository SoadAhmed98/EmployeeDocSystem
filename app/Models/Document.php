<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

    //Accessor
    public function getDocumentType()
    {
        $documentTypes = [
            1 => 'ID',
            2 => 'Passport',
            3 => 'Contract',
        ];

        return $documentTypes[$this->document_type];
    }
}
