<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
          <div class="profile-image">
            <img class="img-xs rounded-circle" src="/images/faces/face8.jpg" alt="profile image">
            <div class="dot-indicator bg-success"></div>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Allen Moreno</p>
            <p class="designation">Premium user</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-category">Main Menu</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
          <i class="menu-icon typcn typcn-document-text"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Product_pages" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Product_pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.products')}}">Manage Products </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.product.create')}}">Add Products </a>
            </li>
          </ul>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#Category_pages" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon typcn typcn-document-add"></i>
          <span class="menu-title">Manage Categories</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="Category_pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.categories')}}">Manage Category </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.category.create')}}">Add Category </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pages/charts/chartjs.html">
          <i class="menu-icon typcn typcn-th-large-outline"></i>
          <span class="menu-title">Charts</span>
        </a>
      </li>
    </ul>
  </nav>