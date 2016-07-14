<?php namespace JumpLink\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumplinkSlideshowSlides extends Migration
{
    public function up()
    {
        Schema::table('jumplink_slideshow_slides', function($table)
        {
            $table->boolean('is_published')->default(1)->change();
            $table->dropColumn('published_at');
            $table->dropColumn('unpublished_at');
        });
    }
    
    public function down()
    {
        Schema::table('jumplink_slideshow_slides', function($table)
        {
            $table->boolean('is_published')->default(0)->change();
            $table->dateTime('published_at')->nullable();
            $table->dateTime('unpublished_at')->nullable();
        });
    }
}
