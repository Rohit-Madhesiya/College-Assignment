<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>ONLINE LAPTOP'S SHOPPING | MyLaptop.com </title>
</head>

<body>
  <nav id="navbar">
    <div id="logo">
      <img src="./img/unnamed.jpg" alt="MyLaptop.com">
    </div>
    <ul>
      <li class="item"><a href="#"> LogIn</a></li>
      <li class="item"><a href="#"> Home</a></li>
      <li class="item"><a href="#"> Services</a></li>
      <li class="item"><a href="#"> About Us </a></li>
      <li class="item"><a href="#">Contact Us </a></li>
    </ul>
    <div class="rightNav">
      <div class="admin"> <a href="admin.php">ADMIN PANEL</a></div>
      <div class="cart"> <a href="cart.php">CART</a></div>
    </div>
  </nav>
  <section id="home">
    <h1 class="h-primary"> Welcome to MyLaptom.com</h1>
    <p> i am dharmendra welcome to my website</p>
    <p> i am dharmendra welcome to my website mendra welcome to my website</p>

  </section>


  <div class="container">
    <?php
    include('db_connection.php');
    $query = "SELECT * FROM `item_details`";
    $res = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
      $name = $row['name'];
      $price = $row['price'];
      $imgName = $row['image'];
      $id = $row['id'];
      $targetFolder = "/php_assignment/Shopping Cart/items/";
      $imgSrc = $targetFolder . $imgName;

      echo "
      <form action='buy_item.php' method='post' enctype='multipart/form-data'>
      <input type='hidden' name='id' value='$id'>
      <div class='itemCard'>
        <img src='$imgSrc' alt='Item Image $id'>
        <label for='itemName'>$name</label>
        <label for='price'>PRICE:  Rs.$price</label>
          <div class='add'>
            <input type='number' name='noItem' id='noItem' value='1' max='10' min='1'>
            <input type='submit' value='Add To Cart' name='adder' id='adder'>
          </div>
          <button class='btn'>Order Now</button>
      </div>
      </form>";
    }
    ?>
  </div>
</body>

</html>