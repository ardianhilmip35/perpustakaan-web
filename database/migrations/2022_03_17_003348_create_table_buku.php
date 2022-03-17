<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_buku', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->string('judul_buku', 50);
            $table->string('pengarang', 50);
            $table->string('penerbit', 50);
            $table->string('tahun_terbit', 4);
            $table->string('kategori');
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
        Schema::dropIfExists('table_buku');
    }
}
