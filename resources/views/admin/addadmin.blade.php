@extends('layouts.admin')

@section('content')
<section id="main-content">
  <section class="wrapper">
    <div class="form-w3layouts">
      <div class="row">
        <div class="col-lg-12" >
          <section class="panel">
              <header class="panel-heading">
                  Horizontal Forms
              </header>
              <div class="panel-body">
                  <div class="position-center">
                      <form class="form-horizontal" role="form">
                      <div class="form-group">
                          <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Email</label>
                          <div class="col-lg-10">
                              <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                              <p class="help-block">Example block-level help text here.</p>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Password</label>
                          <div class="col-lg-10">
                              <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                          </div>
                      </div>
                      <<!-- div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox"> Remember me
                                  </label>
                              </div>
                          </div>
                      </div> -->
                      <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-danger">Sign in</button>
                          </div>
                      </div>
                  </form>
                  </div>
              </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</section>
@endsection

@section('jquery')
<script src="{{asset('ad/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('ad/js/jquery.nicescroll.js')}}"></script>
<!-- <script src="{{asset('ad/js/jquery.fileupload.js')}}"></script> -->
<!-- <script src="{{asset('ad/js/jquery.min.js')}}"></script> -->
<!-- <script src="{{asset('ad/js/jquery.vmap.asia.js')}}"></script> -->
<!-- <script src="{{asset('ad/js/jquery.vmap.australia.js')}}"></script> -->
<!-- <script src="{{asset('ad/js/jquery.vmap.europe.js')}}"></script> -->
<!-- <script src="{{asset('ad/js/script.js')}}"></script> -->
<!-- <script src="{{asset('ad/js/lightbox-plus-jquery.min.js')}}"></script> -->
@endsection
@section('js')
	<script>
	
	</script>
@endsection