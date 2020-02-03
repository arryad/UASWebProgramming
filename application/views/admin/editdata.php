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
          <h3 class="card-title">Edit Data Mahasiswa</h3>
        </div>
        <div class="card-body">
          <div class="container">
	<div class="panel panel-default">
		<div class="panel-body">			
			<div class="form-group">
				
				<form action="<?= base_url('Myadmin/f_editdata');?>" method="post">
					<?php 
						if(!empty($user)){
				 	?>
					<?php foreach($user as $u){ ?>		
					<input name="id" maxlength="12" value="<?= $u->id; ?>" hidden>					
					<div class="col-sm-12">
						<label for="nama">npm</label> 	
						
						<input type="test" name="npm" class="form-control" maxlength="8" placeholder="Nomor Induk Mahasiswa" value="<?= $u->npm; ?>" readonly><br>
					</div>

					<div class="col-sm-12">
						<label for="nama">nama</label> 		
						<input type="text" name="nama" maxlength="40" class="form-control" placeholder="Nama Lengkap" value="<?= $u->nama;?>"><br>
					</div>

					<div class="col-sm-12">
					<label for="semester">semester</label> 	
					<select name="semester" class="form-control" value="<?= $u->semester;?>">                
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
								</select><br>
					</div>
					<div class="col-sm-6">
						<button type="submit" onclick="runPopup()" class="btn btn-success">Submit</button>
						<button type="cancel" class="btn btn-danger">Cancel</button>
					</div>
					<?php } ?>
				<?php } else{
					// redirect ('Myadmin/error');
					echo "Data Kosong! <center>";
				}
				?>
				</form>
			</div>
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



