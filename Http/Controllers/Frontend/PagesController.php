<?php

namespace Cms\Modules\Contact\Http\Controllers\Frontend;

use Cms\Modules\Contact\Repositories\Mail\RepositoryInterface as MailRepo;
use Cms\Modules\Contact\Http\Requests\FrontendMailRequest;

class PagesController extends BaseController
{
    public function getForm()
    {
        $contactForm = config('cms.contact.config.view', 'contact-form-1');
        if (!view()->exists(partial(sprintf('contact::frontend.%s', $contactForm)))) {
            $contactForm = 'contact-form-1';
        }

        return $this->setView(sprintf('frontend.%s', $contactForm), [

        ]);
    }

    public function postForm(FrontendMailRequest $input, MailRepo $mailRepo)
    {
        dd($input->all());

        return redirect()->back()
            ->withError('Could not send Contact Mail');
    }
}
