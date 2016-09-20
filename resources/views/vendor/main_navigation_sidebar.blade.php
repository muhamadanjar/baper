				<!-- Main navigation -->
				<ul class="navigation">
					<li><a href="{{ url('home') }}"><span>Beranda</span> <i class="icon-screen2"></i></a></li>
					<li>
						<a href="#"><span>Master</span> <i class="icon-paragraph-justify2"></i></a>
						<ul>
							<li><a href="#">Wilayah</a>
								<ul>
									<li><a href="{{ url('master/provinsi/index') }}">Provinsi</a></li>
									<li><a href="{{ url('master/kabupaten/index') }}">Kabupaten</a></li>
								</ul>
							</li>
							<li><a href="{{ url('master/perusahaan/index') }}">Perusahaan</a></li>
							<li><a href="{{ url('master/amp/index') }}">AMP</a></li>
							<li><a href="{{ url('master/bp/index') }}">BP</a></li>
							<li><a href="{{ url('master/quary/index') }}">Quary</a></li>
						</ul>
					</li>
					<li>
						<a href="{{ url('permohonan/permohonan/index') }}"><span>Permohonan Pemeriksaan</span> <i class="icon-grid"></i></a>
					</li>
					<li>
						<a href="{{ url('jadwal/jadwal_expose/datahasil') }}"><span>Expose</span> <i class="icon-grid"></i></a>
					</li>
					<li>
						<a href="{{ url('jadwal/jadwal_pemeriksaan/index') }}"><span>Jadwal Pemeriksaan</span> <i class="icon-grid"></i></a>
					</li>
					<li>
						<a href="#"><span>Pemeriksaan</span> <i class="icon-numbered-list"></i></a>
						<ul>
							<li><a href="{{ url('amp/listpemeriksaanamp/index') }}"><span>AMP</span></a></li>
							<li><a href="{{ url('bp/listpemeriksaanbp/index') }}"><span>BP</span></a></li>
							
							<li><a href="#">Quary</a></li>
						</ul>
					</li>
					<li>
						<a href="{{ url('certificate') }}"><span>Penerbitan Sertifikat</span> <i class="icon-user"></i></a>
					</li>
					<li>
						<a href="#"><span>Kebijakan</span> <i class="icon-bubble6"></i></a>
					</li>
					<li>
						<a href="#"><span>Pengaturan</span> <i class="icon-table2"></i></a>
						
					</li>
				</ul>
				<!-- /main navigation -->