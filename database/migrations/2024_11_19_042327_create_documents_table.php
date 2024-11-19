<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('employee_id'); // Foreign key
            $table->tinyInteger('document_type')->comment('1: ID, 2: Passport, 3: Contract');
            $table->date('issue_date');
            $table->date('expire_date')->nullable();
            $table->text('notes')->nullable();

            $table->foreign('employee_id')->references('employee_id')->on('employees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
