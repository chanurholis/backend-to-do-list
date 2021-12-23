<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChachaNurholisCreateTableTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chacha_nurholis_tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->nullable(false);
            $table->integer('label_id')->nullable();
            $table->integer('comment_id')->nullable();
            $table->string('name')->nullable(false);
            $table->text('description')->nullable();
            $table->date('schedule')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chacha_nurholis_tasks');
    }
}
