<div class="col-md-5 text-center offset-3 mt-2">
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ $message }}
       {{Session::forget('success')}}
            </div>
        </div>
    @endif

    @if(Session::has('error'))
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>×</span>
                </button>
                {{ $message }}
            </div>
        </div>
    @endif
</div>
