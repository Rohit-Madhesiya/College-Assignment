<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Online Shopping</title>
</head>

<body>
  <h2>Online Shopping</h2>
  <div class="admin"> <a href="admin.php">ADMIN PANEL</a></div>
  <div class="cart"> <a href="cart.php">CART</a></div>

  <div class="container">

    <form action='buy_item.php' method='post' enctype='multipart/form-data'>
      <input type='hidden' name='id' value=''>
      <div class='itemCard'>
        <img src='' alt='Item Image'>
        <label for='itemName'>name</label>
        <label for='price'>PRICE: Rs.</label>
        <div class='add'>
          <input type='number' name='noItem' id='noItem' value='1' max='10' min='1'>
          <input type='submit' value='Add To Cart' name='adder' id='adder'>
        </div>
      </div>
    </form>

  </div>
</body>

</html>