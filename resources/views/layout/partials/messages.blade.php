{{-- .info .success .alert .danger  --}}
@if ( Session::get('danger') )
    <div class="block-alert danger">
        <button type="button" class="close">×</button>
        <strong>{{ Session::get('danger') }}</strong>
    </div>
@endif

@if( Session::get('alert') )
    <div class="block-alert alert">
        <button type="button" class="close">×</button>
        <strong>{{ Session::get('alert') }}</strong>
    </div>
@endif

@if ( Session::get('success') )
    <div class="block-alert success">
        <button type="button" class="close">×</button>
        <strong>{{ Session::get('success') }}</strong>
    </div>
@endif

@if ( Session::get('info') )
    <div class="block-alert info">
        <button type="button" class="close">×</button>
        <strong>{{ Session::get('info') }}</strong>
    </div>
@endif
