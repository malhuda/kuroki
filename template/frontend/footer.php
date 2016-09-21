<span class="icon-up">
    
        <a href="javascript:;" id="cbxc"><i class="fa fa-comments icon-circle"></i></a>
    </span>
     <div id="cbx" style="display:none"><script id="cid0020000133041561648" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 100%;height: 100%;">{"handle":"kurokihq","arch":"js","styles":{"a":"1576c2","b":100,"c":"ffffff","d":"FFFFFF","e":"ffffff","g":"1576c2","h":"ffffff","k":"1576c2","l":"1576c2","m":"1576c2","n":"FFFFFF","p":"9.99","q":"1576c2","r":100,"usricon":0.94,"sbc":"1576c2","fwtickm":1}}</script>
    </div>

    <!-- Le javaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/lazyjson.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.5/masonry.pkgd.min.js"></script>
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
        case 'dashboard=index&nhentai':
        $datajs = "nhentai";
        break;
        case 'dashboard=index&source=hikarinoakari':
        $datajs = "hikarinoakari&type=single";
        break;

       


    }
    if(isset($datajs)) {
     echo '<script src="/assets/js/function.php?data='. $datajs .'"></script>';
    }
    
    ?>
    <script src="/assets/js/spotlight.php?data=girlcelly&count=4"></script>
    
    
    <?php if(isset($key)){ ?>
<script src="/assets/js/function.php?data=girlcelly&container&find=<?php echo $key; ?>"></script>
<script src="/assets/js/function.php?data=hgame&container&find=<?php echo $key; ?>"></script>
<script src="/assets/js/function.php?data=moonkaini&container&find=<?php echo $key; ?>"></script>
<script src="/assets/js/function.php?data=hikarinoakari&container&find=<?php echo $key; ?>&type=single"></script>
<?php } ?>

    <script>
  $(function(){
       if($.cookie){
           //By default, if no cookie, just display.
           $("#cbx").toggle(!(!!$.cookie("toggle-state")) || $.cookie("toggle-state") === 'true');
    }

    $('#cbxc').on('click', function(){
        $("#cbx").toggle();
        //Save the value to the cookie for 1 day; and cookie domain is whole site, if ignore "path", it will save this cookie for current page only;
        $.cookie("toggle-state", $("#cbx").is(':visible'), {expires: 1, path:'/'}); 
});

});
</script>


  </body>
</html>