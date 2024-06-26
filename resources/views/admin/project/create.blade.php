<div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title"> {{ $title }}</h4>
            <button type="button" class="btn btn-primary ms-3" id="open_ai_form">Gemini AI </button>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
        <div class="card height-equal">
            <div class="card-body">
                {!! Form::open([
                    'url' => action('App\Http\Controllers\Admin\ProjectController@store'),
                    'id' => 'ajax_form',
                    'method' => 'post',
                    'enctype' => 'multipart/form-data',
                    'class' => 'row g-3 needs-validation custom-input',
                    'novalidate',
                ]) !!}
                @include('admin.project.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
