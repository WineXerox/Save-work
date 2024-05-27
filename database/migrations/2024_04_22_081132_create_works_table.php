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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('ชื่อผู้มาซ่อม');
            $table->string('phone')->comment('เบอร์ผู้มาซ่อม');
            $table->string('device')->comment('อุปกรณ์ที่นำมาซ่อม');
            $table->text('cause')->comment('สาเหตุที่ต้องการซ่อม');
            $table->text('note')->comment('หมายเหตุ')->nullable();
            $table->decimal('price', 10, 2)->comment('ราคาซ่อม');
            $table->string('status')->comment('สถานะการซ่อม');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
