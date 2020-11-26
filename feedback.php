<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body background="img/indexxx.jpg">
    <div class="content">
        <div class="head">
           <h3>Send us your Feedback</h3>
        </div>
         <div class="form">
             <form method="POST" action="feedbackscript.php">
                 <div class="form-group">
                     <label for="firstname" class="form-label">First Name</label>
                         <input type="text" class="form-control" id="firstname" name="firstname"
                         placeholder="First Name">
                 </div>
                 <div class="form-group">
                     <label for="lastname" class="form-label">Last Name</label>
                         <input type="text" class="form-control" id="lastname" name="lastname"
                         placeholder="Last Name">
                 </div>
                 <div class="form-group">
                     <label for="telnum" class="form-label">Contact Tel.</label>
                
                         <input type="tel" class="form-control" id="telnum" name="telnum"
                         placeholder="Tel. Number">
                 </div>
                 <div class="form-group">

                     <label for="lastname" class="form-label">Email</label>
                     
                         <input type="email" class="form-control" id="emailid" name="emailid"
                         placeholder="Email">
                 </div>
                 
                 <div class="form-group ">
                     <label for="feedback" class="form-label">Your Feedback</label>
                         <textarea class="form-control" id="feedback" name="feedback" placeholder="writer something"
                         rows="12"></textarea>
                 </div>
                 <div class="form-group ">
                    
                         <button type="submit" class="btn btn-primary">
                             Send Feedback
                         </button>
                 </div>
             </form>
</div>
    </div>
    
</body>
</html>
