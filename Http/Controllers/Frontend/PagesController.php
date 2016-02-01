<?php namespace Cms\Modules\Contact\Http\Controllers\Frontend;

class PagesController extends BaseController
{

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }


}
