<?php
 for( $_m = array(1,1), $_i = 2, $_x = 0; $_i < 10; $_i++ )
    $_m[] =  $_m[$_x++] + $_m[$_x];
    foreach ($_m as $_i => $_f) 
    {
      	print "<br>".$_f;
    }
?>
