<!doctype html>
    <html>
        <head>
			<link rel="icon" type="image/png" href="<?php echo base_url('assets/dolar.png');?>">
            <title>Bank Mini</title>
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">        
            <link href="<?php echo base_url('assets/css/plugins/morris/morris-0.4.3.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/datepicker.css');?>" rel="stylesheet"> 
                    
            <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/js/tinymce/tinymce.min.js');?>"></script>
            <script>
                    tinymce.init({selector:'textarea'});
            </script>
			<!--style untuk kurs mata uang-->
			<style>
				table{
				font-size:10px;
				font-family:verdana;
				}

				td{
				border:0px;
				}
				 
				th{
				background-color:#000000;
				color:yellow;
				}

				p {
				font-size:10px;
				font-weight:bold;
				font-family:verdana;
				}
			</style>
        </head>
        <body>
			<!-- Static navbar -->
            <div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
                <div class="navbar-header">
					<a class="navbar-brand" href="<?php echo site_url('web');?>">
						<img src="<?php echo base_url('assets/dolar.png');?>" width='30' height='30'/>
					</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url('web');?>">Bank Mini</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url('web');?>"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
                </div>
            </div>