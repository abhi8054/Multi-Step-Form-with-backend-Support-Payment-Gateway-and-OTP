<!DOCTYPE html>
<html>
  <head>
    <title>Cashfree-PG TestForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <br>
    <br>
    <div class="container fluid">
      <h1 align="center">Payment Process</h1>
      <form id="redirectForm" method="post" action="request.php">
        <div class="form-group">
          <input type="hidden" name="appId" value="173608d1feff5eeffc3ad7e9c4806371">
          <input type="hidden" name="orderId" value=<?php echo rand("00000","99999")?> />
          <input type="hidden" name="orderAmount" value="100" />
          <input type="hidden" name="orderCurrency" value="INR"/>
          <input type="hidden" name="orderNote" value="test"/>
        </div>    
        <div class="form-group">
          <label>Name:</label><br>
          <input class="form-control" name="customerName" placeholder="Enter your name"/>
        </div>
        <div class="form-group">
          <label>Email:</label><br>
          <input class="form-control" name="customerEmail" placeholder="Enter your email"/>
        </div>
        <div class="form-group">
          <label>Phone:</label><br>
          <input class="form-control" name="customerPhone" placeholder="Enter your phone number"/>
        </div>
        <div class="form-group">
          <input type="hidden" name="returnUrl" value="http://localhost/kisanyojna/action.php?flag=1"/>
          <input type="hidden" name="notifyUrl" value="https://webinternproject.000webhostapp.com"/>
        </div>
        <button type="submit" class="btn btn-primary btn-block" value="Pay">Submit</button>
        <br> 
        <br>
      </form>
    </div>
    <br>    
    <br>    
    <br>    
    <br>    
  </body>
</html>

