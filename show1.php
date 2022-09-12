<?php
include 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="css/all.min.css">
    <script>if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    </script>
    <title>Document</title>
</head>
<body>
    <section class="container pt-5 pb-4 pb-md-5 pb-lg-6 pt-md-6 pt-lg-7 animated fadeInRightBigtBig">
        <h2>Photos</h2>
        <div class="row pb-3 pb-md-0">
            <?php
            $res=mysqli_query($conn,"SELECT*FROM files");
            while($row=mysqli_fetch_array($res)){
             
            
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-grid-gutter">
                <div class=" card card-curved-body card-hover">
                    <div class="card-img-top card-img-gradient"><img src="<?php echo "./" .$row['file'];?>" alt="<?php echo $row['name'];?>">
                </div> 
                <div class="card-body text-center">
                    <a href="<?php echo $row['file'];?>" style="..."></a>

                </div>
            </div>
        </div>
          <?php } 
        ?>
    </section>
</body>
</html>