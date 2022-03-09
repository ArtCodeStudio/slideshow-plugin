<?php namespace JumpLink\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkSlideshowSlides4 extends Migration
{
    public function up()
    {
        Schema::table('jumplink_slideshow_slides', function($table)
        {
            $table->string('section')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_slideshow_slides', function($table)
        {
            $table->dropColumn('section');
        });
    }
}
