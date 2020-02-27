
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
header("Refresh: $sec; url=$page");


?>







<form action="gonder.php" method = "post" enctype="multipart/form-data">



Ad: <input type="text" name='ad'>
<br>
<hr>
Hakkimda: <br>
<textarea require name="hakkimda" id="" cols="50" rows="10"></textarea>
<hr>
<br>
<select name="meslek" id="">

<option name="" value="">--- Sec ---</option>
<option name="" selected  value="web-developer">web-developer</option>
<option name="" value="front-end">Front end</option>
<option name="" value="Back-end">Backend</option>



</select>
<br>
<br>
Cinsiyyet: <br>
 Erkek: <label ><input type="radio" checked name="cinsiyyet" value="erkek" id=""> </label>  <br>
 Kadin: <label > <input type="radio" name="cinsiyyet" value="kadin" id=""></label>

<hr>
<br>
 <label > <input checked type="checkbox" name="ilgi-alani[]" value="PHP" id=""></label> PHP
 <label > <input checked type="checkbox" name="ilgi-alani[]" value="HTML" id=""></label> HTML
 <label > <input type="checkbox" name="ilgi-alani[]" value="CSS" id=""></label> CSS

 <br><hr>
 
 Foto: <br>
 <input type="file" name="profile-photo" id="">
  
  <br>
  <hr>
  <button type="submit">Gonder</button>

</form>