<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePdproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pdproducts', function (Blueprint $table) {
            $table->dropColumn('type');
            $table->string('pizza')->default(null);
            $table->string('sushi')->default(null);
            $table->string('drink')->default(null);
            $table->string('sweet')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
