<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
         <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> 
         <style>
         iframe{width: 100%; height: 30% !important;}        
         </style>    
      <section>
        <div class="content">
            <div class="row">
              <div class="col-md-12">

                <div class="card">
                  <div class="card-header hd-box" data-background-color="blue">
                    <h4 class="title">New Payment / Paycrypt
</h4>
                  </div>

                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">

                        <div class="paycrypt-io">

                          <div class="my-select">
                            <h4>Payment Invoice</h4>
                            <p>your order has been recived </p>
                          </div>
                          <div class="row">
                          <div class="col-3"></div>
                            <div class="col-sm-6">
                              <div class="row">
                                
                                <table class="table table-bordered" style="width: 100%;">
                                  <thead>
                                    <tr>
                                      <th style="width: 12%;">Invoice Id</th>
                                      <th style="width: 30%;">Email</th>
                                      <th style="width: 10%;">Date</th>
                                      <th style="width: 10%;">Coin</th>
                                      <th style="width: 32%;">Address</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>#45762</td>
                                      <td>hellowworld@gmail.com</td>
                                      <td>2018/02/19</td>
                                      <td>Bit Coin</td>
                                      <td>1433 17th St.
                                          Denver CO 567875
                                          Phone: (123) 4124324321
                                          example@gmail.com
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <hr>
                                

                                <table class="table table-bordered">
                                  <thead style="background-color: #489bd6;color: white;">
                                    <tr>
                                      <th>Item</th>
                                      <th>Description</th>
                                      <th>Qty</th>
                                       <th>Price</th>
                                      <th>Amount</th>
                                    </tr>
                                      </thead>
                                          <tbody>
                                            <tr>
                                              <td><b> Product</b></td>
                                              <td>One Kind of Product Description</td>
                                              <td>1.00</td>
                                              <td>$1.15</td>
                                              <td>$1.15</td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                            <tr>
                                              <td><b> Product</b></td>
                                              <td>One Kind of Product another Description</td>
                                              <td>1.00</td>
                                              <td>$1.30</td>
                                              <td>$1.30</td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                           <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                           <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td><b>Subtotle:</b></td>
                                              <td>$2.45</td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td><b>Discount(10%):</b></td>
                                              <td>($0.24)</td>
                                            </tr>
                                          </tbody>
                                          <tbody>
                                            <tr>
                                              <td></td>
                                              <td></td>
                                              <td></td>
                                              <td><b>TOTAL DUE:</b> </td>
                                              <td>$2.21</td>
                                            </tr>
                                          </tbody>
                                  </table>
                              </div>
                            </div>
                          </div>
                          
                          
                      </div>

                    </div>
                  </div>

                </div>

              </div>
            </div>
        </div>
      </section>
      
      <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 

          });
        }
      </script>
      <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
      <?php $this->load->view('dashboard/footer');?>