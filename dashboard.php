<?php
include "header.php";
 $insert = false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "rosetravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $title = $_POST['service-title'];
  $description = $_POST['service-description'];

  $sql = "INSERT INTO `service` (`title`, `description`) VALUES ('$title', '$description')";
  $result = mysqli_query($conn,$sql);
  $insert = true;
}

if($insert){

  echo '<div class="alert alert-success" role="alert">
  Data inserted successfully;
  </div>';
}

?>

<div class="section-space">
  <div class="box dashboard">
  <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Services</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Posts</button>
    
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
    <div class="section" style="background-color:#f7f7f7;">

<div class="container">
  <h2 class="my-4">Services</h2>
  <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" name="service-title">
      
      <div class="form-group my-4">
        <label class="mb-2" for="description">Description</label>
        <textarea class="form-control" name="service-description" id="description"
        rows="3"></textarea>
      </div>
      
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
    </div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">Post</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">4</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">5</div>
  </div>
</div>
  </div>
</div>
