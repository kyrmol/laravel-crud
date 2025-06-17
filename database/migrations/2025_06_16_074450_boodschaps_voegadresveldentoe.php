<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('boodschaps', function (Blueprint $table) {
            $table->string('straat');
	        $table->integer('huisnummer');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('boodschaps', function (Blueprint $table) {
            $table->dropColumn('straat');
	        $table->dropColumn('huisnummer');

        });
    }
};
