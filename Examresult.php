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
            <h2 class="mb-3 flex-grow-1 mt-2">Exam Result</h2>
        </div>
    </div>
    
    <img src="image/Examresult1.gif" alt="examresult" class="img-fluid rounded-circle mb-3 w-50  header-img">

</div>
        
</div>
</div>



<div class="container exam-result-card">
    <!-- Quarterly Result -->
    <div class="row mt-5">
        <h4 class="text-center mb-3 text-warning">Quarterly Exam</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped shadow-sm text-center align-middle">
                <thead class="table-warning">
                    <tr>
                        <th>Class</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>English</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Class 1</td>
                        <td>85</td>
                        <td>78</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Class 2</td>
                        <td>88</td>
                        <td>79</td>
                        <td>92</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Half-yearly Result -->
    <div class="row mt-5">
        <h4 class="text-center mb-3 text-warning">Half-yearly Exam</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped shadow-sm text-center align-middle">
                <thead class="table-warning">
                    <tr>
                        <th>Class</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>English</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Class 1</td>
                        <td>89</td>
                        <td>81</td>
                        <td>85</td>
                    </tr>
                    <tr>
                        <td>Class 2</td>
                        <td>91</td>
                        <td>83</td>
                        <td>88</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Annual Result -->
    <div class="row mt-5">
        <h4 class="text-center mb-3 text-warning">Annual Exam</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped shadow-sm text-center align-middle">
                <thead class="table-warning">
                    <tr>
                        <th>Class</th>
                        <th>Math</th>
                        <th>Science</th>
                        <th>English</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Class 1</td>
                        <td>87</td>
                        <td>80</td>
                        <td>89</td>
                    </tr>
                    <tr>
                        <td>Class 2</td>
                        <td>90</td>
                        <td>82</td>
                        <td>91</td>
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