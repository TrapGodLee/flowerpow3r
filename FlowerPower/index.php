<?php 

    $active='Home';
    include("includes/header.php");

?>

    <!-- slider -->
    <div class="container" id="slider">

    <div class="col-md-12">
        <!-- Carousel -->
        <div class="carousel slide" id="myCarousel" data-ride="carousel">

            <ol class="carousel-indicators">

                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

            </ol><!--ordered list carousel einde -->

        <div class="carousel-inner"><!-- carousel-inner begin-->

            <?php

                $get_slides = "select * from slider LIMIT 0,1";

                $run_slider = mysqli_query($con,$get_slides);

                while($row_slides=mysqli_fetch_array($run_slider)){

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    
                        <div class='item active'>
                    
                            <img src='admin_area/slides_images/$slide_image'>

                        </div>
                    ";
                }

                $get_slides = "select * from slider LIMIT 1,3";

                $run_slider = mysqli_query($con,$get_slides);

                while($row_slides=mysqli_fetch_array($run_slider)){

                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];

                    echo "
                    
                        <div class='item'>
                    
                            <img src='admin_area/slides_images/$slide_image'>

                        </div>
                    ";
                }

            ?>

        </div><!-- carousel-inner einde-->

        <!-- CAROUSEL BUTTON/KNOP VORIGE EN VOLGENDE BEGIN-->
        <a href="#myCarousel" class="left carousel-control" data-slide="prev">

            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Vorige</span>

        </a>

        <a href="#myCarousel" class="right carousel-control" data-slide="next">

            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Volgende</span>

        </a><!-- CAROUSEL BUTTON/KNOP VORIGE EN VOLGENDE EINDE-->

        </div><!-- carousel einde -->

    </div>

    </div>  <!-- slider einde -->

    <!-- ADVANTAGES BEGIN -->
    <div id="advantages">

        <div class="container">

            <div class="same-height-row">

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                            <i class="fa fa-heart"></i>

                        </div>

                        <h3><a href="#">Wij houden van onze klanten</a></h3>

                            <p>Flowerpower heeft voor ieder seizoen boeketten en past haar online collectie aan om u een boeket voor elke gelegenheid te bieden. 
                                Wij bieden vaste collecties zoals beterschapsboeketten, rouwboeketten, bruidsboeketten, bloemstukken voor speciale gelegenheden. 
                                We hebben bloemen in thema’s zoals voor Valentijnsdag, Pasen, Kerst, Moederdag, Secretaressedag en noem maar op. 
                                Heeft u geen geschikt boeket gevonden voor uw gelegenheid? Wij maken ook persoonlijke bestellingen op maat en in uw budget. 
                                 U kunt onze prachtige boeketten online bestellen én wij bezorgen ze persoonlijk thuis.</p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                    <i class="fa fa-tag"></i>

                </div>

                    <h3><a href="#">Beste prijzen</a></h3>

                    <p>Vergelijk ons met andere bloemen winkels. </p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia, repellat! Veniam illo ex ducimus ipsum autem consequuntur iure consequatur libero optio voluptatum. Sint eligendi impedit harum iste totam nemo! Rerum sed tempore amet. Provident ipsam, debitis nobis, quos deserunt non esse et, error quaerat accusamus laboriosam est iste saepe. Possimus facere, dolorum modi quia eveniet accusamus ipsam labore, at soluta adipisci repellat nisi, quae perferendis. Harum, sed accusantium, dolorum quas quis ducimus deserunt earum placeat blanditiis repellendus error mollitia provident amet, tempora inventore reprehenderit nobis? </p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">

                            <i class="fa fa-thumbs-up"></i>

                        </div>

                        <h3><a href="#">100% Originale producten</a></h3>

                        <p>Wij leveren de beste biologische planten</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit labore repudiandae dolorem! Obcaecati rem reprehenderit possimus inventore alias maiores quam, dicta iure commodi earum ducimus deserunt mollitia? Odio excepturi, ut itaque facilis eligendi modi cupiditate iusto quasi impedit, suscipit rem aliquam natus magni sequi voluptatum ipsa minima incidunt! Facilis quam eligendi ex minus consectetur doloremque. Neque vitae at quis nihil quidem, sint odio? Doloremque, neque? Itaque assumenda ad nulla expedita, accusantium ipsum corporis commodi, beatae culpa illum ipsam, quia fugit.</p>

                    </div>

                </div> <!-- EINDE ADVANTAGES -->

            </div>

        </div>

    </div>

    <!-- HOT BEGIN -->
    <div id="hot">

        <div class="box">

            <div class="container">

                <div class="col-md-12">

                    <h2>
                        Onze nieuwe producten
                    </h2>

                </div>

            </div>

        </div>

    </div><!-- HOT EINDE-->

    <!-- CONTENT BEGIN -->
    <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->

                <!-- content producten met function word hier opgevraagd door middel van wat er word opgeslagen in db -->
                <?php

                    getPro();

                ?>
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->

   <?php

        include("includes/footer.php");

   ?>
   
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
  
</body>
</html>