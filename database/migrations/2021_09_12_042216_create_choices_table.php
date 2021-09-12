<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id');
            $table->integer('fundraising')->nullable();
            $table->integer('sponsorship')->nullable();
            $table->integer('epc')->nullable();
            $table->integer('snow')->nullable();
            $table->integer('big_event')->nullable();
            $table->integer('technical')->nullable();
            $table->integer('itdev')->nullable();
            $table->integer('media')->nullable();
            $table->integer('creative')->nullable();
            $table->integer('public_relation')->nullable();
            $table->integer('secretarial')->nullable();
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
        Schema::dropIfExists('choices');
    }
}
