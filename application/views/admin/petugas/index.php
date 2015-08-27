<div class="panel panel-default">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-folder-close"/> </span> &nbsp <a href="<?php echo site_url('petugas');?>"> Petugas </a>
		</h4>
    </div>
	
	<!--bawah panel / tambah dan cari-->
	<div class="well well-sm">
		<a href="<?php echo site_url('petugas/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('petugas/cari');?>" method="post">
			<div class="form-group">
				<label>Cari Petugas </label>
				<input type="text" class="form-control" placeholder="masukkan nama" name="cari">
			</div>
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>	
		</form>
	</div>
	<div class="panel-body">
		<!--pesan error/sukses/dll-->
		<?php echo $message;?>
		<table class="table table-hover table-responsive table-bordered">
			<thead>
				<tr>
					<th>No.</th>
					<th>Username</th>
					<th>Password</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<?php $no=0; foreach($petugas as $row): $no++;?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row->user;?></td>
				<td><?php echo $row->password;?></td>
				<td><a href="<?php echo site_url('petugas/edit/'.$row->id_petugas);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
				<td><a href="#" class="hapus" kode="<?php echo $row->id_petugas;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
			</tr>
			<?php endforeach;?>
		</table>
	</div>
</div>


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
                url:"<?php echo site_url('dashboard/hapus');?>",
                type:"POST",
                data:"kode="+kode,
                cache:false,
                success:function(html){
                    location.href="<?php echo site_url('dashboard/petugas/delete_success');?>";
                }
            });
        });
    });
</script>