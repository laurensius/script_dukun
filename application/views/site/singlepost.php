<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $single_post[0]->post_title . " - " . $config[0]->site_title; ?></title>
        <meta name="description" content="<?php echo $config[0]->site_tagline; ?>"/>
        <link rel="canonical" href="<?php echo site_url($single_post[0]->post_slug); ?>" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo $single_post[0]->post_title . " - " . $config[0]->site_title; ?>" />
        <meta property="og:description" content="<?php echo $single_post[0]->post_title ." ". $config[0]->site_title ." ". $config[0]->site_tagline; ?>" />
        <meta property="og:url" content="<?php echo site_url($single_post[0]->post_slug); ?>" />
        <meta property="og:site_name" content="<?php echo $config[0]->site_title; ?>" />
        <meta property="article:section" content="<?php echo $config[0]->site_title; ?>">
        <meta property="article:published_time" content="<?php echo $single_post[0]->post_datetime; ?>">
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:description" content="<?php echo $single_post[0]->post_title ." ". $config[0]->site_title ." ". $config[0]->site_tagline; ?>" />
        <meta name="twitter:title" content="<?php echo $single_post[0]->post_title . " - " . $config[0]->site_title; ?>" />
        <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/laurensius.css'); ?>" rel="stylesheet">
        <!-- <link href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" rel="stylesheet"> -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo $config[0]->site_title; ?></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="<?php echo site_url('copyright.html'); ?>">Copyright</a></li>
                        <li><a href="<?php echo site_url('privacy-policy.html'); ?>">Privacy Policy</a></li>
                        <li><a href="<?php echo site_url('terms-and-conditions.html'); ?>">Terms and Conditions</a></li>
                        <li><a href="<?php echo site_url('contact-us.html'); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="iklan-atas" class="container">
        </div> 

        <div class="container">
            <div class="page-header">
            <h1><?php echo $config[0]->site_title; ?> <small><?php echo $config[0]->site_tagline; ?></small></h1>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- CONTENT -->
                <div class="col-lg-8">
                    <?php foreach ($single_post as $post){ ?>
                    <div class="panel panel-default">
                        <div class=" panel-body">
                            <div class="row">  
                                <div class="col-lg-12">
                                    <h3> 
                                        <a href="<?php echo site_url("result/" . $post->post_slug); ?>" target="_blank"> 
                                            <?php echo $post->post_title; ?>
                                        </a>
                                    </h3>
                                    <p> <span class="glyphicon glyphicon-pencil"></span> by <?php echo $post->post_writer; ?> | on <?php echo $post->post_datetime; ?>
                                </div>
                            </div>
                            <div class="row">    
                                <div class="col-lg-12">
                                <?php 
                                    echo $post->post_content; 
                                ?>
                                </div>
                            </div>  
                            <div class="row">
                                <?php foreach ($images as $image){ ?>
                                    <div class="col-lg-4">
                                        <a href="#" class="thumbnail">
                                            <img src="<?php 
                                            if (strpos($image->image_url, 'http') !== false) {
                                                $img = $image->image_url;
                                            }else{
                                                $img = "http://".$image->image_url;
                                            }
                                            echo $img; 
                                            ?>" alt="...">
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-4" >
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Search</h3>
                        </div>
                        <div class="panel-body">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
                                <input type="text" class="form-control" placeholder="Search" required>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Latest Posts</h3>
                        </div>
                        <div class="panel-body">
                            <ul>
                            <?php foreach ($latest_posts as $post){ ?>
                                <li>
                                    <a href="<?php echo site_url("result/" . $post->post_slug); ?>" target="_blank"> 
                                    <?php echo $post->post_title; ?> 
                                    </a>
                                </li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ads</h3>
                        </div>
                        <div class="panel-body">
                            <div id="iklan-sidebar">
                            </div> 
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <div id="iklan-bawah" class="container">
        </div> 

        <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="cokor">
                        Developed by OXEN99 Team
                    </div>
                </div>
            </div>    
        </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    </body>
</html>