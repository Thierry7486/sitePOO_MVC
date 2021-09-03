<h1>Form login here !</h1>
<form method="post">
	<?php
		echo $form->input("email","email");
		echo $form->input("password","password");
		echo $form->submit();
	?>
</form>