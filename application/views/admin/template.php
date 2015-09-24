<!doctype html>
    <html>
        <head>
			<link rel="icon" type="image/png" href="<?php echo base_url('assets/dolar.png');?>">
            <title><?php echo $title;?> | SiBAMS</title>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">        
            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet">        
            
            <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
			<!-- data
			<link href="css/bootstrap.css" rel="stylesheet">
			<script src="js/jquery.js"></script>
			<script src="js/bootstrap.js"></script>-->
			<!-- untuk tooltip-->
			<script type="text/javascript">
				$(function () {
				$(".tooltipsku").tooltip();
				});
			</script>
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
			
			<!--untuk khususon numerik-->
			<SCRIPT language=Javascript>
				<!--
				function isNumberKey(evt)
				{
				var charCode = (evt.which) ? evt.which : event.keyCode
				if (charCode > 31 && (charCode < 48 || charCode > 57))

				return false;
				return true;
				}
				//-->
			</SCRIPT>
			
			<style>
				.glyphicons {
					padding-left: 0;
					padding-bottom: 1px;
					margin-bottom: 20px;
					list-style: none;
					overflow: hidden;
				  }
					  
				  .glyphicons li {
					float: left;
					width: 11.5%;
					height: 115px;
					padding: 10px;
					margin: 0 -1px -1px 0;
					font-size: 14px;
					line-height: 1.4;
					text-align: center;
					border: 1px solid #ddd;
				  }
				  
				  .glyphicons .glyphicon {
						  margin-top: 5px;
						  margin-bottom: 10px;
						  font-size: 24px;
					  display: block;
						  text-align: center;
				  }
			</style>
        </head>
        <body>
            <!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">
			  <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url('dashboard');?>">SiBAMS</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
					<form class="navbar-form navbar-right">
						<div class="navbar-header">
							<button type="button" class="btn btn-info" disabled>
								<?php 
									$session_id = $this->session->userdata('username');
									echo "hai, "."<strong>".$session_id."</strong>";
								?>
							</button>
						</div>
					</form>
				</div><!--/.navbar-collapse -->
			  </div>
			</nav>
			</div>
			<!--<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<a class="navbar-brand" href="<?php echo site_url('web');?>">
						<img src="<?php echo base_url('assets/dolar.png');?>" width='30' height='30'/>
					</a>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo site_url('dashboard');?>">Bank Mini - jalan Panglima Polim No. 50</a>
					</div>
				</div>
			</div>-->
            <div class="container">
                <div class="row">
					<!--menu kiri-->
                    <div class="col-md-2">
                        <?php include $menu; ?>
					</div>                
                    <div class="col-md-10">	
						<!-- FAKTOR PEMBEDA/ sesuai dengan konten -->
                        <?php include $content;?>
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
		</body>
    </html>