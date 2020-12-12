<div id="accom-title"  > 
    <div  class="pagetitle">   
            <h1>Your Booking Cart</h1> 
     </div> 
</div>
 
    <table class="table" id="table">
        <thead>
            <tr  bgcolor="#999999">
              <!-- <th width="10">#</th> -->
                <th align="center" width="120">Room</th>
                <th align="center" width="120">Check In</th>
                <th align="center" width="120">Check Out</th> 
                <th  width="120">Price</th> 
                <th align="center" width="120">Nights</th> 
                <th align="center" >Amount</th>
                <th align="center" width="90">Action</th> 
            </tr> 
        </thead>
        <tbody >
            <div id="showcart"></div>

            <div id="BookingCart">
            <tr> 
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>          
                    <input type="hidden" value=""  name="" id=""/>
                </td>
                <td>
                    <input style="border:0px" readonly type="number" value="" id="" name="" />
                </td> 
                        <input type="hidden"  name="" id=""/>
                </td>
                <td><output id="" ></output></td>
                <td ><a href="">Remove</td>
            </div>
          </tbody>

          <tfoot>
            <tr>
           <td colspan="6"><h4 align="right">Total:</h4></td>
           <td colspan="4">
             <h4><b>&euro;<span id="sum">Your booking cart is empty</span></b></h4>
                         
            </td>
            </tr>
          </tfoot>  
        </table> 
 
        <form method="post" action="">
             <div class="row" >
                <button type="submit" class="button "name="clear">Clear Cart</button> 
                <div  class="button " ><a href="" name="continue">Continue Booking</a></div>
                <div  class="button "><a href=""  name="continue">Continue Booking</a></div>
            </div>        
        </form>
       