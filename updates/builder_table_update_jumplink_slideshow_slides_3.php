<?php namespace JumpLink\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkSlideshowSlides3 extends Migration
{
    public function up()
    {
        Schema::table('jumplink_slideshow_slides', function($table)
        {
            $table->string('aspect_ratio');
            $table->decimal('custom_ratio', 10, 5);
            $table->string('caption_position');
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_slideshow_slides', function($table)
        {
            $table->dropColumn('aspect_ratio');
            $table->dropColumn('custom_ratio');
            $table->dropColumn('caption_position');
        });
    }
}
