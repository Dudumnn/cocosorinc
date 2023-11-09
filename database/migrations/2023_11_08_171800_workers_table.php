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
            $table->string('name');
            $table->string('middle_name');
            $table->string('extension_name');
            $table->string('birthdate');
            $table->string('age');
            $table->string('gender');
            $table->string('status');
            $table->string('position');
            $table->string('date_of_employment');
            $table->string('year_hired');
            $table->string('address');
            $table->string('employment_status');
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
