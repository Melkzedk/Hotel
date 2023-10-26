<!DOCTYPE html>
<html>
<head>
    <title>Hotel Profit System</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Hotel Profit System</h1>
    <form method="post" action="form.php">
        <label for="bc1">Today's M-Pesa Balance:</label>
        <input type="text" name="bc1" id="bc1" required><br><br>
        
        <label for="bc2">Yesterday's M-Pesa Balance:</label>
        <input type="text" name="bc2" id="bc2" required><br><br>

        <label for="withdraw">Withdraw Amount:</label>
        <input type="text" name="withdraw" id="withdraw" required><br><br>
        
        <label for="ali">Ali:</label>
        <input type="text" name="ali" id="ali" required><br><br>
        
        <label for="shiko">Shiko:</label>
        <input type="text" name="shiko" id="shiko" required><br><br>
        
        <label for="malika">Malika:</label>
        <input type="text" name="malika" id="malika" required><br><br>
        
        <label for="cash_used">Cash Used in:</label>
        <input type="text" name="cash_used" id="cash_used" required><br><br>
        
        <input type="submit" value="Calculate Profit">
    </form>
    
</body>
</html>
