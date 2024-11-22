<?php 
session_start();
include "../Utils/Util.php";
include "../Utils/Validation.php";
if (isset($_SESSION['username']) &&
    isset($_SESSION['admin_id'])) {
    
    include "../Controller/Admin/System.php";  
    $student_count = getstudentsCount();
    $Instructor_count = getInstructorCount();
    $Course_count = getCourseCount();
    
    $title = "System Analysis";
    include "inc/Header.php";
?>
<div class="container">
  <?php include "inc/NavBar.php"; ?>
  
  <div class="p-5 shadow">
    <h4>System Analysis</h4><hr><br>

    <div class="mb-5" style="max-width: 600px">
        <h4>Traffic Analysis</h4>
        <canvas id="visitedStudentsChart" width="400" height="200"></canvas>
    </div>

    

    <div class="mb-5 overall-statistics">
        <h4>Overall Statistics</h4>
        <ul class="d-flex">
            <li><span><?=$student_count?></span>Total Students </li>
            <li><span><?=$Instructor_count?></span>Total Instructors</li>
            <li><span><?=$Course_count?></span>Total Courses</li>
        </ul>
    </div>

    <div class="mb-4 system-activities">
        <h4>Recent Activities</h4>
        <ul>
            <li>10 new students joined this week.</li>
            <li>5 new courses were created.</li>
            <li>Quiz completion rates have increased by 15%.</li>
        </ul>
    </div>

    <div class="mb-5 enrollment-statistics">
        <h4>Course Enrollment Statistics</h4>
        <p>Top 3 Courses with Highest Enrollment</p>
        <ul class="d-flex">
            <li><span>150 students</span>Course A </li>
            <li><span>100 students</span>Course B</li>
            <li><span>120 students</span>Course C</li>
        </ul>
    </div><br>
   <h4>Expected vs Actual Student Registration This Week</h4><br>
    <div class="mb-5" style="max-width: 350px">
        
        <canvas id="registrationPieChart" width="400" height="400"></canvas>
    </div>
    
  </div>

<script>
    var registrationPieChart = {
        labels: ['Actual', 'Expected'],
        datasets: [{
            data: [300, 500],
            backgroundColor: ['#0D6EFD', '#eee'],
        }]
    };

    var enrollmentPieChart = new Chart(document.getElementById('registrationPieChart'), {
        type: 'pie',
        data: registrationPieChart
    });

    var visitedStudentsData = {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
            label: 'Visited Students',
            data: [20, 30, 25, 15],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var visitedStudentsChart = new Chart(document.getElementById('visitedStudentsChart'), {
        type: 'bar',
        data: visitedStudentsData
    });
</script>
</div>
<?php include "inc/Footer.php"; ?>


<?php
 }else { 
$em = "First login ";
Util::redirect("../login.php", "error", $em);
} ?>