<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotulenrapatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notulenrapats', function (Blueprint $table) {
            $table->id();                    
            $table->date('tanggal');         
            $table->string('tempat', 100);
            $table->string('keterangan', 100); 
            $table->foreignId('id_pengedit')->nullable()->constrained('users')->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notulenrapats');
    }
}