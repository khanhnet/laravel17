@extends('admin.layouts.master')

@section('header')
<style type="text/css">
	.error {
		color: red;
	}
	.multi-item {
		background-color: #ffcf83 !important;
	}
	.magicsearch-wrapper .multi-item-close:before, .magicsearch-wrapper .multi-item-close:after {
		background-color: #ff9c00 !important;
	}
</style>
@endsection 

@section('content')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Bảng dữ liệu
			<small>Bảng nâng cao</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
			<li><a href="#">Quản lý bài viết</a></li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Bảng dữ liệu với các tính năng đầy đủ</h3>
					</div>
					<div>
						<button data-url="{{route('posts.create')}}" class="btn btn-primary" id="btn-add" style="margin-left: 20px">Thêm mới</button>
					</div>
					<!-- /.box-header -->
					<div class="box-body ">
						<table id="posts-table"  class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>STT</th>
									<th>Tiêu đề </th>
									<th>Hình ảnh</th>
									<th>Mô tả</th>
									<th>Chức năng</th>
								</tr>
							</thead>
						</table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
</div>

@include('admin.posts.create')
@include('admin.posts.edit')
@include('admin.posts.show')


@endsection

@section('footer')
<script type="text/javascript" src="{{ asset('admin_assets/js/custom_post.js') }}"></script>
@endsection