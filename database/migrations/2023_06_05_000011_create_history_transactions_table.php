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
        Schema::create('history_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            // string name satuan  kode_brang kode_transcation_suppliers  
            $table->string('name')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('kode_barang')->nullable();
            // $table->string('kode_transaksi_suppliers')->nullable();
            // interger harga_pokok harga_jual supllayer
            $table->integer('harga_pokok')->nullable();
            $table->integer('harga_jual')->nullable();
            $table->integer('id_supllayer')->nullable();
            $table->string('keterangan')->nullable();
            // time date masuk barang
            $table->datetime('masuk_barang')->nullable();
            $table->datetime('keluar_barang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_transactions');
    }
};
