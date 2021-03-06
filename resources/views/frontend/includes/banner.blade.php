<!-- Main Slider Start -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('frontend.category') }}"><i class="fa fa-shopping-bag"></i>Categories</a>
                            <ul class="nav-treeview">
                                @foreach($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.category.product', $category->id)}}">{{$category->name}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-6">
                <div class="header-slider normal-slider">
                    @foreach($banners as $banner)
                    <div class="header-slider-item">
                        <img src="{{ asset('img/'.$banner->image) }}" alt="Slider Image" />
                        <div class="header-slider-caption">
                            <p>{{ $banner->title }}</p>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>{{$banner->description}}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-3">
                <div class="header-img">
                    @foreach($banner_tos as $banner_to)
                    <div class="img-item">
                        <img src="{{ asset('img/'.$banner_to->image) }}" />
                        <a class="/img-text" href="">
                            <p>Some text goes here that describes the image</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Slider End -->
