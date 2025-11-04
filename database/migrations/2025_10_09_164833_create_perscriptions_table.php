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
        Schema::create('perscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained(table: 'doctors')->cascadeOnDelete();
            $table->foreignId('patient_id')->constrained(table: 'patients')->cascadeOnDelete();
            $table->string('medication_name')->nullable();
            $table->string('dosage')->nullable();
            $table->string('frequency')->nullable();
            $table->text('instructions')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perscriptions');
    }
};
