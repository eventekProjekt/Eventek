<?php

use App\Models\agency;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });

        Agency::create(['name' => 'Joska', 'country' => 'Magyarország', 'type' => 'Pénzügyi']);
        Agency::create(['name' => 'Karcsi', 'country' => 'USA', 'type' => 'Egészségügyi']);
        Agency::create(['name' => 'Jancsi', 'country' => 'Madagaszkár', 'type' => 'Rendezvény']);
        Agency::create(['name' => 'László', 'country' => 'Németország', 'type' => 'Jogi']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
};
