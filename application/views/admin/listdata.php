<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        
              <?= $this->session->flashdata('message'); ?>
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">List Data</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Data Mahasiswa</h3>
        </div>
        <div class="card-body">
        	<div class="panel panel-default">
				<div class="panel-body">	
					<table style="margin:20px auto;" class="table">
						<tbody>
							<tr>
								<td>No</td>
								<td>Npm</td>
								<td>Nama</td>
								<td>Semester</td>
								<td>Aksi</td>
							</tr>
							<?php		
							$no = 1;
							foreach($user as $u){
							?>
							<tr>
								<td><?= $no++ ?></td>
								<td><?= $u->npm ?></td>
								<td><?= $u->nama ?></td>
								<td><?= $u->semester ?></td>
								<td>
									<?= anchor('Myadmin/editdata/'.$u->id,'<i class="nav-icon fas fa-edit" aria-hidden="true"></i>');?>
									<!-- error handling untuk membuat confirmasi dialog pada sebuah button delete -->
									<?= anchor('Myadmin/hapusdata/'.$u->id,'<i class="fa fa-trash"> </span>', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>
								</td>
							</tr>
							<?php	
								}			
							?>
						</tbody>
					</table>		
				</div>
			</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Sekolah Tinggi Teknologi Bandung
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Developed by Azhar Ryad using template <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>