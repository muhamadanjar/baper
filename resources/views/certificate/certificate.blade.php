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
<table border="0" width="100%">
	<tr>
    	<td width="1000" align="center"><img class="img img-responsive" width="130" src="{{ url('images/logo_pu.jpg') }}"/></td>
    </tr>
    
</table>
<table border="0" width="100%">
	<tr>
    	<td width="1000" align="center"><h2 class="h-jarang"><strong>DEPARTEMEN PEKERJAAN UMUM</strong></h2></td>
    </tr>
    <tr>
    	<td width="1000" align="center"><h3 class="h-jarang"><strong>DIRAKTORAT JENDERAL BINAMARGA</strong></h3></td>
    </tr>
    <tr>
    	<td width="1000" align="center"><h3 class="h-jarang"><strong>DIRAKTORAT BINA TEKNIK</strong></h3></td>
    </tr>
     <tr>
    	<td width="1000" align="center"><h4><strong>SERTIFIKAT</strong></h4></td>
    </tr>
     <tr>
    	<td width="1000" align="center"><h4><strong>KELAIKAN OPERASI</strong></h4></td>
    </tr>
</table>
<table border="0" width="100%">
	<tr>
    	<td><p>Setelah Membaca dan mempelajari usullan /Permohonan Kerua Tim Pemeriksaan Kelaikan Operasi Peralatan Perihal Usulan Penerbitan Sertfikat kelaikan operasi peralatan di bawah ini :</p></td>
    </tr>
</table>

<table border="0" width="100%" >
	<tr>
    	<td style="margin-left:15%;">Jenis Peralatan  </td>
        <td>:</td>
        <td style="margin-left:15%;">@if(isset($data['permohonan']['id'])) {{$data['permohonan']['jenis_peralatan']}} @endif</td>
    </tr>
	<tr>
    	<td style="margin-left:15%;">Merk/Tipe </td>
        <td>:</td>
        <td style="margin-left:15%;">@if(isset($data['amp']->kode_amp)) {{$data['amp']->merk}} @endif</td>
    </tr>
	<tr>
    	<td style="margin-left:15%;">Kapasitas  </td>
        <td>:</td>
        <td style="margin-left:15%;">@if(isset($data['amp']->kapasitas)) {{$data['amp']->kapasitas}} @endif</td>
    </tr>
	<tr>
    	<td style="margin-left:15%;">Tahun Pembuatan</td>
        <td>:</td>
        <td style="margin-left:15%;">@if(isset($data['amp']->tahun_buat)) {{$data['amp']->tahun_buat}} @endif</td>
    </tr>
    <tr>
    	<td style="margin-left:15%;">Nomor Identitas </td>
        <td>:</td>
        <td style="margin-left:15%;">@if(isset($data['permohonan']['no_permohonan'])) {{$data['permohonan']['no_permohonan']}} @endif</td>
    </tr>
    <tr>
    	<td style="margin-left:15%;">Lokasi  </td>
        <td>:</td>
        <td style="margin-left:15%;">@if(isset($data['amp']->lokasi)) {{$data['amp']->lokasi}} @endif</td>
    </tr>
    <tr>
    	<td style="margin-left:15%;">Pemilik </td>
        <td>:</td>
        <td style="margin-left:15%;"> @if(isset($data['permohonan']['nama_pemohon'])) {{$data['permohonan']['nama_pemohon']}} @endif</td>
    </tr>
</table>

<table border="0" width="100%">
	<tr>
    	<td><p>  Dengan ini </p></td>
    </tr>
</table>



<table border="0" width="100%">
	<tr>
    	<td width="50%">
        	<table border="0" width="100%">
            	 <tr>
                 	<td>Mengetahui dan Menetujui,</td>
                 </tr>
                  <tr>
                 	<td><strong>Direktorat Jenderal Bina Teknik</strong></td>
                 </tr>
                  <tr>
                 	<td><strong>Selaku Tim Pengarah</strong></td>
                 </tr>
                 <tr>
                 	<td></td>
                 </tr>
                 <tr>
                 	<td></td>
                 </tr>
                 <tr>
                 	<td></td>
                 </tr>
                 <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr> <tr>
                 	<td></td>
                 </tr>
                 <tr>
                 	<td>(..........................)</td>
                 </tr>
                  <tr>
                 	<td>NIP</td>
                 </tr>
            </table>
        </td>
        <td width="50%" style="float:right; text-align:right;">
        	<table border="0" width="100%">
            	 <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td><strong>Ditetapkan di :</strong> ..................</td>
                 </tr>
                  <tr>
                 	<td><strong>Pada Tanggal :</strong> ..................</td>
                 </tr>
                 <tr>
                 	<td><strong>Kepala Balai :</strong> ..................</td>
                 </tr>
                 <tr>
                 	<td></td>
                 </tr>
                 <tr>
                 	<td></td>
                 </tr>
                 <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr>
                  <tr>
                 	<td></td>
                 </tr> <tr>
                 	<td></td>
                 </tr>
                 <tr>
                 	<td>(..........................)</td>
                 </tr>
                  <tr>
                 	<td>NIP</td>
                 </tr>
            </table>
        </td>
    </tr>
</table>