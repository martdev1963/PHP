<?php
/*-------------------------------------------------------------------------
  Martin "Marty" Batista - Full Stack Developer/Programmer
  Code Wizards Instructor.
  Client: MATTHEW LAWN CARE LLC
--------------------------------------------------------------------------*/
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "cutgrass@matthewlawncare.com, patty@matthewlawncare.com";
  $headers ="from: ".$mailFrom;
  $txt = "Cliente interesado en el cuidado del Landscaping. ".$name.".\n\n".$message.".\n\n".$mailFrom;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: result.html?mailsend");

}

?>
