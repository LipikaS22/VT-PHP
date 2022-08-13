<?php

?>
<html>
<head>
</head>
<body>
<form action="calcode.php" method="post">
<h1>Simple Calculator</h1>
Enter first No.
<input type="text" name="f"/>
<br/>
Enter second no.
<input type="text" name="s"/>
<br/>
Select Operator
<input type="radio" name="a" value="add"/>Add
<input type="radio" name="a" value="sub"/>Sub
<input type="radio" name="a" value="mul"/>Mul
<input type="radio" name="a" value="div"/>Div
<br/>
<input type="submit" value="calculate"/>
</form>
</body>
</html>