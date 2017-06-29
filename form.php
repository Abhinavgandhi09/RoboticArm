<?php
//process and record if API value submitted
$submitted = (isset($_POST['value'])) ? $_POST['value'] : false ;
$allowed = array('1','2','3','4','5','6','7','8');
$setQ = false;
if (
  in_array($submitted, $allowed)
) {
  $setQ = true;
  file_put_contents('./data/' . $submitted . '/' . uniqid(), '');
}
?>

<html>
<head>

</head>
<body>

  <p>
  	<?php
  	if ( $setQ ) {
  		echo "You submitted $submitted successfully, vote again.";
  	} else {
  		echo 'Use the buttons to vote.';
  	}
  	?>
  </p>
  
  <table style="width:100%">
  <tr>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="7"><br>
        <button type="submit" value="Submit">Servo 4 - Clockwise</button>
      </form>
    </td>
    <th rowspan="4"><img src="arm.jpg" alt="Robotic Arm" height="250" width="150"></th>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="8"><br>
        <button type="submit" value="Submit">Servo 4 - Counter Clockwise</button>
      </form>
    </td>
  </tr>
  <tr>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="5"><br>
        <button type="submit" value="Submit">Servo 3 - Clockwise</button>
      </form>
    </td>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="6"><br>
        <button type="submit" value="Submit">Servo 3 - Counter Clockwise</button>
      </form>
    </td>
  </tr>
  <tr>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="3"><br>
        <button type="submit" value="Submit">Servo 2 - Clockwise</button>
      </form>
    </td>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="4"><br>
        <button type="submit" value="Submit">Servo 2 - Counter Clockwise</button>
      </form>
    </td>
  </tr>
  <tr>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="1"><br>
        <button type="submit" value="Submit">Servo 1 - Clockwise</button>
      </form>
    </td>
    <td>
      <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
        <input type="hidden" name="value" value="2"><br>
        <button type="submit" value="Submit">Servo 1 - Counter Clockwise</button>
      </form>
    </td>
  </tr>
</table>


<!--
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="1"><br>
    <button type="submit" value="Submit">Servo 1 - Clockwise</button>
  </form>
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="2"><br>
    <button type="submit" value="Submit">Servo 1 - Counter Clockwise</button>
  </form>
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="3"><br>
    <button type="submit" value="Submit">Servo 2 - Clockwise</button>
  </form>
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="4"><br>
    <button type="submit" value="Submit">Servo 2 - Counter Clockwise</button>
  </form>
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="5"><br>
    <button type="submit" value="Submit">Servo 3 - Clockwise</button>
  </form>
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="6"><br>
    <button type="submit" value="Submit">Servo 3 - Counter Clockwise</button>
  </form>
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="7"><br>
    <button type="submit" value="Submit">Servo 4 - Clockwise</button>
  </form>
  <form action="http://weller.mit.edu/imel/abhinav/api.php" method="post">
    <input type="hidden" name="value" value="8"><br>
    <button type="submit" value="Submit">Servo 4 - Counter Clockwise</button>
  </form>
-->

</body>
</html>
