<?php

namespace Cms\Modules\Contact\Models;

use Cms\Modules\Core\Models\BaseModel as CoreBaseModel;

class BaseModel extends CoreBaseModel
{
    public function __construct()
    {
        parent::__construct();

        $prefix = config('cms.contact.config.table-prefix', 'contact_');
        $this->table = $prefix.$this->table;
    }
}
