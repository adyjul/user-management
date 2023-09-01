<?php

use App\Models\Master\User;
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
        Schema::create('i_error_application', function (Blueprint $table) {

            $table->integerIncrements('ERROR_ID');

            $table->string('ID_USER');
            $table->foreign('ID_USER')
            ->references('ID_USER')
            ->on('user')
            ->onDelete('cascade');

            $table->string('ERROR_DATE',3);
            $table->string('MODULES',100);
            $table->string('CONTROLLER',200);
            $table->string('FUNCTION',200);
            $table->string('ERROR_LINE',30);
            $table->string('ERROR_MESSAGE',1000);
            $table->string('STATUS',30);
            $table->string('PARAM',300);

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
        Schema::dropIfExists('i_error_application');
    }
};
