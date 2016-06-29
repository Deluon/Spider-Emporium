<?php $title = "Simple Contact";
require 'includes/head.php';
require 'includes/form_errors.php';   //including form errors function.php to output errors in bullet list
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$contact = $_POST['contact'];
$question= $_POST['question'];
$newsletter=$_POST['newsletter'];
$updates=$_POST['updates'];
$menu = $_POST ['menu'];

// for debugging only
print_r($_POST);



$form_submit = $_POST['submit'];  //submit variable used to check if form submitted and in thank you message below submit button


//checking for presence of content in form fields
$errors = [];      //initialize error array then check fields
if ( !isset($fname) || $fname === ""){                           //isset is boolean t/f
    $errors['fname'] = "First Name is required";

}
if ( !isset($lname) || $lname === ""){
    $errors['lname'] = "Last Name required.";
}
if ( !isset($email) || $email === ""){                           //isset is boolean t/f
    $errors['email'] = "Email is required.";
}
if ( !isset($phone) || $phone === ""){
    $errors['phone'] = "Please supply your contact phone.";
}
if (isset($question)){
    $question = $_POST['question'];
}

//Radio Buttons
$e_mail = $contact == "email" ? 'checked="checked"' : "";
$p_hone = $contact == "phone" ? 'checked="checked"' : "";





//check boxes
$newsletter = $newsletter == "Newsletter" ?  "checked" : "";
$updates    = $updates    == "Updates"    ?  "checked" : "";

?>




<div id="body">
    <!-- End Main -->
    <div id="main">
        <h1></h1>
        <h2>Send Us A Message</h2><!--insert php block use here doc -->


        <?php


        $form = <<<EOD
                 <form  method="POST" action="simplecontact.php">
                    <p>  <input type="text" class="cat_textbox" name="fname" value="$fname"  placeholder="First Name"> </p>
                    <p>  <input type="text" class="cat_textbox" name="lname" value="$lname"  placeholder="Last Name" ></p>
                    <p>  <input type="text" class="cat_textbox" name="email" value="$email"   placeholder="Email Please" ></p>
                    <p>  <input type="text" class="cat_textbox" name="phone" value="$phone" placeholder="Home Phone" ></p>

                    <p> How can we help? <br>
                         <textarea class="cat_textbox" name="question" rows="3" cols="36">
                            $question
                        </textarea>
                    </p>
						<p> Respond to me by: <br>
							<input type="radio" name="contact" value="email" $e_mail> Email
							<input type="radio" name="contact" value="phone" $p_hone> Phone
						</p>


                   <p> Join an email list: <br>

                    <input  type="checkbox" name="newsletter" value="Newsletter" check $newsletter >Subscribe me to your newsletter. <br>
                    <input  type="checkbox" name="updates" value ="Updates"  $updates >Notify me of new menu items.

                   </p>

                    <p> Which menu interests you?<br>
                        <select name="menu"  5 multiple >
                             <option value="">Select One </option>
                             <option value="Breakfast">Breakfast</option>
                             <option value="Lunch">Lunch</option>
                             <option value="Dinner">Dinner</option>
                             <option value="Catering">Catering</option>
                         </select>
                    </p>

                    <input type="submit" class="cat_button" name="form_submit" value="Submit">




                </form>

EOD;
        echo $form;


        ?>
    </div>