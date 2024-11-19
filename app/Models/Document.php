<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
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
