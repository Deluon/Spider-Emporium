<?php
$page_title="Contact";
require "includes/head.php";
require "includes/form_errors.php";
require "includes/select_function.php";
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$submit = $_POST['submit'];
$subscribe = $_POST['newsletter'];
$phonenum=$_POST['rad_phone'];
$contact=$_POST['contact'];

$products = array("Anti-Bite Gloves","Antilles Tree Spider", "Bengal Ornamental", "Brazilian Black", "Brazilian Whiteknee",
    "Chaco Mousy Brown", "Goliath Bird Eater", "Green Bottle Blue", "Malaysian Earth Tiger", "Mexican Redknee");
$selected_product = $_POST['products'];
$select = createSelect('products',$products,$selected_product);

$e_mail = $contact == "e_mail" ? 'checked="checked"' : "";
$p_hone = $contact == "p_hone" ? 'checked="checked"' : "";
$newsletter = $subscribe=="newsletter" ? 'checked="checked"' : "";


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

?>
    <main>
<?php
$form = <<<FRM
    <form id="contact_info" name="4" method="POST" action="contact.php">
        <fieldset><legend>Contact Us</legend>
            <input type="text" name="first_name" placeholder="First Name" value="$fname">&nbsp;&nbsp;<input type="text" name="last_name" placeholder="Last Name" value="$lname">
            <br>
            <br>
            <input type="text" name="email" placeholder="Email Address" value="$email">&nbsp;&nbsp;<input type="text" name="phone" placeholder="Phone Number" value="$phone">
            <br>
            <br>
            I prefer to be contacted by:
            <br>
            <br>
            Phone<input type="radio" name="contact" value="p_hone">&nbsp;&nbsp;Email<input type="radio" name="contact" value="e_mail" $e_mail>
            <br>
            <br>
            <label>I would like more information about
            this product/spider: </label>
            $select
            <br>
            <br>
            <textarea rows="5" cols="50"></textarea>
            <br>
            <br>
            <input type="checkbox" name="newsletter" value="newsletter">I would like to subscribe to the Spider Emporium Newsletter
            <br>
            <br>
            <input type="submit" value="Submit" name="submit"/>
            <br>
            <br>
      </fieldset>
    </form>
FRM;
    echo $form;
    if (isset($submit)){
        echo form_errors($errors);
    }
    ?>
</main>
<?php
    require "includes/footer.php";
?>