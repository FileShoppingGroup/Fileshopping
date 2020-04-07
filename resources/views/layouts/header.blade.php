<!DOCTYPE html>
<html dir="rtl">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="/image/favicon.png" rel="icon" />
  <title>مارکت شاپ - قالب HTML فروشگاهی</title>
  <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
  <script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
  <!-- CSS Part Start-->
  <link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="/js/bootstrap/css/bootstrap-rtl.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="/css/owl.transitions.css" />
  <link rel="stylesheet" type="text/css" href="/css/responsive.css" />
  <link rel="stylesheet" type="text/css" href="/css/stylesheet-rtl.css" />
  <link rel="stylesheet" type="text/css" href="/css/responsive-rtl.css" />
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans' type='text/css'>




<!-- CSS Part End-->
</head>
<body>
  <div class="wrapper-wide">
    <div id="header">
      <!-- Top Bar Start-->
      <nav id="top" class="htop">
        <div class="container">
          <div class="row">
            <span class="drop-icon visible-sm visible-xs">
              <i class="fa fa-align-justify"></i>
            </span>
            <div class="pull-left flip left-top">
              <div class="links">
                <ul>
                  <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                  <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                  <li class="wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی<b></b></a>
                    <div class="dropdown-menu custom_block">
                      <ul>
                        <li>
                          <table>
                            <tbody>
                              <tr>
                                <td><img alt="" src="/image/banner/cms-block.jpg"></td>
                                <td><img alt="" src="/image/banner/responsive.jpg"></td>
                              </tr>
                              <tr>
                                <td><h4>بلاک های محتوا</h4></td>
                                <td><h4>قالب واکنش گرا</h4></td>
                              </tr>
                              <tr>
                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                                <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                              </tr>
                              <tr>
                                <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                                <td><strong><a class="btn btn-default btn-sm" href="#">ادامه مطلب</a></strong></td>
                              </tr>
                            </tbody>
                          </table>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li><a href="#">لیست علاقه مندی (0)</a></li>
                  <li><a href="checkout.html">تسویه حساب</a></li>
                </ul>
              </div>
              <div id="language" class="btn-group">
                <button class="btn-link dropdown-toggle" data-toggle="dropdown">
                  <span>
                    <img src="/image/flags/gb.png" alt="انگلیسی" title="انگلیسی">
                    انگلیسی
                    <i class="fa fa-caret-down"></i>
                  </span>
                  </button>
                <ul class="dropdown-menu">
                  <li>
                    <button class="btn btn-link btn-block language-select" type="button" name="GB">
                      <img src="/image/flags/gb.png" alt="انگلیسی" title="انگلیسی" /> انگلیسی
                    </button>
                  </li>
                  <li>
                    <button class="btn btn-link btn-block language-select" type="button" name="GB">
                      <img src="/image/flags/ar.png" alt="عربی" title="عربی" /> عربی
                    </button>
                  </li>
                </ul>
              </div>
              <div id="currency" class="btn-group">
                <button class="btn-link dropdown-toggle" data-toggle="dropdown">
                  <span> تومان
                    <i class="fa fa-caret-down"></i>
                  </span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">€ Euro</button>
                  </li>
                  <li>
                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">£ Pound Sterling</button>
                  </li>
                  <li>
                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">$ USD</button>
                  </li>
                </ul>
              </div>
            </div>
            <div id="top-links" class="nav pull-right flip">
              <ul class="links">

                @if (Route::has('login'))
                    <!-- <div class="top-right links"> -->
                        @auth
                        <li><a href="{{ url('/home') }}">خانه</a></li>
                        <li><a onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                          خروج</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                              @csrf
                          </form>
                        </li>

                        @else
                            <li><a href="{{ route('login') }}">ورود</a></li>
                            @if (Route::has('register'))
                              <li><a href="{{ route('register') }}">ثبت نام</a></li>
                            @endif
                        @endauth
                    <!-- </div> -->
                @endif

              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- Top Bar End-->
      <!-- Header Start-->
      <header class="header-row">
        <div class="container">
          <div class="table-container">
            <!-- Logo Start -->
            <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
              <div id="logo">
                <a href="index.html">
                  <img class="img-responsive" src="/image/logo.png" title="MarketShop" alt="MarketShop" />
                </a>
              </div>
            </div>
            <!-- Logo End -->
            <!-- Mini Cart Start-->
            <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
              @auth

                <div id="cart">
                <a href="/basket" id="shop-cart" type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
                  <span class="cart-icon pull-left flip"></span>
                  <span id="cart-total">
                    <?php if ($baskets != null && count($baskets) > 0): ?>
                      {{count($baskets)}}
                    <?php endif; ?>
                    <?php $sum = 0; ?>
                    <?php foreach ($baskets as $basket): ?>
                      <?php $sum += $basket->price * $basket->count; ?>
                    <?php endforeach; ?>

                    آیتم - {{$sum}} تومان</span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <table class="table">
                      <tbody>
                        <?php $total = 0; ?>
                        <?php foreach ($baskets as $basket): ?>

                          <tr>
                            <td class="text-center">
                              <a href="product.html">
                                <img class="img-thumbnail" title="{{$basket->product->name}}" alt="{{$basket->product->name}}" src="/{{$basket->product->image}}">
                              </a>
                            </td>
                            <td class="text-left">
                              <a href="product.html">{{$basket->product->name}}</a>
                            </td>
                            <td class="text-right">{{$basket->count}}</td>
                            <td class="text-right">{{$basket->price}} تومان</td>
                            <?php $total += $basket->price ?>
                            <td class="text-center">
                              <button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button">
                                <i class="fa fa-times"></i>
                              </button>
                            </td>
                          </tr>
                        <?php endforeach; ?>


                      </tbody>
                    </table>
                  </li>
                  <li>
                    <div>
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <td class="text-right"><strong>جمع کل</strong></td>
                            <td class="text-right">132000 تومان</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>کسر هدیه</strong></td>
                            <td class="text-right">4000 تومان</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>مالیات</strong></td>
                            <td class="text-right">11880 تومان</td>
                          </tr>
                          <tr>
                            <td class="text-right"><strong>قابل پرداخت</strong></td>
                            <td class="text-right">139880 تومان</td>
                          </tr>
                        </tbody>
                      </table>
                      <p class="checkout">
                        <a href="cart.html" class="btn btn-primary">
                          <i class="fa fa-shopping-cart"></i> مشاهده سبد
                        </a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="checkout.html" class="btn btn-primary">
                          <i class="fa fa-share"></i> تسویه حساب
                        </a>
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
              @endauth
            </div>
            <!-- Mini Cart End-->
            <!-- جستجو Start-->
            <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
              <div id="search" class="input-group">
                <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
                <button type="button" class="button-search"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <!-- جستجو End-->
          </div>
        </div>
      </header>


      <div class="container">
        <nav id="menu" class="navbar">
          <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li><a class="home_link" title="خانه" href="{{ url('/') }}"><span>خانه</span></a></li>
              <li class="mega-menu dropdown"><a>دسته ها</a>
                <div class="dropdown-menu">
                  <?php foreach ($categories as $category): ?>
                    <div class="column col-lg-2 col-md-3"><a href="{{ route('cat.show',['cat'=>$category->id]) }}">{{$category->fa_name}}</a>
                      <div>
                        <ul>
                          <?php $cats = App\Category::where('chId', $category->id)->get(); ?>
                          <?php foreach ($cats as $cat): ?>
                            <li><a href="{{ route('cat.show',['cat'=>$cat->id]) }}">{{$cat->fa_name}}<span>&rsaquo;</span></a>
                              <div class="dropdown-menu">
                                <ul>
                                  <li><a href="category.html">زیردسته ها</a></li>
                                  <li><a href="category.html">زیردسته ها</a></li>
                                  <li><a href="category.html">زیردسته ها</a></li>
                                  <li><a href="category.html">زیردسته ها</a></li>
                                  <li><a href="category.html">زیردسته جدید</a></li>
                                </ul>
                              </div>
                            </li>
                          <?php endforeach; ?>
                        </ul>
                      </div>
                    </div>

                  <?php endforeach; ?>
                </div>
              </li>

              <li class="dropdown information-link"><a>برگه ها</a>
                <div class="dropdown-menu">
                  <ul>
                    <li><a href="{{ route('login')}}">ورود</a></li>
                    <li><a href="{{ route('register')}}">ثبت نام</a></li>
                    <li><a href="category.html">دسته‌بندی‌ها</a></li>
                    <li><a href="product.html">محصولات</a></li>
                    <li><a href="cart.html">سبد خرید</a></li>
                    <li><a href="search.html">جستجو</a></li>
                  </ul>
                  <ul>
                    <li><a href="about-us.html">درباره ما</a></li>
                    <li><a href="contact-us.html">تماس با ما</a></li>
                  </ul>
                </div>
              </li>
              <li class="contact-link"><a href="contact-us.html">تماس با ما</a></li>
              <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <div id="container">
    <div class="container">
    <div class="row">
      <!-- Left Part Start-->
      <aside id="column-left" class="col-sm-3 hidden-xs">
        <h3 class="subtitle">دسته ها</h3>
        <div class="box-category">
          <ul id="cat_accordion">
            <?php foreach ($categories as $category): ?>
              <li><a href="{{ route('cat.show',['cat'=>$category->id]) }}">{{$category->fa_name}}</a> <span class="down"></span>
                <?php $cats = App\Category::where('chId', $category->id)->get(); ?>
                <ul>
                  <?php foreach ($cats as $cat): ?>
                    <li><a href="{{ url('cat/'.$cat->id) }}">{{$cat->fa_name}}</a> <span class="down"></span>
                      <?php $pros = App\Product::where('category_id', $cat->id)->get(); ?>
                      <ul>
                        <?php foreach ($pros as $pro): ?>
                          <li><a href="{{ url('pro/'.$pro->id) }}">{{$pro->name}}</a></li>

                        <?php endforeach; ?>

                      </ul>
                  <?php endforeach; ?>
                  </li>
                </ul>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <h3 class="subtitle">پرفروش ها</h3>
        <div class="side-item">
          <?php foreach ($bestsellers as $bestseller): ?>
            <div class="product-thumb clearfix">
              <div class="image" style="height:9vh;"><a href="{{ url('pro/'.$bestseller->id) }}"><img src="/{{$bestseller->image}}" alt="{{$bestseller->name}}" title="{{$bestseller->name}}" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{ url('pro/'.$bestseller->id) }}">{{$bestseller->name}}</a></h4>
                <p class="price"><span class="price-new">{{(1-($bestseller->discount)/100)*$bestseller->price}} تومان</span> <span class="price-old">{{$bestseller->price}}</span> <span class="saving">{{$bestseller->discount}}%</span></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>


        <h3 class="subtitle">محبوب‌ترین‌ها</h3>
        <div class="side-item">
          <?php foreach ($favorites as $favorite): ?>
            <div class="product-thumb clearfix">
              <div class="image" style="height:9vh;"><a href="{{ url('pro/'.$favorite->id) }}"><img src="/{{$favorite->image}}" alt="{{$favorite->name}}" title="{{$favorite->name}}" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{ url('pro/'.$favorite->id) }}">{{$favorite->name}}</a></h4>
                <p class="price"><span class="price-new">{{(1-($favorite->discount)/100)*$favorite->price}} تومان</span> <span class="price-old">{{$favorite->price}}</span> <span class="saving">{{$favorite->discount}}%</span></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>


        <div class="list-group">
          <h3 class="subtitle">محتوای سفارشی</h3>
          <p>این یک بلاک محتواست. هر نوع محتوایی شامل html، نوشته یا تصویر را میتوانید در آن قرار دهید. </p>
          <p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>
          <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        </div>
        <div class="banner owl-carousel">
          <div class="item">
            <a href="#">
              <img src="/image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" />
            </a>
          </div>
          <div class="item">
            <a href="#">
              <img src="/image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" />
            </a>
          </div>
        </div>
        <h3 class="subtitle">جدیدترین</h3>
        <div class="side-item">
          <?php foreach ($newests as $newest): ?>
            <div class="product-thumb clearfix">
              <div class="image">
                <a href="{{ url('pro/'.$newest->id) }}">
                  <img src="/{{$newest->image}}" alt="{{$newest->name}}" title="{{$newest->name}}" class="img-responsive" />
                </a>
              </div>
              <div class="caption">
                <h4><a href="{{ url('pro/'.$newest->id) }}">{{$newest->name}}</a></h4>
                <p class="price"><span class="price-new">{{(1-($newest->discount)/100)*$newest->price}} تومان</span> <span class="price-old">{{$newest->price}}</span> <span class="saving">{{$newest->discount}}%</span></p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
            </div>
          <?php endforeach; ?>


        </div>
      </aside>
