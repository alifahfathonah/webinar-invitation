 <!-- footer start -->
        <footer id="footer" class="py-3">
    			<div class="container">
        			<div class="row justify-content-center">
            			<div class="col-md-8 col-lg-8">
                  <p class="text-center">Copyright © 2020 <a class="my-link" href="https://wittyweb.in/">Witty-Web-Solution</a> - All rights reserved</p>
                  </div>
        			</div>
    			</div>
			</footer>
 <!-- footer end -->

 <button onclick="topFunction()" id="myBtn" title="Go to top" class="topbtn shadow px-3 py-2 rounded"><i class="fa fa-angle-up"></i></button>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script>

 //Get the button
 var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



    /* Set the width of the side navigation to 300px and the left margin of the page content to 250px */
    function openNav() {
    document.getElementById("mySidenav").style.width = "360px";
  }

  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }   
</script>
 </body>

 </html>