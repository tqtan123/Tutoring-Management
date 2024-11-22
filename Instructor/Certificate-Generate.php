<?php 
include "../Utils/Util.php";
  $title = "Certificate Request";
  include "inc/Header.php";
?>

<div class="container">
  <?php include "inc/NavBar.php"; ?>
  
  <div class="list-table pt-5">
  <h4>Certificate Request</h4>

<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Student Name</th>
        <th scope="col">Email</th>
        <th scope="col">Courses Completed</th>
        <th scope="col">Generate Certificate</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Student 1</td>
        <td>student1@example.com</td>
        <td>Course 1</td>
        <td><a href="#" class="btn btn-success" onclick="generateCertificate(1)">Generate</a></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Student 2</td>
        <td>student2@example.com</td>
        <td>Course 1</td>
        <td><a href="#" class="btn btn-success" onclick="generateCertificate(2)">Generate</a></td>
    </tr>
    
    </tbody>
</table>
<div class="d-flex justify-content-center mt-3 border">
      <a href="#" class="btn btn-secondary m-2">Prev</a>
      <a href="#" class="btn btn-success m-2">&nbsp;1&nbsp;</a>
      <a href="#" class="btn btn-secondary m-2">&nbsp;2&nbsp;</a>
      <a href="#" class="btn btn-secondary m-2">&nbsp;3&nbsp;</a>
      <a href="#" class="btn btn-secondary m-2">&nbsp;4&nbsp;</a>
      <a href="#" class="btn btn-secondary m-2">Next</a>
  </div>
  </div>


<?php
//  }else { 
// $em = "First login ";
// Util::redirect("login.php", "error", $em);
// } ?>
</div>
 <!-- Footer -->
<?php include "inc/Footer.php"; ?>