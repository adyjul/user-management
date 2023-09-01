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
        Schema::create('menu', function (Blueprint $table) {

            $table->string('MENU_ID',3)->primary();

            $table->string('ID_LEVEL',3);
            $table->foreign('ID_LEVEL')
            ->references('ID_LEVEL')
            ->on('menu_level')
            ->onDelete('cascade');

            $table->string('MENU_NAME',300);
            $table->string('MENU_LINK',300);
            $table->string('MENU_ICON',300);
            $table->string('PARENT_ID',30);


            //MUST HAVE
            $table->string('CREATE_BY',30)->nullable();
            $table->timestamp('CREATE_DATE',0)->nullable();
            $table->string('DELETE_MARK',1)->nullable();
            $table->string('UPDATE_BY',30)->nullable();
            $table->timestamp('UPDATE_DATE',0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
};
