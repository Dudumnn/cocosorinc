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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('extension_name')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('status')->nullable();
            $table->string('position')->nullable();
            $table->string('date_of_employment')->nullable();
            $table->string('rehired_date')->nullable();
            $table->string('year_hired')->nullable();
            $table->string('address')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('date_inactive')->nullable();
            $table->string('shift')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
