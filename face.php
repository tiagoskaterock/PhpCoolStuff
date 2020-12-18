<?php

	// coloque o link do perfil ou página aqui
	$link_do_facebook = "https://facebook.com";

?>

<style>
 	#face{
    background-color:#3b5998; /*azul*/
    color:#FFFFFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    box-shadow: 1px 1px 2px #888;
    z-index:1000;
    position:fixed; 
    width:60px;
    height:60px;

    /* mude a posição aqui */
    bottom: 125px;
    right:35px;
    text-decoration: none;
  } 	
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<a style="z-index: 10000000;"	id="face" href="<?php echo $link_do_facebook; ?>" target="_blank">
	<i style="margin-top:16px;" class="fa fa-facebook"></i>
</a>
