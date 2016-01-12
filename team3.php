<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Big Picture - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/the-big-picture.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Tebak Gambar Farewell Party</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Kelompok 1</a>
                        </li>
                        <li>
                            <a href="team2.php">Kelompok 2</a>
                        </li>
                        <li>
                            <a href="team3.php">Kelompok 3</a>
                        </li>

                        <li>
                            <a href="team4.php">Kelompok 4</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container">



            <ul class="list-unstyled video-list-thumbs row">
                <?php
                $data = array();
                $pathImage = 'img/t_3/';

                $data[] = "cewek gebetan";
                $data[] = "papa minta saham";
                $data[] = "mama minta pulsa";

                $data[] = "minum wedang jahe";
                $data[] = "kangen mama";
                $data[] = "opor ayam";
                $data[] = "ujian akhir";
                $data[] = "mimpi kamu";
                $data[] = "pacaran lagi";
                $data[] = "potong kue";
                $data[] = "bandung lautan api";
                $data[] = "pelukis wajah khusus dewasa";
                $data[] = "lebih baik hidup mewah";
                $data[] = "sambal terasi";
                $data[] = "masuk kelas terlambat";
                $data[] = "penduduk asing menangkap lalat";

                ?>
                <?php
                $conter = 1;
                foreach($data as $item){
                    ?>
                    <li class="col-lg-3 col-sm-4 col-xs-6 ">
                        <button id="btn_<?php echo $conter?>" data-answer = "<?php echo $item ?>" data-toggle="modal" data-target="#modal-fullscreen" data-title="#Soal <?php echo $conter ?>" data-img = "<?php echo $pathImage.$conter.'.jpg'; ?>" onclick="set('<?php echo $conter;?>')" data-img="" style="width:100%;height:100px" type="button" class="btn btn-warning">
                            <span class="nom"><?php echo $conter ?></span></button>
                    </li>
                    <?php    
                    $conter++;
                }
                ?>



            </ul>

        </div>


        <!-- Modal fullscreen -->
        <div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button id="cl"  type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"> <span id="nomor"></span> </h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div id ="img">
                           
                       </div>
                   </div>
                   <div class="col-lg-6">
                    <button onclick="hide()" class="btn btn-primary"> <i class=" glyphicon glyphicon-eye-open"></i> Lihat Jawaban </button>
                    <hr>
                    <div id="jawaban" class="alert alert-info" role="alert"><h1>...</h1></div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <button onclick="jtrue()" class="btn btn-success" style="width:100%;height:120px;">
                            <i style="font-size: 7em;" class=" glyphicon glyphicon-ok"></i>
                            </button>
                        </div>
                        <div class="col-lg-6">
                             <button onclick="jfalse()" class="btn btn-danger" style="width:100%;height:120px;">
                            <i style="font-size: 7em;" class=" glyphicon glyphicon-remove"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="app.js"></script>

<script>
var hideJawaban =false;
var nomor=0;
function set(data){
   $( "#jawaban" ).hide(); 
   var hideJawaban =false;
   var img = $("#btn_"+data).attr("data-img");
   var title = $("#btn_"+data).attr("data-title");
   var answer = $("#btn_"+data).attr("data-answer");
   $("#jawaban").html( '<h1>'+ answer +'</h1>');
   $("#img").html('<img src="'+img+'"/>' );
   $("#nomor").html(title);
   nomor = data;
}

function hide(){
    if(hideJawaban){
        hideJawaban=false;
        $( "#jawaban" ).hide();

    }else{
        hideJawaban = true;
        $( "#jawaban" ).show();
    }
}
function jtrue(){
    
    $("#btn_"+nomor).removeClass("btn-warning btn-danger").addClass( "btn-info" );
    $("#cl").click();
}
function jfalse(){
     $("#btn_"+nomor).removeClass("btn-warning btn-info").addClass( "btn-danger" );
      $("#cl").click();
}

</script>
</body>

</html>
