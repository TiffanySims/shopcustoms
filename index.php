<?php
	// Message Vars
	$msg = '';
	

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['special']);
    $phone = htmlspecialchars($_POST['phone']);
		$year = htmlspecialchars($_POST['year']);
    $make = htmlspecialchars($_POST['make']);
    $model = htmlspecialchars($_POST['model']);

		// Check Required Fields
		if(!empty($email) && !empty($name) && !empty($message)&&!empty($phone)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
			
			} else {
				// Passed
				$toEmail = 'tjsims1988@gmail.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Message</h4><p>'.$message.'</p>
				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = '';
					
				} else {
					// Failed
					$msg = 'Your email was not sent';
					
				}
			}
		} else {
			// Failed
			$msg = '';
			
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="pix.png">   
<title>Shop Customs</title>
 <meta name="viewport" content="width=device-width,initial-scale=1.0">
<link type="text/css"rel="stylesheet"href="css/style.css">
<link type="text/css"rel="stylesheet"href="ionicons.min.css">

<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,400i" rel="stylesheet">
<link type="text/css"rel="stylesheet"href="css/querie.css">

    </head>
 <body>
<header>
<div class="container">

<nav class="nav-bar">
    
  <ul>


<li><a href="#services">Services</a></li>
<li><a href="#promotions">Promotions</a></li>
<li><a href="#about">About</a></li>
<li><a href="#" class="btn">Get Quote</a></li>
</ul>   
 </nav> </div>
    
  <div class="title">
      <div class="container">
          <p class="title-address">16700 Lanthrop Ave, Harvey,IL</p>
          <p class="title-address">(708) 439-5224</p>
      <div class="content">
       <h1>Shop Customs
     </h1> 
    <p> From transmissions to tune-ups and for everything in between, people who know go to Shop Customs.
      Our locally owned and independent repair shop employ the latest technology and the expert technicians who will diagnose your repair, fix it right the first time, and back it with a 12 month warranty. </p>
    
    <a href="#services"class="big-btn">Our Services</a>
    
    </div>
     </div> 
      </div>
    </header>
     
    <div class="container">
    <div class="circle">
        <i class="ion-chevron-down"></i>
        </div>
    
    </div>
     
    <section class="services" id="services">
      <div class="container">
        <h3>Our Services</h3>

        <p>At Shop Customs, we offer comprehensive services that are designed to keep your vehicle running like new. Reliable and affordable auto repair service has set us apart as a trusted name in the community, and we pride ourselves on the high standard of quality and honest assessment we provide in every job we take. No job is too big or small, and our highly experienced and skilled mechanics are qualified to work on any car models and makes.  Call today for a free estimate, and we’ll walk you through every step of the process.</p>
        <ul> 
          <li><i class="ion-wrench" ></i>Check Engine Light Service</li>
          <li><i class="ion-wrench" ></i>Oil, Lube, &amp; Filter Change </li>
          <li><i class="ion-wrench" ></i>Brake Repair Service</li>
          <li><i class="ion-wrench" ></i>Air Condiion Service</li>
          <li><i class="ion-wrench" ></i>TIre Rotation</li>
          <li><i class="ion-wrench" ></i>Cooling System Service</li>
          <li><i class="ion-wrench" ></i>Belt and Hose Replacement</li>
          <li><i class="ion-wrench" ></i>Suspension system repair</li>
          <li><i class="ion-wrench" ></i>Fuel Filter Replacement</li>
          <li><i class="ion-wrench" ></i>Shocks and Struts</li>
          <li><i class="ion-wrench" ></i>Light Bulb Replacement</li>
          <li><i class="ion-wrench" ></i> transmission Service</li>
        </ul>
      
       </div>
 
      </section>
     <section class="color" id="about">
    <div class="container">
    <div class="second">
    <h2>We are committed to quality work and customer service </h2>
     </div>  
        
     </div>   
     <div class="container">
    <div class="grid clearfix" >
         <div class="box-2">
        <i class="ion-cash" ></i> 
        <h3>We Will Save You Money</h3>
         <p>Our state-of-the-art diagnostic equipment allows us to distinguish between minor and major repairs, saving you on unnecessary repair costs. </p>
         </div>
         <div class="box-2">
        <i class="ion-model-s" ></i> 
        <h3>Experienced Technicians</h3>
         <p>Our technicians are trained in the latest diagnostic equipment and software.</p>
        </div>
        <div class="box-2">
        <i class="ion-xbox" ></i> 
        <h3>Accurate Diagnosis</h3>
         <p>Shop Customs has its own codebooks for diagnosing--something you won't find among our competitors.</p>
        </div>
        
        
         </div>
       </div>
        </section>
     <div class="container">
        <div class="sentence">
     
    
      <p>One stop shop for all your needs </p>  
        <a href="#"class="big-btn">Contact Us</a> 
         </div> 
         
     </div>
     <section class="last " id="promotions">
     <div class="container">
        <h2>PROMOTIONS</h2>
        <div class="promotions">
          <div class="promotion">
            <div class="top">
            <h4>FREE</h4>
            <i class="ion-model-s" ></i>

          </div>
          <div class="bottom">
            <h4>Brake Check</h4>
            <p class="bottom-info">Includes: A Road Test, A Visual Brake Inspection, and Checking the level and condition of the brake fluid</p>
           <p> <span class="bold">Offer good thru: 12/31/2019</span></p>
          </div>


          </div>
          <div class="promotion">
          <div class="top">
              <h4>FREE</h4>
              <i class="ion-model-s" ></i>
            </div>
            <div class="bottom">
              <h4>Check Engine Light</h4>
              
              <p class="bottom-info">If your car or truck's Check Engine Light comes on, we'll check it for FREE </p>
             <p> <span class="bold">Offer good thru: 12/31/2019</span></p>
            </div>
            </div>

            <div class="promotion">
                <div class="top">
                    <h4>10% OFF</h4>
                    <i class="ion-model-s" ></i>
                  </div>
                  <div class="bottom">
                    <h4>Any Repair Service</h4>
                    <p class="bottom-info"> Maximum savings $100</p>
                   <p> <span class="bold">Offer good thru: 12/31/2019</span></p>
                  </div>
                  </div>

                  <div class="promotion">
                      <div class="top">
                          <h4>$100 OFF</h4>
                          <i class="ion-model-s" ></i>
                        </div>
                        <div class="bottom">
                          <h4>Transmission Rebuild</h4>
                          <p class="bottom-info"></p>
                         <p> <span class="bold">Offer good thru: 12/31/2019</span></p>
                        </div>
                        </div>
  
            </div>

        </div>
        
         
     </section>
     
     <footer>
     <div class="container footer">
       <div class="footer-left">
       <p><span class="days">Address: </span>16700 Lathrop Ave, Harvey, Il 60426</p>
       <p><span class="days">Phone: </span>(708)439-5224</p>
       </div>
       <div class="footer-right">
      
       <p><span class="days">Monday-Saturday</span> 9:00 AM - 5:00 PM</p>
       
      </div>
         </div>
     </footer>
     
     
     <div class="popup">
      <div class="popup_box">
          <div class="popup_content">
          <?php if($msg != ''): ?>
    		<div ><?php echo $msg; ?></div>
    	<?php endif; ?>
          <p class="popup_message">Complete the contact form below for Inquires.</p>
          <form action="index.php" method="post">
              <div class="input">
              <label for="name">Name:</label>
              <input type="text" name="name"value="<?php echo isset($_POST['name']) ? $name : ''; ?>" >
            </div>
            <div class="input">
            <label for="year">Year</label>
              <input type="number" name="year" min="1960" max="2019"value="<?php echo isset($_POST['year']) ? $year : ''; ?>">
            </div>
            <div class="input">
              <label for="make">Make:</label>
              <input type="text" name="make"value="<?php echo isset($_POST['make']) ? $make : ''; ?>">
            </div>
            <div class="input">
              <label for="model">Model:</label>
              <input type="text" name="model"value="<?php echo isset($_POST['model']) ? $model : ''; ?>">
            </div>
           <div class="input"> 
              <label for="phone">Phone Number:</label>
              <input type="text" name="phone"value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
          </div>
              <div class="input">
              <label for="email">Email:</label>
              <input type="email" name="email"value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
              </div>

              <div class="input">
              
              <textarea name="special" rows="5" cols="50" placeholder="What's the problem with your car?"value="<?php echo isset($_POST['special']) ? $message : ''; ?>"></textarea>
             
          </div>
          <div class="button">
          <button class="btn-form" name="submit">SUBMIT</button>
          </div>
          </form>
          
          </div>
          
      </div>
 </div>
  
     
     
     
     
     
     <script src="js/app.js"></script>
     
    </body>



</html>