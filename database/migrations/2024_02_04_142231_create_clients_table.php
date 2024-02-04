<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_id')->nullable();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('bid')->nullable();
            $table->date('dob')->nullable();
            $table->string('nid')->nullable();
            $table->string('passport')->nullable();
            $table->string('preferred_country')->nullable();
            $table->string('address', 1000)->nullable();
            $table->string('status_message')->nullable();
            $table->unsignedBigInteger('status');
            $table->string('image')->nullable();
            $table->json('attachments')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
