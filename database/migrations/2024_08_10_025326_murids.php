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
        Schema::create('murids', function (Blueprint $table) {
            $table->id('idmurid');
            $table->string('namamurid');
            $table->datetime('tarikhlahir')->nullable();
            $table->string('jantina');
            $table->string('kelas');
            $table->string('alamat');
            $table->string('status');   
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
     Schema::drobIfExists('idmurid');
     Schema::drobIfExists('namamurid');
     Schema::drobIfExists('tarikhlahir');
     Schema::drobIfExists('jantina');
     Schema::drobIfExists('kelas');
     Schema::drobIfExists('alamat');
     Schema::drobIfExists('status');
    }
};
