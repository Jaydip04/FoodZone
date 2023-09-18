        <nav>
            <ul id="navigations">
                <li><a href="index.php">Home</a></li>

                <li><a href="Search.php">Search</a></li>
                <?php
				if(!isset($_SESSION['reg_id']))
				{
				?>
                <li><a href="User_Register.php">Register</a></li>
                <li><a href="Login.php"> Login </a></li>
                <?php
				}
				else
				{
				?>
                <li><a href="Login.php"> Logout </a></li>
                <?php
				}
				?>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>