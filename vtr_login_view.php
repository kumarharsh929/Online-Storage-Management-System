<?php
	session_start();
	if(isset($_SESSION['username'])){
		header('Location: vtr_index_view.php');
	}
?>
<html>
   <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  <style>
    body{ 
 background-color:rgb(0, 0, 51);  /* For browsers that do not support gradients */
 // background-image: linear-gradient(45deg,rgb(128, 128, 255) , rgb(0,0,128)); /* Standard syntax (must be last) */
	}

	p{
	   text-align:justify;
        color:#37,37,37;
	}
	#ss{
		text-align: right;
	}
	h1{
	   text-align:center;
	   color:white;
	   font-family: 'Lobster', cursive;
	}
	input{
		text-align:left;
	}
	.p1{
	   text-align:justify;
	}

	#a{
		display:block;
	}
	#b{
		display:none;
	}
	#c{
		display:none;
	}

  h4{ text-align: center; 
    color:rgb(0,0,102); 
   font-family: 'Bree Serif', serif;

  margin-top: 5px;
  background-color:#fff;//rgb(0, 0, 102);  /* For browsers that do not support gradients */
  //background-image: linear-gradient(0deg,rgb(128, 128, 255) , rgb(0,0,128)); 
  padding: 7px;
  font-size: 30px;
  position:absolute;
  top:-30px;
  //width: 90%;
  border-radius:10px;
  border:2px solid rgb(0,0,102);
  padding-left: 20px;
  padding-right: 20px; 
  }
  </style>
   </head>
   <body>
     <div class="container-fluid">
	    <div class="row" style="margin-top:50px;">
		   <div class="col-sm-2"></div>
		   <div class="col-md-8">
		      <div class="row" style="margin-top:2%;  ">
			     <div class="col-sm-5" style="background:rgb(0, 0, 51); color:#fff; min-height: 470px; padding:20px; ">
					<div>
						<p style="text-align: center;"><img src="img/clo.gif" style="height:150px;width:150px; ;background: white;padding:2px; " class="img-circle" ></p>
					</div>
					  <p style="text-align:justify;font-family:sans-serif;" > Online storage has a variety of applications, including data backup, data sharing, and resource service. It can also provide standardized interfaces for other network services. You can upload any type of files and folders and you can also download it. The demand for professionals with knowledge of On-line storage is expect to rise exponentially because more and more companies are implementing this technology.</p>
					  <u>Advantages of Online Storage </u>
						<ul>	
							<li>Easy to use</li>
							<li>Access data from any where</li>
							<li>Large data capacity</li>
							<li>Inexpensive</li>
						</ul>
						<br/><br/>
					
				 </div>
				 <div class="col-md-1"></div>
			     <div class="col-sm-6" style="background:white; min-height: 470px; border:2px solid green; border-radius:0px 10px 10px 0">
			     	<form method="post" action="vtr_login.php">
				     	 <h4>Log-in</h4>
				     	 <br/><br/>
					     <label style="margin-top:10px; margin-bottom:0px; font-size: 20px;" >UserName</label><br/>
					     <br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						    <input type="email" name="username" class="form-control" required="true" style="border:0px; border-bottom: 2px solid green;" >
						</div><br/>
					    <label style="margin-top:10px; margin-bottom:0px; font-size: 20px;">Password</label><br/><br/>
					    <div class="input-group">
						    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						    <input type="password" name="password" class="form-control" required="true" style="border:0px; border-bottom: 2px solid green;">
						</div><br/><br/>
						<p style="float: left;"><input type="checkbox">&ensp; Keep me logged in</p><br/><br/>
						<input type="submit" name="submit" value="Login" class="btn"  style="background:rgb(0, 0, 51); color:#fff; width:25%;"/><br/>
                       <br/><br/>
						<p id="ss">
					    	<span><a href="vtr_resetpassword.php"><u>Forgot Password?</u></a></span></p>
					</form>
				 </div>
			  </div> 
		   </div>
		   <div class="col-sm-2"></div>
		</div>
	 </div>
   </body>
</html>