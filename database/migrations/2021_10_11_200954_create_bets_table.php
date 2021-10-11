<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->id();
            $table->enum('bk_type',['1xbet','fonbet']);
            $table->string('type_of_rate');
            $table->float('coefficient');
            $table->float('sum_bet');
            $table->enum('type_bet',['Прематч','Лайв']);
            $table->float('profit');
            $table->timestamp('date_start');
            $table->enum('status',[
                'win','failed'
            ]);
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
        Schema::dropIfExists('bets');
    }
}
