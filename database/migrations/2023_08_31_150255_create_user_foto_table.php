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
        Schema::create('user_foto', function (Blueprint $table) {
            $table->integerIncrements('NO_FOTO');

            $table->string('ID_USER',30);
            $table->foreign('ID_USER')
            ->references('ID_USER')
            ->on('user')
            ->onDelete('cascade');

            $table->string('FOTO',300);

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
        Schema::dropIfExists('user_foto');
    }
};
