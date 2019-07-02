<div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="z-index: 2000">
	<div class="modal-dialog modal-lg" role="document" style="max-width: 80%">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" align="center" id="exampleModalCenterTitle">Thêm mới người dùng</h3>
			</div>
			<div class="modal-body" style="padding: 20px 100px">
				<form action="" method="POST" role="form" id="form-add">
					<div class="form-group">
						<label for="">Tên <span class="error">*</span></label>
						<input type="text" class="form-control"  name="name" placeholder="Tên">
						<p class="error" id="add-name-error"></p>
					</div>
					<div class="form-group">
						<label for="">Email <span class="error">*</span></label>
						<input type="email" class="form-control"  name="email" placeholder="Email">
						<p class="error" id="add-email-error"></p>
					</div>
					<div class="form-group">
						<label for="">Mật khẩu <span class="error">*</span></label>
						<input type="password" class="form-control"  name="password" placeholder="Mật khẩu">
						<p class="error" id="add-password-error"></p>
					</div>
					<img src="http://ultimatekitpvpserver.weebly.com/uploads/8/9/1/1/89117056/none-flowers_orig.jpg" style="width: 400px;height: 300px;" class="testthumbnail" alt="avatar">
					<div class="form-group">
						<label for="">Ảnh <span class="error">*</span></label>
						<input type="file" class="form-control file-upload" name="thumbnail" placeholder="Nội dung">
						<p class="error" id="add-thumbnail-error"></p>
					</div>
					<button type="submit" class="btn btn-primary" style="margin: auto;">Lưu</button>
				</form>
			</div>
		</div>
	</div>
</div>