@if(Session::has('error'))
    <div class="row mr-2 ml-2" >
        <button type="text" class="btn btn-lg btn-block btn-danger mb-2"
                id="type-error">{{Session::get('error')}}
        </button>
    </div>
@endif


@if(Session::has('success'))
    <div class="row mr-2 ml-2">
        <button type="text" class="btn btn-lg btn-block btn-success mb-2"
                id="type-error">{{Session::get('success')}}
        </button>
    </div>
@endif
