<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offered Programs | Pars Campus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7f9;
        }

        /* Hero Header */
        .jumbotron {
            /* background: linear-gradient(135deg, #003366 0%, #0056b3 100%); */
            background: #0056b3;
            color: white;
            border-radius: 0;
            padding: 4rem 0;
            margin-bottom: 0;
        }

        /* Program Cards */
        .program-card {
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            height: 100%;
        }
        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
        }
        /* .icon-box {
            width: 60px;
            height: 60px;
            background: #e7f1ff;
            color: #0056b3;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 1.5rem;
            margin-bottom: 20px;
        } */
        .badge-duration {
            background-color: #fdf2e9;
            color: #d35400;
            font-weight: 600;
            font-size: 0.8rem;
            padding: 5px 12px;
            border-radius: 20px;
        }
        .btn-outline-primary {
            border-radius: 25px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    
    <div class="jumbotron text-center">
        <div class="container">
            <h1 class="display-4 font-weight-bold">Our Academic Programs</h1>
            <p class="lead">Empowering the next generation of Software Engineers and Technologists.</p>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card program-card shadow-sm p-4">
                    
                    <span class="badge-duration mb-2 d-inline-block">4 Years | 8 Semesters</span>
                    <h4 class="font-weight-bold">BS Software Engineering</h4>
                    
                    
                    <p class="text-muted">Focus on software development, design patterns, and large-scale system architecture.</p>
                    <ul class="list-styled small text-secondary mb-4">
                        <li>OOP & Data Structures</li>
                        <li>Database Management</li>
                        <li>Web & Mobile App Dev</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary mt-auto">View Curriculum</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card program-card shadow-sm p-4">
                    
                    <span class="badge-duration mb-2 d-inline-block">4 Years | 8 Semesters</span>
                    <h4 class="font-weight-bold">BS Computer Science</h4>
                    <p class="text-muted">Explore the core theories of computation, Artificial Intelligence, and Algorithms.</p>
                    <ul class="list-styled small text-secondary mb-4">
                        <li> Theoretical Computing</li>
                        <li> Machine Learning</li>
                        <li> Network Security</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary mt-auto">View Curriculum</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card program-card shadow-sm p-4">
                    <span class="badge-duration mb-2 d-inline-block">4 Years | 8 Semesters</span>
                    <h4 class="font-weight-bold">BS Information Technology</h4>
                    <p class="text-muted">Mastering the integration of technology solutions and organizational networking.</p>
                    <ul class="list-styled small text-secondary mb-4">
                        <li> System Administration</li>
                        <li> Cloud Computing</li>
                        <li> Cyber Security</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary mt-auto">View Curriculum</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card program-card shadow-sm p-4">
                    <span class="badge-duration mb-2 d-inline-block">4 Years | 8 Semesters</span>
                    <h4 class="font-weight-bold">BS Artificial Intelligence </h4>
                    <p class="text-muted">Mastering the integration of technology solutions and organizational networking.</p>
                    <ul class="list-styled small text-secondary mb-4">
                        <li> Learning & Rebortics</li>
                        <li> Science and Big Data</li>
                        <li> Ethics and Logic</li>
                    </ul>
                    <a href="#" class="btn btn-outline-primary mt-auto">View Curriculum</a>
                </div>
            </div>

        </div>
    </div>
  <!-- footer section -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0 small">&copy; 2026 Pars Campus - Department of Computer Science. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>