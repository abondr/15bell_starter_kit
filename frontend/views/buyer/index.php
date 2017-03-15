<?php
use yii\helpers\Url;
use yii\web\View;
$this->title = 'BUYER';
?>
<section id="slider1">
  <div id="carousel-example-generic" class="carousel fadeIn" data-ride="carousel" data-interval="4000">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
       <img src="<?=Url::to('@storageUrl/img/')."buyersbanner.jpg"?>" class="img-responsive" style="visibility: hidden;">
 
      <div class="carousel-caption">
        <div class="container">
            <div class="col-md-12" >              
                          <p class="animated bounceInUp align-center">
                                    NEXT REVOLUTION IS HERE                              
                          </p>         
            </div>
        </div >
      </div>
    </div>
  </div>
  </div>
</section>



<section id="howit">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin: 40px 0px 40px 0px;">
        <div class="text-center">
          <h2>HO<span>W IT WO</span>RKS</h2>
        </div>
        </div>
        <div class="col-md-12" style="margin: 0px 0px 40px 0px;">
          <div class="col-md-6">
            <div class="steps">
              <img src="<?=Url::to('@storageUrl/img/')."steps.jpg"?>" class="img-responsive">
            </div>
          </div>
          <div class="col-md-6">
            <div class="vedio">
                <a href="#" data-toggle="modal" data-target="#videoModal" data-theVideo="http://www.youtube.com/embed/sGbxmsDFVnE">
                
                <img src="<?=Url::to('@storageUrl/img/')."vedio.jpg"?>" class="img-responsive">
                  
                </a>
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <div>
                                <iframe width="100%" height="350" src="" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
          </div>              
        </div>
      
    </div>
  </div>
</section>

<section id="whyus">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin: 40px 0px 40px 0px;">
       <div class="text-center">
          <h2><span>WHY US</span></h2>
        </div>
      </div>
      <div class="col-md-12" style="margin: 0px 0px 40px 0px;">
        <div class="col-md-3 col-sm-6">
            <h1>
            <div class="innercircle">
                <strong>80%</strong>
            </div>
            </h1>
        </div>
        <div class="col-md-3 col-sm-6">
            <h1>
            <div class="innercircle">
                <strong>80%</strong>
            </div>
            </h1>
        </div>
        <div class="col-md-3 col-sm-6">
            <h1>
            <div class="innercircle">
                <strong>80%</strong>
            </div>
            </h1>
        </div>
        <div class="col-md-3 col-sm-6">
           <h1>
            <div class="innercircle">
                <strong>80%</strong>
            </div>
            </h1>
        </div>
        
      </div>
    </div>
  </div>
</section>
<section id="faq">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin: 40px 0px 40px 0px;">
       <div class="text-center">
          <h2>FAQ'S</h2>
          <p>frequently asked questions</p>
        </div>
      </div>
      <div class="col-md-12" style="margin: 0px 0px 40px 0px;">
        <div class="col-md-6 col-sm-6">
        <div class="part">
          <h4><span>1</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor </p>
          <h4><span>2</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. </p>
          <h4><span>3</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehend.</p>
          <h4><span>4</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velum.</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="part">
          <h4><span>5</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.</p>
          <h4><span>6</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
          <h4><span>7</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h4><span>8</span><img src="<?=Url::to('@storageUrl/img/')."bullet.png"?>">&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="strip">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin: 0px 0px 10px 0px;">
        <div class="text-center">
          <h1>LET US KNOW YOUR LOCATION TO SEARCH PROPERTY.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span><button class="btn" type="submit">CLICK HERE</button></span></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="latestpro">
 
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin: 40px 0px 40px 0px;">
       <div class="text-center">
              <h2>LAT<SPAN>EST PROPE</SPAN>RTY</h2>
      </div>
      </div>
            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel" style="margin: 0px 0px 40px 0px;">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="inneritem">
                            <h1>Residential Apartment</h1>
                                <div class="photo">
                                    <img src="<?=Url::to('@storageUrl/img/')."property1.jpg"?>" class="img-responsive" alt="..." />
                                </div>
                                <div class="info">
                                    <h2>Lorem Ipsum is simply dummy text.</h2>
                                    <p><span>Jan 18, 2017 at 12.55pm </span> &nbsp;&nbsp;&nbsp;&nbsp;by admin/0</p>
                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text.Lorem Ipsum is simply dummy text.</p>
                                    <button class="btn" type="submit">READ MORE</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="inneritem">
                            <h1>Studio Apartment</h1>
                                <div class="photo">
                                    <img src="<?=Url::to('@storageUrl/img/')."property2.jpg"?>" class="img-responsive" alt="..." />
                                </div>
                                <div class="info">
                                    <h2>Lorem Ipsum is simply dummy text.</h2>
                                    <p><span>Jan 18, 2017 at 12.55pm </span> &nbsp;&nbsp;&nbsp;&nbsp;by admin/0</p>
                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text.Lorem Ipsum is simply dummy text.</p>
                                    <button class="btn" type="submit">READ MORE</button>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="inneritem">
                            <h1>Residential Apartment</h1>
                                <div class="photo">
                                    <img src="<?=Url::to('@storageUrl/img/')."property3.jpg"?>" class="img-responsive" alt="..." />
                                </div>
                                <div class="info">
                                    <h2>Lorem Ipsum is simply dummy text.</h2>
                                    <p><span>Jan 18, 2017 at 12.55pm </span> &nbsp;&nbsp;&nbsp;&nbsp;by admin/0</p>
                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text.Lorem Ipsum is simply dummy text.</p>
                                    <button class="btn" type="submit">READ MORE</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="inneritem">
                            <h1>Studio Apartment</h1>
                                <div class="photo">
                                    <img src="<?=Url::to('@storageUrl/img/')."property4.jpg"?>" class="img-responsive" alt="..." />
                                </div>
                                <div class="info">
                                    <h2>Lorem Ipsum is simply dummy text.</h2>
                                    <p><span>Jan 18, 2017 at 12.55pm </span> &nbsp;&nbsp;&nbsp;&nbsp;by admin/0</p>
                                    <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text.Lorem Ipsum is simply dummy text.</p>
                                    <button class="btn" type="submit">READ MORE</button>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="explore">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="margin: 40px 0px 40px 0px;">
       <div class="text-center">
              <h2>E<SPAN>XPLOR</SPAN>E</h2>
      </div>
      </div>
      <div class="col-md-12" style="margin: 0px 0px 40px 0px;">
        <div class="col-md-4 col-sm-4">
          <div class="start_img">
            <img src="<?=Url::to('@storageUrl/img/')."xplore3.png"?>" alt="...">
          </div>
          <p>Residential Property</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="start_img">
            <img src="<?=Url::to('@storageUrl/img/')."xplore2.png"?>" alt="...">
          </div>
          <p>Commercial Property</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="start_img">
            <img src="<?=Url::to('@storageUrl/img/')."xplore1.png"?>" alt="...">
          </div>
          <p>Other Property</p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
$this->registerJs("function autoPlayYouTubeModal() {
      var trigger = $('body').find(\"[data-toggle='modal']\");
      trigger.click(function () {
          var theModal = $(this).data('target'),
              videoSRC = $(this).attr('data-theVideo'),
              videoSRCauto = videoSRC + '?autoplay=1';
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
          $('.modal').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }", View::POS_READY);
$this->registerJs("(function($) {
  var c4 = $(\".innercircle\");

  c4.circleProgress({
    startAngle: -Math.PI / 6 * 3,
    value: 0.5,
    lineCap: \"round\",
    fill: {color: \"#00c5d1\"}

  });

  // Let's emulate dynamic value update
  setTimeout(function() { c4.circleProgress('value', 0.7); }, 1000);
  setTimeout(function() { c4.circleProgress('value', 1.0); }, 1100);
  setTimeout(function() { c4.circleProgress('value', 0.5); }, 2100);

  
})(jQuery);
", View::POS_READY);
?>