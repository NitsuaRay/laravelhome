<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropAndReaddGenderColumn extends Migration
{
    public function up()
    {
        // Drop the 'gender' column if it exists
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('gender');
        });

        // Add the 'gender' column with desired constraints
        Schema::table('users', function (Blueprint $table) {
            $table->enum('gender', ['male', 'female', 'other'])->default('other')->after('status');
        });
    }

    public function down()
    {
        // Reverse the changes in the 'down' method if needed
        Schema::table('users', function (Blueprint $table) {
            // Drop the newly added 'gender' column
            $table->dropColumn('gender');
        });
    }
}
