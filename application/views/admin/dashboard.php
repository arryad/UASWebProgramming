<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <form action="<?= base_url('Myadmin/tambahdata'); ?>" method="post">
    	<button type="submit" class="btn btn-primary">tambah data</button>
    </form>

	<div class="table-responsive">
		<table class="table table-hover" id="tableData">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Semester</th>
				</tr>
			</thead>
			<tbody>
				<?php for ($i=1; $i <= 50; $i++){
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td>Siapa</td>
					<td>1</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>