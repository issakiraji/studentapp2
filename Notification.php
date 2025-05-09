<?php include('connection.php')?>
<body>
<div class="container-fluid py-4">
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            
    <div class="text-center">
        <div class="d-flex align-items-center">
            <a href="Dashboard.php" class="text-dark text-decoration-none me-3">
            <i class="bi bi-chevron-double-left fs-3"></i>
            </a>
            <h2 class="mb-3 flex-grow-1 mt-2">Class Notification</h2>
        </div>
    </div>
    
    <img src="image/classnotification.gif" alt="notification" class="img-fluid rounded-circle mb-3 w-50 header-img">

    </div>
        
</div>
</div>
</div>


<div class="notification-card shadow-lg p-4 mb-1">
<div class="row">
<div class="col-12">
            <h4 class="text-center mb-3 text-warning">Recent Updates</h4>
            <div class="notification-item notifi1">
                <strong>Math Class:</strong> The test has been rescheduled to Friday.
                <span class="d-block text-muted">2 hours ago</span>
            </div>
            
            <div class="notification-item notifi2">
                <strong>Science Lecture:</strong> The online session link has been updated.
                <span class="d-block text-muted">5 hours ago</span>
            </div>
           
            <div class="notification-item notifi3">
                <strong>Holiday Notice:</strong> School will remain closed on Monday.
                <span class="d-block text-muted">1 day ago</span>
            </div>
            
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
