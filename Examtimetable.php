<?php include('connection.php')?>
<body>
<div class="container-fluid py-3">
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            
    <div class="text-center">
        <div class="d-flex align-items-center">
            <a href="Dashboard.php" class="text-dark text-decoration-none me-3">
            <i class="bi bi-chevron-double-left fs-3"></i>
            </a>
            <h2 class="mb-3 flex-grow-1 mt-2">Exam Timetable</h2>
        </div>
    </div>
    
    <img src="image/Examtimetable.gif" alt="timetable" class="img-fluid rounded-circle mb-3 w-50 header-img">

</div>
        
</div>
</div>
<div class="timetable-card shadow-lg p-4">
<h4 class="text-center mb-4 text-warning">Upcoming Exams</h4>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="table timetable-table table-bordered">
                    <tr>
                        <th>Date</th>
                        <th>Subject</th>
                        <th>Time</th>
                        <th>Room</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                    <td>April 10, 2025</td>
                    <td>Mathematics</td>
                    <td>10:00 AM - 12:00 PM</td>
                    <td>Room 101</td>
                    </tr>
                    <tr>
                    <td>April 12, 2025</td>
                    <td>Science</td>
                    <td>1:00 PM - 3:00 PM</td>
                    <td>Room 202</td>
                    </tr>
                    <tr>
                    <td>April 15, 2025</td>
                    <td>English</td>
                    <td>9:00 AM - 11:00 AM</td>
                    <td>Room 303</td>
                    </tr>
                </tbody>
             </table>
        </div>
    </div>
</div>
            

<br>
<br>
<br>
<br>
<br>

<?php include('Footer.php')?>  
</body>
</html>