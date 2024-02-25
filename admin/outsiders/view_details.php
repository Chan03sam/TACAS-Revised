
<?php
require_once('../../config.php');
if (isset($_GET['id'])) {
    $outsider_id = $_GET['id'];
    $qry = $conn->query("SELECT s.*,CONCAT(lastname,', ',firstname,' ',middlename) as fullname FROM outsiders_list s where s.id ='{$outsider_id}'");
    if ($qry->num_rows > 0) {
        $res = $qry->fetch_array();
        foreach ($res as $k => $v) {
            if (!is_numeric($k))
                $$k = $v;
        }
    }
}
?>
<style>
	#uni_modal .modal-footer{
		display:none
	}
	.student-img{
		object-fit:scale-down;
		object-position:center center;
	}
</style>
<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-6">
				<center>
					<img src="<?= validate_image($avatar) ?>" alt="Student Image" class="img-fluid student-img bg-gradient-dark border">
				</center>
			</div>
			<div class="col-6">
				<dl>
					<dt class="text-navy">Student Name:</dt>
					<dd class="pl-4"><?= ucwords($fullname) ?></dd>
					<dt class="text-navy">User Type:</dt>
					<dd class="pl-4"><?= ucwords($user_type) ?></dd>
					<dt class="text-navy">Gender:</dt>
					<dd class="pl-4"><?= ucwords($gender) ?></dd>
					<dt class="text-navy">Email:</dt>
					<dd class="pl-4"><?= $email ?></dd>
					<dt class="text-navy">System Account Status:</dt>
					<dd class="pl-4">
						<?php if($status == 1): ?>
							<span class="badge badge-pill badge-success">Verified</span>
						<?php else: ?>
						<span class="badge badge-pill badge-primary">Not Verified</span>
						<?php endif; ?>
					</dd>
				</dl>
			</div>
		</div>
		<div class="row">
			<div class="col-12 text-right">
				<button class="btn btn-dark btn-flat btn-sm" data-dismiss="modal" type="button"><i class="fa fa-times"></i> Close</button>
			</div>
		</div>
	</div>
</div>