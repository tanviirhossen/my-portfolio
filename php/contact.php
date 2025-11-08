<?php 
if(isset($_POST['submit'])){
    $to = "hello@morterx.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $num = $_POST['tel'];
    $company = $_POST['company'];
    $budget = $_POST['budget'];
    $question = $_POST['question'];
    $message = $_POST['message'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" .
    "Name:" . " ". $first_name . " " . $last_name . "\n\n" . 
    "Number:" . " ". $num . "\n\n" . 
    "Company:" . " ". $company . "\n\n" .
    "Budget:" . " ". $budget . "\n\n" .
    "Question:" . " ". $question . "\n\n" .
    "Message:" . " ". $message ;
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo '<script type="text/javascript">';
    echo ' alert("Mail Sent. Thank you, we will contact you shortly.")';  //not showing an alert box.
    echo '</script>';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/52264cc163.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image" href="../image/mx-3.png">
    <link rel="stylesheet" href="../css/intlTelInput.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Contact Us</title>
</head>
<body>
<!------------------ NAV Section------------------------>
<nav class="nav">
    <div class="logo">
        <a href="../index.html">
            <img src="../image/mx-3.png" alt="">
        </a>
    </div>
    <div class="contain-nav">
        <div class="social-icon flex-row">
            <a href="https://twitter.com/MorterX_"><i class="fab fa-twitter"></i></a>
            <a href="https://www.facebook.com/morterx"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/morterx_"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="menu">
           <span>
            <a href="../index.html">
                About & Services 
                <svg width="20" height="11" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.285.668l-.506.506 4.146 4.148H.392v.717h17.533l-4.146 4.147.506.506 5.012-5.012z" fill="#F3F2F4"
                 fill-rule="evenodd"></path></svg>
            </a>
           </span>
        </div>
    </div>
</nav>
<!---------X--------- NAV Section-----------X------------->
<!---------------- Contact Form -------------------->
<section class="flex-column">
    <div class="Contact-content flex-column">
        <h1><span>LET'S</span>TALK</h1>
            <hr class="short-line short-line-placeing">
        <div class="from-width">
            <!------------- From ---------------->
            <form action="" id="form" method="post" autocomplete="on" class="form">
              <div class="name">
                <div class="col-1">
                    <label class="form-input">
                        <input type="text" name="first_name" class="form-input-feild" placeholder=" " id="fname" required>
                         <div class="form-input-border"></div>
                         <div class="form-label">First Name *</div>
                         <div class="form-msg-error">Required *</div>
                    </label>
                </div>
                <div class="col-1">
                    <label class="form-input">
                        <input type="text" name="last_name" class="form-input-feild" placeholder=" " id="lname" required>
                         <div class="form-input-border"></div>
                         <div class="form-label">Last Name *</div>
                         <div class="form-msg-error">Required *</div>
                    </label>
                </div>
              </div>
                <div class="col-2">
                    <label class="form-input">
                        <input type="email" name="email" class="form-input-feild" placeholder=" " id="email" required>
                         <div class="form-input-border"></div>
                         <div class="form-label">Email *</div>
                         <div class="form-msg-error">Required *</div>
                    </label>
                </div>
                <div class="col-2 phone-sizing">
                    <input type="text" name="phone-number" id="telephone" disabled>
                    <input type="text" name="phone-number" id="ccode" disabled>
                    <label class="form-input level-sizing">
                         <input class="form-input-feild telephone error-input" name="tel" type="tel" placeholder=" " onkeypress="return isNumberKey(event)" id="tel" required>
                         <div class="form-label">Phone Number *</div> 
                         <div class="tel-msg-error">Required *</div>
                    </label>
                </div>
                <div class="col-2">
                    <label class="form-input">
                        <input type="text" name="company" class="form-input-feild" placeholder=" " id="company" >
                         <div class="form-input-border"></div>
                         <div class="form-label">Company</div>
                         <div class="form-msg-error">Required *</div>
                    </label>
                </div>
                <div class="name question">
                    <div class="col-1">
                        <label class="form-input">
                            <input type="tel" name="budget" class="form-input-feild" placeholder=" " id="budget">
                             <div class="form-input-border"></div>
                             <div class="form-label">EXPECTED BUDGET</div>
                             <div class="form-msg-error">Required *</div>
                        </label>
                    </div>
                    <div class="col-1">
                        <label class="form-input">
                            <input type="text" name="question" class="form-input-feild" placeholder=" " id="question">
                             <div class="form-input-border"></div>
                             <div class="form-label">HOW DID YOU HEAR ABOUT US? </div>
                             <div class="form-msg-error">Required *</div>
                        </label>
                    </div>
                  </div>
                <div class="col-2">
                <h2 class="textarea-heading">HOW CAN WE HELP?</h2>
                <label class="form-input textarea-sizing">
                    <textarea name="message" class="textarea" placeholder=" " id="textarea" required></textarea>
                     <div class="form-label">Your Message... *</div>
                     <div class="form-msg-error">Required *</div>
                </label>
                </div>
                <div class="col-2">
                    <button type="submit" name="submit" value="submit" class="btn contact-btn">
                        <a href="#">
                            <span class="tbtn cbtn">SEND</span>
                            <span class="ffbtn sbtn">SEND</span>
                        </a>
                    </button>
                </div>
            </form>
            <!-----------X---------- From--------------------X------>
        </div>
    </div>
</section>
<!--------X-------- Contact Form ----------X---------->
<!--------------------- Footer ------------------------------->
<footer>
<div class="social">
<a href="https://twitter.com/MorterX_" class="social-icon" target="_blank" rel="noreferrer">
<svg width="20" height="17" xmlns="http://www.w3.org/2000/svg"><path d="M16.51 4.968c0 .142.02.305.02.448 0 1.14-.221 2.32-.642 3.46-.622 1.71-1.725 3.299-3.23 4.46-1.525 1.16-3.45 1.893-5.817 1.893a9.521 9.521 0 0 1-4.033-.896 7.148 7.148 0 0 0 4.053-1.588l.742-.59-.943-.02a3.142 3.142 0 0 1-2.768-1.752h.14c.361 0 .702-.04 1.023-.142l1.364-.367-1.404-.285A3.146 3.146 0 0 1 3.19 8.47a3.373 3.373 0 0 1-.702-1.567c.38.142.782.224 1.203.244l1.164.04-.963-.65a3.261 3.261 0 0 1-1.023-1.14 3.327 3.327 0 0 1-.381-1.548c0-.428.08-.814.22-1.18 1.786 2.015 4.313 3.318 7.162 3.46l.441.02-.1-.447a3.04 3.04 0 0 1-.08-.733c0-.896.36-1.71.942-2.28a3.14 3.14 0 0 1 4.574.061l.12.142.18-.04a7.37 7.37 0 0 0 1.606-.51c-.06.122-.1.245-.18.346-.061.082-.121.143-.181.204-.08.061-.181.143-.301.224l-1.344.814 1.544-.183c.181-.02.321-.04.442-.04.06 0 .12-.021.16-.021-.32.366-.682.692-1.063.977l-.14.102.02.204zM20 3.095c0-.265-.08-.53-.2-.754a1.24 1.24 0 0 0-.302-.346c.02-.102.04-.203.04-.326 0-.427-.18-.834-.521-1.12a1.41 1.41 0 0 0-1.605-.101 5.847 5.847 0 0 1-1.143.53A4.983 4.983 0 0 0 13.32 0c-1.284 0-2.447.509-3.33 1.323a5.018 5.018 0 0 0-1.525 2.85 8.566 8.566 0 0 1-4.734-2.992A1.402 1.402 0 0 0 2.648.65h-.1c-.462.041-.883.306-1.104.713-.481.753-.702 1.629-.702 2.504 0 .57.1 1.12.281 1.65-.18.223-.28.529-.3.834v.082c0 1.262.46 2.443 1.263 3.338-.04.082-.04.163-.04.245 0 .142.02.285.06.427.26.794.682 1.507 1.264 2.057a5.412 5.412 0 0 1-1.003.081c-.22 0-.462-.02-.682-.04h-.16c-.582 0-1.104.366-1.325.915l-.1-.02.08.061c-.06.143-.08.306-.08.468 0 .469.24.937.642 1.202A11.256 11.256 0 0 0 6.8 17c1.765 0 3.37-.366 4.774-.998 2.106-.956 3.771-2.524 4.895-4.377a12.039 12.039 0 0 0 1.745-5.985 8.06 8.06 0 0 0 1.484-1.71c.2-.245.301-.53.301-.835z" fill-rule="evenodd"></path></svg>
Twitter
</a>
<div class="divider"></div>
<a href="https://www.facebook.com/morterx" class="social-icon" target="_blank" rel="noreferrer">
    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
Facebook
</a>
<div class="divider"></div>
<a href="https://www.instagram.com/morterx_/" class="social-icon" target="_blank" rel="noreferrer">
<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"><path d="M9.98 0C7.275 0 6.934.02 5.872.06 4.81.1 4.088.28 3.447.521a4.745 4.745 0 0 0-1.763 1.162A5.39 5.39 0 0 0 .52 3.447c-.26.641-.42 1.363-.46 2.425C.02 6.934 0 7.275 0 10s.02 3.046.06 4.128c.04 1.062.22 1.784.461 2.425.26.661.601 1.223 1.163 1.764.56.56 1.122.901 1.763 1.162.641.24 1.363.42 2.425.46C6.934 19.98 7.275 20 10 20s3.046-.02 4.128-.06c1.062-.04 1.784-.22 2.425-.461a4.747 4.747 0 0 0 1.764-1.162 5.087 5.087 0 0 0 1.162-1.764c.24-.641.42-1.363.46-2.425C19.98 13.066 20 12.725 20 10s-.02-3.046-.06-4.128c-.04-1.062-.22-1.784-.461-2.425a4.745 4.745 0 0 0-1.162-1.764A5.09 5.09 0 0 0 16.553.521c-.661-.24-1.383-.42-2.445-.46C13.046.02 12.706 0 9.98 0m0 1.804c2.665 0 2.986 0 4.048.06.982.04 1.503.2 1.864.34.46.18.801.401 1.142.742.34.34.561.681.742 1.142.14.36.3.882.34 1.864.06 1.062.06 1.383.06 4.048s0 2.986-.06 4.028c-.04.982-.2 1.503-.34 1.864-.18.46-.401.801-.742 1.142-.34.34-.681.561-1.142.742-.36.14-.882.3-1.864.34-1.062.04-1.363.06-4.048.06-2.665 0-2.986-.02-4.048-.06-.982-.04-1.503-.2-1.864-.34a3.13 3.13 0 0 1-1.142-.742 3.129 3.129 0 0 1-.741-1.142c-.14-.36-.301-.882-.341-1.864-.04-1.062-.06-1.363-.06-4.048 0-2.665.02-2.986.06-4.048.04-.982.2-1.503.34-1.864.18-.46.401-.801.742-1.142a3.13 3.13 0 0 1 1.142-.742c.36-.14.882-.3 1.864-.34 1.062-.04 1.383-.04 4.048-.04m0 3.066A5.14 5.14 0 0 0 4.85 10a5.14 5.14 0 0 0 5.13 5.13A5.14 5.14 0 0 0 15.11 10a5.115 5.115 0 0 0-5.13-5.13m0 8.457A3.318 3.318 0 0 1 6.653 10 3.318 3.318 0 0 1 9.98 6.673 3.319 3.319 0 0 1 13.307 10a3.319 3.319 0 0 1-3.327 3.327m6.533-8.658c0 .662-.541 1.203-1.202 1.203a1.206 1.206 0 0 1-1.203-1.203c0-.661.541-1.202 1.203-1.202.681 0 1.202.521 1.202 1.202" fill-rule="evenodd"></path></svg>
Instagram
</a>   
</div>
<div class="back-btn">
<a href="#">
<svg fill="none" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.2396 6.99425 6.58589 2.34052 7.99896.92517l7.06694 7.06695-.0005.00056.0044.00446-7.06126 7.07266-1.41421-1.4142 4.65307-4.66055-9.02388.00363-.0445.00002-.00081-2.00081.0445-.00002.00041 1.00041-.0004-1.00041 9.01688-.00362Z" fill="currentColor"></path></svg>
BACK TO TOP
</a>
</div>
<div class="comment">
<a href="../html/work.html">OUR WORK</a>
<div class="divider"></div>
<p>hello@morterx.com</p>
</div>
</footer>
<!-------X-------------- Footer  ---------------X---------------->     
</script>
<script src="../js/intlTelInput.js"></script>
<script src="../js/script.js"></script>  
</body>
</html>