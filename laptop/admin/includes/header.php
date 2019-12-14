<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8"/>
    <title>Diễn Đàn Laptop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
 
    
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>bootstrap/css/bootstrap.min.css"/> 
 
   
    <script src="<?php echo $_DOMAIN; ?>js/jquery.min.js"></script>        
</head>
<body>
    <?php
 
   
    if (!$user)
    {
        echo
        '
            <div class="container">
                <div class="page-header">
                    <h1>Laptop <small>Administration</small></h1>
                </div><!-- div.page-header -->
            </div><!-- div.container -->
        ';
    }
   
    else
    {
        echo
        '
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="' . $_DOMAIN . '">Diễn đàn Laptop</a>
                    </div><!-- div.navbar-header -->
                </div><!-- div.container-fluid -->
            </nav>
        ';
    }
 
    ?>