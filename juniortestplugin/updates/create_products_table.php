<?php namespace IvanovIvan\JuniorTestPlugin\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('ivanovivan_juniortestplugin_products', function (Blueprint $table) {
            Schema::dropIfExists('ivanovivan_juniortestplugin_products');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->float('price');
            $table->integer('category_id')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ivanovivan_juniortestplugin_products');
    }
}
