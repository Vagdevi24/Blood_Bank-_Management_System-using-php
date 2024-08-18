<?php 
// start the session 
    session_start();

?>
<html>
    <head>
        <title>
            Homepage
        </title>
        <style>
            :root
{
    --background-image-color:linear-gradient(to right,#ff512f 0%,#f09819 51%,#ff512f 100%  );
    
}
*{

    box-sizing: border-box;
    margin:0;
    padding:0;
}
body{
    /* padding: 1% 10%; */
    font-family: 'poppins',sans-serif 'arial';
    


}
.nav-sec{
    /* background-image:url("https://cdn.pixabay.com/photo/2015/09/09/20/06/bowl-932980_960_720.jpg"); */
    background-image: url("https://st.depositphotos.com/1007168/2969/i/450/depositphotos_29692275-stock-illustration-red-blood-drop-character-giving.jpg");
    height: 99vh;
    background-position: center left 3%;
    background-repeat: no-repeat;
    background-size: 50%; /* Adjust the size as needed */
}
header{
    background-color: transparent;
    height: 75px;
    /* position: sticky; */
    top: 0;
}

ul{
    list-style-type: none;
    display: flex;
    align-items: center;
    justify-content: space-evenly;

}
nav ul li a{
    /* color: #434343; */
    color: #000000;
    text-decoration: none;
    font-weight: 550;
    text-align: center;
    transition: 0.2s; 
     

}
nav ul li a:hover{
     border-bottom: 3px solid #f09819 ;

}
nav ul li a{
    /* color: white;
    background-image: var(--background-image-color) ; 
    padding:10px,30px;
    border:none;
    border-radius:10px,30px ;
    text-align: center;
    background-size: 200% auto;
    text-decoration: none;
    margin-top: 220px; */
    background-color:darkslategray;
    color: #fff;
    padding: 0.2rem 2rem;
    border: none;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    font-weight: bold;
    cursor: pointer;
    transition: scale 0.2 ease;
    gap: 2rem ;
}
nav ul li a:hover{
    background-position: right center;
    color:white;
    
}

.hero{
    width: 400px;
    height: 400px;
    background: #191919;
    margin: 10% 0; /* Adjust margin to move it to the right */
    margin-left: auto; /* Auto margin for left */
    margin-right: 10%; /* Right margin */
    border-radius: 50%;
    position:absolute;
    right: 0; /* Align to the right side */
    top: 40%; /* Adjust as needed */
    transform: translateY(-50%);
      
     
}
.left-box{
     /* min-width: 50%;
    text-align:center ;
    margin-top: -40px;
    z-index:1;  */
    position: absolute;
    width: inherit;
    height: auto;
    top: 42%;
      transform:translateY(-50%);
      text-align: center;
      font-family: Arial;
      color: #fff;
      font-style: italic;
      text-transform: capitalize;
    

}
 
.left-box p{
    color:aqua;
    font-size:24px;
    margin:100px auto 8px auto;
    


}
.left-box h2{
    color:#fff;
    font-size: 40px;
    font-weight: bold;
    margin: 10px auto 20px auto;  
}




.title h2{
    font-size: 34px;
    text-align: center;
    padding:40px 0 0 0 ;

}
.menu{
    margin-left: 110px;
    margin-top: 50px;
    display: inline-grid;
    grid-template-columns: auto auto auto auto;
    /* align-items: center; */
    justify-content: center;
    text-align: center;
    /* padding: 0px 15px 40px 15px; */

}
.item{
    margin: 50px;
    padding: 30px 30px;
    transition: 0.4s ease-in ;
    box-shadow: 2px 2px 2px 2px gray,2px 2px 2px 2px gray;
    color:#000000;
    /* background-color:darkslategray; */

}


.typeofdonation {
  background-color:#fff; /* Background color */
    padding: 20px; /* Padding for content */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Shadow */
    width: 50%; /* Decrease width by 20% */
    height: 40%; /* Decrease height by 20% */
    margin: auto; /* Center the box horizontally */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}





footer {
    background-color: #f8f8f8;
    padding: 40px 0;
}
  
  footer h3 {
    color:brown;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 20px;
  }
  
  footer p {
    color:darkslategray;
    font-size: 24px;
    line-height: 1.5;
    margin-bottom: 20px;
  }
  
  footer ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  footer ul li {
    margin-bottom: 10px;
    padding: 20px 30px;
  }
  
  footer ul li a {
    color: #330e8a;
    font-size: 20px;
    text-decoration:dotted;
    transition: color 0.2s ease-in-out;
  }
  
  footer ul li a:hover {
    color: #e74c3c;
  }
  
  footer .social-media {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-top: 10px;
  }
  
  footer .social-media li {
    margin-right: 10px;
  }
  
  footer .social-media li:last-child {
    margin-right: 0;
  }
  
  footer .social-media li a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 32px;
    height: 32px;
    color: #fff;
    border-radius: 50%;
    background-color: #e74c3c;
    transition: background-color 0.2s ease-in-out;
  }
  
  footer .social-media li a:hover {
    background-color: #d62c1a;
  }
  

        </style>

    </head>
    <body>
        <header class="nav-sec">
            <nav>
                <ul >
                    <li><img src="blogo.png" alt="image loading" width="80px" height="80px"></li>
                    <li>
                        <a href="index.php" class="btn">HOME</a>
                    </li>
                    <li>
                        <a href="lookhome.php">Looking For Blood</a>
                    </li>
                    
                    <li>
                        <a href="donatehome.php">Donate Blood</a>
                    </li>
                    
                    <li>
                    <a href="contact.html">Contact Us</a>
                    </li>
                    <?php
                if(isset($_SESSION["username"])){ 
                    $uname = $_SESSION["username"]; 
                ?>
                <li><a href="#"><?php echo "Welcome ".$uname ?></a></li>
                <li><a href="logout.php">Logout</a></li>
                <?php
                }
                else{
                    ?>
                    <li>
                      <a href="login.html">LOGIN/SIGN UP</a>
                  </li>
                  <li>
                      <a href="admin.html">ADMIN LOGIN</a>
                  </li>
                <?php
                }
                ?>
                    
                </ul>
            </nav>
            <div class="hero">
                <div class="left-box">
                    <h2>Be the reason<br> for <br>someone's heartbeat.</h2>
                </div>
                
    
    
            </div>
        </header>
         

         

         <div class="title">
            <h2  style="color: brown;">Understanding Blood Health and Donation</h2>
         </div>
         <section class="menu">
            <div class="item">
                <h1  style="color:#330e8a;">The Need Of Blood</h1>
                <h3 >In our world, the need for blood is ever-present and critical.
                    From emergency surgeries to ongoing treatments for various medical conditions, blood serves as a lifeline for countless individuals every day. 
                    It's not just about quantity; it's about the right type of blood being available at the right time. 
                    That's why giving blood regularly is so crucial. Every donation helps save someone's life</h4>
                
            </div>
            <div class="item">
                <h1  style="color:#330e8a;"> Blood Tips</h1>
                <h3>Stay Hydrated:
                    Drink Water for Healthy Blood.<br>
                    Eat Iron-Rich Foods:
                    Choose Foods High in Iron.<br>
                    Exercise Regularly:
                    Keep Blood Flowing with Activity.<br>
                    Avoid Smoking: 
                    Protect Blood Vessels; Quit Smoking.<br>
                    Know Your Blood Type:
                    Understand Your Blood for Emergencies.
                
                    </h3>
            </div>
            <div class="item">
                <h1  style="color:#330e8a;"> Who You Could Help</h1>
                <h3>Emergency Patients: Those in accidents or needing immediate surgery.<br>
                    Chronic Disease Patients: Individuals with conditions like cancer or anemia.<br>
                    Surgical Recipients: People undergoing major operations.<br>
                    Burn Victims: Those with severe burns requiring treatment.<br>
                    Premature Babies: Newborns needing extra support for their health.</h3>
                
                
            </div>
            
            
            
         </section>
         <!-- <h1 style="text-align: center;font-size:50px;color:brown;">Types Of Donation</h1>
         <div class="typeofdonation">
            
            <p style="color:#000000;font-size:25px">The average human body contains about five liters of blood, which is made of several cellular and non-cellular components such as Red blood cell, Platelet, and Plasma.

              Each type of component has its unique properties and can be used for different indications. The donated blood is separated into these components by the blood centre and one donated unit can save upto four lives depending on the number of components separated from your blood.</p>
          </div> -->
         <footer>
            
            <div class="container">
              <div class="row">
                
                <div class="col-md-3">
                  <h3>Links</h3>
                  <ul>
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a href="aboutus.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h3>Follow Us</h3>
                  <ul class="social-media">
                    <li><a href="https://www.facebook.com/"><img src="https://www.seekpng.com/png/full/470-4701717_facebook-icon-gray-circle-facebook-logo-pequeo-blanco.png" width="50px"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="https://www.seekpng.com/png/full/472-4727621_instagram-logo-png-format-click-here-to-download.png" width="50px"></a></li>
                    <li><a href="https://www.twiter.com/"><img src="https://www.seekpng.com/png/full/5-54303_twitter-introduces-a-new-app-for-windows-twitter.png" width="50px"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
          
    </body>
</html>