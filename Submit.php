<?php include('connection.php')?>
<body>
<div class="container-fluid py-3">
<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            
    <div class="text-center">
        <div class="d-flex align-items-center">
            <a href="Dashboard.php" class="text-dark text-decoration-none">
            <i class="bi bi-chevron-double-left fs-3"></i>
            
            </a>
            
            <h2 class="mb-3 flex-grow-1 mt-2">Submit Homework</h2>
        </div>
    </div>
    
    <img src="image/submit1.gif" alt="submith.w" class="img-fluid  rounded-circle mb-3 w-50 header-img bg-light">
    
</div>
        
</div>
</div>

</div>
<form action="submit.php" method="POST" enctype="multipart/form-data" class="shadow-lg p-4 rounded bg-body  homework-card">
<div class="mb-3">
                    <label for="file" class="form-label">Upload File</label>
                    <input type="file" class="form-control" id="file" name="file" accept=".pdf, .doc, .docx, .jpg, .png" required>
                </div>
                
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                
                <div class="mb-3">
                    <label for="title" class="form-label">Homework Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                

                <button type="submit" class="btn btn-warning w-100">Submit</button>
            </form>

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