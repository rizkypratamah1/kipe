<center>
	<?php
	$star=5;
	for($a=1; $a<=$star; $a++){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>
</center>
<br><br><br>
<?php
	$star=5;
	for($a=1; $a<$star; $a++){
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
?>
<br><br><br>
<center>
<?php
for($o = 5; $o >= 1; $o--){
    for($q = 1; $q <= 1  - $o; $q++){
        echo " ";
    }
    for($r = 1; $r < $o;$r++){
        echo "$r";
    }
    for($s = $o; $s >=1; $s--){
        echo "$s";
    }
  echo "<br>";
  }
?>
</center>