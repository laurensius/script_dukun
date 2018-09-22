<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/laurensius.css'); ?>" rel="stylesheet">
        <!-- <link href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" rel="stylesheet"> -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Site Name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">Copyright</a></li>
                        <li><a href="#about">Privacy Policy</a></li>
                        <li><a href="#about">Terms and Conditions</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="iklan-atas" class="container">
        </div> 

        <div class="container">
            <div class="page-header">
            <h1>Example page header <small>Subtext for header</small></h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Judul Berita</h3>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="thumbnail">
                                <img src="https://www.ostraining.com/cdn/images/blog/web-design/bootstrap/standard-navbar-for-mobile-devices/04_navbar_container_div.png" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-8">
                            Penggalan isi berita di sini. Jangan tampilkan semua isi berita disini, tapi coba slit saja 
                            agar tidak terlalu panjang. Pastikan tampilan selalu user friendly
                        </div>
                    </div>  
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Search</h3>
                        </div>
                        <div class="panel-body">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
                                <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Latest Posts</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                                <li>Title Post</li>
                                <li>Title Post</li>
                                <li>Title Post</li>
                                <li>Title Post</li>
                                <li>Title Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">a</div>
                <div class="col-lg-4">b</div>
                <div class="col-lg-4">c</div>
            </div>    
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>