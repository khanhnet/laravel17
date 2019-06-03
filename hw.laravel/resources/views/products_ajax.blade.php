<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Product</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
	<div class="container">
		<legend><h1>PRODUCT-AJAX</h1></legend>
		<button type="button"  class="btn btn-success btn-add">Add</button>
		<div class="table-responsive">
			<table class="table table-hover" >
				<thead>
					<tr>
						<th>id</th>
						<th>CODE</th>
						<th>NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					{{-- biến $products được controller trả cho view
						chứa dữ liệu tất cả các bản ghi trong bảng products. Dùng foreach để hiển
						thị từng bản ghi ra table này. --}}

						@foreach ($products as $product)
						<tr id="row_id_{{$product->id}}">
							<td>{{$product->id}}</td>
							<td>{{$product->CODE}}</td>
							<td>{{$product->NAME}}</td>
							<td>{{$product->PRICE}}</td>
							<td>{{$product->QUANTITY}}</td>
							<td>
								<button type="button"  class="btn btn-primary btn-show" data-url="{{ route('products-ajax.show',$product->id) }}"​>Detail</button>
								<button type="button"  class="btn btn-warning btn-edit" data-url="{{ route('products-ajax.edit',$product->id) }}"​ >Edit</button>

								<button type="button" data-url="{{ route('products-ajax.destroy',$product->id) }}"​ class="btn btn-danger btn-delete">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		{{-- Modal show chi tiết product --}}
		<div class="modal fade" id="modal-show">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Show product</h4>
					</div>
					<div class="modal-body" style="text-align: center;">
						<h2>Product:</h2>
						<h3>Code:<span id="product-code"></span></h3>
						<h3>Name:<span id="product-name"></span></h3>
						<h3>Price:<span id="product-price"></span></h3>
						<h3>Quantity:<span id="product-quantity"></span></h3>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		{{-- Modal thêm mới product --}}
		<div class="modal fade" id="modal-add">
			<div class="modal-dialog">
				<div class="modal-content">

					<form action="" data-url="{{ route('products-ajax.store') }}" id="form-add" method="POST" role="form">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Add product</h4>
						</div>
						<div class="modal-body">

							<div class="form-group">
								<label for="">Code</label>
								<input type="text" class="form-control" id="product-add-code" placeholder="Code">
							</div>
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="product-add-name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="">Price</label>
								<input type="text" class="form-control" id="product-add-price" placeholder="Price">
							</div>
							<div class="form-group">
								<label for="">Quantity</label>
								<input type="text" class="form-control" id="product-add-quantity" placeholder="Quantity">
							</div>



						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		{{-- Modal sửa product --}}
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">

			<form action="" id="form-edit" method="POST" role="form">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit product</h4>
			</div>
			<div class="modal-body">
				
					<div class="form-group">
								<label for="">Code</label>
								<input type="text" class="form-control" id="product-edit-code" placeholder="Code">
							</div>
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="product-edit-name" placeholder="Name">
							</div>
							<div class="form-group">
								<label for="">Price</label>
								<input type="text" class="form-control" id="product-edit-price" placeholder="Price">
							</div>
							<div class="form-group">
								<label for="">Quantity</label>
								<input type="text" class="form-control" id="product-edit-quantity" placeholder="Quantity">
							</div>

				
					
				
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Edit</button>
				
			</div>
			</form>
		</div>
	</div>
</div>
	</div>
</body>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript" charset="utf-8">
	$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

	$(document).ready(function () {
     //code ajax ta sẽ viết ở đây
	 //bắt sự kiện click vào nút show
	 $('.btn-show').click(function () {
	//hiện modal show lên
	$('#modal-show').modal('show');
	//lấy dữ liệu từ attribute data-url lưu vào biến url
	var url=$(this).attr('data-url');
	console.log(url);
	$.ajax({
		//sử dụng phương thức get
		type: 'get',
		url: url,
		//nếu thực hiện thành công thì chạy vào success
		success: function (response) {
			//hiển thị dữ liệu được controller trả về vào trong modal
			$('#product-code').text(response.data.CODE);
			$('#product-name').text(response.data.NAME);
			$('#product-price').text(response.data.PRICE);
			$('#product-quantity').text(response.data.QUANTITY);
		},
		error: function (jqXHR, textStatus, errorThrown) {
			//xử lý lỗi tại đây
		}
	})
})
	})

		//bắt sự kiện click vào nút add
		$('.btn-add').click(function (e) {
			
			e.preventDefault();
	//hiện modal show
	$('#modal-add').modal('show');
})

//bắt sự kiện submit form thêm mới
$('#form-add').submit(function (e) {
	e.preventDefault();
	//lấy attribute data-url của form lưu vào biến url
	var url=$(this).attr('data-url');
	$.ajax({
		//sử dụng phương thức post
		type: 'post',
		url: url,
		data: {
			//lấy dữ liệu từ ô input trong form thêm mới
			CODE:$('#product-add-code').val(),
			 NAME:$('#product-add-name').val(),
			 PRICE:$('#product-add-price').val(),
			 QUANTITY:$('#product-add-quantity').val(),
		},
		success: function (response) {
			// hiện thông báo thêm mới thành công bằng toastr
			toastr.success('Add new product success!')
			//ẩn modal add đi
			$('#modal-add').modal('hide');
			
			setTimeout(function () {
				window.location.href="{{ route('products-ajax.index') }}";
			},800);
		},
		error: function (jqXHR, textStatus, errorThrown) {
			//xử lý lỗi tại đây
		}
	})
})
$('.btn-delete').click(function () {
	//lấy attribute data-url của nút xoá lưu vào url
	var url=$(this).attr('data-url');
	//hiển thị dialogbox xác nhận xoá
	if (confirm("Are you sure?")){
		$.ajax({
			//phương thức delete
			type: 'delete',
			url: url,
			success: function (response) {
				console.log(response);
				console.log(url);
				//thông báo xoá thành công bằng toastr
				toastr.warning('delete product success!');
				setTimeout(function () {
					window.location.href="{{ route('products-ajax.index') }}";
				},800);
			},
			error: function (error) {
				
			}
		})
	}
})

//bắt sự kiện click vào nút edit
$('.btn-edit').click(function (e) {
	//mở modal edit lên
	$('#modal-edit').modal('show');
	e.preventDefault();
	//lấy data-url của nút edit
	var url=$(this).attr('data-url');
	$.ajax({
		//phương thức get
		type: 'get',
		url: url,
		success: function (response) {
			
			//đưa dữ liệu controller gửi về điền vào input trong form edit.
			$('#product-edit-code').val(response.data.CODE);
			$('#product-edit-name').val(response.data.NAME);
			$('#product-edit-price').val(response.data.PRICE);
			$('#product-edit-quantity').val(response.data.QUANTITY);
			//thêm data-url chứa route sửa product đã được chỉ định vào form sửa.
			$('#form-edit').attr('data-url','{{ asset('products-ajax/') }}/'+response.data.id)
		},
		error: function (error) {
			
		}
	})
})

//bắt sự kiện submit form edit
$('#form-edit').submit(function (e) {
	e.preventDefault();
	//lấy data-url của form edit
	var url=$(this).attr('data-url');
	$.ajax({
		//phương thức put
		type: 'put',
		url: url,

		//lấy dữ liệu trong form
		data: {
			CODE:$('#product-edit-code').val(),
			NAME:$('#product-edit-name').val(),
			PRICE:$('#product-edit-price').val(),
			QUANTITY:$('#product-edit-quantity').val(),

		},

		success: function (response) {


			console.log(response);
			console.log(url);
			//thông báo update thành công
			//toastr.success('edit product success!')
			//ẩn modal edit
			$('#modal-edit').modal('hide');
			
			setTimeout(function () {
				window.location.href="{{ route('products-ajax.index') }}";
			},800);
		},
		error: function (jqXHR, textStatus, errorThrown) {
			//xử lý lỗi tại đây
		}
	})
})

</script>
</html>