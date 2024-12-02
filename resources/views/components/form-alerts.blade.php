<div>
    <div class="mb-3">
        @if (Session::get('info') )
        <div class="alet alert-info">
            {!!Session::get('info')!!}
            <button class="Close" data-demiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (Session::get('fail') )
        <div class="alet alert-info">
            {!!Session::get('fail')!!}
            <button class="Close" data-demiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if (Session::get('success') )
        <div class="alet alert-success">
            {!!Session::get('success')!!}
            <button class="Close" data-demiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
</div>
