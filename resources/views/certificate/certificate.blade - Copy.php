
<link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/londinium-theme.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/styles.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css">
<style type="text/css">
	.center, .center img
	{
		text-align:center !important;	
	}
	.center img
	{
		padding-top:20px;
		padding-bottom:20px;
		
		margin-left:45%;	
	}
	.h-jarang
	{
		letter-spacing:10px;
		line-height:10px;
		padding-top:10px;
	}
</style> 
<div class="table-responsive">
<div class="row">
	<div class="col-md-12 images center">
		<img class="img img-responsive" width="130" src="{{ url('images/logo_pu.jpg') }}"/>
    </div>
    <div class="col-md-12 center">
    	<h1 class="h-jarang">DEPARTEMEN PEKERJAAN UMUM</h1>
        <h1 class="h-jarang">DIRAKTORAT JENDERAL BINAMARGA</h1>
        <h1 class="h-jarang">DIRAKTORAT BINA TEKNIK</h1>
    </div>
    
    <div class="col-md-12 center">
    	
        
        <h4><strong>SERTIFIKAT</strong></h4>
        <h4><strong>KELAIKAN OPERASI</strong></h4>
        
        
    </div>
    
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-2">
    	<p>Setelah Membaca dan mempelajari usullan /Permohonan Kerua Tim Pemeriksaan Kelaikan Operasi Peralatan Perihal Usulan Penerbitan Sertfikat kelaikan operasi peralatan di bawah ini :</p>
        
        
    </div>
    <div class="col-md-offset-3">
    	<ul>
        	
			<li>Jenis Peralatan : @if(isset($data['permohonan']['id'])) {{$data['permohonan']['jenis_peralatan']}} @endif </li>
			<li>Merk/Tipe :  @if(isset($data['amp']->kode_amp)) {{$data['amp']->merk}} @endif </li>
			<li>Kapasitas :  @if(isset($data['amp']->kapasitas)) {{$data['amp']->kapasitas}} @endif </li>
            <li>Tahun Pembuatan : @if(isset($data['amp']->tahun_buat)) {{$data['amp']->tahun_buat}} @endif </li>
            <li>Nomor Identitas : @if(isset($data['permohonan']['no_permohonan'])) {{$data['permohonan']['no_permohonan']}} @endif </li>
            <li>Lokasi : @if(isset($data['amp']->lokasi)) {{$data['amp']->lokasi}} @endif </li>
            <li>Pemilik : @if(isset($data['permohonan']['nama_pemohon'])) {{$data['permohonan']['nama_pemohon']}} @endif </li>
		</ul>
    </div>
		
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        Dengan ini blaballbalbal blaballbalbalblaballbalbalblaballbalbalblaballbalbalblaballbalbal blaballbalbal blaballbalbal blaballbalbal
    </div>
</div>

<div class="row">
    <div class="col-md-5 col-md-offset-2">
    	<table fixed-header="" class="table">                               
			<tbody>
                 <tr>
					<td>Mengetahui dan Menetujui,</td>
                    <td></td>
                    <td></td>
                 </tr>
                 <tr>
					<td><strong>Direktorat Jenderal Bina Teknik<br>
                    Selaku Tim Pengarah</strong><br>
                   (..........................)<br>
                   <b>NIP</b>
                    </td>
                    <td></td>
                    <td></td>
                 </tr>
		</tbody></table>       
    </div>
    
    <div class="col-md-5">
    	<table fixed-header="" class="table">                               
			<tbody>
                 <tr>
					<td><strong>Ditetapkan di :</strong> ..................
                    
                    </td>
                   
                 </tr>
                 <tr>
					<td><strong>Pada Tanggal :</strong> ..................</td>
                
                 </tr>
                 <tr>
					<td><strong>Kepala Balai :</strong> ..................</td>
                
                 </tr>
                 <tr>
                 <td>
                 (..........................)<br>
                   NIP
                   </td>
                 </tr>
		</tbody></table>
    </div>
   
</div>
                            
</div>
