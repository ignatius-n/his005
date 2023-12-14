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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gender_id')->nullable()->index();
            $table->unsignedBigInteger('home_county_id')->nullable()->index();
            $table->string('patient_number')->required();
            $table->string('id_number')->nullable();
            $table->string('sur_name')->required();
            $table->string('first_name')->required();
            $table->string('other_name')->nullable();
            $table->date('dob')->required();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_number')->nullable();
            $table->enum('has_disability', ['YES', 'NO'])->nullable()->default('NO');
            $table->timestamps();

            $table->foreign('gender_id')->references('id')->on('genders')->cascadeOnUpdate()->nullOnDelete();
            $table->foreign('home_county_id')->references('id')->on('counties')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
