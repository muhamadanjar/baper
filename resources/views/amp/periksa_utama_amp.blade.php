@extends('app_backend')
@section('content')
<div class="panel panel-default">
		        <div class="panel-heading">
			        <h6 class="panel-title"><i class="icon-coin"></i> PEMERIKSAAN TAHAP I </h6>
                	
		        </div>
				<div class="panel-body">
					<div class="row">
                    	<div class="col-sm-6">
                        <h6>Unit Yang Diperiksa :</h6>
                        	<ul>
								<li><a href="{{ url('amp/pemeriksa/unitbindingin') }}">Unit Bin Dingin Atau Cold Bin</a></li>
								<li>Unit Ban Berjalan Agregat Dingin Atau Cold Conveyor</li>
								<li><a href="#">Unit Pengering Atau Dryer</a></li>
								<li>Unit Pemanas Atau Burner</li>
								<li>Unit Pengumpul Debu Atau Dust Collector		</li>
								<li>Unit Elevator Panas Atau Hot Elevator</li>
								<li>Unit Saringan Bergetar Atau Screen	</li>
                                <li>Unit Bin Panas Atau Hot Bin</li>
                                <li>Unit Timbangan (Weight Bin) Agregat Panas dan Filler</li>
                                <li>Unit Pencampur Atau Pugmill (Mixer)</li>
                                <li>Unit Pemasok Aspal</li>
                                <li>Unit Pemasok Filler	</li>
                                <li>Unit Tenaga Penggerak</li>
                                <li>Bin Filler</li>
                                <li>Unit Elevator / Conveyor Campuran Aspal Panas</li>
                                <li>Silo (Bin) Penampung Campuran Aspal Panas	</li>
                            </ul>
                        </div>
						
					</div>

				</div>
		
</div>

@stop