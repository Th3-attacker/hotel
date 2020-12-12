<div class="modal fade" id="LoginModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal" type="button">×</button> 
      </div> 
        <form action="" method="post"> 
          <div class="modal-body">
            <div class="form-group"> 
                <div class="col-md-12"> 
                <div id="ErrorMessage" style="background-color:red;color:#fff;" ></div> 
                  <div class="form-group">
                    <div class="col-md-12"> 
                      <label class="control-label" for="U_USERNAME">Username:</label> 
                        <input   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input" >  
                    </div>  
                    <div class="col-md-12">
                      <label class="control-label" for="U_PASS">Password:</label> 
                      <input name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input ">
                    </div> 
                </div>  
              </div> 
            </div> 
          </div>
          <div class="modal-footer">  
            <button type="button" name="btnLogin" class="btnLoginModal button">Sign In</button> 
          </div>  
        </form>  
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
