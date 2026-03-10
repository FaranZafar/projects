<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pars Campus | Department of Computer Science</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        /* Navbar Styling */
        .navbar {
            border-bottom: 3px solid #0056b3;
        }
        .brand-name {
            letter-spacing: 1px;
            color: #003366;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), 
                        url('https://www.transparenttextures.com/patterns/cubes.png');
            padding: 80px 0;
            border-radius: 15px;
            margin-top: 2rem;
        }

        /* About Section */
        #about {
            padding: 60px 0;
        }
        .section-title {
            position: relative;
            margin-bottom: 40px;
            font-weight: 700;
            color: #003366;
        }
        .section-title::after {
            content: '';
            width: 60px;
            height: 4px;
            background: #0056b3;
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Coordinator Card */
        .coordinator-card {
            border: none;
            transition: transform 0.3s ease;
            overflow: hidden;
            border-radius: 12px;
            width: 270px;
        }
        .coordinator-card:hover {
            transform: translateY(-5px);
        }
        /* student card */
        .student-card {
            border: none;
            transition: transform 0.3s ease;
            overflow: hidden;
            border-radius: 12px;
            width: 270px;
        }
        .student-card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            object-fit: cover;
            height: 300px;
        }
        

        @media (max-width: 576px) {
            .dept-text { 
                font-size: 0.85rem !important; 
            }
            .brand-name { 
                font-size: 1.2rem !important; 
            }
            .hero-section { 
                padding: 40px 15px; 
            }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <!-- loggo pars compus -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="./images/Pars.png" width="60" alt="LOGO" class="mr-3">
                <div class="d-flex flex-column">
                    <span class="dept-text text-muted font-weight-bold" style="font-size: 0.9rem; text-transform: uppercase;">Dept. of Computer Science</span>
                    <span class="brand-name font-weight-bold" style="font-size: 1.4rem; line-height: 1;">Pars Campus</span>
                </div>
            </a>
            <!-- togglar button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapNavbar">
                <ul class="navbar-nav ml-auto font-weight-bold">
                    <!-- navbar items -->
                    <li class="nav-item px-2"><a class="nav-link text-primary" href="#">Home</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="./Offered-programs./program.php">Programs</a></li>
                    <li class="nav-item px-2"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item ml-lg-3">
                        <a href="./athurization./login.php" class="btn btn-outline-primary px-4 shadow-sm">Portal Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
         <!-- hero section -->
        <section class="hero-section  shadow-sm">
            <div class="col-md-10 mx-auto">
                <h1 class="display-4 font-weight-bold text-dark">Welcome to Pars Campus</h1>
                <p class="lead  text-primary" style="font-size: 1.5rem;">"The Forge of Ambition"</p>
                <p class="text-muted  mx-auto" style="max: width 300px; font-size: 1.1rem;">
                    This is the space where aspirations take shape and the abstract becomes reality. We provide the environment designed for those ready to bridge the gap between who they are and who they intend to become.
                </p>
                <div class="mt-4">
                    <a class="btn btn-primary btn-lg px-5 shadow" href="./Offered-programs./program.php" role="button">Explore Programs</a>
                </div>
            </div>
        </section>

        <section id="about">
            <h2 class="text-center section-title">Our Leadership</h2>
            <div class="row justify-content-center">
                <!-- //coordinator-card -->
                <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                    <div class="card coordinator-card shadow-sm">
                        <img class="card-img-top" src="./images/faran2.png" alt="Coordinator Photo">
                        <div class="card-body text-center bg-white">
                            <h5 class="card-title font-weight-bold mb-1">Ahmad Adnan</h5>
                            <p class="text-primary mb-0">Campus Coordinator</p>
                        </div>
                    </div>
                </div>
                <!-- // voice coordinator-card -->
                <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                    <div class="card coordinator-card shadow-sm">
                        <img class="card-img-top" src="./images/faran2.png" alt="Coordinator Photo">
                        <div class="card-body text-center bg-white">
                            <h5 class="card-title font-weight-bold mb-1">Rana Arsal Mahmood</h5>
                            <p class="text-primary mb-0">Campus Vice-Coordinator</p>
                        </div>
                    </div>
                </div>
                <!-- lecturer card -->
                <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                    <div class="card coordinator-card shadow-sm">
                        <img class="card-img-top" src="./images/faran2.png" alt="Coordinator Photo">
                        <div class="card-body text-center bg-white">
                            <h5 class="card-title font-weight-bold mb-1">Ahmad Adnan</h5>
                            <p class="text-primary mb-0">Campus Coordinator</p>
                        </div>
                    </div>
                </div>
                <!-- lecturer card -->
                <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                    <div class="card coordinator-card shadow-sm">
                        <img class="card-img-top" src="./images/faran2.png" alt="Coordinator Photo">
                        <div class="card-body text-center bg-white">
                            <h5 class="card-title font-weight-bold mb-1">Ahmad Adnan</h5>
                            <p class="text-primary mb-0">Campus Coordinator</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
 <section id="about" class="py-5">
    <div class="container">
        <h2 class="text-center section-title mb-5">Our Shining Stars</h2>
        <div class="row text-center justify-content-center">
            
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            <!-- student card -->
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            <!-- student card -->
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            <!-- student card -->
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            <!-- student card -->
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            <!-- student card -->
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            <!-- student card -->
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            <!-- student card -->
            <div class="col-sm-12 col-md-6 col-lg-3 pt-4">
                <div class="card student-card shadow-sm border-0">
                    <img class="card-img-top" src="./images/faran2.png" alt="Faran Zafar">
                    <div class="card-body bg-white">
                        <h5 class="card-title font-weight-bold mb-2">Faran Zafar</h5>
                        <p class="card-text mb-1">
                            <strong class="text-primary">Degree:</strong> BS Software Engineering
                        </p>
                        <p class="card-text mb-0">
                            <strong class="text-primary">Skill:</strong> Web Developer (PHP)
                        </p>
                    </div>
                </div>
            </div>
            
            </div>
    </div>
</section>
    </main>
     <!-- footer part -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-0 small">&copy; 2026 Pars Campus - Department of Computer Science. All Rights Reserved.</p>
        </div>
    </footer>
    
    <!-- bootstrap js links -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>