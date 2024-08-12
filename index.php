<html>

<head>
    <title>Dhanu's Cake Mart</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="Images\Icon.png">
    <link rel="stylesheet" href="templates/headerstyle.css">
</head>

<body>

    <?php require "templates/header.php" ?>
    
    <div>
        <h1>Dhanu's Cake Mart</h1>
        <h3>We bake, design and deliver custom cakes, birthday cakes, cupcakes, anniversary cakes, wedding cakes</h3>
        <img src="images/Pictures/305892822_550282193556311_752937289794835039_n.jpg"
            alt="Intro of buisness with a cake image" class="intro_img">
        <p>Dhanu's Cake Mart is a bakery shop located in Maspotha. You can order cakes with custom cake designs that
            meets your choice. We bake, design and deliver custom cakes, birthday cakes, cupcakes, aniversary cakes,
            wedding cakes and jar cakes. We hand-draw designs, like sapceships and polar bears, with vanilla buttercream
            so everything actually tastes good. </p>
    </div>
    <div>
        <p>The prizes of our cakes are listed in the table below. The
            prizes are listed for 1kg cakes. <br></p>
        <table>
            <tr>
                <th>Item</th>
                <th>Prize</th>
            </tr>
            <tr>
                <td>Butter Cake without icing</td>
                <td>Rs. 2000</td>
            </tr>
            <tr>
                <td>Butter Cake with icing</td>
                <td>Rs. 2800</td>
            </tr>
            <tr>
                <td>Butter Cake with icing & decorations</td>
                <td>Rs. 3500</td>
            </tr>
            <tr>
                <td>Chocolate Cake with icing</td>
                <td>Rs. 3000</td>
            </tr>
            <tr>
                <td>Chocolate Cake with icing & decorations</td>
                <td>Rs. 4000</td>
            </tr>
            <tr>
                <td>Butter Cup Cake - Qty(6)</td>
                <td>Rs. 2000</td>
            </tr>
            <tr>
                <td>Chocolate Cup Cake - Qty(6)</td>
                <td>Rs. 2500</td>
            </tr>
        </table>
    </div><br>
    <div>
        <label id="counter">0</label><br>
        <div class="counterbtns">
            <button id="decreasebtn">Decrease</button>
            <button id="resetbtn">Reset</button>
            <button id="increasebtn">Increase</button>
            <script src="index.js"></script>
        </div>
    </div>

</body>

</html>