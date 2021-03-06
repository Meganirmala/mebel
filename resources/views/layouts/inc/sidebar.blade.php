<div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('admin/img/sidebar-2.jpg') }}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
        E-Mebel
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active':'' }}  ">
          <a class="nav-link" href="{{ route('index') }}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('category') ? 'active':'' }} ">
          <a class="nav-link" href="{{ route('category.index') }}">
            <i class="material-icons">content_paste</i>
            <p>Category</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('product') ? 'active':'' }} ">
          <a class="nav-link" href="{{ route('product.index') }}">
            <i class="material-icons">content_paste</i>
            <p>Product</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('seo') ? 'active':'' }} ">
          <a class="nav-link" href="{{ route('seo') }}">
            <i class="material-icons">search</i>
            <p>SEO</p>
          </a>
        </li>
      </ul>
    </div>
  </div>