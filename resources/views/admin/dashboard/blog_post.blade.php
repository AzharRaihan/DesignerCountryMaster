@extends('admin.partials.app')
@section ('title', 'service')
@section ('css')
<style>
  .blog-content-page{

  }
  #blog_post .button i {
    font-size: 100px;
    color: #009688;

  }

</style>
@endsection
@section('content')
  <section id="blog_post">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="blog-content-page py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
            <div class="title">
              <h1 class="text-center"><span style="border-bottom: 2px solid #009688; padding-bottom: 20px;">Create Blog Post</span></h1>
            </div>
            <div class="body py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
              <div class="button text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
                <a href="http://localhost:8000/wink/login"><i class="fas fa-plus-square"></i></a>
              </div>
              <marquee><p style="color: #009688; font-size: 20px; text-align: center;">Write Your Blog For Designer Country</p></marquee>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
@endsection

@section('js')
@endsection