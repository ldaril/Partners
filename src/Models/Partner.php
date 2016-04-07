<?php

namespace TypiCMS\Modules\Partners\Models;

use Dimsav\Translatable\Translatable;
use Laracasts\Presenter\PresentableTrait;
use TypiCMS\Modules\Core\Models\Base;
use TypiCMS\Modules\History\Traits\Historable;

class Partner extends Base
{
    use Historable;
    use PresentableTrait;
    use Translatable;

    protected $presenter = 'TypiCMS\Modules\Partners\Presenters\ModulePresenter';

    protected $fillable = [
        'image',
        'position',
        'homepage',
        // Translatable columns
        'title',
        'slug',
        'status',
        'website',
        'summary',
        'body',
    ];

    /**
     * Translatable model configs.
     *
     * @var array
     */
    public $translatedAttributes = [
        'title',
        'slug',
        'status',
        'website',
        'summary',
        'body',
    ];

    protected $appends = ['status', 'title', 'thumb', 'website'];

    /**
     * Columns that are file.
     *
     * @var array
     */
    public $attachments = [
        'image',
    ];

    /**
     * Append status attribute from translation table.
     *
     * @return string
     */
    public function getStatusAttribute($value)
    {
        return $this->status;
    }

    /**
     * Append title attribute from translation table.
     *
     * @return string title
     */
    public function getTitleAttribute($value)
    {
        return $this->title;
    }

    /**
     * Append thumb attribute.
     *
     * @return string
     */
    public function getThumbAttribute($value)
    {
        return $this->present()->thumbSrc(null, 22);
    }

    /**
     * Append website attribute from translation table.
     *
     * @return string
     */
    public function getWebsiteAttribute()
    {
        return $this->website;
    }
}
