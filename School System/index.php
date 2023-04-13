<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type= "text/css" href="css/index.css"><link>
    <link rel="stylesheet" type= "text/css" href="css/style1.css">
    <link rel="stylesheet" type= "text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
  
<!-- <div class="logo-container">
  <img src="Images/schoolbadge.jpg" alt="Logo">
</div> -->
<?php include 'navbar.php';?>
    <section id="hero">
    <h2>Welcome to The Official Website of the Bright Day and Boarding School</h2><br>
</section>
    <div style="text-align: center">
    <img class="logo-container1" src="Images/schoolbadge.jpg" alt="Logo">
</div><br>

<section id="hero">
  
      
      <p><span style="color:green">SCHOOL MOTTO:</span> THE LORD IS ABLE</p>
      <p>A place where students learn, grow, and thrive</p>
      <h2><a href="#about" class="cta">Learn More</a></h2>
    </section><br>


    <!--included slider.php-->
    <div class="slidebody">
     <!--image slider start-->
     <div class="slider">
      <div class="slides"><br><br>
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img width="1000px" src="Images/classroom.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/assembly.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/malestaff.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/femalestaff.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
        <!--manual navigation start-->
        <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
      </div>
    </div>
    <!--image slider end-->
</div><br><br>


    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
    <?php include 'index1.php';?>

<?php include 'footer.php';?>   
</body>
</html>
