<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
			</span> Dashboard</a>
		</h4>
    </div>
    <div class="panel-body">
        <div class="container">
            <ul class="glyphicons">
                <li>
                  <span class="glyphicon glyphicon-user"></span>
                  <a href="<?php echo site_url('anggota');?>">Anggota</a>
                </li>
                
                <li>
                  <span class="glyphicon glyphicon-book"></span>
                  <a href="<?php echo site_url('buku');?>">Buku</a>
                </li>
                
                <li>
                  <span class="glyphicon glyphicon-save"></span>
                  <a href="<?php echo site_url('peminjaman');?>">Peminjaman</a>
                </li>
                
                <li>
                  <span class="glyphicon glyphicon-saved"></span>
                  <a href="<?php echo site_url('pengembalian');?>">Pengembalian</a>
                </li>
                
                <li>
                  <span class="glyphicon glyphicon-print"></span>
                  <a href="<?php echo site_url('laporan/peminjaman');?>">Laporan</a>
                </li>
                
                <li>
                  <span class="glyphicon glyphicon-off"></span>
                  <a href="<?php echo site_url('dashboard/logout');?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</div>