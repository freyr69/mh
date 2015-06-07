@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="row">
            <div class="small-12 columns">
                <div data-alert class="alert-box {{ Session::get('flash_notification.level') }}">
                    {{ Session::get('flash_notification.message') }}
                    <a href="#" class="close">&times;</a>
                </div>
            </div>
        </div>
    @endif
@endif