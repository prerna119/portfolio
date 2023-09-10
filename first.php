﻿<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <header id="header">
        <a class="logo">My Portfolio</a>
        <nav class="navbar">
            <a href="#home">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#skill-box">SKILL</a>
            <a href="#contact">CONTACT </a>
        </nav>
        <div class="nav2">
           <a href="#navbar"> <i class="fa-solid fa-bars"></i></a>

        </div>
    </header> 


    <section id="home">
        <div class="container">
            <h3> Hello, I Am 
            Prerna Choudhary</h3>
            <h2>And I'm a  creative<span> web designer</span></h2>
            <br>
            <a href="#about"> more about me</a>
        </div>
        <div class="box">
            

        </div>
    </section>

    <section id="about">
        <div class="aboutclass">
        <div class="aboutbox">

            <div class="about-img">
            </div>




            <div class="about-text">
                <h1>About<span>ME</span></h1>
                <p>
                    Hello , <br>My name is Prerna Choudhary . As a dedicated and ambitious fresher in the field of
                    development. Highly motivated and eager fresher  seeking entry-level opportunities to launch a successfull career. Equipped with a solid foundation in development and passion for continuous learning . Strong communication ,analytical and problem-solving skill. Adaptable team player with positive attitude . Ready to contribute and  make a positive impact while acquiring practical experience in a dynamic work environment .
                </p>
                <br>
                    <br>
                <a href="#">Resume</a>
                <a href="#">Project</a>
            </div>
        </div>
        </div>
       
    </section>






    <section id="skill-box">
        <div class="icon">
            <div class="progress-bar">
                <div>
                    <h1 class="head"> technical skill</h1>

                    <img class="one" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMJngB66Dk9zAppFe703U85rHg9lF6DqC63Q&usqp=CAU" height="110" />
                </div>
            </div>
            <div class="headbar">
                <div class="bar">
                    <div class="info">
                        <span>HTML</span>
                    </div>
                    <div class="progress-line html">
                        <span></span>
                    </div>

                </div>
                <div class="bar">
                    <div class="info">
                        <span>CSS</span>
                    </div>
                    <div class="progress-line css">
                        <span></span>
                    </div>

                </div>
                <div class="bar">
                    <div class="info">
                        <span>JAVASCRIPT</span>
                    </div>
                    <div class="progress-line javascript">
                        <span></span>
                    </div>

                </div>
                <div class="bar">
                    <div class="info">
                        <span>JAVA</span>
                    </div>
                    <div class="progress-line java">
                        <span></span>
                    </div>

                </div>
            </div>


        </div>

        <!-------------------[      soft skill        ]-----------

    <div class="icon2">
        <div class="progress-bar2">
            <div>
                <h1 class="head"> soft skill</h1>

                <img class="two" src="https://static.thenounproject.com/png/1714291-200.png" height="110">

            </div>
            <div class="radius-bar">

                    <svg width="100" height="100">
                       <circle class="progress1"  cx="100" cy="100" r="80"></circle>
                       <circle class="path path-1"  cx="100" cy="100" r="80"></circle>
                    </svg>
                    <div class="precentage">70%</div>
                    <div class="text"> COMMUNICATION</div>


            </div>
        </div>

    </div>-->







    </section>


    <div id="contact">

        <div class="row">
            <div class="contact-left">
                <h1 class="title">contact me</h1>
               <img src="https://media.istockphoto.com/id/1245847874/photo/3d-illustration-of-startup-concept-and-business-agreement-two-men-with-laptops-sitting-in.jpg?s=612x612&w=0&k=20&c=ONaWbL454Ip8fuem2BnkMkTa2d5oViXGqx1MsWOuaRg=" height="250">
                <p><i class="fa-solid fa-paper-plane"></i>choudharyprerna14@gmail.com</p>
                <p><i class="fa-solid fa-phone-volume"></i>  +91 6265136938 </p>

                <div class="social-icon">
                    <a href="https://www.instagram.com/prerna119/"><i class="fa-brands fa-instagram"></i> </a>
                    <a href="https://www.facebook.com/profile.php?id=100060341520090"> <i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/prerna-choudhary-7731b8277/"> <i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="contact-right">
                <form action="connect.php" method="post">
                   
                    <p> <input type="text" name="name" placeholder="Enter Name" required></p>
                    <p> <input type="email" name="email" placeholder="Enter Email" required></p>


                    <p> <textarea name="message" placeholder="Message" rows=4> </textarea></p>

                    <button class="btn" name="submit" type="submit">submit</button>

                </form>
            </div>
        </div>

    </div>

    <div class="copyright">
        Copyright © 2023 made with <i class="fa-solid fa-heart"></i> by Prerna
    </div>

</body>
</html>