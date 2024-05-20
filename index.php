<?php 
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
} 
?>

<?php  
$menu = [
    ['name' => 'FishBall', 'price' => 30, 'quantity' => 10],
    ['name' => 'Kikiam', 'price' => 40, 'quantity' => 10],
    ['name' => 'CornDog', 'price' => 50, 'quantity' => 10],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            background-color: #F0FFF0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h5 {
            font-weight: normal;
        }
        .center {
            background-color: #097969; 
            border: 5px;
            padding: 10px;
            margin: 25px auto;
            width: 60%;
            box-sizing: border-box;
            border-radius: 0px;
            text-align: center;
            color: #FFFFFF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            display: flex;
            justify-content: space-around;
        }
        .list {
            color: #7FFF00;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #F0FFF0;
            border-radius: 16px;
            margin: 25px auto;
            width: 100%;
            padding: 10px;
            text-align: justify;
            box-sizing: border-box;
            border: 5px solid #50C878;
            font-family: Arial, sans-serif;
        }
        a {
            color: #4B0082;
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        a:visited {
            color: #4B0082;
        }
        a:hover {
            color: #8B008B;
            text-decoration: underline;
        }
        a:active {
            color: #696969;
        }
    </style>
</head>
<body>
    <div class="center">
        <div class="center-middle">
            <h1>Welcome, <?php echo $_SESSION['username'];?>!</h1>
            <h5>Click to <a href="logout.php">Logout</a>.</h5>
            <p>Here is the menu for today and forever.</p>
            <div class="list">
                <ul>
                    <?php foreach ($menu as $item) : ?>
                        <li><?= htmlspecialchars($item['name']); ?> - <?= htmlspecialchars($item['price']); ?> PHP</li>
                    <?php endforeach; ?>
                </ul>   
            </div>

            <form method="POST" action="">
                <p>
                    <label for="order">Choose your order: </label>
                        <select name="order" id="order">
                            <option value="">Select an option</option>
                            <?php foreach ($menu as $item) : ?>
                                <option value="<?= htmlspecialchars($item['name']); ?>"><?= htmlspecialchars($item['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                </p>
                <p>
                    Quantity:
                    <input type="text" name="quantity">
                </p>
                <p>
                    Cash:
                    <input type="text" name="cash">
                </p>
                <p>
                    <input type="submit" value="Submit" name="Submit">
                </p>
            </form>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $order = isset($_POST['order']) && $_POST['order'] != "" ? $_POST['order'] : null;
                    $quantity = isset($_POST['quantity']) && trim($_POST['quantity']) !== "" ? floatval($_POST['quantity']) : 0;
                    $cash = isset($_POST['cash']) && trim($_POST['cash']) !== "" ? floatval($_POST['cash']) : 0;

                    if (!$order) {
                        echo "<p>Please choose from the available choices! </p>";
                    } else {
                        if ($quantity <= 0) {
                            echo "<p>Please enter a valid quantity.</p>";
                        } elseif ($cash <= 0) {
                            echo "<p>Please enter the amount of cash you're paying with.</p>";
                        } else {
                            foreach ($menu as $item) {
                                if ($item['name'] === $order) {
                                    $totalCost = $item['price'] * $quantity;
                                    if ($cash < $totalCost) {
                                        echo "<p>I'm sorry, but you have insufficient payment.<br>You need exactly <b>" . ($totalCost - $cash) . " PHP</b> more.</br></p>";
                                    } elseif ($cash == $totalCost) {
                                        echo "<p>Thank you! Your payment is exact. Enjoy your $order!</p>";
                                    } else {
                                        echo "<p>Here is your change: <b>" . ($cash - $totalCost) . " PHP</b>.<br>Enjoy your $order and order again!</br></p>";
                                    }
                                    break;
                                }
                            }
                        }
                    }
                }
                ?>
        </div>
    </div>
</body>
</html>
