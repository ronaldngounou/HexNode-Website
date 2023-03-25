<?php include 'header.php';?>

<h1>Disques HDD</h1>

<feature-compare>
    <quotidien-level>
        <h3>Quotidien</h3>
        <p class="price">€225.99</p>
        <ul>
            <img src = "https://www.seagate.com/content/dam/seagate/migrated-assets/www-content/product-content/products/hard-drives/shared/images/barracuda-2-5-drives-card-layout-products-tile-2-image.png/_jcr_content/renditions/large"/>
            <li class="tick"><span>5 TB </span></li>
            <li class="tick"><span>7mm x 15mm</span></li>
            <li class="tick"><span>Computations rapides</span></li>
            <!-- <li class="cross"><span>Lent au Demarrage</span></li> -->
        
        </ul>
        <form action="">
        Quantité : <input type=number name="hdd1" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
        
    </quotidien-level>
    <standard-level>
        <h3>Standard</h3>
        <p class="price">€188.99</p>
        <ul>
            <img width = 44%  src = "https://m.media-amazon.com/images/I/61hkUbJbZmL._AC_SX425_.jpg"/>
            <li class="tick"><span>4 TB </span></li>
            <li class="tick"><span>7mm x 15mm</span></li>
            <li class="tick"><span>Computations rapides</span></li>
        
        </ul>
        <form action="">
        Quantité : <input type=number name="hdd2" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>

    </standard-level>
    <pro-level>
        <h3>Pro</h3>
        <p class="price">€489.99</p>
        <ul>
            <img src = "https://www.seagate.com/content/dam/seagate/migrated-assets/www-content/product-content/products/hard-drives/shared/images/barracuda-3-5-drives-card-layout-products-tile-1-image.jpg/_jcr_content/renditions/large" />
            <li class="tick"><span>8 TB </span></li>
            <li class="tick"><span>7mm x 15mm</span></li>
            <li class="tick"><span>Computations rapides</span></li>
        
        </ul>
        <form action="">
        Quantité : <input type=number name="hdd3" min="1" max ="99" class="qty" value="1" /> <br />
            <button class="button"> Acheter </button>
        </form>
        
    </pro-level>
</feature-compare>


<?php include 'footer.php';?>