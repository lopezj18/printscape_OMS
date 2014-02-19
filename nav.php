<?php ?>
<style type="text/css">
	h2{padding:10px 10px 0 0; font-size:18px; width:100%; text-align:right;}
	a:link{color:#9fa615;}
	a:visited{color:#9fa615;}
	a:hover{color:white;}
	a:active{color:white;}

nav ul ul {
	display: none;
}

	nav ul li:hover > ul {
		display: block;
	}

nav ul {
	 
	
	list-style: none;
	position: relative;
	display: inline-table;
	float:right;
}
	nav ul:after {
		content: ""; clear: both; display: block;
	}


nav ul li {
	float: left;
}
.liadmin{background:#424242;
}
	nav ul li:hover {
		background:#333333;
		 z-index: 99;
		 position:relative;
	}
		nav ul li:hover a {
			color: #fff;
			 z-index: 99;
		}
	
	nav ul li a {
		display: block; padding: 30px 40px;
		color: #757575; text-decoration: none;
	}

nav ul ul {
	background: #3F3F3F; border-radius: 0px; padding: 0;
	position: absolute; top: 100%;
}
	nav ul ul li {
		float: none; 
		border-top: 1px solid #717c6b;
		border-bottom: 1px solid #576a58;
		position: relative;
	}
		nav ul ul li a {
			padding: 15px 22px;
			color: #fff;
		}	
			nav ul ul li a:hover {
				background: #4b545f;
			}
</style>
<nav>
	<ul>
		<li class="liadmin"><a href="#">Admin</a>
			<ul>
                <li><a href="admin-all-clients.php">All Customers</a></li>
                <li><a href="admin-all-users.php">All Users</a></li>
                <li><a href="admin-all-users.php?tabletype=delete">Delete Users</a></li>
                <li><a href="admin-recent-orders.php">Recent Orders</a></li>
                <li><a href="submit-order.php">Submit Orders</a></li>
                <li><a href="admin-new-user.php">Add Manager or Admin</a></li>
                <li><a href="run-tests.php">Run Tests</a></li>
                <li><a href="logout.php">Log Out</a></li>
			</ul>
		</li>
	</ul>
</nav>
<!--<h2><a href="admin-all-clients.php">View All Customers</a></h2>
<h2><a href="admin-all-users.php">View All Users</a></h2>
<h2><a href="admin-recent-orders.php">View Recent Orders</a></h2>
<h2><a href="submit-order.php">Submit An Order</a></h2>
<h2><a href="run-tests.php">Run Tests</a></h2>
<h2><a href="logout.php">Log Out</a></h2>-->