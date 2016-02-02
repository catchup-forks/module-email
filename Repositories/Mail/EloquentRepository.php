<?php namespace Cms\Modules\Contact\Repositories\Mail;

use Cms\Modules\Contact\Repositories\Mail\RepositoryInterface as MailRepository;
use Cms\Modules\Core\Repositories\BaseEloquentRepository;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class EloquentRepository extends BaseEloquentRepository implements MailRepository
{
    public function getModel()
    {
        return 'Cms\Modules\Contact\Models\Mail';
    }


}
