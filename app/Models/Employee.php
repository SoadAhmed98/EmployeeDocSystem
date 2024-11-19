<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded = [];
    public function documents()
    {
        return $this->hasMany(Document::class, 'employee_id', 'employee_id');
    }
}
