<div class="m-portlet m-portlet--mobile">
	<div class="m-portlet__head">
		<div class="m-portlet__head-caption">
			<div class="m-portlet__head-title">
				<h3 class="m-portlet__head-text">
				All Student List
				</h3>
				<?php
					$message = $this->session->userdata('save_student_msg');
					if($message){
						echo '<div role="alert" class="alert alert-dismissible fade show">
								<button aria-label="Close" data-dismiss="alert" class="close" type="button"></button>
								<span class="m--font-success"> Student Inserted </span>
								
																	</div>
						';
						$this->session->unset_userdata('save_student_msg');
					}
										
				?>
				<?php
					$message = $this->session->userdata('update_student_msg');
					if($message){
						echo '<div role="alert" class="alert alert-dismissible fade show">
								<button aria-label="Close" data-dismiss="alert" class="close" type="button"></button>
								<span class="m--font-success"> Student Info Updated </span>
								
																	</div>
						';
						$this->session->unset_userdata('update_student_msg');
										}
				?>
			</div>
		</div>
	</div>
	<div class="m-portlet__body">
		<!--begin: Datatable -->
		<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
			<thead>
				<tr>
					<th>
						ID
					</th>
					<th>
						Student Roll
					</th>
					<th>
						Student Name
					</th>
					<th>
						Student Phone
					</th>
					<th>
						Action
					</th>
				</tr>
				<?php
				$sl = 1;
				foreach ($all_student_list as $single_student_info){
				?>
				<tr>
					<td><?php echo $sl++?></td>
					<td><?php echo $single_student_info->student_roll ?></td>
					<td><?php echo $single_student_info->student_name ?></td>
					<td><?php echo $single_student_info->student_phone ?></td>
					<td><a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View" href="#">
						<i class="fa-eye"></i>
					</a>
					<a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit" href="<?php echo base_url() ?>edit_student/<?php echo $single_student_info->id ?>">
						<i class="la la-edit"></i>
					</a>
					<a class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" id="delete" title="Delet" href="<?php echo base_url() ?>delet_student/<?php echo $single_student_info->id ?>">
						<i class="fa-remove"></i>
					</a></td>
				</tr>
				<?php } ?>
			</thead>
		</table>
	</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->