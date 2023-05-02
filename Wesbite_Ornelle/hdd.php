<?php include 'header.php';?>

<h1>Disques HDD</h1>

<div class="product-container">
  <div class="product">
    <h3>Quotidien</h3>
    <p class="price">€225.99</p>
    <img src="images/content/product1.PNG" alt="product1">
    <ul>
      <li class="tick"><span>5 TB </span></li>
      <li class="tick"><span>7mm x 15mm</span></li>
      <li class="tick"><span>Computations rapides</span></li>
    </ul>
    <form action="hdd.php">
      Quantité : <input type=number name="hdd1" min="0" max ="99" class="qty" value="1" /> <br />
      <button class="button"> Ajouter au panier </button>
      <?php echo "<script>localStorage.setItem('hdd1', '$');</script>"; ?>
    </form>
  </div>
  
  <div class="product">
    <h3>Standard</h3>
    <p class="price">€188.99</p>
    <img src="images/content/product2.jpg" alt="product2">
    <ul>
      <li class="tick"><span>4 TB </span></li>
      <li class="tick"><span>7mm x 15mm</span></li>
      <li class="tick"><span>Computations rapides</span></li>
    </ul>
    <form action="">
      Quantité : <input type=number name="hdd2" min="0" max ="99" class="qty" value="1" /> <br />
      <button class="button"> Ajouter au panier </button>
    </form>
  </div>
  
  <div class="product">
    <h3>Pro</h3>
    <p class="price">€489.99</p>
    <img src="images/content/product3.PNG" alt="product3">
    <ul>
      <li class="tick"><span>8 TB </span></li>
      <li class="tick"><span>7mm x 15mm</span></li>
      <li class="tick"><span>Computations rapides</span></li>
    </ul>
    <form action="">
      Quantité : <input type=number name="hdd3" min="0" max ="99" class="qty" value="1" /> <br />
      <button class="button"> Ajouter au panier </button>
    </form>
  </div>
</div>


<!-- <feature-compare>
    <quotidien-level>
        <h3>Quotidien</h3>
        <p class="price">€225.99</p>
        <ul>
            <img src="images/content/product1.PNG" alt="product1">
            <li class="tick"><span>5 TB </span></li>
            <li class="tick"><span>7mm x 15mm</span></li>
            <li class="tick"><span>Computations rapides</span></li>
        
        </ul>
        <form action="hdd.php">
        Quantité : <input type=number name="hdd1" min="0" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Ajouter au panier </button>
            <?php echo "<script>localStorage.setItem('hdd1', '$');</script>"; ?>
        </form>
        
    </quotidien-level>
    <standard-level>
        <h3>Standard</h3>
        <p class="price">€188.99</p>
        <ul>
            <img width = 44% src="images/content/product2.jpg" alt="product2">
            <li class="tick"><span>4 TB </span></li>
            <li class="tick"><span>7mm x 15mm</span></li>
            <li class="tick"><span>Computations rapides</span></li>
        
        </ul>
        <form action="">
        Quantité : <input type=number name="hdd2" min="0" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Ajouter au panier </button>
        </form>

    </standard-level>
    <pro-level>
        <h3>Pro</h3>
        <p class="price">€489.99</p>
        <ul>
            <img src="images/content/product3.PNG" alt="product3">
            <li class="tick"><span>8 TB </span></li>
            <li class="tick"><span>7mm x 15mm</span></li>
            <li class="tick"><span>Computations rapides</span></li>
        
        </ul>
        <form action="">
        Quantité : <input type=number name="hdd3" min="0" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Ajouter au panier </button>
        </form>
        
    </pro-level>
</feature-compare> -->


<?php include 'footer.php';?>