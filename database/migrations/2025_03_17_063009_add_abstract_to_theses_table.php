<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('theses', function (Blueprint $table) {
            $table->text('abstract')->nullable();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('theses', function (Blueprint $table) {
            $table->dropColumn('abstract');
        });
    }
    
};
