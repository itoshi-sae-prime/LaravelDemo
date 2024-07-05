<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
}
$table->id(); // Laravel sẽ tự động tạo khóa chính với tên `id`
$table->string('brand');
$table->string('model');
$table->integer('year')->nullable();
$table->decimal('price', 8, 2);
$table->integer('mileage');
$table->string('description');
$table->timestamps();
$table->timestamps();
