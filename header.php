<!--Header-->
<header>
	<style>
    *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;

   }
   body {
    margin:0;
    font-family:Arial;
    background-color: #fff6e3;
    overflow-x: hidden;
  }

  .logo{
    display:block;
    float: left;
    padding-left:20px;
    padding-top: 10px;
  }
  .logolink{
    padding: 0px !important;
    margin: 0px !important;
  }
  .topnav {
    overflow: hidden;

  }

  .topnav a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 44px 30px;
    text-decoration: none;
    font-size: 25px;
    margin-left: 100px;

  }
  a{
    text-decoration: none;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }

  .dropdown .dropbtn {
    font-size: 25px;    
    border: none;
    outline: none;
    color: black;
    padding: 44px 40px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    margin-left: 100px;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #dedad3;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    width: 0px;
  }

  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 69px;
    text-decoration: none;
    display: block;
    text-align: center;
    margin-left: 100px;
  }

  .topnav a:hover, .dropdown:hover .dropbtn {
    background-color: #dedad3;
    color: black;

  }

  .dropdown-content a:hover {
    background-color: #FFE6EB;
    color: black;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }
  .tagline{
    padding-top: 100px;
    z-index: -1;
    font-size: 32px;
    position: absolute;
    left: 30px;
  }
  .catanddog{
    position: absolute;
    right: -190px;
    top: -4px;
    z-index: -1;
  }

</style>
	<div class="topnav" id="myTopnav">
		<div class="logo">
			<a class = "logolink" href="home.php">
				<img src="images/logo.png" width="100px">
			</a>
		</div>

		<div class="dropdown">
			<button class="dropbtn">Adopt 
			</button>
			<div class="dropdown-content">
				<a href="dogs.php">Dogs</a>
				<a href="cats.php">Cats</a>
			</div>
		</div> 
		<a href="blog.php">Blog</a>
		<a href="#contact">Contact</a>

		<a href="about.php">About</a>
    <a href="signup.php">Sign Up</a>

	</div>

</header>