<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
          
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="products.php">Your Site</a>
        </div>
          
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php echo $page_title=="Products" ? "class='active'" : ""; ?> >
                    <a href="products.php">Products</a>
                </li>
                <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                    <a href="cart.php">
                        <?php
                        // query to count all product in cart
                        $query = "SELECT count(*) FROM cart_items WHERE user=1";
                      
                        // prepare query statement
                        $stmt = $con->prepare( $query );
                         
                        // execute query
                        $stmt->execute();
                      
                        // get row value
                        $rows = $stmt->fetch(PDO::FETCH_NUM);
                      
                        // return count
                        $cart_count=$rows[0];
                        ?>
                        Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
          
    </div>
</div>
<!-- /navbar -->