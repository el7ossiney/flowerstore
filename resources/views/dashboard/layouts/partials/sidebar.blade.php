<div class="sidebar">
    <!-- start with head -->
    <div class="head">
      <div class="logo">
        <img src="{{asset('storage/').'/'.Auth::guard('admin')->user()->image}}" alt="profile Image">
      </div>
    </div>
    <!-- end with head -->
    <!-- start the list -->
    <div id="list">
      <ul class="nav flex-column">
        <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link active" ><i class="fa fa-adjust"></i>Dashboard</a></li>
        <li class="nav-item"><a href="#admins" class="nav-link collapsed active" data-toggle="collapse"><i class="fa fa-fire"></i>Admins<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <!-- start charts submenue -->
        <li class="sub collapse" id="admins">
            <a href="{{route('admins.index')}}" class="nav-link" data-parent="#menu3">Admins</a>
            <a href="{{route('admins.create')}}" class="nav-link" data-parent="#menu3">Create new admin</a>

        </li>
        <li class="nav-item"><a href="#brands" class="nav-link collapsed active" data-toggle="collapse"><i class="fa fa-fire"></i>Brands<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <!-- start charts submenue -->
        <li class="sub collapse" id="brands">
            <a href="{{route('brands.index')}}" class="nav-link" data-parent="#menu3">Brands</a>
            <a href="{{route('brands.create')}}" class="nav-link" data-parent="#menu3">Create new one</a>
        </li>
        <li class="nav-item"><a href="#categories" class="nav-link collapsed active" data-toggle="collapse"><i class="fa fa-fire"></i>Categories<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <!-- start charts submenue -->
        <li class="sub collapse" id="categories">
            <a href="{{route('categories.index')}}" class="nav-link" data-parent="#menu3">Categories</a>
            <a href="{{route('categories.create')}}" class="nav-link" data-parent="#menu3">Create new one</a>
        </li>        
        <li class="nav-item"><a href="#products" class="nav-link collapsed active" data-toggle="collapse"><i class="fa fa-fire"></i>Products<span class="sub-ico"><i class="fa fa-angle-down"></i></span></a></li>
        <!-- start charts submenue -->
        <li class="sub collapse" id="products">
            <a href="{{route('products.index')}}" class="nav-link" data-parent="#menu3">Products</a>
            <a href="{{route('products.create')}}" class="nav-link" data-parent="#menu3">Create new one</a>
        </li>        

        <li class="nav-item"><a href="{{route('dashboard')}}" class="nav-link active" ><i class="fa fa-adjust"></i>Gallery</a></li>
        
        <!-- end with charts -->
        <li class="nav-item"><a href="inbox.html" class="nav-link"><i class="fa fa-inbox"></i>inbox</a></li>

      </ul>
    </div>

    <!-- end the list -->
  </div>