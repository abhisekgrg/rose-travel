<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include "header.php";
    include "includes/dbconnection.php";
    ?>
    <div class="section-banner flex ">

<div class="box container-banner flex align-item justify-content gradient-overlay">
  <div class="banner-title flex flex-direction justify-content align-items row-gap-10">
    <h2 class="banner-h2 flex justify-content">Blog</h2>
    <h3 class="banner-h3"> <a style="color:white;text-decoration:none;" href="index.php"> Home</a> / Blog</h3>
  </div>
</div>
</div>
    
<div class="section-space">
    <div class="box grid-container">
       
        <div class="card">
          <img src="images/banner.jpg" class="card-img-top" alt="..." width="100%" style="object-fit:cover;height:220px;">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="mt-3 mb-2">Learn More</button>
          </div>
        </div>
        <div class="card">
          <img src="images/banner.jpg" class="card-img-top" alt="..." width="100%" style="object-fit:cover;height:220px;">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="mt-3 mb-2">Learn More</button>
          </div>
        </div>
        <div class="card">
          <img src="images/banner.jpg" class="card-img-top" alt="..." width="100%" style="object-fit:cover;height:220px;">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button class="mt-3 mb-2">Learn More</button>
          </div>
        </div>
    </div>
</div>
    <?php
    $sql="SELECT * FROM `blogs`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      echo '<div class="section-space">';
      echo '<div class="box grid-container">';
      echo '<div class ="card">';
    echo '<div class="card-img-top " >';
    echo'<img src="uploads/' . $row['image']. '" alt="" width="100%" >'.'</div>';
    echo'<div class="card-body">';
    echo '<div class="card-text">'.$row['title'].'</div>';
    echo '<div class="card-text">'.$row['Excerpt']. '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    }
    ?>
<?php

include "footer.php";
?>
</body>
</html>