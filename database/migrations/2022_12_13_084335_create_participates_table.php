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
        Schema::create('participates', function (Blueprint $table) {
            $table->primary(["event_id", "user_id"]);
            $table->foreignId("event_id")->references("event_id")->on("events");
            $table->foreignId("user_id")->references("user_id")->on("users");
            $table->boolean("present");
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
        Schema::dropIfExists('participates');
    }
};
