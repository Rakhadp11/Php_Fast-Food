<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   
</head>
<body>
   
<style>
   header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
    padding: 2rem 9%;
    box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    color: #ff3838;
}

header .logo img {
    padding-right: .5rem;
    color: var(--red);
    width: 58px;
}

header .navbar {
    align-items: center;
    justify-content: center;
    margin-right: 0px;

}

header .navbar a {
    font-size: 20px;
    margin-left: 3rem;
    color: #666;

}

header .navbar a:hover {
    color: var(--red);
    border-bottom: 3px solid #ff3838;
    background-color: #eaeaeaf3;
}

header .icon {
    margin-right: -250px;
    display: flex;
}

header .icon a {
    margin-right: 40px;
    align-items: center;
    justify-content: center;
    color: #ff3838;
}

#cart {
    cursor: pointer;
}

.icon a :hover {
    color: #000;
    transform: rotate(360deg);

}
</style>

<!-- <header class="header">

   <div class="flex">

      <a href="#" class="logo">foodies</a>

      <nav class="navbar">
         <a href="admin.php">add products</a>
         <a href="products.php">view products</a>
      </nav> -->

      <header>

    <a href="../../index.php" class="logo"><img src="../logo-f.png" width="58px" alt=""></a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="../../index.php">Home</a>
        <a href="../../index.php">Special</a>
        <a href="../../index.php">Popular</a>
        <a href="../../index.php">Gallery</a>
        <a href="../../index.php">Hot <i class="fa-solid fa-fire"></i></a>
        <a href="../../index.php">Review</a>
        <a href="../../index.php">Contact</a>
    </nav>
    <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

    <div class="icon">
        <a href="search.html"><i class="fa-solid fa-magnifying-glass fa-2x" id="cart" ></i> 
            <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping fa-2x" id="cart"></i><span><?php echo $row_count; ?></span>
            <a href="#"><i class="fa-solid fa-user fa-2x" id="cart" ></i>
    </div>

</header>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>

</body>
</html>