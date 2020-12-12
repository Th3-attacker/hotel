

 
  <footer class="footer">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="./images/footer.jpg" data-speed="0.8"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer_logo text-center">
            <a href="#"><img src="./images/logo.png" alt=""></a>
          </div>
          <div class="footer_content">
            <div class="row">
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-end align-items-center justify-content-start">
                  <div class="text-center">
                    <div>Phone:</div>
                    <div>+546 990221 123</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-center justify-content-start">
                  <div class="text-center">
                    <div>Address:</div>
                    <div>Main Str, no 23, New York</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 footer_col">
                <div class="footer_info d-flex flex-column align-items-lg-start align-items-center justify-content-start">
                  <div class="text-center">
                    <div>Mail:</div>
                    <div>hotel@contact.com</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Elhadj_Designe</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
        </div>
      </div>
    </div>
  </footer>
</div>

<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./styles/bootstrap-4.1.2/popper.js"></script>
<script src="./styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="./plugins/greensock/TweenMax.min.js"></script>
<script src="./plugins/greensock/TimelineMax.min.js"></script>
<script src="./plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./plugins/greensock/animation.gsap.min.js"></script>
<script src="./plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="./plugins/easing/easing.js"></script>
<script src="./plugins/progressbar/progressbar.min.js"></script>
<script src="./plugins/parallax-js-master/parallax.min.js"></script>
<script src="./plugins/jquery-datepicker/jquery-ui.js"></script>
 <script src="./js/ekko-lightbox.js"></script> 
<script src="./js/custom.js"></script>



<script type="text/javascript" src="./js/bootstrap-datepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="./js/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
</body>
</html>
<!-- Modal photo -->
          <div class="modal fade" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button class="close" data-dismiss="modal" type=
                  "button">×</button>

                  <h4 class="modal-title" id="myModalLabel">Choose Image.</h4>
                </div>

                <form action="./guest/update.php" enctype="multipart/form-data" method=
                "post">
                  <div class="modal-body">
                    <div class="form-group">
                      <div class="rows">
                        <div class="col-md-12">
                          <div class="rows">
                            <div class="col-md-8">
                              <input name="MAX_FILE_SIZE" type=
                              "hidden" value="1000000"> <input id=
                              "image" name="image" type=
                              "file">
                            </div>

                            <div class="col-md-4"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" type=
                    "button">Close</button> <button class="btn btn-primary"
                    name="savephoto" type="submit">Upload Photo</button>
                  </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

         

 

  <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover() 
 





  //Validates Personal Info
        function personalInfo(){
        var a=document.forms["personal"]["name"].value;
        var b=document.forms["personal"]["last"].value;
        var c=document.forms["personal"]["city"].value;
        var d=document.forms["personal"]["address"].value;
        var e=document.forms["personal"]["dbirth"].value;  
        var f=document.forms["personal"]["zip"].value; 
        var g=document.forms["personal"]["phone"].value;
        var h=document.forms["personal"]["username"].value;
        var i=document.forms["personal"]["password"].value;


 
         if (document.personal.condition.checked == false)
        {
        alert ('pls. agree the term and condition of this hotel');
        return false;
        }
        if ((a=="Firstname" || a=="") || (b=="lastname" || b=="") || (c=="City" || c=="") || (d=="address" || d=="") || (e=="dateofbirth" || e=="") || (f=="Zip" || f=="") || (g=="Phone" || g=="")|| (h=="username" || h=="") || (j=="password" || j==""))
          {
          alert("all field are required!");
          return false;
          }

        }
</script>


<script type="text/javascript">
   
 $(document).ready(function(){

      $(".btnLoginModal").click(function(){

        var user_name = document.getElementById("U_USERNAME").value;
        var pass = document.getElementById("U_PASS").value;
      
      

       $.ajax({ 
          type:"POST",
          url: "checktoken.php",             
          dataType: "text",   //expect html to be returned  
          data:{username:user_name,password:pass},               
          success: function(data){ 
              $("#ErrorMessage").hide();
             $("#ErrorMessage").fadeIn("slow");                 
             $("#ErrorMessage").html(data);  
             // alert(data);
          } 

             
        });  
    });

    });

</script>
<!--/.container-->
<script language="javascript" type="text/javascript">
        function OpenPopupCenter(pageURL, title, w, h) {
            var left = (screen.width - w) / 2;
            var top = (screen.height - h) / 4;  // for 25% - devide by 4  |  for 33% - devide by 3
            var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
        } 
    </script>
</body>
</html>