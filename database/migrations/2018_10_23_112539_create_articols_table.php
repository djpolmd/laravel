<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title','100');
            $table->text('description'); 
            $table->string('image');
            $table->text('text');
            $table->boolean('send_to_admin_email');
            $table->boolean('was_sent_to_admin_email');
            $table->integer('user_id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articols');
    }
}
