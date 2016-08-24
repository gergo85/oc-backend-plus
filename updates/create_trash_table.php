<?php namespace Indikator\Backend\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateTrashTable extends Migration
{
    public function up()
    {
        Schema::create('indikator_backend_trash', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type', 1)->default(1);
            $table->string('path', 255);
            $table->string('size', 8)->default(0);
        });
    }

    public function down()
    {
        Schema::dropIfExists('indikator_backend_trash');
    }
}
