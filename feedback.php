<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheets Cristine</title>
   <style>
    nav{
	background: rgb(0, 0, 0);
	height: 80px;
	width: 100%;
}
label.logo{
	color: white;
	font-size: 35px;
	line-height: 80px;
	padding: 0 100px;
	font-weight: bold;
}
nav ul{
    float: right;
    margin-right: 20px;
}
nav ul li{
	display: inline-block;
	line-height: 80px;
	margin: 0 5px;
}
nav ul li a{
	color: white;
	font-size: 17px;
	padding: 7px 13px;
	border-radius: 3px;
	text-transform: uppercase;
}
a.active,a:hover{
	background: #4d350b;
	transition: .5s;
}
.checkbtn{
	font-size: 30px;
	color: white; 
	float: right;
	line-height: 80px;
	margin-right: 40px;  
	cursor: pointer;
	display: none;
}
#check{
	display: none;
}
@media (max-width: 952px){
	label.logo{
		font-size: 30px;
		padding-left: 50px;
	}
	nav ul li a{
		font-size: 16px;
	}
}
@media (max-width: 858px){
    .checkbtn{
    	display: block; 
    }
    ul{
    	position: fixed;
    	width: 100%;
    	height: 100vh;
    	background: #2c3e50;
    	top: 80px;
    	left: -100%;
    	text-align: center; 
    	transition: all .5s;
    }
    nav ul li{
    	display: block;
    	margin: 50px 0;
    	line-height: 30px;
    }
    nav ul li a{
       font-size: 20px;
    }
    a:hover,a.active{
    	background: none;
    	color: #0082e6;
    }
#check:checked ~ ul{
    left: 0;
}
}
section{
	background: url(download.png) no repeat;
	background-size: cover;
	height: calc(100vh - 80px);
}

        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h2 {
            color: #333;
            margin-top: 20px
        }

        form {
            margin: 80px auto;
            max-width: 300px;
            padding: 200px;
            background-color: #fff;
            border: 15px solid #ccc;
            border-radius: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    
</head>

<body>   

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <img src="images/SheetsCristine.png" alt="My Image" style="width:60px;height:60px">
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="product.html">Product</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="feedback.php"> feedback</a></li>
    </ul>
  </nav>

    <form action="mail.php" method="post" align="center">
    <h2 >FEEDBACK!</h2>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" required></textarea>
      <input type="submit" value="Send" name="send">
    </form>
    
</body>
</html>
