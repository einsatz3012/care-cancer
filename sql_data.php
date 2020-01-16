<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script>
$(document).ready(function(){
  $("#l_rate_btn").click(function(){
      alert("Rating button of lung Cancer");
      var hname = $('#hname').val();
      var rating1 = $('#rating1').val();
      alert(rating1);
      $("#div1").load("update_ratings.php",{tbname: 'lung_cancer', rating1: rating1, hname: hname});
  });

  $("#b_rate_btn").click(function(){
      alert("Rating button of breast Cancer");
      var hname = $('#hname').val();
      var rating1 = $('#rating1').val();
      alert(rating1);
      $("#div1").load("update_ratings.php",{tbname: 'breast_cancer', rating1: rating1, hname: hname});
  });

  $("#le_rate_btn").click(function(){
      alert("Rating button of Leukemia Cancer");
      var hname = $('#hname').val();
      var rating1 = $('#rating1').val();
      alert(rating1);
      $("#div1").load("update_ratings.php",{tbname: 'leukemia', rating1: rating1, hname: hname});
  });

  $("#ly_rate_btn").click(function(){
      alert("Rating button of Lymphoma Cancer");
      var hname = $('#hname').val();
      var rating1 = $('#rating1').val();
      alert(rating1);
      $("#div1").load("update_ratings.php",{tbname: 'lymphoma', rating1: rating1, hname: hname});
  });

});
</script>


<?php
		$tbname = $_POST['tbname'] ;
	  
      // $sql = "SELECT * from $tbname";
          $sql = "SELECT * FROM $tbname ORDER BY ratings DESC";

      $result = mysqli_query($db, $sql);

     while ($row = mysqli_fetch_array($result)) {
        echo '<div class="about container" id="about">';
        echo '<div class="row">';$db = mysqli_connect("localhost","id11175476_rob","carecancerbyrob","id11175476_carecancer");
        echo '<div class="col-md-6 text-center">';
        // echo "<p>".$row['id']."</p>";
        echo "<div class='id_css'>"."Hospital ID : ".$row['id']."</div>";
        echo "<img src='images/".$row['image']."' class='profile-img'>";
          // echo "</div>";
        echo "<div class='rating_css'>"."Rating : ".$row['ratings']."</div>";
  
          echo "</div>";  
          echo '<div class="col-md-6">';
          echo "<p class='info_css'>".$row['info']."<p>";
          echo "</div>";
          echo "</div>";
        echo "</div>";
}


if ($tbname == "lung_cancer") {
  echo "<br> <br><br><br><br><br>";

  echo '<div id="form" class="rating_class">';

  echo '<form method="POST" id="rating">';
    
  echo '<p><b>ID of Lung Cancer Hospial :</b></p>';
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

}

if ($tbname == "breast_cancer") {
  echo "<br> <br><br><br><br><br>";

  echo '<div id="form" class="rating_class">';

  echo '<form method="POST" id="rating">';
    
  echo '<p><b>ID of breast Cancer Hospial :</b></p>';
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

  echo '<input type="submit" value="Rate" id="b_rate_btn" style="margin-left:220px">';

  echo ' </form>';
  echo ' </div>';

}

if ($tbname == "leukemia") {
  echo "<br> <br><br><br><br><br>";

  echo '<div id="form" class="rating_class">';

  echo '<form method="POST" id="rating">';
    
  echo '<p><b>ID of Leukemia Hospial :</b></p>';
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

  echo '<input type="submit" value="Rate" id="le_rate_btn" style="margin-left:220px">';

  echo ' </form>';
  echo ' </div>';

}

if ($tbname == "lymphoma") {
  echo "<br> <br><br><br><br><br>";

  echo '<div id="form" class="rating_class">';

  echo '<form method="POST" id="rating">';
    
  echo '<p><b>ID of Lymphoma Hospial :</b></p>';
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

  echo '<input type="submit" value="Rate" id="ly_rate_btn" style="margin-left:220px">';

  echo ' </form>';
  echo ' </div>';

}
//    echo "<br> <br><br><br><br><br>";
//   echo '<div id="form" class="rating_class">';
//         echo '<form method="POST" id="rating">';
        
//           echo '<p><b>ID :</b></p>';
//           echo '<div class="custom-select" style="width:200px;">';
//             echo '<select id="hname" name="hname" style="MARGIN-left : 50px;">';

//               echo '<option value="1" id="1"><label for="1">1</label></option>';
//               echo '<option value="2" id="2"><label for="1">2</label></option>';
//               echo '<option value="3" id="3"><label for="1">3</label></option>';
//               echo '<option value="4" id="4"><label for="1">4</label></option>';
//               echo '<option value="5" id="5"><label for="1">5</label></option>';
 
//             echo '</select> <br>';
//           echo '</div>';
          
              

//         echo '<p><b>Ratings :</b></p>';
//         // echo '<input type="number" name="rating1">';
       

//         echo '<div class="rating" >';
//           echo '<input type="radio" name="rating1" class="star-1" id="star1" value="5"/>';
//           echo '<label class="star-1" for="star1"></label>';

//           echo '<input type="radio" name="rating1" class="star-2" id="star1" value="4"/>';
//           echo '<label class="star-2" for="star2"></label>';
          
//           echo '<input type="radio" name="rating1" class="star-3" id="star1" value="3"/>';
//           echo '<label class="star-3" for="star3"></label>';
          
//           echo '<input type="radio" name="rating1" class="star-4" id="star1" value="2"/>';
//           echo '<label class="star-4" for="star4"></label>';
          
//           echo '<input type="radio" name="rating1" class="star-5" id="star1" value="1"/>';
//           echo '<label class="star-5" for="star5"></label>';
//           echo '<span></span>';
//     echo '  </div> <br><br><br>';
//     echo '  <input type="submit" value="Rate" id="rate_btn" style="margin-left:220px">';



//    echo ' </form>';


    
// echo ' </div>';
?>