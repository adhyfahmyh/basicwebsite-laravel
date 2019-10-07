<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->string('username', 15)->unique()->after('id');
            // $table->string('firstname')->after('username');
            // $table->string('lastname')->after('firstname');
            // $table->string('about')->nullable()->after('lastname');
            // $table->string('contact')->nullable()->after('email');
            // $table->date('birthday')->after('contact');
            // $table->string('link')->nullable()->after('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('users', function (Blueprint $table) {
        //     $table->dropColumn('username');
        //     $table->dropColumn('firstname');
        //     $table->dropColumn('lastname');
        //     $table->dropColumn('about');
        //     $table->dropColumn('contact');
        //     $table->dropColumn('birthday');
        //     $table->dropColumn('link');
        // });
    }
}
