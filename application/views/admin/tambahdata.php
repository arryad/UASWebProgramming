<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Data</li>
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
          <h3 class="card-title">Tambah Data Mahasiswa</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
			<div class="col-md-12">
				<?= $this->session->flashdata('message'); ?>
			</div>
			<form action="<?= base_url('Myadmin/f_tambahdata');?>" method="post">	
				<div class="col-sm-12">
					<label for="nama">npm</label> 		
					<!-- error handling pengetikan hanya khusus untuk angka karena di database bersifat interger -->

					<!-- error handling/validasi inputan max length-->
					<input type="text" class="form-control" id="npm" name="npm" minlength="8" maxlength="8" placeholder="Nomor Induk Mahasiswa" onkeypress="return hanyaAngka(event);" required>
				</div>

				<div class="col-sm-12">
					<label for="nama">nama</label>
					<input type="text" class="form-control" id="nama" name="nama" maxlength="40" placeholder="Nama Lengkap" required>
				</div>

				<div class="col-sm-12">
				<label for="semester" required>semester</label> 
				 	<select name="semester" class="form-control">
								<option value="1">Semester 1</option>
								<option value="2">Semester 2</option>			
								<option value="3">Semester 3</option>
								<option value="4">Semester 4</option>
								<option value="5">Semester 5</option>
								<option value="6">Semester 6</option>
								<option value="7">Semester 7</option>
								<option value="8">Semester 8</option>
								<option value="9">Semester 9</option>
								<option value="10">Semester 10</option>
					</select>
				
				</div>	
				<br>
				<div class="col-sm-12">
					<button type="submit" onclick="runPopup()" class="btn btn-success">Add</button>
					<button type="reset" class="btn btn-danger">Cancel</button>
				</div>	
			</form>
		</div>
        </div>
        <div class="container">
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

