<?php
$name = "muzamil nabi ";

echo "<h1 style = 'color:green'> Asalamu alaikum   </h1>"


?>


<!-- we can also use php inside html  -->

<?php
 $name = "muzamil nabi";
?>

<h1 style = 'color : blue'> 



 Asalamu alaikum <?php 
 
  echo $name . "&nbsp"; echo "what is going on in your life ". "&nbsp";
   echo $name
 
 ?>



 

</h1>


 <!-- we can also give the dynamic styles in php  -->


 <?php
 $h2_color = "red";
 ?>

 <h2 style = "color :<?php echo $h2_color; ?> "> <?php echo "what is going on"; ?></h2>
 <h2 style = "color :<?php echo $h2_color; ?> "> <?php echo " is everything fine  "; ?></h2>
<h2 style = "color :<?php echo $h2_color; ?> "> <?php echo " what are you doing nowadays  "; ?></h2>
 
 
