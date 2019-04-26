<html lang="pt">

<!-- inclui os dados do head -->
<?php include('cabecalho.php') ?>
<!-- fecha os dados do head -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    });
</script>


<body>
    <!-- MENU DO SITE -->
    <?php include('menu.php'); ?>
    <!-- FIM DO MENU SITE -->

    <!-- INICIA HEADER -->
    <?php include('header.php'); ?>
    <!-- FIM DO HEADER -->


    <!-- INICIA SESSÂO SOBRE -->
    <?php include('sobre.php'); ?>
    <!-- FECHA SESSÂO SOBRE -->


    <!-- INICIA SESSÃO PRODUTOS -->
    <?php include('produtos.php'); ?>
    <!-- FIM  SESSÃO PRODUTOS -->


    <!-- INICIA SESSÃO FORM-->
    <?php include('form.php'); ?>
    <!-- FIM  SESSÃO FORM -->

    <!-- INICIA FOOTER-->
    <?php include('rodape.php'); ?>
    <!-- FIM  SESSÃO FOOTER -->

</body>

</html>