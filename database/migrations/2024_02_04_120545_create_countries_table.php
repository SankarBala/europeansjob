<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('nameBangla')->unique();
            $table->string('code')->unique()->nullable();
            $table->text('content')->nullable();
            $table->text('contentBangla')->nullable();
            $table->enum('status', ['published', 'draft'])->default('published');
            $table->string('national_flag')->nullable();
            $table->string('banner')->nullable();
            $table->string('banner_2')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
