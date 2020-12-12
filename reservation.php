<div class="booking">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="booking_container d-flex flex-row align-items-end justify-content-start"> 
            <form action="" method="POST" class="booking_form" autocomplete="off">
              <div class="booking_form_container d-flex flex-lg-row flex-column align-items-start justify-content-start flex-wrap">
                <div class="booking_form_inputs d-flex flex-row align-items-start justify-content-between flex-wrap">
                  <div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" name="arrival" required="required" value="<?php echo isset($_POST['arrival']) ? $_POST['arrival'] :date('m/d/Y');?>"></div>
                  <div class="booking_dropdown"><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" name="departure" required="required" value="<?php echo isset($_POST['departure']) ? $_POST['departure'] : date('m/d/Y');?>" ></div>
                  <div class="custom-select">
                    <select name="person" id="person">
                      <option value="0">Person</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                  <div class="custom-select">
                          
                    <select  name="accomodation" id="person">
                      <option value="0">Accomodation</option>
                     <option value="1">Chambre Simple </option>
                     <option value="2">Temps de voyageur</option>
                    </select>
                  </div>
                </div>
                <button class="booking_form_button ml-lg-auto">Reserve maintenant</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
