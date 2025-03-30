<!DOCTYPE html>
<html>

<head>
    <title>Python Calculation Output</title>
</head>

<body>
    <h1>Enter Values for Calculation</h1>
    <form method="post">
        <label for="a">a:</label>
        <input type="number" name="a" required><br><br>

        <label for="b">b:</label>
        <input type="number" name="b" required><br><br>

        <label for="c">c:</label>
        <input type="number" name="c" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = escapeshellarg($_POST['a']);
        $b = escapeshellarg($_POST['b']);
        $c = escapeshellarg($_POST['c']);

        // Execute Python and capture lines as array
        $output = [];
        exec("python3 calculate.py $a $b $c", $output);

        // Check for errors
        if (isset($output[0]) && str_starts_with($output[0], "Error")) {
            echo "<p style='color:red;'>".$output[0]."</p>";
        } else {
            echo "<h2>Step-by-Step Result</h2>";
            echo "<p>a = {$output[0]}, b = {$output[1]}, c = {$output[2]}</p>";
            echo "<p>Step 1: c³ = {$output[3]}</p>";
            echo "<p>Step 2: √(c³) = {$output[4]}</p>";
            echo "<p>Step 3: √(c³) / a = {$output[5]}</p>";
            echo "<p>Step 4: (√(c³) / a) × 10 = {$output[6]}</p>";
            echo "<p><strong>Final Result: b + previous = {$output[7]}</strong></p>";
        }
    }
    ?>
</body>

</html>
