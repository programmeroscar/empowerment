<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastors', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('sex')->nullable();
            $table->string('dob')->nullable();
            $table->string('homeTown')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('partnerName')->nullable();
            $table->string('numberOfChildren')->nullable();
            $table->string('dateOfAppointment')->nullable();
            $table->string('rank')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->string('name')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pastors');
    }
}
