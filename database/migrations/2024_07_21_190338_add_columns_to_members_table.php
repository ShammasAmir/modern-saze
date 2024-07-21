<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('instagram')->default('lorem');
            $table->string('facebook')->default('lorem');
            $table->string('twitter')->default('lorem');
            $table->string('linkedin')->default('lorem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn(['instagram', 'facebook', 'twitter', 'linkedin']);
        });
    }
}
