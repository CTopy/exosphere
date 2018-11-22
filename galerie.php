<!DOCTYPE html>
<html>
    <?php
        require_once("php/head.php");
    ?>
    
    <body>
        <header class="navGalerie">
            <h1>Atelier Exosphère</h1>
            <?php 
                require_once("php/header.php");
            ?>
        </header>
        
        <main>
            <p class="intro">Découvrez toutes les réalisations de l'Atelier Exosphère depuis sa création. Une brève description vous permettra de découvrir l'histoire de chaque couteau, ainsi que les matériaux avec lesquels ils sont fabriqués</p>
            
            <section class="galerie">
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                    <input type="image" src="images/supprimer.png" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
                <div class="image">
                    <img src="images/homepage/vente.jpg" />
                </div>
            </section>
        </main>
        
        <?php
        require_once("php/footer.php");
        ?>
        
        <!-- SCRIPTS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/Vue.js"></script>
    </body>
</html>