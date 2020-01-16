
<html>
<head>
<title>CARE CANCER</title>
<link rel="stylesheet" href="css\style1.css">
<!-- <link rel="stylesheet" href="css\rating.css"> -->
<link rel="stylesheet" href="css\nav.css">
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
  
<section>
<div class="header">
  <a class="logo" href="home.php"><img src="images\logo.png" width="50px" height="50px" style="padding: 0px;"></a>
  <a class="logo">Cancer Care</a>
  <!-- <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a> -->

 <div class="header-right">

<div class="dropdown">
          <button class="dropbtn active" name="lung_cancer" id="lung_cancer">Lung Cancer
            <i class="fa fa-caret-down"></i>
          </button>
 </div>
<div class="dropdown">
          <button class="dropbtn" name="breast_cancer" id="breast_cancer">Breast Cancer
            <i class="fa fa-caret-down"></i>
          </button>
 </div>
  <div class="dropdown">
          <button class="dropbtn" name="lymphoma" id="lymphoma">Lymphoma
            <i class="fa fa-caret-down"></i>
          </button>
 </div>
  <div class="dropdown">
          <button class="dropbtn" name="leukemia" id="leukemia">Leukemia
            <i class="fa fa-caret-down"></i>
          </button>
  </div>
 </div>

</div>


<!-- Image Slider -->
<div class="slider">
  <div id="slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/Lung-Cancer1.jpg" class="d-block w-100"  style="height: 700px;">
      </div>
      <div class="carousel-item">
        <img src="images/breast-cancer.jpg" class="d-block w-100"  style="height: 700px;">
      </div>
      <div class="carousel-item">
        <img src="images/lukemis-cancer.jpg" class="d-block w-100" style="height: 700px;">
      </div>
       <div class="carousel-item">
        <img src="images/lymphoma-cancer.jpg" class="d-block w-100"  style="height: 700px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>
$(document).ready(function(){
  $("#breast_cancer").click(function(){
        $("#breast_cancer").addClass("dropbtn active");
        $("#lung_cancer").removeClass("active");
        $("#leukemia").removeClass("active");
        $("#lymphoma").removeClass("active");
        $("#img1").css("display: inline;");
        $("#div1").load("sql_data.php",{ tbname : 'breast_cancer'});
  });

  $("#lung_cancer").click(function(){
      $("#lung_cancer").addClass("dropbtn active");
      $("#breast_cancer").removeClass("active");
      $("#leukemia").removeClass("active");
      $("#lymphoma").removeClass("active");
    
      $("#div1").load("sql_data.php",{ tbname : 'lung_cancer'});
  });

  $("#leukemia").click(function(){
      $("#leukemia").addClass("dropbtn active");
      $("#lung_cancer").removeClass("active");
      $("#breast_cancer").removeClass("active");
      $("#lymphoma").removeClass("active");
    
      $("#div1").load("sql_data.php",{ tbname : 'leukemia'});
  });

  $("#lymphoma").click(function(){
      $("#lymphoma").addClass("dropbtn active");
      $("#lung_cancer").removeClass("active");
      $("#breast_cancer").removeClass("active");
      $("#leukemia").removeClass("active");
    
      $("#div1").load("sql_data.php",{ tbname : 'lymphoma'});
  });

  $("#l_rate_btn").click(function(){
      alert("jo");
      var hname = $('#hname').val();
      var rating1 = $('#rating1').val();
      alert(rating1);
      $("#div1").load("update_ratings.php",{tbname: 'lung_cancer', rating1: rating1, hname: hname});
  });

  $("#b_rate_btn").click(function(){
      alert("jo");
      var hname = $('#hname').val();
      var rating1 = $('#rating1').val();
      alert(rating1);
      $("#div1").load("update_ratings.php",{tbname: 'breast_cancer', rating1: rating1, hname: hname});
  });

});
</script>

<div id="div1">

<!-- <button>Get External Content</button> -->



<!-----USER-INFORMATION----->
<!-----about----->
<!-- <div class="about container" id="about">
<div class="row">
<div class="col-md-6 text-center"> -->
  <?php
        //connect to the db

    // if(isset($_GET['breast_cancer'])) {
    //   breast_cancer();
    // }
      $db = mysqli_connect("localhost","root","","einsatz");
      $sql = "SELECT * from lung_cancer order by ratings DESC";
      $result = mysqli_query($db, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo '<div class="about container" id="about">';
        echo '<div class="row">';
        echo '<div class="col-md-6 text-center">';;
        echo "<div class='id_css'>"."Hospital ID : ".$row['id']."</div>";
        echo "<img src='images/".$row['image']."' class='profile-img'>";
        // echo "<p>".$row['ratings']."</p>";
        echo "<div class='rating_css'>"."Rating : ".$row['ratings']."</div>";
  
          echo "</div>";  
          echo '<div class="col-md-6">';
          echo "<p class='info_css'>".$row['info']."<p>";
          echo "</div>";
          echo "</div>";
        echo "</div>";
        echo "<div clas='rating'>";
        echo "</div>";
      }
      echo "<br> <br><br><br><br><br>";

  echo '<div id="form" class="rating_class">';

  echo '<form method="POST" id="rating">';
    
  echo '<p><b>ID of Lung Cancer Hospital :</b></p>';
  echo '<select id="hname" name="hname" style="MARGIN-left : 50px;">';
  echo '<option value="1" id="1"><label for="1">1</label></option>';
  echo '<option value="2" id="2"><label for="1">2</label></option>';
  echo '<option value="3" id="3"><label for="1">3</label></option>';
  echo '<option value="4" id="4"><label for="1">4</label></option>';
  echo '<option value="5" id="5"><label for="1">5</label></option>';
  echo '</select> <br>';

  echo '<p><b><i>Ratings :</i></b></p>';
  echo '<select id="rating1" name="rating1" style="MARGIN-left : 50px;">';
  echo '<option value="1" id="1"><label for="1">1</label></option>';
  echo '<option value="2" id="2"><label for="1">2</label></option>';
  echo '<option value="3" id="3"><label for="1">3</label></option>';
  echo '<option value="4" id="4"><label for="1">4</label></option>';
  echo '<option value="5" id="5"><label for="1">5</label></option>';
  echo '</select> <br>';

  echo '<input type="submit" value="Rate" id="l_rate_btn" style="margin-left:220px">';

  echo ' </form>';
  echo ' </div>';

  ?>
  </div>
</section>


<br><br><br><br><br><br>


   
<!--   <div id="form" class="rating_class">
        <form method="POST" id="rating">
            <p><b>ID :</b></p> -->
          <!-- <div class="custom-select" style="width:200px;"> -->
       <!--      <select id="hname" name="hname" style="MARGIN-left : 50px;">

              <option value="1" id="1"><label for="1">1</label></option>
              <option value="2" id="2"><label for="1">2</label></option>
              <option value="3" id="3"><label for="1">3</label></option>
              <option value="4" id="4"><label for="1">4</label></option>
              <option value="5" id="5"><label for="1">5</label></option>
 
            </select> <br> -->
          <!-- </div> -->
        <!-- 
            <p><b>Ratings :</b></p>

            <select id="rating1" name="rating1" style="MARGIN-left : 50px;">

              <option value="1" id="1"><label for="1">1</label></option>
              <option value="2" id="2"><label for="1">2</label></option>
              <option value="3" id="3"><label for="1">3</label></option>
              <option value="4" id="4"><label for="1">4</label></option>
              <option value="5" id="5"><label for="1">5</label></option>
 
            </select> <br>
        -->

     <!--    <div class="rating" >
          <input type="radio" name="rating1" class="star-1" id="star1" value="5"/>
          <label class="star-1" for="star1"></label>

          <input type="radio" name="rating1" class="star-2" id="star2" value="4"/>
          <label class="star-2" for="star2"></label>
          
          <input type="radio" name="rating1" class="star-3" id="star3" value="3"/>
          <label class="star-3" for="star3"></label>
          
          <input type="radio" name="rating1" class="star-4" id="star4" value="2"/>
          <label class="star-4" for="star4"></label>
          
          <input type="radio" name="rating1" class="star-5" id="star5" value="1"/>
          <label class="star-5" for="star5"></label>
          <span></span>
      </div> <br><br><br>
 -->      
 <!-- <input type="submit" value="Rate" id="l_rate_btn" style="margin-left:375px">



    </form>


    
  </div> -->
<!---------contact------>
<div class="contact" id="contact">
  <div class="container text-center">
    <h1>Contact Us</h1>
    <p class="text-center">For Any Queries</p>
    <div class="row">
      <div class="col-md-4">
        <i class="fa fa-phone"></i>
        <p>+91 9765173746</p>
      </div>
      <div class="col-md-4">
      <i class="fa fa-envelope"></i>
      <p>carecancer@gmail.com</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-internet-explorer"></i>
        <p>www.carecancer.com</p>
      </div>
    </div>
  </div>  
</div>
<div class="footer text-center">
<p>Made with <i class="fa fa-heart-o"></i> by ROB <div id="#show"></div></p>


</div>  
</div>
</div>
</div>
</section>



<!--------smooth-scroll--->

<script src="smooth-scroll"></script>
<script>
  var scroll = new SmoothScroll('a[href*="#"]');
</script>





</body>




</html>