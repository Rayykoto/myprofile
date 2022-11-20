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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('invoice');
            $table->unsignedInteger('creation_id');
            $table->unsignedInteger('donatur_id');
            $table->bigInteger('amount');
            $table->text('comment')->nullable();
            $table->string('snap_token')->nullable();
            $table->enum('status', array('pending', 'success', 'expired', 'failed'));
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
        Schema::dropIfExists('donations');
    }
};
