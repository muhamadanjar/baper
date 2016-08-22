@extends('app_backend')
@section('page_header')
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Pemeriksaan AMP Tahap I</h3>
                </div>
                <div id="reportrange" class="range">
                    <div class="visible-xs header-element-toggle">
                        <a class="btn btn-primary btn-icon"><i class="icon-calendar"></i></a>
                    </div>
                    <div class="date-range"></div>
                    <span class="label label-danger">9</span>
                </div>
            </div>
            <!-- /page header -->
@endsection
@section('breadcrumb')
            <!-- Breadcrumbs line -->
            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="forms.html">Forms</a></li>
                    <li class="active">Pemeriksaan AMP Tahap I</li>
                </ul>

                <div class="visible-xs breadcrumb-toggle">
                    <a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
                </div>


            </div>
            
            <!-- /breadcrumbs line -->
@endsection
@section('content')
			<form class="form-horizontal form-bordered" method="post" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<h6 class="panel-title"><i class="icon-menu"></i>Data Pemohon</h6>
	                	<a href="{{ url('jadwal/jadwal_pemeriksaan/index') }}" class="pull-right btn btn-xs btn-primary"><i class="icon-undo2"></i></a>
	                </div>
	                <div class="panel-body">
										
				        <div class="form-group">
							<label class="col-sm-2 control-label">Pemilik:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="kode_perusahaan" value="{{ $datpermohonan->kode_perusahaan }}">
				            </div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Lokasi:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="alamat" value="{{ $datpermohonan->lokasi }}">
				            </div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Merk/Tipe:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="merk" value="{{ $datpermohonan->merk }}">
				            </div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Tahun Pembuatan:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="tahun_pembuatan" value="{{ $datpermohonan->tahun_buat }}">
				            </div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal Pemeriksaan:</label>
				            <div class="col-sm-10">
				            	<input type="text" class="form-control" name="tanggal_pemeriksaan" value="{{ $datpermohonan->tanggal_rencana }}">
				            </div>
						</div>
						
				    </div>
				
			
					<div class="panel-heading">
						<h6 class="panel-title"><i class="icon-coin"></i>Unit Yang Diperiksa </h6>
                	</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
						  
								<ul class="nav nav-sidebar">
									<li><a href="{{ url('amp/pemeriksaan1/unitbindingin') }}">1. Unit Bin Dingin Atau Cold Bin</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitbanberjalan') }}">2. Unit Ban Berjalan Agregat Dingin Atau Cold Conveyor</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitpengering') }}">3. Unit Pengering Atau Dryer</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitpemanas') }}">4. Unit Pemanas Atau Burner</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitpengumpuldebu') }}">5. Unit Pengumpul Debu Atau Dust Collector</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitelevatorpanas') }}">6. Unit Elevator Panas Atau Hot Elevator</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitsaringanbergetar') }}">7. Unit Saringan Bergetar Atau Screen</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitbinpanas') }}">8. Unit Bin Panas Atau Hot Bin</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unittimbangan') }}">9. Unit Timbangan (Weight Bin) Agregat Panas dan Filler</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitpencampur') }}">10 Unit Pencampur Atau Pugmill (Mixer)</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitpemasokaspal') }}">11. Unit Pemasok Aspal</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitpemasokfiller') }}">12. Unit Pemasok Filler</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unittenagapenggerak') }}">13. Unit Tenaga Penggerak</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitbinfiller') }}">14. Unit Bin Filler</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitelevator') }}">15. Unit Elevator / Conveyor Campuran Aspal Panas </a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitsilo') }}">16. Unit Silo</a></li>
									<li><a href="{{ url('amp/pemeriksaan1/unitrekap') }}">Rekapitulasi Pemeriksaan Tahap I</a></li>
								</ul>
							</div>
							
						</div>

					</div>
		
					<div class="form-actions text-right">
						<input type="submit" value="Simpan" class="btn btn-primary">
						<a href="{{ url('amp/pemeriksaan1/unitbindingin') }}" class="btn btn-info">Lanjut</a>
                    </div>
				</div>
			</form>

@stop