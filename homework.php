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
            <h2 class="mb-3 flex-grow-1 mt-2">Home Work</h2>
        </div>
    </div>
    <img src="image/homeworkanimation.gif" alt="homework" class="img-fluid  rounded-circle mb-3 w-50 header-img">
    </div>
        
</div>
</div>
<div class="card shadow-lg p-3 homework-card">
    <div class="row">
        <div class="col-12">
                
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <strong>Mathematics:</strong> Solve 10 algebra problems  
                        <span class="badge bg-danger float-end">Due: March 22</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Science:</strong> Write an essay on Newton's Laws  
                        <span class="badge bg-warning float-end">Due: March 23</span>
                    </li>
                    <li class="list-group-item">
                        <strong>English:</strong> Read and summarize "Hamlet"  
                        <span class="badge bg-success float-end">Completed</span>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>
</div>
</div>


<div class="modal fade" id="addHomeworkModal" tabindex="-1" aria-labelledby="addHomeworkLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="addHomeworkLabel">Add Homework</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" class="form-control" placeholder="Enter subject">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Enter homework details"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Due Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-warning">Update Homework</button>
                    </div>
                </form>
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