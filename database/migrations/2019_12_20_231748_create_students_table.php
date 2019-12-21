<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('reg')->unique();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();

            $table->primary('reg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
