<?php

namespace Cms\Modules\Contact\Datatables;

class MailManager
{
    public function boot()
    {
        return [
            /*
             * Page Decoration Values
             */
            'page' => [
                'title' => 'Contact Manager',
                'alert' => [
                    'class' => 'info',
                    'text' => '<i class="fa fa-info-circle"></i> You can manage your contact mail from here.',
                ],
            ],

            /*
             * Set up some table options, these will be passed back to the view
             */
            'options' => [
                'pagination' => false,
                'searching' => false,
                'ordering' => false,
                'sort_column' => 'id',
                'sort_order' => 'desc',
                'source' => 'backend.contact.manager',
                'collection' => function () {
                    $model = 'Cms\Modules\Contact\Models\Mail';

                    return $model::all();
                },
            ],

            /*
             * Lists the tables columns
             */
            'columns' => [
                'name' => [
                    'th' => 'Name',
                    'tr' => function ($model) {
                        return $model->name;
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '15%',
                ],

                'email' => [
                    'th' => 'Email',
                    'tr' => function ($model) {
                        return $model->email;
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '15%',
                ],

                'read_at' => [
                    'th' => 'Read At?',
                    'tr' => function ($model) {
                        return $model->read_at === null
                            ? '<span class="label label-danger">Unread</span>'
                            : '<span class="label label-success">Read</span>';
                    },
                    'orderable' => true,
                    'searchable' => true,
                    'width' => '15%',
                ],

                'actions' => [
                    'th' => 'Actions',
                    'tr' => function ($model) {
                        $return = [
                            [
                                'btn-title' => 'Read',
                                'btn-link' => route('backend.contact.read', $model->id),
                                'btn-class' => 'btn btn-default btn-xs btn-labeled',
                                'btn-icon' => 'fa fa-file',
                                'hasPermission' => 'read@contact_backend',
                            ],
                        ];

                        return $return;
                    },
                ],
            ],
        ];
    }
}
