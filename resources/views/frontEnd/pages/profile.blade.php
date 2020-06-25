@extends ('frontEnd.layouts.master')
@section ('title', 'Professional Photo Editing | Clipping Path Ghost Manipulation')
@section ('css')
<style type="text/css">




</style>
@endsection
@section ('content')

<!--==** Contact Us Section Start **==-->
  <section id="contact_us">
    <div class="container pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
        <div class="contact-head text-center pb-md-4 pb-sm-3 pb-xs-2">
            <h1 class="py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">Hello {{ Auth::user()->name }}!</h1>
            <hr>
        </div>
        <div class="contact-body">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pb-sm-2 pb-xs-1">
                                    <label for="name" class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4"><b>Name :</b></label>
                                    <input  type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}" disabled> 
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pb-md-3 pb-sm-2 pb-xs-1">
                                    <label for="email" class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4"><b>Email :</b></label>
                                    <input  type="email" name="email" class="form-control"  disabled value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
  </section>
<!--==** Contact Us Section Start **==-->

@endsection

@section ('js')

<script>
    function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>

@endsection
