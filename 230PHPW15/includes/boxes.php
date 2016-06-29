<?php

// when you have a group like radio buttons where only one selected your have same variable
// you also fill in the value for each choice in quotes... don't put in the php variable
$contact = $_POST['contact'];
/* on submit you will check to see what the value of $contact is.  You will write an
 if statement to make it sticky

if $contact = "email" then $e_mail=checked
else Se_mail = "";
*/


$boxes = <<< EOB


<form>
 <!--radio buttons  -->
  <p> <label for="contact">I prefer to be contacted by:</label>
          <input type="radio" id="contact"name="contact" value="p_hone" > Phone
          <input type="radio" id="contact" name="contact" value="e_mail" checked > Email
  </p>


<!--radio buttons -->
  <p>
     <label for="email">Subscribe to Newsletter?</label>
     <input type="checkbox" name="subscribe" value="Newsletter" checked />
  </p>

 </form>

EOB;

echo $boxes;