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
        Schema::create('client', function (Blueprint $table) {
            $table->increments('clientid');
            $table->longtext('logo')->nullable();
            $table->string('name', 100)->nullable();
            $table->string('owner', 100)->nullable();
            $table->string('details', 100)->nullable();
            $table->string('address', 200)->nullable();
            $table->integer('category')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
