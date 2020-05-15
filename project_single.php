<?php

include 'pagecontent/database.php';

if (mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT * FROM jobs_en WHERE id = " . $_GET['id'];

$return_jobs = mysqli_query($conn, $sql);

if ($return_jobs === false ){
    echo mysqli_error($conn);
} else {
$jobs = mysqli_fetch_assoc($return_jobs);

}



include ("pagecontent/head.php");


?>


    <body>

        <?php include ("pagecontent/preloader.php"); ?>

            <!---Animation-->
            <canvas id="canvas" width="1950px" height="800px"></canvas>
            <canvas id="canvasbg" width="1950px" height="800px"></canvas>


            <!--Wrapper-->
            <div id="wrapper" class="margLTop  margLBottom">

                <!--Container-->
                <div class="container">


                    <div class="row ">




                        <div class="col-md-12">



                            <!--Portfolio single-->
                            <section id="portfolio" class="bgWhite ofsInBottom ">

                                <!--Portfolio -->
                                <div class="portfolio">

                                    <!--Main title-->

                                    <div class="main-title work-title">
                                        <h1><?= $jobs["job"]?></h1>
                                        <br>
                                        <h2 style="align-content: right;"><a href="./index.php">Back to Home Page</a></h2>
                                        <div class="divider">
                                            <div class="zigzag large clearfix " data-svg-drawing="yes">
                                                <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
			<path d="M1.357,12.26 10.807,2.81 20.328,12.332
				29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
			</svg>
                                            </div>
                                        </div>
                                    </div>

                                    <!--End main title-->




                                    <!--Content-->
                                    <div class="content">

                                        <!--Block content-->
                                        <div class="block-content ">


                                            





                                            <div class="block-single margBottom clearfix">
                                                <div class="col-md-10 col-md-offset-1">
                                                    <h1 class="large-title margBSSmall"> <?= $jobs["title"]?>  </h1>
                                                    
                                                    <p class="margBSSmall"> 
                                                        <p><?= $jobs["description"]?> </p>
                                                    </p>

                                                    <hr>

                                                    <ul>

                                                        <li>Job :
                                                            <?= $jobs["job"]?>
                                                        </li>

                                                        <li>Client :
                                                            <strong><?= $jobs["client"]?></strong>
                                                        </li>

                                                        <li>Platform :
                                                            <strong><?= $jobs["platform"]?></strong>
                                                        </li>
                                                        
                                                        <li>On Site SEO :
                                                            <strong><?= $jobs["onsiteseo"]?></strong>
                                                        </li>

                                                        <li>SEO :
                                                            <strong><?= $jobs["seo"]?></strong>
                                                        </li>

                                                        <li>Year :
                                                            <strong><?= $jobs["year"]?></strong>
                                                        </li>

                                                        <li>Status :
                                                            <strong><?= $jobs["status"]?></strong>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>


                                            <div class="block-single margBottom clearfix">

                                                <div class="col-md-10 col-md-offset-1">
                                                    <img src="img/portfolio/<?= $jobs["image"]?>" alt="">
                                                </div>
                                            </div>


                                            

                                        </div>
                                        <!--End block content-->



                                    </div>
                                    <!--End content-->






                                    <!--Button-->
                                    <div class="button ofsInTop tCenter">

                                        <div class="divider">
                                            <div class="zigzag large clearfix " data-svg-drawing="yes">
                                                <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
		<path d="M1.357,12.26 10.807,2.81 20.328,12.332
			29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
		</svg>
                                            </div>
                                        </div>


                                        <!--Row-->
                                        <div class="row ">


                                            <div class="col-md-12">
                                                <a class="but opc-3 ico" href="https://www.<?= $jobs["link"]?>" target="_blank">view project online</a>

                                            </div>



                                        </div>
                                        <!--End row-->


                                    </div>
                                    <!--End button-->




                                </div>
                                <!--End portfolio-->

                            </section>
                            <!--End portfolio single-->












                        </div>


                    </div>
                    <!--End  row-->


                </div>
                <!--End  container-->




            </div>
            <!--End wrapper-->



            <!--Footer Javascript-->
            <?php  include 'pagecontent/footerJavascript.php';?>

    </body>

    </html>