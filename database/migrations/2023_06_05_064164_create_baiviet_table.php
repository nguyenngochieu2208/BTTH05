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
        Schema::create('baiviet', function (Blueprint $table) {
            $table->integer('ma_bviet', true, true);
            $table->string('tieude', 200);
            $table->string('ten_bhat',100);
            $table->integer('ma_tloai',false, true);
            $table->foreign('ma_tloai')->references('ma_tloai')->on('theloai')->onDelete('cascade');
            $table->text('tomtat');
            $table->text('noidung')->nullable();
            $table->integer('ma_tgia',false , true);
            $table->foreign('ma_tgia')->references('ma_tgia')->on('tacgia')->onDelete('cascade');
            $table->dateTime('ngayviet')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('hinhanh',200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baiviet');
    }
};
