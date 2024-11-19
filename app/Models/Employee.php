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

    //Accessor
    public function getJobTitle()
    {
        $jobTitles = [
            1 => 'Developer',
            2 => 'Accountant',
            3 => 'HR',
            4 => 'Marketing',
        ];

        return $jobTitles[$this->job];
    }

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
}
