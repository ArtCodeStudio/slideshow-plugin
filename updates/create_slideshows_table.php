<?php

namespace JumpLink\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSlideshowsTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('jumplink_slideshow_slideshows')) {
            Schema::create('jumplink_slideshow_slideshows', function ($table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('name');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('jumplink_slideshow_slideshows');
    }

}
