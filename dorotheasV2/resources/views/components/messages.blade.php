@if(\Session::has('messages') && !empty(\Session::get('messages')))
    <div class="messages-div d-flex message-alert justify-content-center" style="margin-top: 10px;">
        <ul class="messages d-flex alert {{ \Session::get('alert_type') }} justify-content-center">
            @foreach (\Session::get('messages') as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
