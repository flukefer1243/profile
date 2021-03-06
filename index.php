<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0b5c2d040f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <style>
        .timeline-steps {
            display: flex;
            justify-content: center;
            flex-wrap: wrap
        }

        .timeline-steps .timeline-step {
            align-items: center;
            display: flex;
            flex-direction: column;
            position: relative;
            margin: 1rem
        }

        @media (min-width:768px) {
            .timeline-steps .timeline-step:not(:last-child):after {
                content: "";
                display: block;
                border-top: .25rem dotted #3b82f6;
                width: 3.46rem;
                position: absolute;
                left: 7.5rem;
                top: .3125rem
            }

            .timeline-steps .timeline-step:not(:first-child):before {
                content: "";
                display: block;
                border-top: .25rem dotted #3b82f6;
                width: 3.8125rem;
                position: absolute;
                right: 7.5rem;
                top: .3125rem
            }
        }

        .timeline-steps .timeline-content {
            width: 10rem;
            text-align: center
        }

        .timeline-steps .timeline-content .inner-circle {
            border-radius: 1.5rem;
            height: 1rem;
            width: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #3b82f6
        }

        .timeline-steps .timeline-content .inner-circle:before {
            content: "";
            background-color: #3b82f6;
            display: inline-block;
            height: 3rem;
            width: 3rem;
            min-width: 3rem;
            border-radius: 6.25rem;
            opacity: .5
        }
    </style>

    <title>Phanthawat Phiphatkamtorn</title>
</head>

<body style="background-image: linear-gradient(#1E4D99, #387AE4);">
    <!-- <h1>Phanthawat Phiphatkamtorn</h1> -->
    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4">
                <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
                    <!-- <i class='fas fa-user-circle' style='font-size:38px;'></i>&nbsp;&nbsp; -->
                    <span class="fs-4">
                        <h1 class="display-6 fw-bold text-white"><i class='fas fa-user-circle'></i> Profile</h1>
                    </span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="display-5 fw-bold" style="color: #1E4D98;" id="demo">
                                <!-- <i class='fas fa-user-alt'></i> -->
                            </h1>
                            <h1 class="display-5 fw-bold" style="color: #1E4D98;" id="demo2"></h1>
                            <script>
                                var i = 0;
                                var j = 0;
                                var txt = "I'm Phanthawat";
                                var txt2 = "Phiphatkamtorn."
                                var speed = 50;
                                
                                function typeWriter2() {
                                    if (j < txt2.length) {
                                        document.getElementById("demo2").innerHTML += txt2.charAt(j);
                                        j++;
                                        setTimeout(typeWriter, speed);
                                    }
                                }

                                function typeWriter() {
                                    if (i < txt.length) {
                                        document.getElementById("demo").innerHTML += txt.charAt(i);
                                        i++;
                                        setTimeout(typeWriter, speed);
                                    }else{
                                        typeWriter2()
                                    }
                                }
                        
                                typeWriter()
                            </script>
                            
                            <p class="fs-4 text-dark" >I'm studying for a master's degree at the department of computer science and information technology faculty of science at Naresuan University. I've loved coding since I was a kid. That makes me??have good skills for developing 
                                <b class="badge bg-primary btn-primary">Web App</b> and <b class="badge bg-primary btn-primary">Android App.</b> If you need someone to develop your project, you can talk to me at my contact as follows.</p>
                            <!-- Contact -->
                            <p class="font-weight-bold"><i class="fa fa-phone-square" style='font-size:25px;'></i> 083-962-4741</p>
                            <p class=""><i class="fa fa-facebook-square" style='font-size:25px;'></i> Phanthawat
                                Phiphatkamtorn</p>
                            <p class=""><i class="fa fa-envelope" style='font-size:25px;'></i> Phanthawatp61@nu.ac.th
                            </p>
                        </div>
                        <div class="col-sm-4">
                            <!-- <h1 class="display-5 fw-bold">Personal Profile</h1> -->
                            <img src="profile2.jpg" class="rounded" width="100%">
                        </div>
                    </div>

                    <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <div class="col-md-6 ">
                    <div class="h-100 p-5 text-white rounded-3 " style="background-color: #2B313B;">
                        <h2>Skills</h2>
                        <h4 class="card-title"><i class='fas fa-code'></i>&nbsp;<u>Programing</u></h4>
                        <ul style="font-size: medium;">
                            <li>Java</li>
                            <li>PHP</li>
                            <li>Python</li>
                            <li>Kotlin</li>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>C/C++</li>
                            <li>SQL</li>
                            <li>Django Framework</li>
                            <li>Laravel Framework (Training)</li>
                            <li>Bootstrap Framework</li>
                        </ul>
                        <h4 class="card-title"><i class="fas fa-language"></i>&nbsp;<u>Language</u></h4>
                        <ul>
                            <li>Thai: Excellent</li>
                            <li>English: Good</li>
                        </ul>
                        <h4 class="card-title"><i class='fas fa-drafting-compass'></i>&nbsp;<u>Media Tools</u></h4>
                        <ul>
                            <li>Adobe Photoshop</li>
                            <li>Adobe Illustrator</li>
                            <li>Adobe Premiere Pro</li>
                        </ul>
                        <h4 class="card-title"><i class="fab fa-microsoft"></i>&nbsp;<u>Microsoft</u></h4>
                        <ul>
                            <li>Microsoft Word</li>
                            <li>Microsoft PowerPoint</li>
                            <li>Microsoft Excel</li>
                        </ul>
                        <!-- <button class="btn btn-outline-light" type="button">Example button</button> -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-light border rounded-3">
                        <h2 class="fw-bold" style="color: #1E4D98;">Project Experience</h2>
                        <br>

                        <div class="border-bottom pb-3 mb-4">
                            <h5>
                                <i class='fas fa-caret-square-right'></i> A prototype system for navigation back home on
                                Wear OS
                            </h5>
                            <p>
                                <small class="badge bg-primary  btn-primary">
                                    Web App
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    Android App
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    Wear App
                                </small>
                            </p>
                        </div>
                        <div class="border-bottom pb-3 mb-4">
                            <h5>
                                <i class='fas fa-caret-square-right'></i> The system for rquest help people who have
                                social problems form
                            </h5>
                            <p>
                                <small class="badge bg-primary  btn-primary">
                                    Web App
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    Django
                                </small>
                            </p>
                        </div>
                        <div class="border-bottom pb-3 mb-4">
                            <h5>
                                <i class='fas fa-caret-square-right'></i> The notification system for
                                unauthorized entry into private rooms via LINE
                            </h5>
                            <p>
                                <small class="badge bg-primary btn-primary">
                                    Line Notify
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    IOT
                                </small>
                            </p>
                        </div>
                        <div class="border-bottom pb-3 mb-4">
                            <h5>
                                <i class='fas fa-caret-square-right'></i> The Website for research and
                                academic services faculty of science Naresuan University
                            </h5>
                            <p>
                                <small class="badge bg-primary  btn-primary">
                                    Web App
                                </small>
                            </p>
                        </div>
                        <div class="pb-3 mb-4">
                            <h5>
                                <i class='fas fa-caret-square-right'></i> System for notification forgetting to close
                                the dormitory door with Line application (Implementing)
                            </h5>
                            <p>
                                <small class="badge bg-primary btn-primary">
                                    Line Notify
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    IOT
                                </small>
                            </p>
                        </div>

                        <!-- <h4 class="card-title"><i class='fas fa-calendar-alt'></i>&nbsp;<u>2018</u></h4>
                        <ul>
                            <li>Organized IT MAN Camp 10</li>
                            <li>Join CSIT Coding Contest 2018</li>
                            <li>Served as President of IT Man Club Naresuan University</li>
                            <li>Porta ac consectetur ac</li>
                            <li>Vestibulum at eros</li>
                        </ul>
                        <h4 class="card-title"><i class='fas fa-calendar-alt'></i>&nbsp;<u>2019</u></h4>
                        <ul>
                            <li>Cras justo odio</li>
                            <li>Dapibus ac facilisis in</li>
                            <li>Morbi leo risus</li>
                            <li>Porta ac consectetur ac</li>
                            <li>Vestibulum at eros</li>
                        </ul>
                        <h4 class="card-title"><i class='fas fa-calendar-alt'></i>&nbsp;<u>2020</u></h4>
                        <ul>
                            <li>Cras justo odio</li>
                            <li>Dapibus ac facilisis in</li>
                            <li>Morbi leo risus</li>
                            <li>Porta ac consectetur ac</li>
                            <li>Vestibulum at eros</li>
                        </ul>
                        <h4 class="card-title"><i class='fas fa-calendar-alt'></i>&nbsp;<u>2021</u></h4>
                        <ul>
                            <li>Cras justo odio</li>
                            <li>Dapibus ac facilisis in</li>
                            <li>Morbi leo risus</li>
                        </ul> -->
                    </div>
                </div>
            </div>

            <br>

            <!-- <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <div class="row">
                        <h1 class="display-6 fw-bold" style="padding-bottom: 20px;color: #1E4D98;">Project Experience
                        </h1>

                        <div class="col-sm">
                            <p>
                                <i class='fas fa-caret-square-right'></i> A prototype system for navigation back home on
                                Wear OS
                            </p>
                            <p>
                                <small class="badge bg-primary  btn-primary">
                                    Web App
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    Android App
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    Wear App
                                </small>
                            </p>
                        </div>
                        <div class="col-sm">
                            <p>
                                <i class='fas fa-caret-square-right'></i> The system for rquest help people who have
                                social problems form
                            </p>
                            <p>
                                <small class="badge bg-primary  btn-primary">
                                    Web App
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    Django
                                </small>
                            </p>
                        </div>
                        <div class="col-sm">
                            <p>
                                <i class='fas fa-caret-square-right'></i> The notification system for
                                unauthorized entry into private rooms via LINE
                            </p>
                            <p>
                                <small class="badge bg-primary btn-primary">
                                    Line Notify
                                </small>
                                <small class="badge bg-primary  btn-primary">
                                    IOT
                                </small>
                            </p>
                        </div>
                        <div class="col-sm">
                            <p>
                                <i class='fas fa-caret-square-right'></i> The Website for research and
                                academic services faculty of science Naresuan University
                            </p>
                            <p>
                                <small class="badge bg-primary  btn-primary">
                                    Web App
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Education -->
            <div class="p-2 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <div class="row">
                        <div>
                            <div class="row text-center justify-content-center mb-5 ">
                                <div class="col-xl-6 col-lg-8">
                                    <h2 class="fw-bold" style="color: #1E4D98;">Educations</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                                data-placement="top" title=""
                                                data-content="And here's some amazing content. It's very engaging. Right?"
                                                data-original-title="2003">
                                                <div class="inner-circle"></div>
                                                <p class="h6 mt-3 mb-1">Rojanawit Malabiang School</p>
                                                <p class="h6 text-muted mb-0 mb-lg-0">Elementary School</p>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                                data-placement="top" title=""
                                                data-content="And here's some amazing content. It's very engaging. Right?"
                                                data-original-title="2004">
                                                <div class="inner-circle"></div>
                                                <p class="h6 mt-3 mb-1">Phitsanulok Pittayakom school</p>
                                                <p class="h6 text-muted mb-0 mb-lg-0">High School</p>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                                data-placement="top" title=""
                                                data-content="And here's some amazing content. It's very engaging. Right?"
                                                data-original-title="2005">
                                                <div class="inner-circle"></div>
                                                <p class="h6 mt-3 mb-1">Naresuan University</p>
                                                <p class="h6 text-muted mb-0 mb-lg-0">Bachelor Degrees</p>
                                            </div>
                                        </div>
                                        <div class="timeline-step">
                                            <div class="timeline-content" data-toggle="popover" data-trigger="hover"
                                                data-placement="top" title=""
                                                data-content="And here's some amazing content. It's very engaging. Right?"
                                                data-original-title="2005">
                                                <div class="inner-circle"></div>
                                                <p class="h6 mt-3 mb-1">Naresuan University (Studying)</p>
                                                <p class="h6 text-muted mb-0 mb-lg-0">Master Degrees</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class=" text-center text-white" style="background-color: #2B313B;">
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                Dev: Phanthawat Phiphatkamtorn | Naresuan University
                <!-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- <footer class="pt-3 mt-4 text-muted border-top">
            Dev: Phanthawat Phiphatkamtorn
        </footer> -->
        </div>
    </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>