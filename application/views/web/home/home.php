<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<span class="glyphicon glyphicon-lock"></span> Login
				</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" action="<?php echo site_url('web/proses');?>" method="post">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-3 control-label">
								Username</label>
							<div class="col-sm-9">
								<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username" required>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-3 control-label">
								Password</label>
							<div class="col-sm-9">
								<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group last">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-primary btn-sm">
									Login</button>
									 <button type="reset" class="btn btn-default btn-sm">
									Reset</button>
							</div>
						</div>
						<?php
						$data=$this->session->flashdata('message');
						if ($data!=null){?>
							<div class="alert alert-danger" role="alert">
								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								<span class="sr-only">Error:</span>
								<?php echo $this->session->flashdata('message');?>
							</div>
						<?php
						}
						?>
					</form>
				</div>
				<div class="panel-footer">
					
				</div>
			</div>
		</div>
		<div class="col-md-8 ">
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">
					<span class="glyphicon glyphicon-list-alt"></span>
					Selamat Datang di Aplikasi Keuangan Bank Mini
				</h3>
			  </div>
			  <div class="panel-body">
				<!--isian 1-->
					<?php
					// inisialisasi CURL
					$data = curl_init();
					// setting CURL
					curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($data, CURLOPT_URL, "http://www.bankmandiri.co.id/resource/kurs.asp?row=2");
					// menjalankan CURL untuk membaca isi file
					$kode_html = curl_exec($data);
					curl_close($data);

					// memcah kode html menngguakan text // "<h2>Kurs Bank Mandiri</h2>" 
					// sebagai teks pemecah sehingga hasil nya kode html akan terbagi 2 
					// yaitu kode html setelah "<h2>Kurs Bank Mandiri</h2>"
					// dan kode html setelah "<h2>Kurs Bank Mandiri</h2>"
					// hasilnya disimpan dalam arrray dengan nama $pecah_1

					$pecah_1=explode("<h2>Kurs Bank Mandiri</h2>",$kode_html);

					// array $pecah_1 akan diambil index kedua yaitu 
					// $pecah_1[1] artinya yang akan digunakan untuk
					// diproses lanjut adalah  kode html setelah 
					// "<h2>Kurs Bank Mandiri</h2>"
					// array $pecah_1[1]  akan dipecah kembali dan 
					// simpan dalam array $pecah_2 dengan menggunakan
					// karakter "<h2>Kalkulator Kurs</h2>" sebagai karakter pemecah
					$pecah_2=explode("<h2>Kalkulator Kurs</h2>",$pecah_1[1]);

					// mengganti <table class="tbl-view" //cellpadding="0" cellspacing="0" border="0" width="100%">
					// dengan <table>
					$table_temp1=str_replace("<table class=\"tbl-view\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" width=\"100%\">","<table border=\"1\">",$pecah_2[0]);

					//mengganti bgcolor="#eeeeee" dengan karakter kosong
					$table_temp2=str_replace("bgcolor=\"#eeeeee\"","",$table_temp1);

					//mengganti &nbsp; dengan karakter kosong
					$table_temp3=str_replace("&nbsp;","",$table_temp2);

					//mengganti <td></td> dengan karakter kosong
					$table_temp4=str_replace("<td></td>","",$table_temp3);

					//mengganti <th></th> dengan karakter kosong
					$table_temp5=str_replace("<th></th>","",$table_temp4);

					//mengganti <br /> dengan karakter spasi ($nbsp;)
					$table_temp6=str_replace("<br />","&nbsp;",$table_temp5);

					//tampilkan di layar hasil curl ($table_temp6)
					echo $table_temp6;
					?>
					<p>Sumber : http://www.bankmandiri.co.id/resource/kurs.asp?row=2</p>
			  </div>
			</div>
			
		</div>
	</div>
</div>