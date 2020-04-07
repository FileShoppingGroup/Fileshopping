@extends('layouts.default')

@section('main')

 <!--Middle Part Start-->
 <div id="content" class="col-sm-9">
    <h1 class="title">{{ $cat->fa_name }}</h1>
    <h3 class="subtitle">بهبود جستجو</h3>
    <div class="category-list-thumb row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="category.html"><img src="/image/no_image.jpg" alt="لپ تاپ (6)" /></a> <a href="category.html">لپ تاپ (6)</a> </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="category.html"><img src="/image/no_image.jpg" alt="رومیزی (1)" /></a> <a href="category.html">رومیزی (1)</a> </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="category.html"><img src="/image/no_image.jpg" alt="دوربین (2)" /></a> <a href="category.html">دوربین (2)</a> </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="category.html"><img src="/image/no_image.jpg" alt="موبایل و تبلت (4)" /></a> <a href="category.html">موبایل و تبلت (4)</a> </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="category.html"><img src="/image/no_image.jpg" alt="صوتی و تصویری (11)" /></a> <a href="category.html">صوتی و تصویری (11)</a> </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="category.html"><img src="/image/no_image.jpg" alt="لوازم خانگی (2)" /></a> <a href="category.html">لوازم خانگی (2)</a> </div>
    </div>
    <div class="product-filter">
      <div class="row">
        <div class="col-md-4 col-sm-5">
          <div class="btn-group">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
          </div>
          <a href="compare.html" id="compare-total">محصولات مقایسه (0)</a> </div>
        <div class="col-sm-2 text-right">
          <label class="control-label" for="input-sort">مرتب سازی :</label>
        </div>
        <div class="col-md-3 col-sm-2 text-right">
          <select id="input-sort" class="form-control col-sm-3">
            <option value="" selected="selected">پیشفرض</option>
            <option value="">نام (الف - ی)</option>
            <option value="">نام (ی - الف)</option>
            <option value="">قیمت (کم به زیاد)</option></option>
            <option value="">قیمت (زیاد به کم)</option>
            <option value="">امتیاز (بیشترین)</option>
            <option value="">امتیاز (کمترین)</option>
            <option value="">مدل (A - Z)</option>
            <option value="">مدل (Z - A)</option>
          </select>
        </div>
        <div class="col-sm-1 text-right">
          <label class="control-label" for="input-limit">نمایش :</label>
        </div>
        <div class="col-sm-2 text-right">
          <select id="input-limit" class="form-control">
            <option value="" selected="selected">20</option>
            <option value="">25</option>
            <option value="">50</option>
            <option value="">75</option>
            <option value="">100</option>
          </select>
        </div>
      </div>
    </div>
    <br />
    <div class="row products-category">

      @foreach ($pros as $key => $value)
      @foreach ($value as $item)
      <div class="product-layout product-list col-xs-12">
        <div class="product-thumb">
          <div class="image"><a href="{{ url('pro/'.$item->id) }}"><img style="height:30vh; width:10vw;" src="/{{ $item->image }}" alt=" {{ $item->name }}" title="{{ $item->name }} " class="img-responsive" /></a></div>
          <div>
            <div class="caption">
              <h4><a href="{{ url('pro/'.$item->id) }}"> {{ $item->name }} </a></h4>
              <p class="price">
                <span class="price-new">{{(1-($item->discount)/100)*$item->price}} تومان</span>
                <span class="price-old">{{$item->price}}</span> <span class="saving">{{$item->discount}}%</span>
              </p>
            </div>
            <div class="button-group">
                <button class="btn-primary add-to-cart" type="button" onClick="" data-id="{{$item->id}}"><span>افزودن به سبد</span></button>
                <div class="add-to-links">
                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>  
      @endforeach
      @endforeach

    </div>

    <div class="row">
      <div class="col-sm-6 text-left">
        <ul class="pagination">
          <li class="active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">&gt;</a></li>
          <li><a href="#">&gt;|</a></li>
        </ul>
      </div>
      <div class="col-sm-6 text-right">نمایش 1 تا 12 از 15 (مجموع 2 صفحه)</div>
    </div>
  </div>
  <!--Middle Part End -->

@endsection

