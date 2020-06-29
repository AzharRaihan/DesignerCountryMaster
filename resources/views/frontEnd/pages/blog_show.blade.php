@extends ('frontEnd.layouts.master')
@section ('title', "$post->title")
@section ('css')
<style type="text/css">

</style>
@endsection
@section ('content')

<!--==** Commercial Trend Section Start **==-->
<section id="commercial_trend">
  <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 mobile-pt">
    <div id="blog_banner" class="head py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 mobile-bl mobile-pr mobile-pt">
      <h2 class="text-center">{{ $post->title }}</h2>
      <p class="text-center py-col-2 py-sm-2 py-md-3 py-lg-4 py-xl-4 mobile-pb">{{ $post->excerpt }}</p>
      <img src="{{ $post->featured_image }}" class="img-fluid mobile-pl" alt="">
    </div>
    <div id="blog_body" class="article px-col-2 px-sm-3 px-md-4 px-lg-5 px-xl-5 mobile-pl mobile-pr"
      style="width: 100%;">
      <div> {!! $post->body !!} </div>
    </div>
  </div>
</section>
<!--==** Commercial Trend Section End **==-->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div id="disqus_thread"></div>
      <script>
      /**
       *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
       *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
      /*
      var disqus_config = function () {
      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
      };
      */

      (function() { // DON'T EDIT BELOW THIS LINE
        var d = document,
          s = d.createElement('script');
        s.src = 'https://designer-country-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
      })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
          Disqus.</a></noscript>
    </div>

  </div>
</div>
@endsection