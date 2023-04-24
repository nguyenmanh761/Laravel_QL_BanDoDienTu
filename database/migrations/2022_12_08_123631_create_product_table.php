<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('style_id');
            $table->string('size',30)->nullable(true);
            $table->decimal('weight',10,2)->default(0);
            $table->decimal('price',10,2)->default(0);
            $table->decimal('old_price',10,2)->default(0);
            $table->text('text')->nullable(true);
            $table->integer('viewed')->default(0);
            $table->integer('sold')->default(0);
            $table->unsignedBigInteger('partner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
