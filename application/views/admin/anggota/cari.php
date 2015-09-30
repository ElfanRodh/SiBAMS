<div class="panel panel-default">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-folder-close"/> 
			</span> &nbsp <a href="<?php echo site_url('anggota');?>"> Siswa </a>  
			<span class="glyphicon glyphicon-chevron-right"/>
			</span> &nbsp <a href="<?php echo site_url('anggota/cari');?>"> Cari </a> 
		</h4>
    </div>
	
	<!--bawah panel / tambah dan cari-->
	<div class="well well-sm">
		<a href="<?php echo site_url('anggota/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('anggota/cari');?>" method="post">
			<div class="form-group">
				<label>Cari Siswa </label>
				<input type="text" class="form-control" placeholder="masukkan nis atau nama" name="cari">
			</div>
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>	
		</form>
	</div>
	<div class="panel-body">
		<?php echo $message;?>
		<table class="table table-hover table-responsive table-bordered">
			<thead>
				<tr>
					<th width=10>No.</th>
					<!--<th>Gambar</th>-->
					<th width=80>NIS</th>
					<th width=500>Nama</th>
					<th width=20>JK</th>
					<!--<th width=100>Tgl Lahir</th>-->
					<th width=100>Kelas</th>
					<th colspan="2">Aksi</th>
				</tr>
			</thead>
			<?php $no=0; foreach($anggota as $row ): $no++;?>
			<tr>
				<td><?php echo $no;?></td>
				<!--<td><img src="<?php echo base_url("assets/img/anggota/".$row->image);?>" height="100px" width="100px"></img></td>-->
				<td><?php echo $row->nis;?></td>
				<td><?php echo $row->nama;?></td>
				<td><?php echo $row->jk;?></td>
				<!--<td><?php echo $row->ttl;?></td>-->
				<td><?php echo $row->kelas;?></td>
				<td><a href="<?php echo site_url('anggota/edit/'.$row->nis);?>"><i class="glyphicon glyphicon-edit"></i></a></td>
				<td><a href="#" class="hapus" kode="<?php echo $row->nis;?>"><i class="glyphicon glyphicon-trash"></i></a></td>
			</tr>
			<?php endforeach;?>
		</Table>
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