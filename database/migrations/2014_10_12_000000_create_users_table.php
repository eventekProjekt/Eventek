<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('VIP')->default(0);
            $table->string('password');
            $table->tinyInteger('level')->default(0); //0 - alap felhaszn., 1 - agency felhaszn., 2 - admin felhaszn.
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name' => 'user1', 'email' => 'user1@gmail.com', 'VIP' => 0, 'password' => Hash::make('Aa123456'), 'level' => 1]);
        User::create(['name' => 'user2', 'email' => 'user2@gmail.com', 'VIP' => 1, 'password' => Hash::make('Aa123456'), 'level' => 2]);
        User::create(['name' => 'user3', 'email' => 'user3@gmail.com', 'VIP' => 0, 'password' => Hash::make('Aa123456'), 'level' => 2]);
        User::create(['name' => 'user4', 'email' => 'user4@gmail.com', 'VIP' => 1, 'password' => Hash::make('Aa123456')]);
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
