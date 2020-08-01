

<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Raleway');

body{font-family: 'Raleway', sans-serif ;}

.tab-style{
font-size:20px;
width:50%;
background-color:#f2f2f2;
  text-align:center;
  

}
.nav-tabs > li > a {
    margin-right: 0px;
    color:grey;
}



.group2 { 
    position: relative; 
    margin-top: 16px; 
}

.btn-block{margin-top:20px;
margin-bottom:20px;
font-size:18px;}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {   background-color:#e5ecf4;
color:#4a89dc;}

.login-shadow{-webkit-box-shadow: 5px -5px 6px 0px rgba(82,82,82,0.52);
-moz-box-shadow: 5px -5px 6px 0px rgba(82,82,82,0.52);
box-shadow: 5px -5px 6px 0px rgba(82,82,82,0.52);
  z-index:1;
   
}

.signup-shadow{-webkit-box-shadow: -5px 0px 6px 0px rgba(82,82,82,0.52);
-moz-box-shadow: -5px -5px 6px 0px rgba(82,82,82,0.52);
box-shadow: -5px 0px 6px 0px rgba(82,82,82,0.52);
  
}


.modal-header{background-color:#e5ecf4;}

.group { 
    position: relative; 
    margin-top: 30px; 
}


.input {
    font-size: 18px;
    padding: 10px 10px 10px 5px;
    -webkit-appearance: none;
    display: block;
    background: none;
    color: #636363;
    width: 100%;
    border: none;
    border-radius: 0;
    border-bottom: 1px solid #757575;
}

.input:focus { outline: none; }


/* Label */

.label {
    color: #757575; 
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: -10px;
    top: 10px;
    transition: all 0.2s ease;
}


/* active */

.input:focus ~ .label, .input.used ~ .label {
    top: -20px;
  transform: scale(.75); left:-15px;
    /* font-size: 14px; */
    color: #4a89dc;
}


/* Underline */

.bar {
    position: relative;
    display: block;
    width: 100%;
}

.bar:before, .bar:after {
    content: '';
    height: 2px; 
    width: 0;
    bottom: 1px; 
    position: absolute;
    background: #4a89dc; 
    transition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

.input:focus ~ .bar:before, .input:focus ~ .bar:after { width: 50%; }


/* Highlight */

.highlight {
    position: absolute;
    height: 60%; 
    width: 100px; 
    top: 25%; 
    left: 0;
    pointer-events: none;
    opacity: 0.5;
}


/* active */

.input:focus ~ .highlight {
    animation: inputHighlighter 0.3s ease;
}


@media  screen and (max-width: 767px) and (min-width: 576px){
  #myModal{margin-left:20%;
            margin-right:20%;}

  #forgot-password{margin-left:20%;
            margin-right:20%;}
} 


@media screen and (min-width: 768px) {
    
    #myModal .modal-dialog  {width:500px;}
  
  #forgot-password .modal-dialog{width:500px;}
  
  .modal-body{padding-left:50px;
              padding-right:50px;}
}


.modal-body{background-image:url('http://res.cloudinary.com/rinma/image/upload/v1500489833/Airplane-flying-desktop-pictureproba2_rlcced.jpg');
background-size:cover;
z-inedx:4;}

em{display:none;}



</style>

<!-- Button trigger modal -->

<div class="container"> 
    
    <br>
    <center>
   
  <button class="btn btn-primary btn-lg" href="#signup" data-toggle="modal" data-target=".log-sign">Sign In/Register</button>
  </center>
  <br>
    

  </div>

<!-- Modal -->
<div class="modal fade bs-modal-sm log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="bs-example bs-example-tabs">
            <ul id="myTab" class="nav nav-tabs">
              <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a></li>
              <li id="tab2" class=" tab-style "><a href="#signup" data-toggle="tab">Sign Up</a></li>
              
            </ul>
        </div>
      <div class="modal-body">
        <div id="myTabContent" class="tab-content">
       
        <div class="tab-pane fade active in" id="signin">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
              
               <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
              
              
            <!-- Password input-->
            <div class="group">
<input required="" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label>
    </div>
<em>minimum 6 characters</em>

           <div class="forgot-link">
            <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
            </div>
            

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-primary btn-block">Log In</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
          
          
        <div class="tab-pane fade" id="signup">
            <form class="form-horizontal">
            <fieldset>
            <!-- Sign Up Form -->
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">First Name</label></div>
            
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Last Name</label></div>
            
            <!-- Password input-->
            <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email</label></div>
            
            <!-- Text input-->
            <div class="group">
<input required="" class="input" type="password"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Password</label></div>
              <em>1-8 Characters</em>
            
              <div class="group2">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Country</label></div>
            
            
            
            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="confirmsignup"></label>
              <div class="controls">
                <button id="confirmsignup" name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
              </div>
            </div>
            </fieldset>
            </form>
      </div>
    </div>
      </div>
      <!--<div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </center>
      </div>-->
    </div>
  </div>
</div>
  
   

<!--modal2-->

<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
        <fieldset>
        <div class="group">
<input required="" class="input" type="text"><span class="highlight"></span><span class="bar"></span>
    <label class="label" for="date">Email address</label></div>
        
        
        <div class="control-group">
              <label class="control-label" for="forpassword"></label>
              <div class="controls">
                <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send</button>
              </div>
            </div>
          </fieldset>
            </form>
          
      </div>
    </div>
    
  </div>
</div>


<script type="text/javascript">
            $(window, document, undefined).ready(function() {

  $('.input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
  });
  
  });


$('#tab1').on('click' , function(){
    $('#tab1').addClass('login-shadow');
   $('#tab2').removeClass('signup-shadow');
});

$('#tab2').on('click' , function(){
    $('#tab2').addClass('signup-shadow');
   $('#tab1').removeClass('login-shadow');


});
        </script>