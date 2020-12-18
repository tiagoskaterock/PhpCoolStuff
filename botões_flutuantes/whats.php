<?php 

	// digite aqui o número do WhatsApp
	$numero = "5554996911874"; 
	$mensagem = "Olá, Tiago seu lindão!";

?>

<style>
	#whats{
		        background-color:#25d366; /*verde*/
		        color:#FFFFFF;
		        border-radius:50px;
		        text-align:center;
		        font-size:30px;
		        box-shadow: 1px 1px 2px #888;
		        z-index:1000;
		        position:fixed; 
		        width:60px;
		        height:60px;

		        /* bottom ou top da tela */
		        bottom: 215px; 
		        right:35px;
		        text-decoration: none;
		      } 	
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<a style="z-index: 10000000; " id="whats" href="https://wa.me/<?php echo $numero; ?>?text=<?php echo $mensagem; ?>!" target="_blank"
>
	<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>