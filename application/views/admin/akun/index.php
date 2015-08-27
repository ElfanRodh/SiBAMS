<div class="panel panel-default">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-folder-close"/> </span> &nbsp <a href="<?php echo site_url('Akun');?>"> Akun </a>
		</h4>
    </div>
	
	<!--bawah panel / tambah dan cari-->
	<div class="well well-sm">
		<a href="<?php echo site_url('akun/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('akun/cari');?>" method="post">
			<div class="form-group">
				<label>Cari Akun</label>
				<input type="text" class="form-control" placeholder="ketik nomor/nama akun" name="cari">
			</div>
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>	
		</form>
	</div>
	<div class="panel-body">
		<!--pesan error/sukses/dll-->
		<?php echo $message;?>
		
		<p align="center"> <?php echo $pagination;?></p>
	</div>
</div>

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