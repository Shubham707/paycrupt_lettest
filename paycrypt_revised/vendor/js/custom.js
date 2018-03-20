﻿$(document).ready(function(){
  myFunction();
  sessionFunction();
    var base_url=$("#base_url").val();

//disbaleTfa
$("#disbleTfa").on('click',function(){
//pop up

swal({
        title: "Are you sure ??",
        text: "You want to disable two factor authentication!", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
     if (willDelete) {
     	$.post(base_url+'UserManager/disableTfa',
    		{ 'action':'disableTfa' },
    		function(result) {
    			var obj = $.parseJSON(result);
				//alert( obj.name === "John" );
    			//alert(obj.status);
    			if(obj.status==200)
    			{
    				swal(obj.message, {
           		    icon: "success",
         			});
         			setTimeout(function(){ window.location.href=base_url+"logout";},3000);

    			}
    			else if(obj.status==400)
    			{
    				swal(obj.message, {
           		    icon: "warning",
           		    });
    			}
    			
    		});
        } 
        else {
            swal("You canceled the two factor autenntication disable");
          }
     });
});
$(".addPlans").on('click',function(){
    var planId=$(this).attr('id');
    var plan=planId.split('_');
    swal({
        title: "Are you sure ??",
        text: "You want to change your plan", 
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {
        window.location.href="https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=6BqtWpuKHuucX6_ZtfgE";
      }
      else
      {
        swal("You canceled the plan change");
      }
      });
    //alert(base_url);
    // $.post(base_url+'UserManager/addPlans',
    // {
    //     "planId":plan[1]
    // },
    // function(result)
    // {
    //     if(result==1)
    //     {
    //         swal("Successfully plan added to your account", {
    //         icon: "success",
    //         });
    //         setTimeout(function(){ window.location.href=base_url+"dashboard";},2000);
    //     }
    //     else
    //     {
    //         swal("Something wrong!try again", {
    //         icon: "warning",
    //         });
    //     }
    // }
   // );
});
$(".setPlan").on('click',function(){
swal("Please  update your profile", {
            icon: "warning",
            });
});
$.validator.addMethod( 'checkCurrency', function(value, element) {
      // The two password inputs
      var currency = $("#recurringCurrency").val();

      // Check for equality with the password inputs
      if (currency=="select") {
          return false;
      } else {
          return true;
      }

  }, "Please select recurring currency");

$.validator.addMethod( 'checkRecurring', function(value, element) {
      // The two password inputs
      var recurring = $("#recurringType").val();

      // Check for equality with the password inputs
      if (recurring=="select") {
          return false;
      } else {
          return true;
      }

  }, "Please select recurring type");

$("#recurringForm").validate({
    rules:{
        pymentDate:{
            required:true
        },
        recurringType:{
            required:true,
            checkRecurring:true
        },
        recurringCurrency:{
            required:true,
            checkCurrency:true
        },
        recurringAddr:{
            required:true
        }
    },
    messages:{
        pymentDate:{
            required:"Date is required"
        },
        recurringType:{
            required:"Recurring Type is required"
        },
        recurringCurrency:{
            required:"Recurring currency is required"
        },
        recurringAddr:{
            required:"Address is required"
        }
    },
    submitHandler:function(form){
        form.submit();
    }
});
$(".selectFilter").on('click',function(){
var ids=$(this).attr('id');
if(ids=='order')
{
  $("#order_id").show();
  $("#amount_id").hide();
  $("#wallet_id").hide();
  $("#transaction_id").hide();
  $("#filt_type").text('Order ID');
}
else if(ids=='amount')
{
  $("#order_id").hide();
  $("#amount_id").show();
  $("#wallet_id").hide();
  $("#transaction_id").hide();
  $("#filt_type").text('Amount');
}
else if(ids=='wallet')
{
  $("#order_id").hide();
  $("#amount_id").hide();
  $("#wallet_id").show();
  $("#transaction_id").hide();
  $("#filt_type").text('Wallet');
}
else if(ids=='transaction')
{
$("#order_id").hide();
  $("#amount_id").hide();
  $("#wallet_id").hide();
  $("#transaction_id").show();
  $("#filt_type").text('Transaction Date');
}
});
$("#filters_search").on('click',function(){
var filt_type=$("#filt_type").text();
alert(filt_type);
});

});
var myVar;

function myFunction() {
    myVar = setInterval(getAlert, 3000);
}

function getAlert()
{
  //var addr=$("#address").val();
  var base_url=$("#base_url").val();
  var addr=$("input[name=address]").val();
  if(addr!="")
  {
    $.post(base_url+'Paymentcoin/getnotification', 
      { address: addr}, 
      function(data) {
      if(data>0)
      {
        
      }
    });
  }
}

          var check_session;
            function sessionFunction() {
                check_session = setInterval(checkForSession, 500);
            }

            function checkForSession()
            {
              var base_url=$("#base_url").val();
                $.post(base_url+'UserManager/isLiveSession', 
                  { param: "session_check"}, 
                  function(data) {
                  if(data== "1")
                  {
                    window.location.href=base_url+"login"
                  }
                  // else if(data== "0")
                  // {
                  //   window.location.href=base_url+"dashboard"
                  // }
                });
            }
