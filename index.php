<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>


        <script>


            var a = true;

            function slide()
            {
                $("#links").slideToggle();
                a = !a;

                if (a)
                {
                    document.getElementById("ham1").style.transform = "rotate(60deg)";
                    document.getElementById("ham2").style.transform = "rotate(-60deg)";
                    document.getElementById("ham3").style.visibility = "hidden";
                } else {

                    document.getElementById("ham1").style.transform = "rotate(0deg)";
                    document.getElementById("ham2").style.transform = "rotate(0deg)";
                    document.getElementById("ham3").style.visibility = "visible";
                }



            }
 

//            function slide2()
//            {
                $(".admin_image").slideUp();
//         
//            }
//            function slide3()
//            {
//                $(".admin_image").slideDown();
//            }
//            function slide4()
//            {
//            $(".hr_image").slideUp();
//            }
//            function slide5()
//            { $(".hr_image").slideDown();
//                
//            }

     
          
        
        
             setInterval(function () {
            i++;
            if (i > text2.length)
            {
                i = 0;
                document.getElementById("text1").innerHTML = "";
                setTimeout();
            }
            $("#text1").css("font-family", "san-serif");
            document.getElementById("text1").innerHTML += text2.charAt(i);


        }, 100);
         
          setInterval(function () {
            j++;
            if (j > text.length)
            {
                j = 0;
                document.getElementById("hello_there").innerHTML = "";
                setTimeout();
            }
            $("#hello_there").css("font-family", "san-serif");
            document.getElementById("hello_there").innerHTML += text.charAt(j);


        }, 100);
         
         
        
        </script>

    </head>
    <body>

        <nav class="navbar">
            <div class="navbar-container">
                <div class="title"> <h1>HR <span class="abc">MANAGEMENT SYSTEM</span></h1></div>

            </div>

        </nav>
        <div class="slide">
            <div id="button1" onclick="slide()">
                <div id="ham1"
                     style="background-color: black;height: 1px;padding: 2px;margin-bottom: 2px;width:5vh;"
                     ></div>
                <div
                    id="ham2"
                    style="background-color: black;height: 1px;padding: 2px;margin-bottom: 2.5px;width:5vh;"
                    ></div>
                <div
                    id="ham3"
                    style="background-color: black;height: 1px;padding: 2px;margin-bottom: 2px;width:5vh;"
                    ></div>
            </div>
        </div>
        <div class="links" id="links"><uL ><li><a href="#">HOME</a></li>

                <li><a href="homeFolder/about.php">ABOUT US</a>
                <li><a href="homeFolder/contact.php">CONTACT US</a></li>
                <li><a href="Student_module/student_login.php">STUDENT LOG-IN</a></li>

            </uL>

        </div>



        <div class="first_container" >
            <div >
                <p id="hello_there"></p>

            </div>
        </div>
        <div class="fourth_container">
            <a class="admin"href="admin_module/admin_login.php" onmouseover="slide2()" onmouseout="slide3()" >

                <div class="admin_image" onmouseover="slideremove()">


                    <h3  class="admin_hello">Hello!｡◕‿◕｡  ADMIN CLICK HERE  </h3> 
                </div>

            </a>
<!--             <a class="admin1"href="admin_module/admin_login.php" onmouseover="slide2()" onmouseout="slide3()" >

                <div class="admin_image" onmouseover="slideremove()">


                    <h3  class="admin_hello">Hello!｡◕‿◕｡  ADMIN CLICK HERE  </h3> 
                </div>

            </a>-->


            <a class="HR" href="hr_module/hrLogin.php" onmouseover="slide4()" onmouseout="slide5()"   >

                <div class="hr_image" >


                    <h3 class="hr_hello">Hello!｡◕‿◕｡   H R CLICK HERE </h3> 
                </div>

            </a>
<!--            <a class="HR1" href="hr_module/hrLogin.php" onmouseover="slide4()" onmouseout="slide5()"   >

                <div class="hr_image" >


                    <h3 class="hr_hello">Hello!｡◕‿◕｡   H R CLICK HERE </h3> 
                </div>

            </a>-->

        </div>

        <div class="third_container">
        </div>
        <div class="second_container">

            <div >
                <h1>HI AND WELCOME TO HR MANAGEMENT SYSTEM</h1>
                <P>SCROLL BELOW TO SEE WHAT THIS SYSTEM CONTAINS  : ) </P>
            </div>
            <div >
                <pre style="font-weight:bold;font-size:20px;">
IT Involves ...
Recruiting the Right People for the Right Job
Maintaining a Safe Environment
Employer-Employee Relations
Compensation and Benefits
Labor Law Compliance
Training and Development</pre>

            </div>
        </div>

        <div class="sixth_container">
            <h3 id="text1">
            </h3>
        </div>
        <div class="footer">



            <div class="copyright">
                <marquee> <h4>Copyright © HR managementSystem. All Rights ReservedƉ and ƈContact Us: +91
                        90000 00000</h4></marquee>
            </div>

        </div>



    </body>
    <script>
    
        $("#links").slideDown();

        document.getElementById("ham1").style.transform = "rotate(60deg)";
        document.getElementById("ham2").style.transform = "rotate(-60deg)";
        document.getElementById("ham3").style.visibility = "hidden";

        var text = " Hello There!";
        var i = -1;
        var j= -1;
var text2 ="A human resources management system (HRMS) or human resources information system (HRIS) or human capital management (HCM) is a form of human resources (HR) software that combines a number of systems and processes to ensure the easy management of human resources, business processes and data.";
 



    </script>   

</html>
