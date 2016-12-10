<?php

namespace Cms\Modules\Contact\Http\Controllers\Backend;

use Cms\Modules\Admin\Traits\DataTableTrait;
use Cms\Modules\Contact\Datatables\MailManager;

class MailController extends BaseController
{
    use DataTableTrait;

    public function manager()
    {
        $this->theme->breadcrumb()->add('Mail Manager', route('admin.contact.manager'));

        return $this->renderDataTable(with(new MailManager())->boot());
    }
}
