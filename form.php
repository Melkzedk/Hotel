
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bc1 = floatval($_POST["bc1"]);
        $bc2 = floatval($_POST["bc2"]);
        $withdraw = floatval($_POST["withdraw"]);
        $ali = floatval($_POST["ali"]);
        $shiko = floatval($_POST["shiko"]);
        $malika = floatval($_POST["malika"]);
        $cashUsed = floatval($_POST["cash_used"]);
        
        // Calculate till
        $till = ($bc2 + $withdraw) - $bc1;
        
        // Calculate cash
        $cash = $ali + $shiko + $malika;
        
        // Calculate total cash
        $totalCash = $cash + $till;
        
        // Calculate profit
        $profit = $totalCash - $cashUsed;
        
        echo "<h2>Profit: $".$profit."</h2>";
    }
    ?>