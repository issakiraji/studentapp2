<?php include('Connection.php')?>
    
<body>

<header class="text-white py-3 fixed-top header">
    <div class="container d-flex justify-content-between align-items-center">
        
        <button class="btn text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <i class="bi bi-grid-3x3-gap-fill"></i>
        </button>
        
        <h2 class="m-0 text-dark">Raji</h2>
       
        <div class="col-2 text-start">
       <img src="image/profilepic.png" class="img-thumbnail rounded-circle header-pic">
        </div>
    </div>
</header>

    <!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-dark" id="offcanvasMenuLabel"><img src="image/profilepic.png" class="pe-3 offcanvaslogo img-fluid rounded-circle"/>School Name</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        
            </div>
        <div class="offcanvas-body">
        <ul class="list-unstyled">
        <div class="container">
    
    <div class="row row-cols-3 row-cols-md-4 row-cols-lg-6 g-3">
        <div class="col">
        <div class="shadow p-4 bg-body rounded-circle text-center">
        <a href="Studentprof.php" class="text-decoration-none">
            <img src="image/profile.gif" class="img-fluid w-55 rounded-circle" alt="studentprofile">
              </div>
            <p class="mt-2 text-dark text-center">Student Profile</p>
            </a>
        </div>
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Homework.php" class="text-decoration-none">
            <img src="image/homewrk.gif" class="img-fluid w-55 rounded-circle" alt="homework">
            </div>
            <p class="mt-2 text-dark text-center">Home Work</p>
        </a>
        </div>
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Notification.php" class="text-decoration-none">
            <img src="image/notification.gif" class="img-fluid w-55 rounded-circle" alt="notification">

            </div>
            <p class="mt-2 text-dark text-center">Class Notification</p>
        </a>
        </div>
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Timetable.php" class="text-decoration-none">
            <img src="image/timetable.gif" class="img-fluid w-55 rounded-circle" alt="timetable">
            </div>
            <p class="mt-2 text-dark text-center">Time <br>Table</p>
            </a>
        </div>
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="worksheet.php" class="text-decoration-none">
            <img src="image/worksheet.gif" class="img-fluid w-55 rounded-circle" alt="worksheet">
             </div>
            <p class="mt-2 text-dark text-center">Work Sheet</p>
            </a>
        </div>
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="chart.php" class="text-decoration-none text-dark">
            <img src="image/chart.gif" class="img-fluid w-55 rounded-circle" alt="chart report">   
            </div>
            <p class="mt-2 text-dark text-center">Chart Report</p>
            </a>
        </div>

        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Classtopper.php" class="text-decoration-none text-dark">
            <img src="image/diploma.gif" class="img-fluid w-55 rounded-circle" alt="cls-topper">  
            </div>
            <p class="mt-2 text-dark text-center">Class Topper</p>
            </a>
        </div>
    
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center ">
            <a href="Schooltopper.php" class="text-decoration-none text-dark">
            <img src="image/award.gif" class="img-fluid w-55 rounded-circle" alt="school-topper">   
            </div>
            <p class="mt-2 text-dark text-center">School Topper</p>
            </a>
        </div>
    
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Dicwords.php" class="text-decoration-none text-dark">
            <img src="image/dict.gif" class="img-fluid w-55 rounded-circle" alt="dictionary">  
            </div>
            <p class="mt-2 text-dark text-center">Dictionary Words</p>
            </a>
        </div>
    
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Submit.php" class="text-decoration-none">
            <img src="image/submit.gif" class="img-fluid w-55 rounded-circle" alt="h.w"> 
            </div>
            <p class="mt-2 text-dark text-center">Submit H.w</p>
            </a>
        </div>
    
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Schlcircular.php" class="text-decoration-none">
            <img src="image/clipboard.gif" class="img-fluid w-55 rounded-circle" alt="circular">
                
            </div>
            <p class="mt-2 text-dark text-center">School circular</p>
        </a>
        </div>
    
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Examtimetable.php" class="text-decoration-none">
            <img src="image/xmtimetable.gif" class="img-fluid w-55 rounded-circle" alt="xm-timetable">
                
            </div>
            <p class="mt-2 text-dark text-center">Exam TimeTable</p>
        </a>
        </div>
    
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Examresult.php" class="text-decoration-none text-dark">
            <img src="image/examresult.gif" class="img-fluid w-55  rounded-circle" alt="xm-result">
                
            </div>
            <p class="mt-2 text-dark text-center">Exam Result</p>
            </a>
        </div>
    
         <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="News.php" class="text-decoration-none text-dark">
            <img src="image/sclnews.gif" class="img-fluid w-55  rounded-circle" alt="news">  
            </div>
            <p class="mt-2 text-dark text-center">school News</p>
            </a>
        </div>
    
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Fees.php" class="text-decoration-none text-dark">
            <img src="image/fees.gif" class="img-fluid w-55  rounded-circle" alt="fees">
            </div>
            <p class="mt-2 text-dark text-center">Fees Records</p>
            </a>
        </div>
        <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Reportcard.php" class="text-decoration-none text-dark">
            <img src="image/reportcard.gif" class="img-fluid w-55  rounded-circle" alt="report card">
               
            </div>
            <p class="mt-2 text-dark text-center">Report card</p>
            </a>
        </div>
    <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Gk.php" class="text-decoration-none text-dark">
            <img src="image/gk.gif" class="img-fluid w-55  rounded-circle" alt="gk">
               
            </div>
            <p class="mt-2 text-dark text-center">Gk</p>
            </a>
        </div>
    
    <div class="col">
            <div class="shadow p-4 bg-body rounded-circle text-center">
            <a href="Gallery.php" class="text-decoration-none text-dark">
            <img src="image/gallery.gif" class="img-fluid w-55  rounded-circle" alt="gallery">    
            </div>
            <p class="mt-2 text-dark text-center">Gallery</p>
            </a>
</div>   
</div>
</div>
<div class="d-flex justify-content-center">
  <a href="Login.php"><button type="submit"  class="btn text-dark logout-btn">
        <i class="bi bi-box-arrow-left"></i> Logout
    </button></a>
</div>
        
        </div>
</div>

        
    


    

