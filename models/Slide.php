<?php

namespace JumpLink\Slideshow\Models;

use Model;
use Carbon\Carbon;

use October\Rain\Database\Traits\Sortable;

class Slide extends Model
{

    use Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'jumplink_slideshow_slides';

    /**
     * @var array Fillable fields
     */
    public $fillable = [
        'name',
        'description',
        'link',
        'is_published',
    ];

    /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'description'
    ];

    public $attachOne = [
        'image' => ['System\Models\File'],
        'mp4' => ['System\Models\File'],
        'ogg' => ['System\Models\File'],
        'webm' => ['System\Models\File']
    ];

    /**
     * @var array Model relations
     */
    public $belongsTo = [
        'slideshow' => ['JumpLink\Slideshow\Models\Slideshow']
    ];

    /**
     * Restrict query to published slides only
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function getAspectRatioOptions()
    {
        return ["" => "auto",
                "ratio-1-1" => "1:1",
                "ratio-2-1" => "2:1",
                "ratio-1-2" => "1:2",
                "ratio-4-3" => "4:3",
                "ratio-16-9" => "16:9",
                "ratio-3-4" => "3:4",
                "custom" => "custom"
        ];
    }

    public function getCaptionPositionOptions()
    {
        return ["" =>  "set by slideshow", //Vorgabe übernehmen",
                "top left" => "top left",  //"oben links",
                "top center" => "top center", //"oben mittig",
                "top right" => "top right", //"oben rechts",
                "middle left" => "middle left", //mittig links",
                "middle center" => "middle center", //mittig mittig",
                "middle right" => "middle right", //mittig rechts",
                "bottom left" => "bottom left", //unten links",
                "bottom center" => "bottom center", //unten mittig",
                "bottom right" => "bottom right", //unten rechts",
        ];
    }
}