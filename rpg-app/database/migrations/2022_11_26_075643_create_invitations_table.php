<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('host_id');
            $table->unsignedBigInteger('guest_id');
            $table->unsignedBigInteger('crew_id');
            $table->timestamps();
        });

        Schema::table('invitations', function($table)
        {
            $table->foreign('host_id')->references('id')->on('users');
            $table->foreign('guest_id')->references('id')->on('characters');
            $table->foreign('crew_id')->references('id')->on('groups');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invitations');
    }
};
