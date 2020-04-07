@extends('layouts.default')

 
@section('main')
 <!--Middle Part Start-->
 <div id="content" class="col-sm-9">
    <div itemscope itemtype="http://schema.org/محصولات">
      <h1 class="title" itemprop="name">{{ $pro->name }}</h1>
      <div class="row product-info">
        <div class="col-sm-4">
          <div class="image">
            <img class="img-responsive" itemprop="image" style="height:70vh; width:20vw;" id="zoom_01" src="/{{ $pro->image }}" title="{{ $pro->name }}" alt="{{ $pro->name }}" data-zoom-image="/{{ $pro->image }}" /> 
          </div>
          
        </div>
        <div class="col-sm-8">
          <ul class="list-unstyled description">
            <li><b>دسته بندی :</b> <a href="#"><span itemprop="brand">{{ $pro->category->fa_name }}</span></a></li>
            <li><b> نوع :</b> <span itemprop="mpn">{{ $pro->type->name }}</span></li>
            <li><b> تخفیف :</b> <span class="instock">{{$pro->discount}}%</span></li>
          </ul>
          <ul class="price-box">
            <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
              <span class="price-new">{{(1-($pro->discount)/100)*$pro->price}} تومان</span>
              <span class="price-old">{{$pro->price}}</span> 
              </span>
            </li>
            <li></li>
          </ul>
          <div id="product">
            <h3 class="subtitle">خرید محصول</h3>
            <div class="cart">
              <div>
                <div class="qty">
                  <label class="control-label" for="input-quantity">تعداد</label>
                  <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                  <a class="qtyBtn plus" href="javascript:void(0);">+</a><br />
                  <a class="qtyBtn mines" href="javascript:void(0);">-</a>
                  <div class="clear"></div>
                </div>
                <button type="button" id="button-cart" class="btn btn-primary btn-lg">افزودن به سبد</button>
              </div>
              <div>
                <button type="button" class="wishlist" onClick=""><i class="fa fa-heart"></i> افزودن به علاقه مندی ها</button>
                <br />
                <button type="button" class="wishlist" onClick=""><i class="fa fa-exchange"></i> مقایسه این محصول</button>
              </div>
            </div>
          </div>
          <div class="rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
            <meta itemprop="ratingValue" content="0" />
            <p><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <a onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;" href=""><span itemprop="reviewCount">1 بررسی</span></a> / <a onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;" href="">یک بررسی بنویسید</a></p>
          </div>
          <hr>
          <!-- AddThis Button BEGIN -->
          <div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a> <a class="addthis_counter addthis_pill_style"></a> </div>
          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
          <!-- AddThis Button END -->
        </div>
      </div>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-description" data-toggle="tab">توضیحات</a></li>
        <li><a href="#tab-specification" data-toggle="tab">مشخصات</a></li>
        <li><a href="#tab-review" data-toggle="tab">بررسی (2)</a></li>
      </ul>
      <div class="tab-content">
        <div itemprop="description" id="tab-description" class="tab-pane active">
          <div>
            <p>
              {{ $pro->producer->name}}
            </p>
            <p>
              {{ $pro->body }}
            </p>
          </div>
        </div>
        <div id="tab-specification" class="tab-pane">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>نوع فایل : {{ $pro->type->name }}</td>
              </tr>
            </tbody>
            </table>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td> حجم فایل : 1</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td>  تعداددانلود  : {{ $pro->download_number }}</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="tab-review" class="tab-pane">
          <form class="form-horizontal">
            <div id="review">
              <div>
                <table class="table table-striped table-bordered">
                  <tbody>
                    <tr>
                      <td style="width: 50%;"><strong><span>هاروی</span></strong></td>
                      <td class="text-right"><span>1395/1/20</span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><p>ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-striped table-bordered">
                  <tbody>
                    <tr>
                      <td style="width: 50%;"><strong><span>اندرسون</span></strong></td>
                      <td class="text-right"><span>1395/1/20</span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><p>ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-right"></div>
            </div>
            <h2>یک بررسی بنویسید</h2>
            <div class="form-group required">
              <div class="col-sm-12">
                <label for="input-name" class="control-label">نام شما</label>
                <input type="text" class="form-control" id="input-name" value="" name="name">
              </div>
            </div>
            <div class="form-group required">
              <div class="col-sm-12">
                <label for="input-review" class="control-label">بررسی شما</label>
                <textarea class="form-control" id="input-review" rows="5" name="text"></textarea>
                <div class="help-block"><span class="text-danger">توجه :</span> HTML بازگردانی نخواهد شد!</div>
              </div>
            </div>
            <div class="form-group required">
              <div class="col-sm-12">
                <label class="control-label">رتبه</label>
                &nbsp;&nbsp;&nbsp; بد&nbsp;
                <input type="radio" value="1" name="rating">
                &nbsp;
                <input type="radio" value="2" name="rating">
                &nbsp;
                <input type="radio" value="3" name="rating">
                &nbsp;
                <input type="radio" value="4" name="rating">
                &nbsp;
                <input type="radio" value="5" name="rating">
                &nbsp;خوب</div>
            </div>
            <div class="buttons">
              <div class="pull-right">
                <button class="btn btn-primary" id="button-review" type="button">ادامه</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <h3 class="subtitle">محصولات مرتبط</h3>
      <div class="owl-carousel related_pro">

        @foreach ($pros as $item)
        <div class="product-thumb">
          <div class="image"><a href="product.html"><img style="height:30vh; width:10vw;" src="/{{ $item->image }}" alt=" {{ $item->name }} " title="{{ $item->name }} " class="img-responsive" /></a></div>
          <div class="caption">
            <h4><a href="product.html">{{ $item->name }} </a></h4>
            <p class="price">
              <span class="price-new">{{(1-($item->discount)/100)*$item->price}} تومان</span>
              <span class="price-old">{{$item->price}}</span> <span class="saving">{{$item->discount}}%</span>
              </p>
          </div>
          <div class="button-group">
            <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
            <div class="add-to-links">
              <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
              <button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>
            </div>
          </div>
        </div>
        @endforeach
            
      </div>
    </div>
  </div>
  <!--Middle Part End -->
@endsection