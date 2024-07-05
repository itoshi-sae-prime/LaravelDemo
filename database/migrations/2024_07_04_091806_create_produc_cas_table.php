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
        Schema::create('produc_cas', function (Blueprint $table) {
            $table->id(); // Laravel sẽ tự động tạo khóa chính với tên `id`
            $table->string('brand');
            $table->string('model');
            $table->integer('year')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('mileage');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produc_cas');
    }
};
