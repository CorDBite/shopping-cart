<html>
<head>
    <title>Product Listing Page </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{ route('index.products') }}">Shopping Cart</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('index.products') }}">Products</a>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
          @if (Auth::guest())
          <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">Register</a>
          </li>
                        @else

         <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        @endif
  
        </ul>
    </div>
</nav>

<div class="wrapper container border">
<div class="desc">
    <h1>All Products Listing</h1>
</div>

<div class="content">
    <!-- content here -->
    <!-- checking if the products count is more than zero  -->
    @if(count($products) > 0)
        <div class="product-grid product-grid--flexbox">
            <div class="product-grid__wrapper">
                
                <!-- looping the $products variable - Remember this is the exact same variable which we pass to welcome view in the ProductController -->
                @foreach($products as $product)
                    <!-- Single product -->
                    <div class="product-grid__product-wrapper">
                        <div class="product-grid__product">
                            <div class="product-grid__img-wrapper">         
                                <img src="{{ $product->imgPath }}" alt="Img" class="product-grid__img" />
                            </div>
                            <span class="product-grid__title">{{ $product->title }}</span>
                            <span class="product-grid__price">${{ $product->price }}</span>
                            <div class="product-grid__extend-wrapper">
                                <div class="product-grid__extend">
                                    <p class="product-grid__description">{{ $product->description }}</p>
                                    <span class="product-grid__btn product-grid__add-to-cart"><i class="fa fa-cart-arrow-down"></i> Add to cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Single product -->
                @endforeach
            </div>      
        </div>
    @endif
</div>
</div>
</body>
</html>