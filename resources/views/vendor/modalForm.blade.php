<!-- Modal Dialog -->
<div class="modal fade" id="formAddEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="frm_title">Form Tambah</h4>
      </div>
      <div class="modal-body">
          
          <div class="row">
          	<div class="col-md-12">
				<form method="post">
          		<div class="row" id="frm_body">
                    <div class="col-md-12">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label">Pengelola</label>
                                <input type="text" name="pengelola" class="form-control" id="pengelola" value=""/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" value=""/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Type</label>
                                <input type="text" name="type" class="form-control" id="type" value=""/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Merk</label>
                                <input type="text" name="merk" class="form-control" id="merk" value=""/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tahun Peroleh</label>
                                <input type="text" name="tahun_peroleh" class="form-control" id="tahun_peroleh" value=""/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <input type="text" name="status" class="form-control" id="status" value=""/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Kondisi</label>
                                <input type="text" name="kondisi" class="form-control" id="kondisi" value=""/>
                            </div>
                
                    </div>
               	</div>
                </form>
			</div>
          </div>
      </div>
      <div class="modal-footer">
      	<button style='margin-left:10px;' type="button" 
        	class="btn btn-primary col-sm-2 pull-right btn-amp" 
            id="frm_submit">Simpan</button>
        <button type="button" class="btn btn-danger col-sm-2 pull-right" 
        	data-dismiss="modal" id="frm_cancel">No</button>  
      </div>
    </div>
  </div>
</div>