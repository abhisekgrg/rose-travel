<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utility.css">
</head>

<body>
    <?php
    include "header.php";
    ?>
    <!-- Sub banner  -->
    <div class="section-banner flex ">

        <div class="box container-banner flex align-item justify-content gradient-overlay">
            <div class="banner-title flex flex-direction justify-content align-items row-gap-10">
                <h2 class="banner-h2 flex justify-content">Destinations</h2>
                <h3 class="banner-h3"> <a style="color:white;text-decoration:none;" href="index.php"> Home</a> /
                    Destinations
                </h3>
            </div>
        </div>
    </div>
    <!-- Destinations  -->
    <div class="section-space">
        <div class="box flex flex-direction row-gap-50">
            <h1>Destinations</h1>
            <div class="destination-block flex column-gap-30">
                <div class="destination-leftside">

                </div>
                <div class="destination-rightside">
                    <div class="destination-post flex flex-direction row-gap-20">
                        <div class="flex align-item column-gap-20">
                            <img src="images/chitwan.png" alt="" class="destination-post-img">
                            <div class="flex flex-direction row-gap-10">
                                <h2>Phewa Lake</h2>
                                <!-- category -->
                                <h4>Pokhara</h4>
                                <p>Phewa Lake is situated in the heart of Pokhara, the second-largest city
                                    in Nepal. It covers an area of about 5.23 square kilometers and is
                                    surrounded by lush hills and the Annapurna mountain range.</p>
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="destination-year-block flex justify-content-sb">
                            <div class="destination-year flex flex-direction row-gap-10">
                                <p>Available through out this year:</p>
                                <div class="destination-month flex justify-content-sb">
                                    <p>Jan</p>
                                    <p>Feb</p>
                                    <p>May</p>
                                    <p>Jul</p>
                                    <p>Aug</p>
                                    <p>Sep</p>
                                    <p>Oct</p>
                                    <p>Dec</p>
                                </div>
                            </div>
                            <button class="outline-button">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>