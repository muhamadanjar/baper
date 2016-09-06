			<!-- Default modal -->
			<div id="pemeriksaan-modal" class="modal fade" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="frm_title">Modal title</h4>
						</div>

				        <!-- New invoice template -->
				        <div class="panel">
				        	
							<div class="panel-body">

								<div class="row invoice-header">
									<div class="col-sm-6">
										<h3><div id="frm_body"></div></h3>
										<span></span>
									</div>
								</div>


								<div class="row">
									<div class="col-sm-5">
										<h6>Permohonan</h6>
			 							<ul>
											<li><a href="#" id="namapemohon">--</a></li>
											<li id="kodeperiksa">--</li>
											<li id="namaperusahaan">--</li>
										</ul>
									</div>

									<div class="col-sm-3">
										<h6>Detail :</h6>
										<ul>
											<li>Tanggal Permohonan: <strong id="tglpermohonan" class="pull-right">--</strong></li>
											<li>Jenis Peralatan: <a href="#" id="jenisperalatan" class="pull-right">--</a></li>
											
											<li class="invoice-status">
												<strong>Status Terakhir: <span class="statusterakhir label label-danger pull-right">---</span></strong>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel-body">
								<form method="post" class="validate" action="{{ url('pemeriksaan/tglperiksa/post') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="row invoice-payment">
									<div class="col-sm-5">
										<div class="form-group">
											<label>
												Kode Periksa:
											</label>
											<input type="text" readonly="readonly" name="kode_periksa" class="required form-control">
										</div>
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<label>
												Tgl Periksa:
											</label>
											<input type="text" name="tgl_periksa" class="required form-control datepicker">	
										</div>
									</div>
									<div class="col-md-1">
										<div class="form-group">
											<label>
												&nbsp;
											</label>
											<input type="submit" name="submit" value="Simpan" class="btn btn-default">
										</div>
									</div>
									
								</div>	
								</form>
							</div>
							<div class="table-responsive table-pemeriksaan">
							    
							</div>

							<!--<div class="panel-body">
								<div class="row invoice-payment">
									<div class="col-sm-8">
										<h6>Payment method:</h6>
										<label class="radio">
											<input type="radio" name="payment-unpaid" class="styled">
											Checkout with Google
										</label>
										<label class="radio">
											<input type="radio" name="payment-unpaid" class="styled">
											Checkout with Amazon
										</label>
										<label class="radio">
											<input type="radio" name="payment-unpaid" class="styled" checked="checked">
											Wire transfer
										</label>
										<label class="radio">
											<input type="radio" name="payment-unpaid" class="styled">
											Checkout with Paypal
										</label>
										<label class="radio">
											<input type="radio" name="payment-unpaid" class="styled">
											Checkout with Skrill
										</label>
									</div>

									<div class="col-sm-4">
										<h6>Total:</h6>
										<table class="table">
											<tbody>
												<tr>
													<th>Subtotal:</th>
													<td class="text-right">$103,850</td>
												</tr>
												<tr>
													<th>Tax:</th>
													<td class="text-right">$5,192</td>
												</tr>
												<tr>
													<th>Total:</th>
													<td class="text-right text-danger"><h6>$109,042</h6></td>
												</tr>
											</tbody>
										</table>
										<div class="btn-group pull-right">
											<button type="button" class="btn btn-success"><i class="icon-checkbox-partial"></i> Confirm payment</button>
											<button type="button" class="btn btn-primary"><i class="icon-print2"></i> Print</button>
										</div>
									</div>
								</div>

								<h6>Notes &amp; Information:</h6>
								This invoice contains a incomplete list of items destroyed by the Federation ship Enterprise on Startdate 5401.6 in an unprovked attacked on a peaceful &amp; wholly scientific mission to Outpost 775.
								The Romulan people demand immediate compensation for the loss of their Warbird, Shuttle, Cloaking Device, and to a lesser extent thier troops.
							</div>-->
						</div>   
						<!-- /new invoice template -->

						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!--<button type="button" class="btn btn-primary">Save changes</button>-->
						</div>
					</div>
				</div>
			</div>
			<!-- /default modal -->