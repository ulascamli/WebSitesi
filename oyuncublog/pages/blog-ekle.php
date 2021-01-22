
<?php
require_once 'ayarlar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Oyun Yazisi Ekle</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php 
if(@$_POST["submit"]){
$Baslik=htmlspecialchars($_POST["Baslik"],ENT_QUOTES,'UTF-8');
$Alt_Baslik=htmlspecialchars($_POST["Alt_Baslik"],ENT_QUOTES,'UTF-8');
$aciklama=htmlspecialchars($_POST["aciklama"],ENT_QUOTES,'UTF-8');


$ekle= $db->prepare("INSERT INTO `blog`(`Baslik`,`Alt_Baslik`,`aciklama`) VALUES
(:Baslik, :Alt_Baslik, :aciklama)");
$ekle->bindValue(":Baslik",$Baslik, PDO::PARAM_STR);
$ekle->bindValue(":Alt_Baslik",$Alt_Baslik, PDO::PARAM_STR);
$ekle->bindValue(":aciklama",$aciklama, PDO::PARAM_STR);


if($ekle->execute())
	{
	header("Location:blog.php?i=ekle");
}else
	{
	
	header("Location:blog.php?i=hata");
}

}


?>

    <div id="wrapper">

        <?php require_once 'inc-menu.php';
	
	?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Oyun Yazisi Ekle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="blog.php">Geri Don</a>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="" method="POST" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Baslik</label>
                                            <input class="form-control" name="Baslik" placeholder="Baslik..">
                                        </div>
										<div class="form-group">
                                            <label>Alt Baslik</label>
                                            <input class="form-control" name="Alt_Baslik" placeholder="Alt baslik..">
                                        </div>
                                        <div class="form-group">
                                            <label>Aciklama</label>
                                            <input class="form-control" name="aciklama" placeholder="Aciklama..">
                                        </div>
                                        
                                        
                                       
                                     
										<input type="submit" name="submit" value="Ekle" class="btn btn-default">
                                        <button type="reset" class="btn btn-default">Sifirla</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
