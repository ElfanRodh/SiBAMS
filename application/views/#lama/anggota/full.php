<!doctype html>
    <html>
        <head>
			<link rel="icon" type="image/png" href="<?php echo base_url('assets/dolar.png');?>">
            <title>Bank Mini | <?php echo $title;?></title>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
        
            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet">        
            
            <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
                    
                    $(function(){
                        $("#tanggal1").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal2").datepicker({
                            format:'yyyy-mm-dd'
                        });
                        
                        $("#tanggal").datepicker({
                            format:'yyyy-mm-dd'
                        });
                    })
            </script>
        </head>
        <body>
            <!-- Static navbar -->
			<div class="navbar navbar-default">
				<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url('dashboard');?>">Bank Mini</a>
				</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                                        </span> Master</a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-pencil text-primary"></span> <a href="<?php echo site_url('anggota');?>">Anggota</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-book text-success"></span> <a href="<?php echo site_url('buku');?>">Buku</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="glyphicon glyphicon-user"></span> <a href="<?php echo site_url('dashboard/petugas');?>">Petugas</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
										</span> Transaksi</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<table class="table">
											<tr>
												<td>
													<span class="glyphicon glyphicon-saved"></span><a href="<?php echo site_url('peminjaman');?>"> Peminjaman</a></span>
												</td>
											</tr>
											<tr>
												<td>
												   <span class="glyphicon glyphicon-save"></span> <a href="<?php echo site_url('pengembalian');?>"> Pengembalian</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
										</span> Laporan</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										<table class="table">
											<tr>
												<td>
													<span class="glyphicon glyphicon-user"></span><a href="<?php echo site_url('laporan/anggota');?>"> Data Anggota</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-book"></span><a href="<?php echo site_url('laporan/buku');?>"> Data Buku</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-tasks"></span><a href="<?php echo site_url('laporan/peminjaman');?>"> Data Peminjaman</a>
												</td>
											</tr>
											<tr>
												<td>
													<span class="glyphicon glyphicon-list-alt"></span><a href="<?php echo site_url('laporan/pengembalian');?>"> Data Pengembalian</a>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</div>							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a href="<?php echo site_url('dashboard/logout');?>"><span class="glyphicon glyphicon-off">
										</span> Logout</a>
									</h4>
								</div>
							</div>
						</div>
					</div>                
                    <div class="col-md-9">
                        <?php echo $content;?>
						<script>
							$(function(){
								$(".hapus").click(function(){
									var kode=$(this).attr("kode");
									
									$("#idhapus").val(kode);
									$("#myModal").modal("show");
								});
								
								$("#konfirmasi").click(function(){
									var kode=$("#idhapus").val();
									
									$.ajax({
										url:"<?php echo site_url('anggota/hapus');?>",
										type:"POST",
										data:"kode="+kode,
										cache:false,
										success:function(html){
											location.href="<?php echo site_url('anggota/index/delete_success');?>";
										}
									});
								});
							});
						</script>
                    </div>
                </div>
            </div>        
        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Konfirmasi</h4>
                  </div>
                  <div class="modal-body">
                        <input type="hidden" name="idhapus" id="idhapus">
                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="konfirmasi">Hapus</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        
        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url('assets/js/holder.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap-datepicker.js');?>"></script>
        <script src="<?php echo base_url('assets/js/application.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/raphael-2.1.0.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/morris/morris.js');?>"></script>
        <script src="<?php echo base_url('assets/js/sb-admin.js');?>"></script>
        <script src="<?php echo base_url('assets/js/demo/dashboard-demo.js');?>"></script>    
        </body>
    </html>