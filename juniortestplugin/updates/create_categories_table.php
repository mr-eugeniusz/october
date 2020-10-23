<?php namespace IvanovIvan\JuniorTestPlugin\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('ivanovivan_juniortestplugin_categories', function (Blueprint $table) {
            Schema::dropIfExists('ivanovivan_juniortestplugin_categories');
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ivanovivan_juniortestplugin_categories');
    }
}
