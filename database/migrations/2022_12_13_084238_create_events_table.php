<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->string('name', 30);
            $table->integer('agency_id');
            $table->integer('limit');
            $table->date('date');
            $table->string('location', 50);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
        Event::create(['name'=>'super event', 'agency_id'=>1, 'limit'=>125, 'date'=>'2022-12-15', 'location'=>'here']);
        Event::create(['name'=>'mega event', 'agency_id'=>2, 'limit'=>125, 'date'=>'2022-12-18', 'location'=>'house']);
        Event::create(['name'=>'bad event', 'agency_id'=>1, 'limit'=>125, 'date'=>'2022-12-19', 'location'=>'some street', 'status'=>1]);
        Event::create(['name'=>'old event', 'agency_id'=>3, 'limit'=>125, 'date'=>'2021-10-09', 'location'=>'there', 'status'=>2]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
