<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
      if (!$_POST["name"]) {

          $error .="The name field is required.<br>";
        
      }
        
        if (!$_POST["email"]) {
            
            $error .= "An email address is required.<br>";
            
        }
        
        if (!$_POST["content"]) {
            
            $error .= "The content field is required.<br>";
            
        }
        
        if (!$_POST["subject"]) {
            
            $error .= "The subject is required.<br>";
            
        }
        
        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            
            $error .= "The email address is invalid.<br>";
            
        }
        
        if ($error != "") {
            
            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';
            
        } 
        else {

        
            
            $emailTo = "akshaysargar789@gmail.com";

            $name    = $_POST['name'];
            
            $subject = $_POST['subject'];
            
            $content = $name . "Wrote you the following:" ."\n\n" . $_POST['content'];
            
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {


                header( "refresh:5;url=Sargar.php" );
                $successMessage = $name.'<div class="alert alert-success" role="alert"> Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                $error = $name. '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
            
        }
        
        
        
    }

?>




<!DOCTYPE html>
<html lang="en">
  
  <head>
    
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Akshay Sargar</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="sargar.css">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Advent+Pro' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>    
    
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
  
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    
      
     
      
  </head>
  
  

  <body data-spy="scroll" data-target="#navbar">

  <div id="navbar">
  
  <nav class="navbar navbar-default center navbar-fixed-top" id="navbar">

    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">&#9776;</button>

    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">

      <a class="navbar-brand" href="#"></a>

      <div class="navbar-inner">

        <ul class="nav navbar-nav nav-pills">

          <li class="nav-item">
            <a class="nav-link active" href="#jumbotron">HOME <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#about">ABOUT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#skills">SKILLS</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">CONTACT</a>
          </li>

        </ul>

      </div>

    </div>

  </nav>
  </div>
     

    
    <div class=" jumbotron" id="jumbotron">

      <h1  class="display-2">Akshay Sargar</h1>

      <hr id="hr1">
  
      <p id="jumbotext">Web Designer <i class="fa fa-star" style="color:#610B0B;" aria-hidden="true"></i> Web Developer</p>
      
      <p id="jumbotext1">Turning <b class="idea">IDEAS</b> into <b class="idea">REALITY </b>!</p>
             
    </div>

    

    <div id="about">
  
      <h2 class="display-4 ">About Me</h2>

        <div class="card-deck-wrapper">
          
          <div class="col-sm-4">
  
            <div class="card card-inverse1">
            
              <img class="card-img-top" src="sargar.jpg" alt="Card image cap">
                
                <div class="card-block">
                  
                  <h4 class="card-title text-xs-center">Akshay Sargar<br/></h4>
                  <h6 class="card-title text-xs-center">Web Developer</h6>
                
                </div>
          
            </div>
          
          </div>
        
        </div>


        <div id="wrapper">

          <p class="lead" >Good things comes to those who believe.Better things comes to those who are Patient and the best things come to those who Dont Give Up.</p>

          <p>Hello everyone, I'm a Web Developer from Pune,India.I hold a bachelor's degree in Information Technology from Pune University. </p>

          <p>I currently am a freelancer spending most of my time crafting and working on awesome projects.I work on high end and luxury responsive webdesign using Wordpress.My skill set below will let you know about my capabilitity to make best websites for you. I am also very honest about my skill set and will only propose something I can deliver to an exceptional standard.I treat each project I work on as if it were my own business.</p>

          <p>I like working with people, rather than for people. I like to see the people that hire me as friends I can get on with.I bring out the best out of me to create the best suitable website the ideas that you bring to me and I'll happily quote a competitive price and an honest timeframe.</p>

        </div>
        
    </div>




    <div id="skills">

      <h2 class="display-4 ">My Skills</h2>
      
        <div class="progress-radial progress-90">
          <div class="overlay">90%</div>
        </div>

      <div class="progress-radial progress-85">
        <div class="overlay">85%</div>
      </div>

      <div class="progress-radial progress-70">
        <div class="overlay">70%</div>
      </div>

      <div class="progress-radial progress-75">
        <div class="overlay">75%</div>
      </div>

      <div class="progress-radial progress-80">
        <div class="overlay">80%</div>
      </div>

      <div id="progress">

      <p>HTML</p>

      <p>CSS</p>

      <p>jQuery</p>

      <p>PHP</p>

      <p>MySQL</p>

      </div>


      <div class="row">
        
        <div class="col-sm-6">
    
          <div class="card1 card-inverse2 card-block1">
            
            <h3 class="card-header1  text-xs-center"><img class="logo1" src="bootlogo.jpg">Bootstrap</h3>
              
              <p class="card-text text-xs-center"> Bootstrap is an increasingly popular front-end development framework making your websites responsive meaning website will automatically adjust to your mobile screen resolution.It ensures consistency as results are uniform across various platforms.Bootstarp can be tailor made according to specifications of your projects.Use of Bootstrap will be there in your projects.</p>
    
          </div>
        
        </div>


        <div class="col-sm-6">
          
          <div class="card1 card-inverse3 card-block1">
            
            <h3 class="card-header2 text-xs-center"><img class="logo2" src="wordlogo.jpg">Wordpress</h3>
              
              <p class="card-text text-xs-center">Wordpress is an online, open source website creation tools and the most powerful blogging and website content management system.It contains thousands of professionally designed themes and plugins to add complex business features to your website.A theme will be chosen according to your specifications making your idea or brand more marketable.</p>
      
          </div>
        
        </div>
      
      </div>

    </div>




    <div id="contact">

      <h2 class="display-4 ">Contact Me</h2>

      
    
      <div id="contactForm">  



        <form method="post" action="Sargar.php#form-anchor" id="form-anchor">
          
          
          <fieldset class="form-group">
            
            <label for="subject">Name</label> 
            <input type="text" class="form-control" id="name" name="name" >
          
          </fieldset>
      
          
          <fieldset class="form-group">
            
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        
          </fieldset>

          
          <fieldset class="form-group">
            
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject" >
      
          </fieldset>
      
          
          <fieldset class="form-group">
            
            <label for="exampleTextarea">Enter Message</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
          
          </fieldset>
      
          
          <button type="submit" id="submit" class="btn btn-primary">Submit</button>

        </form>

      </div>

      <div id="contactMe">

      <h5>My Contact Details</h5>

      <p> <i class="fa fa-envelope-o" style="font-size: 19px; margin:0px 5px 0px 5px;" aria-hidden="true"></i> <b>Email:</b> akshaysargar789@gmail.com</p>

      <p> <i class="fa fa-mobile" style="font-size: 25px; margin: 0px 9px 0px 10px;" aria-hidden="true"></i> <b>Phone:</b> 9011491580</p>

      <p> <i class="fa fa-home" style="font-size: 20px; margin: 0px 3px 0px 6px;" aria-hidden="true"></i> <b> Address :</b><span> 3/22 , Gokhalenagar Near Senapati Bapat Road , Pune-411016</span></p>
      
      </div>
 

    </div>


    <script>

          $('body').scrollspy({ target: '#navbar' })


          $("form").submit(function(e) {
              
              var error = "";

               if ($("#name").val() == "") {
                  
                  error += "The name field is required.<br>"
                  
              }
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })

    </script>
  

  
  </body>

</html>