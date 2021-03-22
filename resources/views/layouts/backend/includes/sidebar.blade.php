<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.category.index') }}">
                    <i class="material-icons">person</i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.product.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Products</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.banner.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Banner</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.backend.contact_info') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Contact Info</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.backend.logo') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Logo</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.backend.social_link') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Social</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.backend.payment_method') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Payment Method</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.backend.privacy_policy') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Privacy Policy</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('admin.backend.term') }}">
                    <i class="material-icons">location_ons</i>
                    <p>Terms & Conditions</p>
                </a>
            </li>
        </ul>
    </div>
</div>
