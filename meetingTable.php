<?php
/* this is for the time table
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//use SQl get the unfesible, used and free time.
//remember 4,5,4, then 3(4), 8(10), and 13 are unfeisble, and should be check
//7*13=92
$unfesible = Array(1,4,8);
$used = array(2,3,5,80);
$usedName = array('hhh', 'frfrf', 'defrf');
$x = 0;
$str = 'var tableC = document.getElementById("tableC");cols = tableC.rows[0].cells;';
for($x=0; $x<=91; $x++){
    $colT = $x % 7 + 1;
    $rowT = (int)($x / 7);
    if($rowT >= 9){
        $rowT = $rowT + 2;
    }elseif ($rowT >=4) {
        $rowT = $rowT + 1;
    }
   if(in_array($x, $used)){
      $str = $str.'cols = tableC.rows['.$rowT.'].cells;cols['.$colT.'].style.backgroundColor="#9A9CFF";cols['.$colT.'].innerHTML= "abc";';
    }elseif(in_array($x, $unfesible)){
        $str = $str.' cols = tableC.rows['.$rowT.'].cells;cols['.$colT.'].style.backgroundColor="#E7E7E7";';
    }/*else{
        $str = $str.' cols = tableC.rows['.$rowT.'].cells;cols['.$colT.'].hover(function(){cols['.$colT.'].style.backgroundColor="#9A9CFF"}, function(){cols['.$colT.'].style.backgroundColor="#FFFFFF"});';
    }*/
} 

  echo '<script language="javascript">';
  echo $str;
  echo '</script>';
?>

