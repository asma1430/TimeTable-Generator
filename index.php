<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>TimeTable Management System</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./dist/output.css">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLE CSS -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Google	Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

</head>

<body>
  <div class=" relative">
    <img src="images/bg.jpg.jpg" alt="" class="">
    <div class="bg-white w-1/2 h-1/2 absolute top-1/4 left-1/4 rounded-lg p-4">
      <div class="flex -mb-4">
        <img class="w-12 h-12 mr-4 " src="./imgP/JUW.jpg" alt="">
        <p class="font-bold font-serif text-center uppercase mt-2 ">Jinnah University For Women</p>
      </div>
      <p class=" font-serif ml-16 ">Department of Computer Science and Software Engineering</p>
      <p class=" font-sans font-bold ml-16">Time Table Management System</p>
      <hr>
      <!-- HEAD -->
      <center>


        <div align="center" STYLE="margin-top: 20px">
          <button id="studentLoginBtn" class="w-32 h-32 m-2 bg-slate-900 text-white rounded-2xl shadow-2xl text-sm font-serif ">STUDENT LOGIN
          </button>
          <button data-scroll-reveal="enter from the bottom after 0.20s" id="adminLoginBtn" class="w-32 h-32 m-2 bg-slate-900 text-white rounded-2xl shadow-2xl text-sm font-serif">ADMIN LOGIN
          </button>




      </center>


      <!-- The Modal -->
      <div id="myModal" class="modal">
        <center>
          <!-- Modal content -->
          <div class="modal-content">
            <div class="modal-header" style="display:none">
              <span class="close">&times</span>
              <h2 id="popupHead"></h2>

            </div>


            <div class="modal-body" id="LoginType">
              <!--Admin Login Form-->

              <div style="display:none" id="adminForm" class="w-parent ">

                <form action="addteacher.php" method="POST" class="bg-white shadow-md  rounded px-8 pt-6 pb-8 ">
                  <div class="mb-8">
                    <div class="font-bold "> ADMIN LOGIN </div>
                    <hr>
                    <input type="text" class="shadow appearance-none border rounded w-full  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adminname" name="UN" placeholder="Username ...">
                  </div>
                  <div class="mb-6">
                    <input type="password" class="shadow appearance-none border rounded w-full text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="PASS" placeholder="********">
                  </div>
                  <div class="flex items-center justify-center">
                    <button class="bg-slate-800 hover:bg-slate-900 text-white font-sm py-2 px-4 rounded w-1/2" type="submit">
                      Login
                    </button>

                  </div>
                </form>
              </div>


              <div class="modal-body" id="LoginType">
                <!--student Login Form-->
                <div style="display:none" id="studentForm" class="w-parent">

                  <form action="studentvalidation.php" method="POST" style="overflow: hidden" class="bg-white shadow-md rounded px-8 pt-6 pb-8 ">
                    <div class="mb-8">
                      <div class="font-bold"> STUDENT LOGIN </div>
                      <hr>
                      <input type="text" class="shadow appearance-none border rounded w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adminname" id="studentname" name="SID" placeholder="Student ID ...">
                    </div>
                    <div class="mb-6">
                      <input type="password" class="shadow appearance-none border rounded w-full  text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="PASS" placeholder="********">
                    </div>
                    <div class="flex items-center justify-center">
                      <button class="bg-slate-800 hover:bg-slate-900 text-white font-sm py-2 px-4 rounded w-1/2" type="submit">
                        Login
                      </button>

                    </div>
                  </form>

                </div>
              </div>

        </center>
      </div>
    </div>
  </div>
  </div>

  <div>
    <p class="text-center text-gray-500 text-xs">
      support@juw.edu.pk | &copy;CS 2022 | All rights reserved
    </p>
  </div>
  </div>
  </div>



  <script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var studentLoginBtn = document.getElementById("studentLoginBtn");
    var adminLoginBtn = document.getElementById("adminLoginBtn");
    var heading = document.getElementById("popupHead");
    var studentform = document.getElementById("studentForm");
    var adminform = document.getElementById("adminForm");
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    adminLoginBtn.onclick = function() {
      //modal.style.display = "block";
      // heading.innerHTML = "Admin Login";
      adminLoginBtn.style.display = "none";
      studentLoginBtn.style.display = "none";
      adminform.style.display = "block";
      cross.style.display = "block";
      studentform.style.display = "none";

    }
    studentLoginBtn.onclick = function() {
      //modal.style.display = "block";
      // heading.innerHTML = "Student Login";
      studentLoginBtn.style.display = "none";
      adminLoginBtn.style.display = "none";
      studentform.style.display = "block";
      cross.style.display = "block";
      adminform.style.display = "none";


    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
      adminform.style.display = "none";
      studentform.style.display = "none";
      adminLoginBtn.style.display = "inline-block";
      studentLoginBtn.style.display = "inline-block";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <!--HOME SECTION END-->
  <!--HOME SECTION TAG LINE END-->



  <!--  Jquery Core Script -->
  <script src="js/jquery-1.10.2.js"></script>
  <!--  Core Bootstrap Script -->
  <!-- <script src="js/bootstrap.js"></script> -->
  <!--  Flexslider Scripts -->
  <script src="js/jquery.flexslider.js"></script>
  <!--  Scrolling Reveal Script -->
  <script src="js/scrollReveal.js"></script>
  <!--  Scroll Scripts -->
  <script src="js/jquery.easing.min.js"></script>
  <!--  Custom Scripts -->
  <script src="js/custom.js"></script>
  </div>
</body>

</html>