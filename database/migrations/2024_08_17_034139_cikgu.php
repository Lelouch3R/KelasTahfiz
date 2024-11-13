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
        Schema::create('cikgu', function (Blueprint $table) {
            $table->id('idcikgu');
            $table->string('namacikgu');
            $table->datetime('tarikhlahir')->nullable();
            $table->string('jantina');
            $table->string('bidang');
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
     Schema::drobIfExists('idcikgu');
     Schema::drobIfExists('namacikgu');
     Schema::drobIfExists('tarikhlahir');
     Schema::drobIfExists('jantina');
     Schema::drobIfExists('bidang');
     Schema::drobIfExists('alamat');
     Schema::drobIfExists('status');
    }
};

