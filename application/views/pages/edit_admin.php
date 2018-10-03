<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<span class="m-portlet__head-icon m--hide">
					<i class="la la-gear"></i>
				</span>
				<h3 class="m-portlet__head-text">
				Edit Admin Info
				</h3>
			</div>
		</div>
	</div>
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right" action="<?php echo base_url() ?>update_admin" method="post" enctype="multipart/form-data">
		<div class="m-portlet__body">
			<div class="form-group m-form__group row">
				<label for="example-text-input" class="col-2 col-form-label">
					Admin Name					

				</label>
				<div class="col-10">
					<input class="form-control m-input" name="admin_name" type="text" value="<?php echo $admin_info_by_id->admin_name; ?>" id="example-text-input">
					<input class="form-control m-input" required="1" value="<?php echo $admin_info_by_id->id; ?>" name="id" type="hidden" id="example-text-input">
				</div>
			</div>
			<div class="form-group m-form__group row">
				<label for="example-text-input" class="col-2 col-form-label">
					Admin Email
				</label>
				<div class="col-10">
					<input class="form-control m-input" name="admin_email" type="text" value="<?php echo $admin_info_by_id->admin_email; ?>" id="example-text-input">
				</div>
			</div>			
			<div class="form-group m-form__group row">
				<label for="example-text-input" class="col-2 col-form-label">
					Admin Image
				</label>
				<div class="col-10">
					<img src="<?php echo base_url() ?>/uploads/admin/<?php echo $admin_info_by_id->admin_image; ?>" alt="placeholder+image">
					<input class="form-control m-input" name="admin_image" type="file" value="" id="example-text-input">
				</div>
			</div>
			
		</div>
		<div class="m-portlet__foot m-portlet__foot--fit">
			<div class="m-form__actions">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-10">
						<button type="submit" class="btn btn-success">
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