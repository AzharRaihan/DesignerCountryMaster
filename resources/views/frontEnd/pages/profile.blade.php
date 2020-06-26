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
                                    <label for="name"><b>Name :</b></label>
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
                                    <label for="email"><b>Email :</b></label>
                                    <input  type="email" name="email" class="form-control"  disabled value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pb-sm-2 pb-xs-1">
                                    <label for="mobile"><b>Mobile/Phone :</b></label>
                                    <input  type="number" name="phone" class="form-control" id="phone" value=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pb-md-3 pb-sm-2 pb-xs-1">
                                    <label for="address"><b>Address :</b></label>
                                    <input  type="address" name="address" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pb-sm-2 pb-xs-1">
                                    <label for="company-name"><b>Company Name :</b></label>
                                    <input  type="text" name="company-name" class="form-control" id="company-name" value=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pb-md-3 pb-sm-2 pb-xs-1">
                                    <label for="work-phone"><b>Work Phone :</b></label>
                                    <input  type="work-phone" name="work-phone" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pb-sm-2 pb-xs-1">
                                    <label for="website"><b>Website:</b></label>
                                    <input  type="website" name="website" class="form-control" id="website" value=""> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pb-md-3 pb-sm-2 pb-xs-1">
                                    <label for="vat"><b>Vat Number :</b></label>
                                    <input  type="number" name="vat" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <div class="custom_button text-right">
                                    <a href="#" class="btn btn">Update</a>
                                </div>  
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
