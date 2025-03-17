<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



return new class extends Migration {
    public function up() {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('name')->after('id'); // Add name column
            $table->string('email')->unique()->after('name'); // Add email column
            $table->string('password')->after('email'); // Add password column
        });
    }

    public function down() {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn(['name', 'email', 'password']);
        });
    }
};
