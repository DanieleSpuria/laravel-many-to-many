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
        Schema::create('project_technology', function (Blueprint $table) {
            $table->unsignedBigInteger('projects_id');
            $table->foreign('projects_id')
                  ->references('id')
                  ->on('projects')
                  ->cascadeOnDelete();

            $table->unsignedBigInteger('technologies_id');
            $table->foreign('technologies_id')
                  ->references('id')
                  ->on('technologies')
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
};
