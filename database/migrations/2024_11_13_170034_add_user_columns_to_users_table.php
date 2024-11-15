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
        Schema::table('users', function (Blueprint $table) {
            $table->string('prefixname')->nullable()->after('id');
            $table->string('firstname')->after('prefixname');
            $table->string('middlename')->nullable()->after('firstname');
            $table->string('lastname')->after('middlename');
            $table->string('suffixname')->nullable()->after('lastname');
            $table->string('username')->after('suffixname');
            $table->string('photo')->nullable()->after('suffixname');
            $table->string('type')->nullable()->after('photo');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['prefixname', 'firstname', 'middlename', 'lastname', 'suffixname', 'photo', 'type']);
        });
    }
};
