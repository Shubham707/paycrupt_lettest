<?php $this->load->view('dashboard/header');
$this->load->view('dashboard/sidebar');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
         <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script> 
         <style>
           .error{
        color: red !important;
}        
         </style>    
      <section>
        <div class="content">
            <div class="row">
              <div class="col-md-12">

                <div class="card">
                  <div class="card-header hd-box" data-background-color="blue">
                    <h4 class="title">Payment</h4>
                  </div>

                  <div class="card-content">
                    <div class="row">
                      <div class="col-sm-12">

                        <div class="paycrypt-io">

                          <div class="head">
                            <h4 class="text-center"> Payment Coin</h4>
                          </div>
                          <div class="my-select">
                            <h4>Select Currency</h4>
                           
                          </div>
                          <form id="saveAffifiliated" class="cmxform" method="post" action="
                          <?php echo base_url();?>paymentcoin/payment" novalidate="novalidate">
                          <div class="row">
                            <div class="  col-sm-2 col-md-2 "></div>
                            <div class="  col-sm-8 my-coin col-md-8 ">
                            

                              <div class="row">
                                 <?php foreach ($coins as $value) { ?>
                                <div class="col-sm-3">
                                  <div class="bit-coin" style="width:91%;">
                                   <a id="checkboxes" onclick="getCoinLabel('<?= $value->coin_name;?>');"> 
                                    <input class="check" type="checkbox" id="<?php echo $value->coin_name;?>" value="<?php echo $value->coin_name;?>" style="width: 75%; height: 123px; position: absolute; top: 1px; left: 10px; opacity: 0.3;">
                                    <img id="DIV3" onclick="myFunction(<?= $value->coin_name;?>);" src="<?php echo base_url();?>uploads/<?= $value->coin_image;?>" class="img-responsive" >
                                  </a>
                                </div>
                                </div>
                                <?php } ?>
                               

                              </div>                           
                            
                            </div>
                          <!-- img row end  -->
                          </div>
                          <div class="row">
                           <div class="col-sm-2">&nbsp;</div>
                           <div class="col-sm-8 ">
                             <div class="row top-heigh">
                               <div class="coin-form">



                                 <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Amount in Box:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <div class="my-sel">
                                      <input type="number" class="myField1" id="coinRate" name="coinRate" required placeholder="Price" onkeyup="checkDec(this);">
                                       
                                    </div>

                                   
                                    <span style="margin-left: 10px;" id="or"> Or</span>

                                    <div class="my-sel-usd">
                                      <input type="number" class="myField2" id="affiUSD" name="affiUSD" required placeholder="USD" onkeyup="checkDec(this);">
                                        
                                      </select>
                                    </div>
                                    
                                  </div>
                                </div>
                                <!-- <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Your Wallet Address:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <input id="walletAddress" class="form-control" name="walletAddress" required placeholder="Wallet Address">
                                  </div>
                                </div> -->

                                <div class="row input-height">
                                  <div class="my-hed-co">
                                    <h6>Coin Label:</h6>
                                  </div>
                                  <div class="my-hed-input">
                                    <input type="text" class="form-control" name="coinLabel" id="text" value="" required>
                                  </div>
                                </div>

                                <input type="hidden" name="email" value="<?= $email;?>">
                 
                                <div class="row">
                                 
                                    <button class="btn btn-primary" style="padding: 8px 20%; border-radius: 25px; margin: 0px auto; margin-top: 35px; cursor: pointer;" width="100" name="submit">Payment<i class="fa fa-paper-plane-o"></i></button>
                                 
                                </div>

                               </div>
                             </div>
                           </div>
                             </div>
                          </form>
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
    function getCoinLabel(label)
    {
        document.getElementById('or').innerHTML=label; 
        document.getElementById('coinlabel').value=label; 
    }
    document.getElementById('or').innerHTML='BitCoin';

</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/calender/js/jquery.datepicker.js"></script>
     <script type="text/Javascript">
function checkDec(el){
 var ex = /^[0-9]+\.?[0-9]*$/;
 if(ex.test(el.value)==false){
   el.value = el.value.substring(0,el.value.length - 1);
  }
}

$("#hide").hide(3000);
</script>
<script type="text/javascript">
  $('.myField1').keypress(function() {
    $('.myField2 ').attr("disabled", true);
  });
   $('.myField2').keypress(function() {
    $('.myField1').attr("disabled", true);
  });
</script>
 <script type="text/javascript">
       

        $( document ).ready( function () {
            $( "#saveAffifiliated" ).validate( {
                rules: {
                    privateURL: "required",
                    privateText: "required",
                    publicTitle: "required",
                    coinRate: "required",
                    affiUSD: "required",
                    walletAddress: "required",
                    expiryDate: "required",

                    privateURL: {
                        required: true,
                        
                    },
                    privateText: {
                        required: true,
                       
                    },
                    publicTitle: {
                        required: true,
                  
                    },
                    coinRate: {
                        required: true,
                    },
                    affiUSD: {
                        required: true,
                    },
                    walletAddress: {
                        required: true,
                    },
                    expiryDate: {
                        required: true,
                    },
                },
                messages: {
                    privateURL: "Please enter your Private Url",
                    privateText: "Please enter your Ptivate Text",
                    publicTitle: "Please enter your Title",
                    coinRate: "Please enter your Coin Rate",
                    affiUSD: "Please enter input USD",
                    walletAddress: "Please enter Wallet Address",
                    expiryDate: "Please enter Expiry Date"
                    
                },
                errorElement: "em",
                errorPlacement: function ( error, element ) {
                    // Add the `help-block` class to the error element
                    error.addClass( "help-block" );

                    if ( element.prop( "type" ) === "checkbox" ) {
                        error.insertAfter( element.parent( "label" ) );
                    } else {
                        error.insertAfter( element );
                    }
                },
                highlight: function ( element, errorClass, validClass ) {
                    $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
                },
                unhighlight: function (element, errorClass, validClass) {
                    $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
                }
            } );
        });
        $(function() {
            $( 'ul.nav li' ).on( 'click', function() {
                $( this ).parent().find( 'li.active' ).removeClass( 'active' );
                $( this ).addClass( 'active' );
            });
        });
</script>
<script type="text/javascript">  
$(document).ready(displayCheckbox);

CountSelectedCB = [];

function displayCheckbox(){    
    $("input:checkbox").change(function() {          
        selectedCB = [];
        notSelectedCB = [];
        
        CountSelectedCB.length = 0; // clear selected cb count
        $("input:checkbox").each(function() {
            if ($(this).is(":checked")) {
                CountSelectedCB.push($(this).attr("id"));
            }
        });
        
        $('input[name=coinLabel]').val(CountSelectedCB); 
    });
}    
</script>

<?php $this->load->view('dashboard/footer');?>