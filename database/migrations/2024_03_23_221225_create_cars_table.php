<?php

use App\CarBodyTypeEnum;
use App\CarTypeEnum;
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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('type')->default(CarTypeEnum::CAR);
            $table->unsignedTinyInteger('body_type')->default(CarBodyTypeEnum::SEDAN);
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->decimal('price');
            $table->decimal('daily_rate');
            $table->string('color');
            $table->unsignedTinyInteger('seats');
            $table->unsignedBigInteger('engine_capacity');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
