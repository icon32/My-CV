        <!--Portfolio Tab-->
        <section id="portfolio" class="bgWhite ofsInBottom">

            <!--Portfolio -->
            <div class="portfolio">

                <!--Main title-->

                    <div class="main-title">
                        <h1>my works</h1>
                            <div class="divider">
                                    <div class="zigzag large clearfix "  data-svg-drawing="yes" >
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

                <!--Works-->
                <div class="works">
                    
                    
                    
                    
                <!--Row-->	
                <!---
                <div class="row">
                    
                    <div class="block-filter tCenter">
                        <ul id="category" class="filter">
                            <li><a data-filter="all" href="#" class="active">all</a></li>
                            <li><a data-filter="web" href="#">Web design</a></li>
                            <li><a data-filter="graphic" href="#">Graphic design</a></li>
                            <li><a data-filter="motion" href="#">Motion Graphic</a></li>
                    </ul>

                    </div>
                    
                    
                </div>
                ---->
                <!--End row-->
                
                
                
                
                
                <!--Row-->
                <div class="row">
                    
                    <div class="divider-m tCenter margTSSmall margBSmall clearfix">
                        <div class="col-md-12">
                            <div class="zigzag medium clearfix "  data-svg-drawing="yes" >
        <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="45" height="5" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <path d="M1.357,12.26 10.807,2.81 20.328,12.332
        29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
        </svg>
        </div>
                        </div>
                    </div>
                </div>
                <!--End row-->
                
                
                
                
                <!--Row-->	
                <div class="row">
                
                    <ul class="work">


                    <?php foreach ($jobs as $jobs): ?>  
  
  
                        <li class="col-md-6">
                      
                            <!--Item-->	
                            <div class="item web">
                                <a  href="project_single.php?id=<?= $jobs["id"]?>">

                                    <div class="desc">

                                    <h3 class="proj-desc"> <?= $jobs['title']; ?>
                                        <span class="zigzag work clearfix "  data-svg-drawing="yes" >
                                            <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="25" height="10" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                            <path d="M1.357,12.26 10.807,2.81 20.328,12.332
                                            29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
                                            </svg>
                                        </span>

                                        
                                        <span><?= $jobs["job"]?></span>
                                    </h3>

                                    </div>
                                    
                                    <img alt="" src="img/portfolio/<?= $jobs["image"]?>">

                                </a>

                            </div>
                    <!--End item-->	
                    
                    </li>
                    
                
                    <?php endforeach ?>
                    
                    </ul>
                    
                    </div>
                    <!--End row-->

                    
                    
                    


                </div>
                <!--End works-->
                
                <div class="clearfix"></div>

                </div>
                <!--End block content-->
                
                <!--  -->
                
                </div>
                <!--End content-->
                
                
                
                
                
                
                <!--Button-->
                <div class="button ofsInTop tCenter clearfix">
                        
                        <div class="divider">
                                <div class="zigzag large clearfix "  data-svg-drawing="yes" >
        <svg xml:space="preserve" viewBox="0 0 69.172 14.975" width="37" height="28" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <path d="M1.357,12.26 10.807,2.81 20.328,12.332
        29.781,2.879 39.223,12.321 48.754,2.79 58.286,12.321 67.815,2.793 "  style="stroke-dasharray: 93.9851, 93.9851; stroke-dashoffset: 0;"/>
        </svg>
        </div>
        </div>
                    
                    
                    <!--Row-->	
                    <div class="row ">
                        
                        
                        <div class="col-md-12">
                            <a class="but opc-1 ico" href="#">Download my cv</a>
                            
                            
                        </div>
                    
                    
                    
                        </div>
                        <!--End row-->


                    </div>
                    <!--End button-->

                


                    </div>
                    <!--End portfolio-->
                    
        </section>
            <!--End portfolio tab-->