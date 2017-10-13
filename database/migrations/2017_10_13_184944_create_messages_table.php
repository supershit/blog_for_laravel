<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
            //这个是留言表
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('留言内容');
            $table->integer('pid')->default(0)->comment('如果是0就是留言，如果不是0就是回复');
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
        Schema::dropIfExists('messages');
    }
}
