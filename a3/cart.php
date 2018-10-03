
<?php

require_once("tools.php");

top_module();
?>

<main>
    <div class="cart-container">
        <h1>Cart:</h1>
        <?php
        echo "<div class=\"totalContainer\">";
        if(isset($_SESSION["cart"])){
            echo "<p class=\"totalPrice\">Total Price: $" . printSessionCart("cart") . "</p></div>";
            $html = <<<"OUTPUT"
            <div class="cart-buttons">
                <form action="processing.php" method="post" id="clearForm">
                    <input type="hidden" name="clear">
                </form>
                <button type="submit" name="clear" form="clearForm" class="clear">Clear Cart</button>
                <a href="checkout.php" class="checkout-button"><button type="button" name="checkout">Checkout</button></a>
            </div>
OUTPUT;
            echo $html;
        }
        else{
            echo "<h1>No Items in Cart</h1>";
        }
        ?>
    </div>
</main>

<?php end_module(); ?>