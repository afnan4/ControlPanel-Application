
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<html>
<head>
<title> VIWE page  </title>
<link rel="stylesheet" type="text/css" href="ControPanelStyle.css">

</head>
<!-- Start of the home page  -->
<body>
  <header>
<a href="Home.html"><img src="pictures/logo.png" id="home" alt="Website logo"></a>
<hr>
<h1 style="text-align: center;">
 <span style=" color:  #b3003b ;">Smart</span>
 <span style=" color:  #008080;">Methods</span>
 <br>  
 <span style=" color: #008080 ;"> الأساليب</span>
 <span style=" color: 	#b3003b ;"> الذكية </span>  
</h1>
</header>

<?php
$hostname="localhost";
$username="root";
$password="";
$database="Control_Panel";
 
$conn=mysqli_connect($hostname,$username,$password,$database);
echo '<script type="text/JavaScript">  
     
     </script>' 
;

?>
<br>

<form action="insert.php" method="get" id="ControlPanel" >
  <label for="Right"> Right :</label><br>
  <input type="text" id="Right" name="Right" ><br>
  <label for="Left">Left :</label><br>
  <input type="text" id="Left" name="Left" ><br>
   <label for="Forwards">Forwards:</label><br>
  <input type="text" id="Forwards" name="Forwards" ><br><br>
  
  <input type="submit" name = "submit" value="Start"style="background-color :  #adebad ;  ">
  <input type="submit" name = "submit" value="Save" style="background-color : #d1b3ff ; ">
  <input type="submit" name = "submit" value="Delete" style="background-color : #e08585 ; " >

</form> 

  
  
 <?php
 
 if(isset($_GET["submit"])) {

 @$a=$_GET['submit'];
 
 @$r=$_GET['Right'];
 @$l=$_GET['Left'];
 @$f=$_GET['Forwards'];

if ($a === "Save"){
$s ="INSERT INTO `Move_Commands`(`Forward`,`right`,`left`) VALUES ('$f','$r' ,'$l')";
$y = mysqli_query($conn,$s);
 }//end of save
 if ($a === "Delete"){
$s ="DELETE FROM `Move_Commands`";
$y = mysqli_query($conn,$s);
 }//end of save
 
}
?>
<br> 
</div> 
<br>
 <footer>
  <p>Designed by: Afnan saad <br>
  <a href="mailto:afnan.sha98@gmail.com">afnan.sha98@gmail.com</a></p	
</footer>
 