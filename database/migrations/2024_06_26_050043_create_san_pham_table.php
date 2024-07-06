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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('ma_san_pham',20)->unique();
            //unique dữ liệu không được phép trùng nhau
            $table->string('ten_san_pham',100);
            $table->double('gia',8,2);
            $table->integer('số lượng')->nullable();
            //nullable cho pháp giá trị null
            $table->date('ngay_nhap');
            $table->text('mo_ta',100)->nullable();
            $table->boolean('trang_thai')->default(0);
            // default xét giá trị mặc định 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
