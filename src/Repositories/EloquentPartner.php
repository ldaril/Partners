<?php

namespace TypiCMS\Modules\Partners\Repositories;

use TypiCMS\Modules\Core\Repositories\EloquentRepository;
use TypiCMS\Modules\Partners\Models\Partner;

class EloquentPartner extends EloquentRepository
{
    protected $repositoryId = 'partners';

    protected $model = Partner::class;
}
