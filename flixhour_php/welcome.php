<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlixHour | FlixHour.com</title>
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="FlixHour_ii.css">
    <link rel="stylesheet" href="animate.css">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
<style>
    * {
  margin: 0;
  padding: 0;
}

html {
  scroll-behavior: smooth;
  overflow-x: hidden;
}

/* Navigation Bar */
#navbar {
  display: flex;
  align-items: left;
  position: sticky;
  justify-content: left;
  width: 100%;
}
#navbar::before {
  content: "";
  background-color: rgb(46, 43, 43);
  position: absolute;
  top: 0px;
  left: 0px;
  height: 100%;
  width: 100%;
  z-index: -1;
  opacity: 0;
}
/* Navigation Bar : Logo and Image */
#logo {
  margin: 10px 20px;
}
#logo img {
  height: 60px;
  margin: 4px 7px;
  border-radius: 1000%;
}
/* Navigation Bar: List Styling */
#navbar ul {
  display: flex;
  font-family: "Ubuntu", sans-serif;
  font-style: normal;
  font-weight: bolder;
}
#navbar ul li {
  list-style: none;
  font-size: 2rem;
}

#navbar ul li a {
  color: rgb(255, 145, 0);
  display: block;
  margin-top: 65px;
  padding: 0px 30px;
  border-radius: 20px;
  text-decoration: none;
  transition: background-color 0.5s;
}

#navbar ul li a:hover {
  color: rgb(139, 0, 0);
  background-color: white;
}
/* Home Section */
#home {
  display: flex;
  flex-direction: column;
  padding: 3px 200px;
  padding-right: 370px;
  margin-right: 300px;
  height: 550px;
  /* justify-content: center; */
  align-items: center;
}

#home::before {
  content: "";
  position: absolute;
  background: url("https://m.economictimes.com/thumb/msid-69907393,width-1200,height-900,resizemode-4,imgsize-247872/tv-thumb.jpg")
  no-repeat center center/cover;
  height: 830px;
  top: 2px;
  left: 0px;
  width: 100%;
  z-index: -1;
  opacity: 0.8;
}

#home h1 {
  color: rgb(97, 1, 1);

  font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
  font-weight: bolder;
  padding: 30px;
  font-size: 53px;
}

#home p {
  color: rgb(75, 4, 69);
  font-weight: 700;
  font-size: 2.25rem;
  font-family: "Ubuntu", sans-serif;
  line-height: 145%;
}

/* Genre Section */
#genre-container {
  margin-top: 130px;
  background-image: url("https://static-cse.canva.com/blob/140234/Rainbow-Gradient-Pink-and-Purple-Zoom-Virtual-Background.png");
}
#genre {
  table-layout: fixed;
  width: 90%;
  margin-top: 10px;
  margin-left: 5%;
  margin-bottom: 10px;
}

#genre.box {
  border: 2px solid brown;
  padding: 30px;
  background-color: rgba(255, 247, 245, 0.945);
  border-radius: 50px;
  margin-bottom: 150px;
  height: 50px;
}

#genre .box ul {
  font-family: "Ubuntu", sans-serif;
  padding: 1px 5px;
  margin: 5px 10px;
  margin-bottom: 2px;
  list-style: none;
}
#genre .box ul li a {
  font-family: "Ubuntu", sans-serif;
  font-size: 1.9rem;
  color: #d2691e;
  font-weight: bold;
  transition: color 0.5s;
}
#genre .box ul li a:hover {
  color: #00008b;
}
#genre-container strong:hover {
  color: #32cd32;
}
/* All time famous Section */
#atf-section {
  position: relative;
}

#atf-section::before {
  content: "";
  position: absolute;
  background: url("https://cdn.pixabay.com/photo/2016/11/10/14/16/floral-1814372__340.jpg");
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.3;
}

#atf {
  display: flex;
  justify-content: center;
  align-items: center;
}

#atf-section h1:hover{
  color: #32cd32;
}

.atf-item {
  padding: 34px;
  margin: 17px;
}

.name {
  font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
  font-size: 2rem;
  margin-top: 6%;
}
/* Contact Section */
#contact {
  position: relative;
}
#contact::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0.7;
  background: url("https://cdn.pixabay.com/photo/2017/12/02/14/38/contact-us-2993000__340.jpg")
    no-repeat center center/cover;
}
#contact-box {
  display: flex;
  justify-content: center;
  align-items: center;
  padding-bottom: 34px;
}
#contact-box input,
#contact-box textarea {
  width: 100%;
  padding: 0.5rem;
  border-radius: 9px;
  font-size: 1.1rem;
}

#contact-box form {
  width: 40%;
}

#contact-box label {
  font-size: 1.3rem;
  font-family: "Bree Serif", serif;
}

#contact h1:hover{
  color: #32cd32;
}

footer {
  background: black;
  color: white;
  padding: 9px 20px;
}

/* Utility Classes */
.h-primary {
  font-family: "Ubuntu", sans-serif;
  font-size: 4rem;
  /* padding: 8px; */
}

.h-secondary {
  font-family: "Ubuntu", sans-serif;
  font-size: 2.3rem;
  padding: 20px;
}

.btn {
  padding: 6px 20px;
  border: 2px solid white;
  background-color: #ffc107;
  color: rgb(20, 20, 20);
  margin: 17px;
  font-size: 1.5rem;
  border-radius: 10px;
  cursor: pointer;
  justify-content: center;
  transition: background-color 0.5s;
}
.btn:hover {
  background-color: #fb9300;
}
.center {
  text-align: center;
}

.center a:link,
.center a:visited {
  color: black;
  text-decoration: none;

  padding-bottom: 1px;
  transition: border-bottom 0.2s, color 0.2s;
}

.center a:hover,
.center a:active {
  color: #721c02;
}

    #btn:hover{
  cursor: pointer;
}
</style>
</head>
<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <nav id="navbar">
        <div id="logo">
            <img  src="logo_flixhour.jpeg" alt="FlixHour" style="
            width: 120px;
            height: 120px; cursor: pointer;" href="FlixHour.html">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#genre-container">Genre</a></li>
            <li class="item"><a href="#atf-section">All Time Famous</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
        </ul><img src="https://img.icons8.com/ios-glyphs/30/000000/guest-male.png"style="margin-left:650px; height:51px;margin-top:55px;">
        <button type="Sign In" id="btn" style="border-radius: 8px;  height: 51px; width: 110px; margin-top: 55px;margin-left:10px; color: seashell; background:red ; font-size: medium; font-weight: bolder;" onclick="window.location.href='logout.php'"><b>Sign Out</b></button>
    </nav>
    <div id="home">
        <img class="js--wp-4" src="logo_flixhour.jpeg" alt="FlixHour" style="position: absolute; right:320px ; top: 233px; width: 350px; height: 275px;border-radius: 5%;margin-right: 95px; ">
     <h1 class="h-primary" style="margin-right: 351px;"><strong>World of TV Series</strong> </h1>
     <p style="margin-right: 275px;">
         Lockdown has been full of boredom for all of us, but we can cheer ourselves by changing our thoughts and experience the lives of several amazing characters.
     </p>
     <br>
     <p style="margin-right: 275px;">
         Here, We help you to find the perfect one, according to your mood.That will help you to relax yourself in these stressful situations.

     </p>
    </div>
    <section id="genre-container">
        <h1 class="h-primary center"><strong>Genre</strong></h1>
        <table id="genre">
            <tr>

             <td>
              <div class="box">
                  <h3 class="h-secondary center "><a href="crime.html">Crime-Drama</a></h3>
                  <ul>
                      <li class="center"><a href="https://www.youtube.com/watch?v=iKUzhzustok">Sherlock (4 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=X4bF_quwNtw">Lucifer (5 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=R6_qsTCBns8">Dexter (8 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=tcrNsIaQkb4">The Boys (2 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=xl8zdCY-abw">Narcos (3 Seasons)</a></li>
                  </ul>
              </div>
             </td>

             <td>
              <div class="box">
                  <h3 class="h-secondary center "><a href="action.html">Action-Thriller</a></h3>
                  <ul>
                      <li class="center"><a href="https://www.youtube.com/watch?v=f5av6OqFwz0">Vikings (6 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=jAy6NJ_D5vU">Daredevil (3 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=cSqi-8kAMmM">The Witcher (1 Season)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=iH44Z0QwrWQ">Titans (2 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=s4QV6OZdmWY">The Punisher (2 Seasons)</a></li>
                  </ul>
              </div>
             </td>

             <td>
              <div class="box">
                  <h3 class="h-secondary center "><a  href="comedies.html">Comedies</a</h3>
                  <ul>
                      <li class="center"><a href="https://www.youtube.com/watch?v=WBb3fojgW0Q">The Big Bang Thoery (12 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=2iKZmRR9AR4">The Office (9 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=sEOuJ4z5aTc">Brooklyn Nine-Nine (7 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=aJtVL2_fA5w">How I met your Mother (9 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=W0uWS6CnC2o">Schitt's Creek (6 Seasons)</a></li>
                  </ul>
              </div>
             </td>

            </tr>
          </table>

          <table id="genre">
            <tr>
                <td>
                    <div class="box">
                      <h3 class="h-secondary center "><a  href="scifi.html">Sci-Fi and Fantasy</a</h3>
                      <ul>
                          <li class="center"><a href="https://www.youtube.com/watch?v=ia1Fbg96vL0">The 100 (7 Seasons)</a></li>
                          <li class="center"><a href="https://www.youtube.com/watch?v=oWnYtyNKPsA">Star Trek: Discovery (3 Seasons)</a></li>
                          <li class="center"><a href="https://www.youtube.com/watch?v=fzmM0AB60QQ">Lost in Space (2 Seasons)</a></li>
                          <li class="center"><a href="https://www.youtube.com/watch?v=0DAmWHxeoKw">The Umbrella Academy (2 Seasons)</a></li>
                          <li class="center"><a href="https://www.youtube.com/watch?v=iD-cFgDDuqM">The Order (2 Seasons)</a></li>
                      </ul>
                    </div>
                  </td>

            <td>
              <div class="box">
                  <h3 class="h-secondary center "><a href="anime.html">Anime</a></h3>
                  <ul>
                      <li class="center"><a href="https://www.youtube.com/watch?v=j2hiC9BmJlQ">Naruto (9 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=gvxNaSIB_WI">Death Note (1 Season)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=VQGCKyvzIM4">Demon Slayer (1 Season)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=2JAElThbKrI">One-Punch Man (2 Seasons)</a></li>
                      <li class="center"><a href="https://www.youtube.com/watch?v=EPVkcwyLQQ8">My Hero Academia (5 Seasons)</a></li>
                  </ul>
              </div>
             </td>
             <td>
                <div class="box">
                    <h3 class="h-secondary center "><a href="horror.html">Horror</a></h3>
                    <ul>
                        <li class="center"><a href="https://www.youtube.com/watch?v=R1v0uFms68U">The Walking Dead (10 Seasons)</a></li>
                        <li class="center"><a href="https://www.youtube.com/watch?v=GXrDYboUnnw">The Originals (5 Seasons)</a></li>
                        <li class="center"><a href="https://www.youtube.com/watch?v=lTE5MAGpflw">The Irregulars (1 Season)</a></li>
                        <li class="center"><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E">Adventures of SABRINA (4 Seasons)</a></li>
                        <li class="center"><a href="https://www.youtube.com/watch?v=pjq7Gl_hhPY">The Terror (2 Seasons)</a></li>
                    </ul>
                  </div>
                </td>
            </tr>
          </table>
    </section>
    <section id="atf-section">
        <h1 class="h-primary center"><strong>All Time Famous</strong></h1>
        <div id="atf">
            <div class="atf-item photo"><a href="https://www.imdb.com/title/tt2442560/">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeeb0Aok56puFxU_g-hVeaWTP4bhA5XhOyPA&usqp=CAU" alt="Peaky Blinder" height="300" width="250"> </a>
                <h3 class="name center js--wp-1">Peaky Blinders</h3>
            </div>
            <div class="atf-item photo"><a href="https://www.imdb.com/title/tt4574334/">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRDUBQFbyct1HMIY8eAgj8jkyHhL1EqECbaA&usqp=CAU" alt="Stranger Things" height="300" width="250"> </a>
                <h3 class="name center js--wp-1">Stranger Things</h3>
            </div>

            <div class="atf-item photo"> <a href="https://www.imdb.com/title/tt6468322/?ref_=nv_sr_srsg_3">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp5ZqIoGgCaDkzHANz36_gBTqO6MZYcu-ZWQ&usqp=CAU" alt="Money Heist" height="300" width="250"></a>
                <h3 class="name center js--wp-1">Money Heist</h3>
            </div>
            <div class="atf-item photo"><a href="https://www.imdb.com/title/tt0944947/?ref_=nv_sr_srsg_0" >
                <img src="https://m.media-amazon.com/images/M/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_.jpg" alt="Game of Thrones" height="300" width="250"></a>
                <h3 class="name center js--wp-1">Game of Thrones </h3>
            </div>
        </div>
        <div id="atf">
            <div class="atf-item photo"> <a href="https://www.imdb.com/title/tt0903747/?ref_=nv_sr_srsg_0">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCHbTYb1VbCHoMTY_lVj0tyKMIydcb86PWFw&usqp=CAU" alt="Breaking Bad" height="300" width="250"></a>
                <h3 class="name center js--wp-1">Breaking Bad</h3>
            </div>
            <div class="atf-item photo"><a href="https://www.imdb.com/title/tt0108778/?ref_=nv_sr_srsg_0">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc7lkK4ByKj7JJkuLgKLEkItaAreBn6j4k3g&usqp=CAU" alt="Friends" height="300" width="250"></a>
                <h3 class="name center js--wp-1">Friends</h3>
            </div>
            <div class="atf-item photo"> <a href="https://www.imdb.com/title/tt5753856/?ref_=fn_al_tt_1">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHiNES0XH_elnSXMGtvaq5O1RTH-xm8kmY3w&usqp=CAU" alt="Dark" height="300" width="250"></a>
                <h3 class="name center js--wp-1">Dark</h3>
            </div>
            <div class="atf-item photo "> <a href="https://www.imdb.com/title/tt0455275/?ref_=nv_sr_srsg_0">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3K-GGQSosjLvOzejcF1xTiSi-605u6xTaPw&usqp=CAU" alt="Prison Break" height="300" width="250"></a>
                <h3 class="name center js--wp-1">Prison Break</h3>
            </div>
        </div>

    </section>
    <section id="contact">
        <h1 class="h-primary center js--wp-2">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Your opinion about any particular show:</label>
                    <textarea name="message" id="message" cols="25" rows="10" placeholder="Feel free to write your view!!!"></textarea>
                </div>
                <button class="btn js--wp-3"> Submit Now</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; FlixHour.com All rights reserved!
        </div>
    </footer>

</body>
<script src="animate.js"></script>
</html>
