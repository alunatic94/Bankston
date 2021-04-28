<?php
$message_sent=false;
   if(isset($_POST['email']) && $_POST['email']!= ''){
       if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $message=$_POST['message'];
            $to = "alunatic00a@gmail.com";
            $subject='Contact Request Form';
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

            mail($to,$subject,$body);
            $message_sent=true;
       }

   }
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="lightbox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script rel="text/javascript" src="lightbox-plus-jquery.min.js"></script>
    <title>Bankston</title>
</head>
<body>
    <?php
     if($message_sent):
    ?>
        <h3 style="color:red;">Thanks we will be in touch!</h3>
    <?php
    else:
        ?>
    <div class="content-container">
        <nav>
            <div class="main-page-logo">
                <h1 class="name"><a href="#home">BANKSTØN</a></h1>
            </div>
            <ul class="nav-links">
                <li><a href="about.html">ABØUT</a></li>
                <li><a href="gallery.html">GALLERY</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#music">MUSIC</a></li>
                <li><a href="contact.html">CØNTACT</a></li>
            </ul>
            <div class="media-links">
                <ul>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/father_bankston/?hl=en" ><i class="fa fa-instagram"></i></a></li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/bankstonmusic" ><i class="fa fa-facebook square"></i></a></li>
                    <li><a target="_blank" rel="noopener noreferrer" href="https://twitter.com/FatherBankston" ><i class="fa fa-twitter square"></i></a></li>
                    <!-- <li><a target="_blank" rel="noopener noreferrer" href="https://twitter.com/FatherBankston" ><i class="fa fa-spotify square"></i></a></li> -->
                </ul>
            </div>
        </nav>

        <section id="home">
            <div class="test2-content-container">
                <!-- <div class="container">
                    <div class="button"><a href="contact.html">BØØK SESSIØN</a></div>
                </div> -->
                <div class="home-header-nathan-bankston">
                    <h2>Nathan Bankston</h2>
                </div>
                <div class="home-header-producer-engineer">
                    <h1>Producer/Audio Engineer</h1>
                </div>
            </div>
        </section>

        <section id="welcome">
            <div class="welcome-content-container" >
                <div class="welcome-content-info">
                    <h2 class="Welcome-header"><strong>Welcome</strong></h2>
                    <p class="paragraph">
                        Hush Money Music serves artists and producers looking for a creative space to 
                        connect and create music.
                    </p>
                    <p class="paragraph">
                        Located in the heart of Los Angeles, we offer comfortable workspaces paired with modern studio designs. 
                        Our studios are equipped with professional gear, acoustically treated walls and vocal booths, 
                        and customizable lighting to create an atmosphere that inspires your creative energy.
                    </p>
                    <p class="paragraph">
                        Our talented team of professionals and engineers strive for the highest quality of 
                        service – ensuring that your 
                        time with us is productive and focused on your goals the moment you walk through the doors
                    </p>
                </div>
                <div class="image-of-nathan">
                    <div class="about-me-icons-words">
                    </div>
                    <div class="more-about-me-img-container">
                    </div>
                </div>
            </div>
        </section>

        <section id="services" data-aos="fade-left">
            <div class="test2-content-container">
                <div class="home-header-nathan-bankston" id="about-header-about-nathan">
                    <h2>SERVICES</h2>
                </div>
                <div class="slider">
                    <div class="slide-container">
                        <div class="slide-container-header">
                            <h1>Producer</h1>
                        </div>
                        <div class="slide-container-description">
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quisquam, saepe odio tempora laboriosam fugiat itaque, ex atque eum 
                                libero quaerat harum reiciendis iure magnam? Aliquam nam molestias nesciunt
                            </p>
                        </div>
                        <div class="slide">
                            <div class="slide-img-container" id="producer-service">
                                <p>hey</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="slide-container-header">
                            <h1>Mixing</h1>
                        </div>
                        <div class="slide-container-description">
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quisquam, saepe odio tempora laboriosam fugiat itaque, ex atque eum 
                                libero quaerat harum reiciendis iure magnam? Aliquam nam molestias nesciunt
                            </p>
                        </div>
                        <div class="slide">
                            <div class="slide-img-container" id="mixing-service">
                                <p>hey</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide-container">
                        <div class="slide-container-header">
                            <h1>SongWriting</h1>
                        </div>
                        <div class="slide-container-description">
                            <p class="paragraph">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla quisquam, saepe odio tempora laboriosam fugiat itaque, ex atque eum 
                                libero quaerat harum reiciendis iure magnam? Aliquam nam molestias nesciunt
                            </p>
                        </div>
                        <div class="slide">
                            <div class="slide-img-container" id="songwriting-service">
                                <p>hey</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="services-description-container">
                    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, architecto placeat? 
                        Magni officia dolores fuga eius impedit explicabo, quasi adipisci, ratione nulla, nesciunt dolor id ut. 
                        Nemo, eveniet? Enim, repellat? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur, 
                        architecto placeat? 
                        Magni officia dolores fuga eius impedit explicabo, quasi adipisci, ratione nulla, nesciunt dolor id ut. 
                        Nemo, eveniet? Enim, repellat?

                    </h2>
                </div> -->
                <!-- <div class="test2-content-content" id="content-container-services">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam fugit culpa enim aliquam fugiat saepe excepturi voluptas, corrupti nemo dolor porro, iste consequuntur omnis magni eos odit. Nisi, numquam nam!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolor quia exercitationem, perspiciatis voluptas, quis aliquid incidunt tempore sed pariatur temporibus! Cupiditate eveniet libero ab voluptates obcaecati itaque aliquam quo?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi sed quo consequuntur, officia iste consequatur ab voluptatem neque velit error. Unde nisi odit iste eveniet rerum quae sint nobis reiciendis?
                    </p>
                </div> -->

                <!-- <div class="test" id="test-in-main">
                    <div class="icon-container">
                        <div class="icon" id="producer">
                            <i class="fa fa-volume-up"></i>
                            <h2>Producer</h2>
                            <div class="icon-info" id="producer-info">
                                <h2>LA Recording School</h2>
                                <p>I graduated from LA Recording School in 2017
                                with honors. Its here where I began my journey
                                to becoming a music producer.
                                </p>
                            </div>
                        </div>
                        <div class="icon" id="mixing">
                            <i class="fa fa-sliders fa-lg"></i>
                            <h2>Mixing</h2>
                            <div class="icon-info" id="mixing-info">
                                <p>I graduated from LA Recording School in 2017
                                    with honors. Its here where I began my journey
                                    to becoming a music producer.
                                </p>
                            </div>
                        </div>
                        <div class="icon" id="songwriter">
                            <i class="fa fa-play"></i>
                            <h2>Songwriter</h2>
                            <div class="icon-info" id="songwriter-info">
                                <h2>LA Recording School</h2>
                                <p>I graduated from LA Recording School in 2017
                                with honors. Its here where I began my journey
                                to becoming a music producer.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </section>

        <section id="music">
            <div class="test2-content-container">
                <!-- <div class="artist-container">
                    <div class="artist" id="azelia">
                        <img src="img/azelia.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/4kl1UmmOKbfu1sCyxRwRnD" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="abi">
                        <img src="img/abi.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="tamara">
                        <img src="img/tamara.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/1JQ7fuCW9LEFHBnFNDHkBx" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div> 
                    <div class="artist" id="ridg">
                        <img src="img/ridg.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/0KMKCEq6iSJANVQbuYWwrq" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div> 
                    <div class="artist" id="ridg">
                        <img src="img/ridg.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/0KMKCEq6iSJANVQbuYWwrq" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="ridg">
                        <img src="img/ridg.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/0KMKCEq6iSJANVQbuYWwrq" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="nicole">
                        <img src="img/nicole.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/0KMKCEq6iSJANVQbuYWwrq" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="ridg">
                        <img src="img/ridg.jpg" alt="">
                        <iframe src="https://open.spotify.com/embed/track/0KMKCEq6iSJANVQbuYWwrq" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div> -->
                <div class="home-header-nathan-bankston" id="about-header-about-nathan">
                    <h2>CLIENTS</h2>
                </div>
                <div class="slider" id="slider-clients">
                    <div class="artist" id="abi">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="azelia">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="ridg">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="keltie">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="Kevin-Parker">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="Phantom-Professional">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 50px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="Nicole-Winters">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="abi">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="abi">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="abi">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="abi">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM" style=" margin-top: 5px; border:solid white; border-width: .3mm;"width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div class="artist" id="abi">
                        <!-- <img src="img/abi.jpg" alt=""> -->
                        <iframe src="https://open.spotify.com/embed/track/30Dx9VUM4oNgtR0EVpgVmM"  width="100%" height="70" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>

        </section>

        <!-- DONT DELETE THIS!  
        <div class="contact-content">
            <div class="container-contact-form">
                <form action="index.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">Send Message!</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-send-me-a-message">
                <h1 style="font-size:50px; font-family: 'Abel', sans-serif;">Send Me A Message</h1>
        </div> -->
    </div>
    
    <?php 
        endif;
    ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset:400,
            duration:1000
        });
    </script>
</body>
</html>