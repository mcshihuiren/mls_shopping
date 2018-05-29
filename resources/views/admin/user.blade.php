@extends('layouts.admin')

@section('content')
<script src="{{asset('ad/js/jquery2.0.3.min.js')}}"></script>
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
         <div class="panel panel-default">
            <div class="panel-heading">
             管理员信息表
            </div>
            <div>
              <table class="table" ui-jq="footable" ui-options='{
                "paging": {
                  "enabled": true
                },
                "filtering": {
                  "enabled": true
                },
                "sorting": {
                  "enabled": true
                }}'>
                <thead>
                  <tr>
                    <th data-breakpoints="xs">ID</th>
                    <th>头像</th>
                    <th>名称</th>
                    <th data-breakpoints="xs">职称</th>
                    <th data-breakpoints="xs sm md" data-title="DOB">登录时间</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-expanded="true" v-for="adm in ad">
                  	<td>@{{adm.id}}</td>
                    <td><img src="" alt=""></td>
                    <td>@{{adm.name}}</td>
                    <td>High School History Teacher</td>
                    <td>July 25th 1960</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>
</section>
<!--main content end-->
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
		var aa={!! $ad !!};
		// var s=JSON.stringify(aa);
		// console.log(s);
		new Vue({
			el:'.table',
			data:{
				ad:aa,
			}
		})
	</script>
@endsection