<!DOCTYPE html><?php // A Simple Calculator By An0n 3xPloiTeR ^_^ ?>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Calculator van Tarik </title>
		<meta name="author" content="TT, Tarik ezafzafi" />
		<style>
			body {
				background-color: #080510;
			}
			.heading {
				font-family: cursive;
				font-size: 300%;
				color: green;
				text-align: center;
			}
			.calculator {
				font-family: cursive;
				font-size: 110%;
				color: white;
				text-align: center;
				margin-top: 10vh;
			}
			input {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 110%;
			}
			select {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 95%;
			}
			option {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 95%;
			}
			.footer {
				left: 0px;
				right: 0px;
				bottom: 4px;
				position: fixed;
				text-align: center;
				color: teal;
				font-family: Comic Sans Ms;
				font-size: 120%;
			}
			a {
				text-decoration: none;
				color: green;
			}
			a:hover {
				color: lawngreen;
			}
			input[type=number]::-webkit-inner-spin-button, 
			input[type=number]::-webkit-outer-spin-button { 
				-webkit-appearance: none; 
				margin: 0; 
			}
			
		</style>
	</head>
	<body>
		<div class="heading">
			<font>Calculator van tarik</font>
		</div>
		<div class="calculator">
			<form action="" method="POST">
				<input type="number" name="first_input" placeholder="First Number Here" size="20" />&nbsp;&nbsp;&nbsp;
				<input type="number" name="second_input" placeholder="Second Number Here" size="20" />&nbsp;&nbsp;&nbsp;
				<select name="function">
					<option>Add</option>
					<option>Subtract</option>
					<option>Multiply</option>
					<option>Divide</option>
					<option>Square</option>
					<option>Square Root</option>
				</select><br><br><input type="reset" value="Reset">
				<input type="submit" name="submit" value="Submit" />
			</form>
			<?php
				
            if (isset($_POST['submit'])) {
					$input_1 = htmlspecialchars($_POST['first_input']);
					$input_2 = htmlspecialchars($_POST['second_input']);
					$operator = $_POST['function'];

				if ($input_1 == null) {
					die("<br><br>Please Enter The First Number ^_^");
				}
				switch ($operator) {
					case 'Add':
							$adding = $input_1 + $input_2;
							echo "<br><br>Result:<br> " . $adding;
					    break;

					case 'Subtract':
							$subtracting = $input_1 - $input_2;
							echo "<br><br>Result:<br> " . $subtracting;
					    break;

					case 'Multiply':
							$multiply = $input_1 * $input_2;
							echo "<br><br>Result:<br>" . $multiply;
					    break;

					case 'Divide':
							$divide = $input_1 / $input_2;
							echo "<br><br>Result:<br>" . $divide;
					    break;

					case 'Square':
							$square = $input_1 * $input_1;
						die("<br><br>Result:<br>" . $square);
						break;

					case 'Square Root':
							$square_root = sqrt($input_1);
						die("<br><br>Result:<br>" . $square_root);
					    break;
				}
			}
			
            ?>

		</div>
		<div class="footer">
			<footer>
				<hr>
					<font>Developed By 
						<a href="" target="_blank">Tarik Ezafzafi</a>
					</font>
				<hr>
			</footer>
		</div>
	</body>
</html>