<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects JRC Electric</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styleSubs.css"> <!-- Sub-pages CSS file -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap">
    
</head>
<body>
    <div class="containero">
        <div class="heroProjects">
            <div class="shade">
                <?php include 'navBar.php'; ?> 
                <div class="circle-background"></div>
                <div class="hero-title">
                    
                    <h1>Quality Workmanship You Trust </h1>
                    <p>Browse our gallery of completed projects to see our expertise.</p>
                    
                </div>
                <div>
                    <a href="contact.php" class="learn">Estimate request</a>
                </div>
            </div>

        </div>

        <div class="comment">
            <div class="project1">
                <br/>
                <h2>Revitalized Spaces </h2>
                <p>Rewired Power</p>
                <br/>
            </div>

            <div class="border-gal">
                <!-- Bootstrap carrousel starts -->
                <div class="gallery1">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="gallery1/kitchenUp1.JPEG" class="d-block w-100" alt="Hagertown">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery1/kitchenUp2.JPEG" class="d-block w-100" alt="Hagertown">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery1/kitchenUp3.JPEG" class="d-block w-100" alt="Hagertown">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery1/kitchenUp4.JPEG" class="d-block w-100" alt="Hagertown">
                            </div>
                            <div class="carousel-item">
                                <img src="gallery1/kitchenUp5.JPEG" class="d-block w-100" alt="Hagertown">
                            </div>
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                        
                </div>
                <!-- Bootstrap carrousel ends -->

                <div class="leyenda">

                    <h2>Hagerstown, Maryland</h2>

                    <p>Entire house project</P>
                </div>
            </div>

            <!-- Bootstrap carrousel starts -->
            <div class="gallery1">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="gallery1/kitchenUp1.JPEG" class="d-block w-100" alt="Hagertown">
                        </div>
                        <div class="carousel-item">
                        <img src="gallery1/kitchenUp2.JPEG" class="d-block w-100" alt="Hagertown">
                        </div>
                        <div class="carousel-item">
                        <img src="gallery1/kitchenUp3.JPEG" class="d-block w-100" alt="Hagertown">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                    
            </div>
            <!-- Bootstrap carrousel ends -->

            <h2>Hagerstown, Maryland</h2>

            <p>Entire house project</P>
            <h3></h3>
        </div>
        

        <div class="containero-cards">
            <div class="card">
                <h2>Contact</h2>
                <p>Jrcelectric26@gmail.com</p>
            </div>
            <div class="card">
                <h2>240-277-2058</h2>
                <p>Speak with us</p>
            </div>
            <div class="card">
                <h2>Location</h2>
                <p>21032 Cog Wheel Way Germantown <br> 
                    Md 20876</p>
            </div> 
        </div>




        <?php include 'footer.php'; ?>
        
    </div>
    
    <script src="script.js"></script>

</body>
</html>