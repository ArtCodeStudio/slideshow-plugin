<?php

namespace JumpLink\Slideshow\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJumpLinkSlideshowSlides extends Migration
{
    public function up()
    {
        Schema::table('jumplink_slideshow_slides', function ($table) {
            $table->boolean('is_published')->default(0);
            $table->dateTime('published_at')->nullable()->default(null);
            $table->dateTime('unpublished_at')->nullable()->default(null);
            $table->string('aspect_ratio')->nullable()->default(null);
            $table->decimal('custom_ratio', 10, 5)->nullable()->default(null);
            $table->string('caption_position')->nullable()->default(null);;
        });
    }

    public function down()
    {
        Schema::table('jumplink_slideshow_slides', function ($table) {

            if (Schema::hasColumn('aspect_ratio', 'custom_ratio', 'caption_position' , 'is_published' , 'published_at' , 'unpublished_at' ) ) {
                $table->dropColumn('published_at');
                $table->dropColumn('unpublished_at');
                $table->dropColumn('is_published');
                $table->dropColumn('aspect_ratio');
                $table->dropColumn('custom_ratio');
                $table->dropColumn('caption_position');
            }

        });
    }
}
