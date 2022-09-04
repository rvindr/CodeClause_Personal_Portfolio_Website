<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ravinder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="https://kit.fontawesome.com/345587e4ce.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- nav bar start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand " href="index.php"><img src="img/Rvi-logo.png" class="img-fluid ml-5 logo"
                    alt="Ravinder"></a>
            <a class="navbar-brand " href="index.php">Ravinder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" id="nav-btn"></span>
            </button>
            <div class="collapse navbar-collapse ml-25" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- nav bar end  -->

    <!-- main start  -->
    <main>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $database_name="contact_details";

        $conn = mysqli_connect($servername,$username,$password,$database_name);
        // check the connection 
        if(!$conn)
        {
            die("Connection Failed:" . mysqli_connect_error());
        }

        if(isset($_POST['save']))
        {	
        	$name =$_POST["name"];
            $email =$_POST["email"];
            $subject =$_POST["subject"];
            $msg =$_POST["message"];
        
        	 $sql_query = "INSERT INTO contact (name,email,subject,msg)
        	 VALUES ('$name','$email','$subject','$msg')";

        	 if (mysqli_query($conn, $sql_query)) 
        	 {
        		echo "<p class='text-center text-success fs-2'>Message sent successfully !</p>";
        	 } 
        	 else
            {
        		echo "Error: " . $sql . "" . mysqli_error($conn);
        	 }
        	 mysqli_close($conn);
        }


    ?> 
        <section id="home">
            <div class="container">

                <div class="row">
                    <!-- row-1 col-1  -->
                    <div class="col-md-6 r-1-col-1">
                        <h4 class="r-1-t-res my-4 text-muted">HELLO _______________</h4>
                        <h1 class="r-1-t-res my-3">I AM RAVINDER</h1>
                        <h5 class="r-1-t-res my-4 text-muted">FRONT END WEB DEVELOPER</h5>
                        <a class="r-1-t-res mt-4 btn" href="pdf/Ravinder's Resume-2.pdf">GET CV</a>

                    </div>
                    <!-- row-1 col-2  -->
                    <div class="col-md-6">
                        <img src="img/icons-1.png" class="row-1-icon img-fluid" alt="Web Developer">
                    </div>
                </div>
            </div>
        </section>
        <section class="mtop-5 " id="about">
            <div class="container">
                <div class="row">
                    <!-- row-2 col-1  -->
                    <div class="col-md-6 img-res" data-aos="fade-up">
                        <img src="img/icons-2.png" class="row-1-icon img-fluid" id="icon-2" alt="Web Developer">
                    </div>
                    <!-- row-2 col-2  -->
                    <div class="col-md-6 r-2-col-2" data-aos="fade-up">
                        <h2>LET’S <br>
                            INTRODUCE ABOUT <br>
                            MYSELF</h2>
                        <p class="text-muted">Creative,Hardworking, dedicated, and goal-focused. And always excited to
                            learn new things</p>
                        <p class="text-muted">I'm currently pursuing a Computer Science & Engineering degree from
                            Kurukshetra University. My main areas of interest are cyber security and web development.
                        </p>
                        <a class="r-1-t-res mt-4 btn" href="pdf/Ravinder's Resume-2.pdf">DOWNLOAD CV</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- skill start -->
        <div class="service  mtop-5 mb-4 " id="skill">
            <h4 class="text-white text-center">Skills</h4>
            <div class="row">
                <div class="col-md-8 pro " data-aos="fade-up">
                    <div class="progress mb-2">
                        <div class="progress-bar bg-success" id="html" role="progressbar" aria-label="Success example"
                            style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <label for="html">HTML</label for="">
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-info" id="css" role="progressbar" aria-label="Info example"
                            style="width: 0%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        <label for="css">CSS</label for="">
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-warning" id="javascript" role="progressbar"
                            aria-label="Warning example" style="width: 0%" aria-valuenow="75" aria-valuemin="0"
                            aria-valuemax="100"></div>
                        <label for="javascript">JAVASCRIPT</label for="">
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-primary" id="bs" role="progressbar" aria-label="Danger example"
                            style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        <label for="bs">BOOTSTRAP</label for="">
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-secondary" id="tc" role="progressbar" aria-label="Danger example"
                            style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        <label for="tc">TAILWIND CSS</label for="">
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar " id="ang" role="progressbar" aria-label="Danger example"
                            style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        <label for="ang">ANGULAR</label for="">
                    </div>
                    <div class="progress mb-2">
                        <div class="progress-bar bg-danger" id="python" role="progressbar" aria-label="Danger example"
                            style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        <label for="python">PYTHON</label for="">
                    </div>

                </div>
                <div class="col-md-4 " data-aos="fade-up">
                    <img src="img/skill.png" class="skill-icon img-fluid" alt="Skills">
                </div>
            </div>
        </div>
        <!-- skill end  -->



        <!-- service section  -->
        <div class="mtop-5 service " id="service">
            <h4 class="text-white text-center">SERVICE</h4>
            <p class="text-center text-muted"><span><i class="fa-solid fa-terminal"></i></span>Fast coding service</p>
            <div class="mtop-5 row">
                <div class="col-md-3 my-card" data-aos="fade-up">
                    <img src="img/ui.png" class="img-fluid mb-4" alt="">
                    <h5 class="text-center">UI/UX DESIGN</h5>
                </div>
                <div class="col-md-3 my-card" data-aos="fade-up">
                    <img src="img/web-icon.png" class="img-fluid mb-4" alt="">
                    <h5 class="text-center">WEB DESIGN</h5>
                </div>
                <div class="col-md-3 my-card" data-aos="fade-up">
                    <img src="img/app-icon.png" class="img-fluid mb-4" alt="">
                    <h5 class="text-center">APP DEVELOPER</h5>
                </div>
                <div class="col-md-3 my-card" data-aos="fade-up">
                    <img src="img/content-icon.png" class="img-fluid mb-4" alt="">
                    <h5 class="text-center">CONTENT CREATOR</h5>
                </div>

            </div>
        </div>
        <!-- service end  -->
        <!-- project section start  -->
        <div class="work mtop-5" id="project">
            <h4>
                QUALITY WORK <br> RECENTLY DONE PROJECT
            </h4>
            <div class="row mtop-5">
                <!-- network scanner project  -->
                <div class="col-lg-4 " data-aos="fade-up">
                    <div class="card proj-card" id="proj-card-1" style="width: 18rem;  background-image: url(img/net-scanner.png);">
                        <div class="card-body">
                            <h5 class="card-title text-white mb-3">
                                Network-Scanner--ARP-Spoofer</h5>
                            <h6 class="card-subtitle   proj-h">
                                <p>Website for</p>
                                <ul class="proj-t">
                                    <li>ARP Spoofing</li>
                                    <li>IP Scanner</li>
                                    <!-- 230 234 151 -->
                                </ul>
                            </h6>
                            <p class="card-text proj-h">
                                Language :
                            <ul>
                                <li class="proj-t">HTML</li>
                                <li class="proj-t">CSS</li>
                                <li class="proj-t">BOOTSTRAP</li>
                                <li class="proj-t">PYTHON</li>
                            </ul>
                            </p>
                            <a href="https://github.com/rvindr/Network-Scanner--ARP-Spoofer.git" target="_blank"
                                class="card-link card-btn">Source Code</a>
                            <a href="https://github.com/rvindr/Network-Scanner--ARP-Spoofer/wiki" target="_blank"
                                class="card-link card-btn">Live link</a>
                        </div>
                    </div>
                </div>
                <!-- portfolio template proj  -->
                <div class="col-lg-4" data-aos="fade-up">
    
    <div class="card proj-card" id="proj-card-2" style="width: 18rem;background-image: url(img/portfolio.png);">
                        <div class="card-body">
                            <h5 class="card-title text-white mb-3">
                                Portfolio Website Template</h5>
                            <h6 class="card-subtitle   proj-h">
                                <p>Website for</p>
                                <ul class="proj-t">
                                    <li>Portfolio</li>
                                </ul>
                            </h6>
                            <p class="card-text proj-h">
                                Language :
                            <ul>
                                <li class="proj-t">HTML</li>
                                <li class="proj-t">CSS</li>
                                <li class="proj-t">BOOTSTRAP</li>
                                <li class="proj-t">JavaScript</li>
                            </ul>
                            </p>
                            <a href="https://github.com/rvindr/Ravinder-Portfolio" target="_blank"
                                class="card-link card-btn">Source Code</a>
                            <a href="https://rvindr.github.io/Ravinder-Portfolio/" target="_blank"
                                class="card-link card-btn">Live link</a>
                        </div>
                    </div>
                </div>
                <!-- social grow template project  -->
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="card proj-card" id="proj-card-3" style="width: 18rem;background-image: url(img/social.png);">
                        <div class="card-body">
                            <h5 class="card-title text-white mb-3">
                                Social Grow Template</h5>
                            <h6 class="card-subtitle   proj-h">
                                <p>Website Template for</p>
                                <ul>
                                    <li class="proj-t">Grow Social Media Paid</li>
                                </ul>
                            </h6>
                            <p class="card-text proj-h">
                                Language :
                            <ul>
                                <li class="proj-t">HTML</li>
                                <li class="proj-t">CSS</li>
                                <li class="proj-t">BOOTSTRAP</li>
                                <li class="proj-t">PYTHON</li>
                            </ul>
                            </p>
                            <a href="https://github.com/rvindr/socialgrow.github.io" target="_blank"
                                class="card-link card-btn">Source Code</a>
                            <a href="https://socialgrowpanel.000webhostapp.com/index.html" target="_blank"
                                class="card-link card-btn">Live link</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- project section end  -->
        <!-- client section start  -->
        <div class="sections-header mtop-5" id="client">
            <h4 class="text-white text-center">Client Say About me</h4>
            <!-- client carousel start  -->
                <div class="mtop-5 row client">
                        <div class="col-lg-4">
                            <div class="col-12 client-r" data-aos="fade-up">
                                <div class="client-img-div">
                                    <img src="img/client-1.png" class="card-img-top client-img" alt="...">
                            </div>
                                <div class="p-3">
                                    <h5 class="card-title text-white">DAVIL SADEN</h5>
                                    <p class="card-text text-muted">"Customers want someone just like them, even when it
                                        comes to picking a company."</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="col-12 client-r" data-aos="fade-up">
                                <div class="client-img-div">
                                  <img src="img/client-2.png" class="card-img-top client-img" alt="...">
                                </div>
                                <div class="p-3">
                                    <h5 class="card-title text-white">ELITE MARTIN</h5>
                                    <p class="card-text text-muted">"Very friendly, easy to talk to and answered any
                                        questions I had."</p>
                                </div>
                        
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="col-12 client-r" data-aos="fade-up">
                                <div class="client-img-div">
                                    <img src="img/client-3.png" class="card-img-top client-img" alt="...">
                                </div>
                                <div class="p-3">
                                    <h5 class="card-title text-white">Ethan Marcotte</h5>
                                    <p class="card-text text-muted">"What a wonderful customer experience! We appreciate
                                        your business!"</p>
                                </div>
                        
                            </div>
                        </div>
                </div>
               
        </div>
        <!-- client section end  -->

        <!-- contact section start  -->
        <div class="sections-header  mtop-5 mb-4 " id="contact">
            <h4 class="text-white text-center">Contact Me</h4>
            <div class="row">
                <div class="col-lg-4">
                    <img src="img/contact.png" class="con-img img-fluid " alt="images">
                </div>
                <div class="col-lg-4 form-tab">
                    <form action="index.php" method="post">
                        <input type="text" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Name" name="name">
                        <input type="email" class="form-control mb-3" id="exampleFormControlInput2" placeholder="E-Mail" name="email">
                        <input type="text" class="form-control mb-3" id="exampleFormControlInput3" placeholder="Subject" name="subject">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                            placeholder="Message" name="message"></textarea>
                         <button type="submit" class=" r-1-t-res btn mt-3" name="save"> Send Message</button>
                </form>
               

                </div>
            </div>
        </div>
        <!-- contact section end  -->
    </main>
    <footer class="mtop-5">
        <!-- <img src="img/footer.png" class="ft-img" alt=""> -->
        <p class="text-white">Copyright &copy; 2022 rvindrvrma</p>
        <div class="links">
           <a href="https://www.youtube.com/c/RviTech" target="_blank"><i class="fa-brands fa-youtube"></i></a><a href="https://www.linkedin.com/in/rvindrvrma" target="_blank"><i class="fa-brands mx-4 px-4 fa-linkedin l-res"></i></a><a href="https://www.instagram.com/rvindr_vrma" target="_blank"><i class="fa-brands fa-instagram"></i></a>
         </div>
    </footer>
    <!-- main end  -->
    <script src="index.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init(
            {
                offset: 200,
                duration: 1000,
            }
        );
    </script>
    <!-- bootstrap script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>
