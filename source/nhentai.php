<?php if(isset($_GET['all'])) { 
   





?>


<div id="containerdata" style="padding-bottom:20px;">
<div id="load-containerdata" style="display:none">


<div class="row">
        <div class="col-xs-12 col-sm-6 col-md-12">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-2">
                        <img src="{{image}}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-10">
                        <h3>
                            <b>{{judul1}}</b></h3>
                        <h5>
                        {{judul2}}
                        </h5>    

                        
                        <p>
                        {{parodies}}</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>
</div>



<?php
} else {
?>

<div id="containerdata" style="padding-bottom:20px;">
<div id="load-containerdata" style="display:none">
<div class="col-md-3 col-sm-3 item">
<div class="thumbnails">
            <div class="aspect aspect--16x9">
            <img height="150px" style="background('assets/images/loading.svg') no-repeat;" class="imgja" src="{{image}}" alt="">
            <div class="overlay-show">
            <div class="show-link-center">
            <a href="/{{link}}">Read</a><br>
            </div></div>
             <p class="textthumb">
              <a style="float:right; color:#fff" href="javascript:(function(){var jsScript=document.createElement('script');
jsScript.setAttribute('type','text/javascript');
jsScript.setAttribute('src', '?dashboard=add_b&url={{name}}&amp;title={{name}}&amp;image={{image}');
document.getElementsByTagName('head')[0].appendChild(jsScript);
})();"><i class="fa fa-bookmark"></i></a>

            </p>
             <div class="caption">
             <p style="font-size:12px">{{name}}</p>
            
</div></div></div></div>









</div>

</div>

<?php } ?>