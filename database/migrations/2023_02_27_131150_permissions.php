<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
                Schema::create('permisions', function (Blueprint $table) {
            $table->id();
            $table->string('Status')->unique();
        });
        DB::table('permisions')->insert([
            ['Status' => "User"],
            ['Status' => "Moderator"],
            ['Status' => "Administrator"],
            ['Status' => "Super Administrator"],
            ['Status' => "Root"],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisions');
    }
};
