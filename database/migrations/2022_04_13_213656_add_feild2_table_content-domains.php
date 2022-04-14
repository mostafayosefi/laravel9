<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeild2TableContentDomains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('content-domains', function (Blueprint $table) {
            $table->integer('categorycontentdomain_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('content-domains', function (Blueprint $table) {
            $table->dropColumn('categorycontentdomain_id');
        });
    }
}
