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
        Schema::create('user', function (Blueprint $table) {
            $table->string('ID_USER',30)->primary();
            $table->string('NAMA_USER',60);
            $table->string('USERNAME',60);
            $table->string('PASSWORD',60);
            $table->string('EMAIL',200);
            $table->string('NO_HP',30);
            $table->string('WA',30);
            $table->string('PIN',30);
            $table->string('ID_JENIS_USER',3);
            $table->string('STATUS_USER',30);

            //MUST HAVE
            $table->string('DELETE_MARK',1)->nullable();
            $table->string('CREATE_BY',30)->nullable();
            $table->timestamp('CREATE_DATE',0)->nullable();
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
        Schema::dropIfExists('user');
    }
};
