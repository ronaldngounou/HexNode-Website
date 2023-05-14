<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Disques SSD </title>
	<link rel="stylesheet" type="text/css" href="monstyle2.css" />
</head>
<body>

<?php 
	include ('header.html');
?>

<h1> Disques SSD </h1>

<div class="product-container">
    <div class="product">
        <h3> Blue Boost </h3>
        <p class="price">€99.99</p>
        
	
            <img src="bssd.jpg" alt="product1"/>  <br />
            <span class="tick"> Stockage: 1 To <br /> </span>
			<span class="tick"> Système d'exploitation: Mac, Windows <br /> </span>
			<span class="tick"> Antichoc: non <br /></span>
        
        
        <form action="" method="GET">
        Quantité : <input type="number" name="bluessd" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
			<?php 
		if(isset($_GET["bluessd"])){
			if($_GET["bluessd"]==1){
				echo " Vous venez d'ajouter Blue Boost a votre panier"; 
			}
			else{
				echo"Vous venez d'ajouter" .$_GET["bluessd"].  " Blue Boost <br />";
			}
			if(isset($_SESSION["bluessd"])){
				$_SESSION["bluessd"]=$_SESSION["blue"] + $_GET["bluessd"];
			}
			else{
				$_SESSION["bluessd"] = $_GET["bluessd"];
			
			}
		}
?>
	</div>
		

        
    <div class="product">
        <h3>Red Horizon</h3>
        <p class="price">€57.99</p>
        
            <img src="rssd.jpg" alt="product2"> <br />
			<span class="tick"> Stockage:  500 Go <br /> </span></li>
            <span class="tick"> Système d'exploitation: Mac, Windows <br /> </span> 
            <span class="tick"> Antichoc: oui <br /> </span></li>
        
        <form action="">
        Quantité : <input type="number" name="redssd" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
		
		<?php 
		if(isset($_GET["redssd"])){
			if($_GET["redssd"]==1){
				echo " Vous venez d'ajouter Red Horizon a votre panier"; 
			}
			else{
				echo"Vous venez d'ajouter".$_GET["redssd"]. " Red Horizon <br />";
			}
			if(isset($_SESSION["redssd"])){
				$_SESSION["redssd"]= $_SESSION["redssd"] + $_GET["redssd"];
			}
			else{
				$_SESSION["redssd"] = $_GET["redssd"];
			
			}
		}
?>
	</div>

    
    <div class="product">
        <h3>Black Solid</h3>
        <p class="price">€119.99</p>
        
            <img src="nssd.jpg" alt="product3"> <br />
            <span class="tick"> Stockage: 4 To<br /> </span>
            <span class="tick"> Système d'exploitation: Windows<br /> </span>
            <span class="tick"> Antichoc: oui <br /> </span>
        
        
        <form action="">
        Quantité : <input type="number" name="blackssd" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
		
		<?php 
		if(isset($_GET["blackssd"])){
			if($_GET["blackssd"]==1){
				echo " Vous venez d'ajouter Black Solid a votre panier"; 
			}
			else{
				echo"Vous venez d'ajouter".$_GET["blackssd"]. " Black Solid <br />";
			}
			if(isset($_SESSION["blackssd"])){
				$_SESSION["blackssd"]=$_SESSION["blackssd"] + $_GET["blackssd"];
			}
			else{
				$_SESSION["blackssd"] = $_GET["blackssd"];
			
			}
		}
?>
        
    </div>
</div>


<?php 
	include ('footer.html');
?>


</body>
</html>