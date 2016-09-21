

    <!-- Le javaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   
    <script src="/assets/js/bootstrap.min.js"></script>

    <script src="/assets/js/lazyjson.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

    <?php
    $args = explode('/', rtrim($_SERVER['QUERY_STRING'], '/'));
    $method = array_shift($args);
    switch($method) {
        default:
        $datajs = "";
        break;
        case 'dashboard=index&source=girlcelly':
        $datajs = "girlcelly";
        break;
        case 'dashboard=index&source=hgame':
        $datajs = "hgame";
        break;
        case 'dashboard=index&source=moonkaini':
        $datajs = "moonkaini";
        break;
        case 'dashboard=index&source=hikarinoakari':
        $datajs = "hikarinoakari&type=single";
        break;

    }
    echo '<script src="/assets/js/function.php?data='. $datajs .'&mobile"></script>';
    ?>
    <script src="/assets/js/spotlight.php?data=girlcelly&count=4"></script>
    <script>
$(document).ready(function(){
    $("#nav-o").click(function(){
        $("body").addClass("hidden");
    });
    $("#nav-c").click(function(){
        $("body").removeClass("hidden");
    });
});
</script>
  </body>
</html>