@extends('admin.layouts.master')

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Bảng điều khiển
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Bảng điều khiển</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{$quantityPosts}}</h3>

						<p>Bài viết</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-eye"></i>
					</div>
					<a href="/admin/posts" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>{{$quantityCategories}}</h3>

						<p>Danh mục</p>
					</div>
					<div class="icon">
						<i class="ion ion-star"></i>
					</div>
					<a href="/admin/categories" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>{{$quantityUsers}}</h3>

						<p>Người dùng</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-add"></i>
					</div>
					<a href="/admin/users" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3>{{$quantityTags}}</h3>

						<p>Tag</p>
					</div>
					<div class="icon">
						<i class="icon ion-pricetags"></i>	
					</div>
					<a href="/admin/tags" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>


			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-red">
					<div class="inner">
						<h3>Top 5</h3>

						<p>bài viết</p>
					</div>
					<div class="icon">
						<i class="icon ion-arrow-graph-up-left"></i>
					</div>
					<a type="button"  data-toggle="modal" data-target="#exampleModal" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
					
				</div>
			</div>
						<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{$read}}</h3>

						<p>Lượt đọc bài viết</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios-eye"></i>
					</div>
					
				</div>
			</div>
			<!-- ./col -->
		</div>
		<!-- /.row -->

	</section>
	<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="icon ion-trophy" style="color: yellow;"></i> Top 5 bài viết được xem nhiều nhất</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Lượt xem</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($topPosts as $key => $value)
  	<p style="display: none">{{$i++}}</p>
  	@if($i<6)
    <tr>
      <th scope="row">{{$i}}</th>
      <td>{{$key}}</td>
      <td>{{$value}}</td>
      
    </tr>
    @endif
    @endforeach
  </tbody>
</table>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        
      </div>
    </div>
  </div>
</div>
	
	<!-- /.content -->
</div>
@endsection