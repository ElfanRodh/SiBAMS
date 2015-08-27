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
			
			<!--javascript hapus dll-->
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