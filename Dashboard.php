<?php include('Connection.php')?>
<body>

<?php include('Header.php')?>
<div class="container my-5">
  <div class="row g-4">

    <!-- Attendance Card -->
    <div class="col-md-6 col-lg-6 mt-5 p-3 animate-slide-left animate-delay-1">
      <div class="card text-light bg-warning shadow h-100 border border-0">
        <div class="card-body text-center">
          <h5 class="card-title">Today's Attendance</h5>
          <p class="card-text fs-4 fw-bold">Present</p> 
        </div>
      </div>
    </div>

    <!-- Homework Card -->
    <div class="col-md-6 col-lg-6  mt-5  p-3 animate-slide-left animate-delay-2">
      <div class="card bg-light shadow h-100 border border-0">
        <div class="card-body">
          <h5 class="card-title text-warning">Homework</h5>
          <p class="text-muted small mb-2">Date: 15-4-2025</p>
          <ul class="list-unstyled mb-0">
            <li>📘 Math:chapter 1 Q1-10</li>
            <li>🧪 Science: Chapter 6 Summary</li>
            <li>📖 English: Read "The Little Prince"</li>
          </ul>
        </div>
        <div class="px-3 pb-3">
          <a href="homework.php" class="btn btn-outline-warning border border-0">Read More</a>
        </div>
      </div>
    </div>

    <!-- Class Circular -->
    <div class="col-md-6 col-lg-6 animate-slide-left animate-delay-3">
  <div class="card bg-light shadow h-100 border border-0">
    <div class="row g-0">
      <div class="col-md-4">
      <img src="image/classnotification.gif"
     alt="Class circular"
     class="rounded-circle img-fluid d-block mx-auto mt-3"
     style="width: 70px; height: 70px; object-fit: cover;">
      </div>
      <div class="col-md-8 d-flex flex-column">
        <div class="card-body flex-grow-1">
          <h5 class="card-title text-warning">Class Circular</h5>
          <p class="text-muted small mb-2">Date: 22-04-2025</p>
          <p class="card-text">
            Class test scheduled for Friday. Bring geometry boxes and calculators.
          </p>
        </div>
        <div class="px-3 pb-3">
          <a href="notification.php" class="btn btn-outline-warning border border-0">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- School Circular -->
<div class="col-md-6 col-lg-6 animate-slide-left animate-delay-3">
  <div class="card bg-light shadow h-100 border border-0">
    <div class="row g-0">
      <div class="col-md-4">
        <!-- School Circular Image -->
    <img src="image/schoolcircular.gif"
     alt="School circular"
     class="rounded-circle img-fluid d-block mx-auto mt-3"
     style="width: 70px; height: 70px; object-fit: cover;">

      </div>
      <div class="col-md-8 d-flex flex-column">
        <div class="card-body flex-grow-1">
          <h5 class="card-title text-warning">School Circular</h5>
          <p class="text-muted small mb-2">Date: 23-04-2025</p>
          <p class="card-text">
            School will remain closed on Monday due to maintenance. Stay safe!
          </p>
        </div>
        <div class="px-3 pb-3">
          <a href="schlcircular.php" class="btn btn-outline-warning border border-0">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>

 </div>
</div>
<br><br>
    
    
  <?php include('Footer.php')?>  
</body>
</html>
