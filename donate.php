
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .bg-container{
            background-image:url("images/bg_donate.jpg");
            background-size:cover;
            height:100%;
            width:100%;
            
            
        }
        .container{
            padding-top:40px;
            
            
        }
          
    </style>
    
   
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <div class="bg-container">
    <div class=" col d-flex  justify-content-center container">
         <form>
        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HCKOQpaaIfS4sz" async> 
        </script> 
    `   </form>
</div>
</div>
   
</body>
</html>




