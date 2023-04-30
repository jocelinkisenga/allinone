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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('company_id')->nullable();
            $table->boolean('affecter')->default(false);
            $table->boolean('livrer')->default(false);
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('number_phone');
            $table->string('country');
            $table->string('town');
            $table->string('address_physique');
            $table->string('address_livraison');
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
        Schema::dropIfExists('orders');
    }
};
