<div class="page-header">
    <div class="page-title"><h3>Contact {{ config('cms.core.app.site-name') }}</h3></div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">Contact Form</div>
    </div>
    <div class="panel-body">
    {!! Former::vertical_open() !!}

    <div class="row">
        <div class="col-md-6">
            {!! Former::text('name')->prepend('<i class="fa fa-fw fa-user"></i>')->required()->tabindex('1') !!}
            {!! Former::text('email')->prepend('<i class="fa fa-fw fa-envelope"></i>')->required()->tabindex('2') !!}
        </div>
        <div class="col-md-6">
            {!! Former::textarea('body')->required()->rows(4)->tabindex('3') !!}
        </div>
    </div>

    <button class="btn-labeled btn btn-success pull-right" type="submit" tabindex="6">
        <span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span> Send
    </button>
    {!! Former::close() !!}
    </div>
</div>
