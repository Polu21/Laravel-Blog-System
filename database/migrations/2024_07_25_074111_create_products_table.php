<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            // $table->string('slug')->unique()->index();
            $table->text('description')->nullable();
            $table->string('feature_image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->decimal('price', 8, 2)->index()->nullable();
            $table->integer('compare_price')->nullable()->index();
            $table->json('tags')->nullable();
            $table->integer('stock')->nullable();
            $table->unsignedBigInteger('created_by')->index()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
