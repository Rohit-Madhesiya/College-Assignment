<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Cart</title>
</head>

<body>
  <h2>Online Shopping</h2>
  <div class="home"> <a href="index.php">HOME</a></div>

  <div class="tab-container">
    <table>
      <tr>
        <th>IMAGE</th>
        <th>NAME</th>
        <th>Per Item Price</th>
        <th>No. of Items</th>
        <th>PRICE</th>
        <th></th>
      </tr>
      <tr>
        <td><img src='' class='image' alt='item img '></td>
        <td>name</td>
        <td>Rs. price</td>
        <td>NULL UNIT</td>
        <td>Rs.</td>
        <td>
          <form action='buy_item.php' method='post'>
            <input type='hidden' name='cart_id' value=''>
            <button type='submit' name='remBtn'>Remove</button>
          </form>
        </td>
      </tr>
      <tr>
        <td colspan='5' style='font-size:22px;font-weight:800; color:gray;text-align:center;'>Cart is Empty!</td>
      </tr>

    </table>
    <form action='buy_item.php' method='post'>
      <div class='final'>
        <label for='totalAmt'>Total Amount (Rs.)</label>
        <input type='submit' value='BUY' name='submit'>
      </div>
    </form>
  </div>


</body>

</html>