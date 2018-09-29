<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
				Add Student Info
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right" action="" method="post" enctype="multipart/form-data">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label for="example-text-input" class="col-2 col-form-label">
					Admin Name
				</label>
				<div class="col-10">
					<input class="form-control m-input" name="admin_name" type="text" value="Artisanal kale" id="example-text-input">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label for="example-text-input" class="col-2 col-form-label">
					Admin Email
				</label>
				<div class="col-10">
					<input class="form-control m-input" name="admin_email" type="text" value="Artisanal kale" id="example-text-input">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label for="example-tel-input" class="col-2 col-form-label">
					Admin Password
				</label>
				<div class="col-10">
					<input class="form-control m-input" name="admin_password" type="password" id="example-pass-input">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label for="example-text-input" class="col-2 col-form-label">
					Admin Image
				</label>
				<div class="col-10">
					<input class="form-control m-input" name="student_name" type="file" value="Artisanal kale" id="example-text-input">
				</div>
			</div>
			
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-10">
						<button type="reset" class="btn btn-success">
						Update
						</button>
						<button type="reset" class="btn btn-secondary">
						Cancel
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<!--end::Portlet-->