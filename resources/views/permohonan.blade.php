@extends('app_backend')
@section('content')
    <form class="form-horizontal" role="form" action="#">
    <!-- Basic inputs -->
    <div class="panel panel-default">
        <div class="panel-heading"><h6 class="panel-title"><i class="icon-bubble4"></i> Form elements</h6></div>
        <div class="panel-body">

                        <div class="alert alert-success fade in block-inner">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Default form components, including bootstrap additions and tags
                        </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No. Permohonan: </label>
                <div class="col-sm-3">
                    <input type="text" name="no_permohonan" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tgl Pembuatan: </label>
                <div class="col-sm-2">
                    <input type="text" name="tgl_pembuatan" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Perusahaan: </label>
                <div class="col-sm-10">
                    <input type="text" name="nama_pembuatan" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Alamat Perusahaan: </label>
                <div class="col-sm-10">
                    <input type="text" name="alamat_pembuatan" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Telp/HP: </label>
                <div class="col-sm-10">
                    <input type="text" name="telp" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Nama Pemohon: </label>
                <div class="col-sm-10">
                    <input type="text" name="nama_pemohon" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jabatan: </label>
                <div class="col-sm-10">
                    <input type="text" name="jabatan" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jenis Peralatan: </label>
                <div class="col-sm-10">
                    <div class="block-inner">
                        <label class="checkbox-inline checkbox-primary">
                            <input type="checkbox" name="jenis_peralatan" class="styled">AMP</label>
                        <label class="checkbox-inline n checkbox-primary">
                            <input type="checkbox" name="jenis_peralatan" class="styled">BP</label>
                        <label class="checkbox-inline checkbox-primary">
                            <input type="checkbox" name="jenis_peralatan" class="styled">Quary</label>
                    </div>            
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kapasitas: </label>
                <div class="col-sm-3">
                    <input type="text" name="kapasitas" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tahun Pembuatan: </label>
                <div class="col-sm-2">
                    <input type="text" name="tahun_pembuatan" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Lokasi saat ini: </label>
                <div class="col-sm-2">
                    <input type="text" name="lokasi_saat_ini" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">No. Register: </label>
                <div class="col-sm-2">
                    <input type="text" name="lokasi_saat_ini" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Kondisi Saat Ini: </label>
                <div class="col-sm-10">
                    <div class="block-inner">
                        <label class="checkbox-inline checkbox-primary">
                            <input type="checkbox" name="kondisi_saat_ini" class="styled">Baik</label>
                        <label class="checkbox-inline n checkbox-primary">
                            <input type="checkbox" name="kondisi_saat_ini" class="styled">Tidak Baik</label>
                        
                    </div>            
                </div>
            </div>
                      
            <h6 class="heading-hr"><i class="icon-page-break"></i> Jadwal Pemeriksaan</h6>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Jadwal Pemeriksaan: </label>
                <div class="col-sm-2">
                    <input type="text" name="daritgl" class="form-control" placeholder="Dari Tanggal">
                </div>
                <div class="col-sm-2">
                    <input type="text" name="smptgl" class="form-control" placeholder="Sampai Tanggal">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tim Pemeriksa: </label>
                <div class="col-sm-2">
                    <input type="text" name="lokasi_saat_ini" class="form-control">
                </div>
            </div>



            <div class="form-group">
                <div class="col-md-6">
                    <label>Tim Pemeriksa</label>
                    <div class="form-group">
                        <div class="row">
                        <div class="col-md-6">
                            <label class="col-sm-2 control-label">Nama: </label>
                            <div class="col-sm-12">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <label class="col-sm-2 control-label">Jabatan: </label>
                            <div class="col-sm-12">
                                <input type="text" name="jabatan" class="form-control">
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>                
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Tim Pemeriksa: </label>
                <div class="col-sm-2">
                    <input type="file" name="lampiran" class="form-control">
                </div>
            </div>        

            <div class="form-actions text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    <!-- /basic inputs -->
    </form>
@stop