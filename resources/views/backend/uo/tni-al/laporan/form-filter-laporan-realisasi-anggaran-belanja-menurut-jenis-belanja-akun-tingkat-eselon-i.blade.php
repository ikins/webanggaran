@extends('layout.backend')

@section('content')

  <!-- Full Width Column -->
  <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">

      	<div class="box box-default">
          <div class="box-header with-border text-center">
            <h3 class="box-title report-title">Laporan Realisasi Anggaran Belanja Menurut Jenis Belanja Akun Tingkat Eselon I</h3><br>
            <h3 class="box-title report-title">Barang Dan Jasa</h3><br>
            <h3 class="box-title report-title">{{Session::get('status_user')}}</h3><br>
            <h3 class="box-title report-title">KEMENTERIAN PERTAHANAN REPUBLIK INDONESIA</h3><br>
          </div>
          <div class="box-body">
          	<div class="row">
		        <div class="col-md-6 col-md-offset-3">
		            <div class="box-body margin-bottom-50 margin-top-10 box-form-rounded">

		            	<!-- form start -->
			            <form class="form-horizontal" method="post" action="laporan-realisasi-anggaran-belanja-menurut-jenis-belanja-akun-tingkat-eselon-i">
			              {{ csrf_field() }}
			              <div class="box-body">

			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Periode</label>

			                  <div class="col-sm-4">
			                    <select class="form-control">
			                    	<option>--Pilih Bulan--</option>
			                    	<option>Januari</option>
			                    	<option>Februari</option>
			                    	<option>Maret</option>
			                    	<option>April</option>
			                    	<option>Mei</option>
			                    	<option>Juni</option>
			                    	<option>Juli</option>
			                    	<option>Agustus</option>
			                    	<option>September</option>
			                    	<option>Oktober</option>
			                    	<option>November</option>
			                    	<option>Desember</option>
			                    </select>
			                  </div>
			                  <div class="col-sm-4">
			                    <input type="text" class="form-control" id="inputEmail3">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Sampai Dengan</label>

			                  <div class="col-sm-4">
			                    <select class="form-control">
			                    	<option>--Pilih Bulan--</option>
			                    </select>
			                  </div>
			                  <div class="col-sm-4">
			                    <input type="text" class="form-control" id="inputEmail3">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Kotama</label>
			                  <div class="col-sm-9">
			                    <select class="form-control">
			                    	<option>--Pilih Kotama--</option>
			                    </select>
			                  </div>
			                </div>

			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Satuan Kerja</label>

			                  <div class="col-sm-9">
			                    <select class="form-control">
			                    	<option>--Pilih Satuan Kerja--</option>
			                    </select>
			                  </div>
			                </div>
			              </div>
			              <!-- /.box-body -->
			              <div class="box-footer">
			                <button type="submit" class="btn btn-info pull-right"><i class="fa fa-list"></i> Tampilkan</button>
			              </div>
			              <!-- /.box-footer -->
			            </form>
		              
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>
		        
		      </div>

          </div>
          <!-- /.box-body -->
        </div>


      </section>

  </div>

 @endsection