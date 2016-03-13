<?php

namespace Cms\Modules\Contact\Http\Controllers\Api\v1;

use Cms\Modules\Core\Http\Controllers\BaseApiController;

class BaseController extends BaseApiController
{
    public function getIndex()
    {
        return $this->sendOK('ok');
    }
}
