<!-- Bottom Bar Start -->
<div class="bottom-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="logo">
                    <a href="index.html">
                        @foreach($logos as $logo)
                            <a href="{{ route('home') }}"><img src="{{asset('img/'.$logo->image)}}" width="100px" class="logo" alt=""></a>
                        @endforeach
                    </a>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Bottom Bar End -->
