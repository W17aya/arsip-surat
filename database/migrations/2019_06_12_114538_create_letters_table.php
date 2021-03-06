<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->date('tgl_pembukuan');
            $table->string('bulan');
            $table->string('asal_surat');
            $table->string('no_surat');
            $table->string('index_surat')->nullable();
            $table->date('tgl_surat');
            $table->enum('nama_surat', ['disposisi', 'pengantar', 'keterangan', 'keputusan', 'undangan']);
            $table->enum('jenis_surat', ['masuk', 'keluar']);
            $table->text('perihal')->nullable();
            $table->string('tujuan');
            $table->string('keterangan')->nullable();
            $table->string('penerima');
            $table->string('nip_penerima')->nullable();
            $table->string('arsip');
            $table->tinyInteger('is_favorite')->default(0);
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
        Schema::dropIfExists('letters');
    }
}
