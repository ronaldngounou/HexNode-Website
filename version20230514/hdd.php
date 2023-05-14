<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title> Disques HDD </title>
	<link rel="stylesheet" type="text/css" href="monstyle2.css" />
</head>
<body>

<?php 
	include ('header.html');
?>

<h1> Disques HDD </h1>

<div class="product-container">
    <div class="product">
        <h3> Blue Sky </h3>
        <p class="price">€97.99</p>
        
	
            <img src="b.jpg" alt="product1"/>  <br />
            <span class="tick"> Stockage: 2 To <br /> </span>
			<span class="tick"> Système d'exploitation: Mac, Windows <br /> </span>
			<span class="tick"> Antichoc: non <br /></span>
        
        
        <form action="" method="GET">
        Quantité : <input type="number" name="blue" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
			<?php 
		if(isset($_GET["blue"])){
			if($_GET["blue"]==1){
				echo " Vous venez d'ajouter Blue Sky a votre panier"; 
			}
			else{
				echo"Vous venez d'ajouter" .$_GET["blue"].  " Blue Sky <br />";
			}
			if(isset($_SESSION["blue"])){
				$_SESSION["blue"]=$_SESSION["blue"] + $_GET["blue"];
			}
			else{
				$_SESSION["blue"] = $_GET["blue"];
			
			}
		}
?>
	</div>
		

        
    <div class="product">
        <h3>Red Vault</h3>
        <p class="price">€69.99</p>
        
            <img src="r.jpg" alt="product2"> <br />
			<span class="tick"> Stockage: 1 To <br /> </span></li>
            <span class="tick"> Système d'exploitation: Mac, Windows <br /> </span> 
            <span class="tick"> Antichoc: oui <br /> </span></li>
        
        <form action="">
        Quantité : <input type="number" name="red" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
		
		<?php 
		if(isset($_GET["red"])){
			if($_GET["red"]==1){
				echo " Vous venez d'ajouter Red Vault a votre panier"; 
			}
			else{
				echo"Vous venez d'ajouter".$_GET["red"]. " Red Vault <br />";
			}
			if(isset($_SESSION["red"])){
				$_SESSION["red"]= $_SESSION["red"] + $_GET["red"];
			}
			else{
				$_SESSION["red"] = $_GET["red"];
			
			}
		}
?>
	</div>

    
    <div class="product">
        <h3>Black Wave</h3>
        <p class="price">€149.99</p>
        
            <img src="n.jpg" alt="product3"> <br />
            <span class="tick"> Stockage: 5 To<br /> </span>
            <span class="tick"> Système d'exploitation: Windows<br /> </span>
            <span class="tick"> Antichoc: oui <br /> </span>
        
        
        <form action="">
        Quantité : <input type="number" name="black" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
		
		<?php 
		if(isset($_GET["black"])){
			if($_GET["black"]==1){
				echo " Vous venez d'ajouter Black Wave a votre panier"; 
			}
			else{
				echo"Vous venez d'ajouter".$_GET["black"]. " Black Wave <br />";
			}
			if(isset($_SESSION["black"])){
				$_SESSION["black"]=$_SESSION["black"] + $_GET["black"];
			}
			else{
				$_SESSION["black"] = $_GET["black"];
			
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