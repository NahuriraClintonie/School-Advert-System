<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <!-- <style rel="styleesheet" href="new.css"></style> -->
    <link rel="stylesheet" type= "text/css" href="css/index.css"><link>
    <!-- <link rel="stylesheet" type= "text/css" href="css/style1.css"> -->
    <link rel="stylesheet" type= "text/css" href="css/style.css">
    <script>
        function loadpage_func(){
            document.getElementById("load").style.opacity="0";
            document.getElementById("load").style.zIndex="1";
            document.getElementById("load").style.transform="scale(1.2)";

            document.getElementById("form").style.display="block";
        }
    </script>
    <script>       
 function emptyFields() {
  let a = document.forms["myForm"]["fname"].value;
  if (a == "") {
    alert("Fill in the First Name please");
    return false;
  }
  let b = document.forms["myForm"]["lname"].value;
  if (b == "") {
    alert("Fill in the Last Name please");
    return false;
  }
  let c = document.forms["myForm"]["pschool"].value;
  if (c == "") {
    alert("Fill in the Primary School please");
    return false;
  }
  let d = document.forms["myForm"]["dob"].value;
  if (d == "") {
    alert("Please choose a date of birth");
    return false;
  }
  let e = document.forms["myForm"]["eng"].value;
  let f = document.forms["myForm"]["maths"].value;
  let g = document.forms["myForm"]["sci"].value;
  let h = document.forms["myForm"]["sst"].value;
  if (e == ""||f==""||g==""||h==""){
    alert("Fill in all the grades please");
    return false;
  }
  let i = document.forms["myForm"]["pname"].value;
  if (i == "") {
    alert("Fill in Parent/Guardian name please");
    return false;
  }
  let j = document.forms["myForm"]["pcontact"].value;
  if (j == "") {
    alert("Fill in Parent/Guardian Contact please");
    return false;
  }
}
    </script>
    <style>
        
        body{
            padding: 0;
            margin: 0;
            /* background-image: url("Images/schoolbadge.jpg"); */
            background: url("Images/schoolbadge.jpg") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            /* background-repeat: no-repeat; */
        }

		td,th{
			margin:0;
			border:1px solid grey;
			white-space:nowrap;
			border-top-width:0px;
			font-size:12px;
		}

        div#load{
            width: 100vw;
            height: 100vh;
            background: rgba(37, 110, 4, 0.94);
            position: fixed;
            z-index: 10;
            transition: 0.21s;
			overflow-y:scroll;
        }

        div#logo{
            margin:100px auto 20px;
            width:160px;
            height: 160px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        img#logo{
            width:105px;
            height:105px;
        }

        p#sch_name{
            width: 100%;
            margin:5px 0px 10px;
            text-align: center;
            color: yellow;
            font-size: 28px;
            letter-spacing: 3px;
        }
        
        p#description{
            width: 100%;
            margin:5px 0px 10px;
            text-align: center;
            color: white;
            font-size: 18px;
            letter-spacing: 2px;
        }

        div#apply{
            width:160px;
            height: 40px;
            background: white;
            margin:10px auto;
            border-radius: 4px;
            text-align: center;
            line-height: 40px;
            color: rgba(37, 110, 4, 1);
            font-size: 18px;
            font-family: sans-serif;
            letter-spacing: 1.5px;
            cursor: pointer;
        }

        div#form{
            width: 100vw;
            height: 100vh;
            background: rgba(255,255,255,0.91);
            position: fixed;
            z-index: 5;
            transition: 0.18s;
            display: none;
            overflow: scroll;
        }

        div#banner{
            width:90vw;
            height: 90px;
            margin: 15px auto;
        }

        div#logo2{
            width:120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            float:left;
        }

    div#banner_txt{
        float: left;
        width:60%;
        margin-left: 20px;
        margin-top: 5px;
    }
        img#logo2{
            width:85px;
            height:85px;
        }

        p#sch_name2{
            width: 100%;
            margin:5px 0px 10px;
            text-align: center;
            color: black;
            font-size: 28px;
            letter-spacing: 3px;
        }
        
        p#description2{
            width: 100%;
            margin:5px 0px 10px;
            text-align: center;
            color: black;
            font-size: 20px;
            letter-spacing: 3px;
        }
        
        div#main{
            width:900px;
            height: 540px;
            margin: auto;
            /* margin-left: 5vw; */
            background: white;
            padding-top: 30px;
            padding-left: 30px;
            border-radius: 10px;
            box-shadow:0 0 128px 0px rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.2);
        }

        div.field{
            margin:10px 0px;
        }
        p.label{
            margin:5px 0px 3px;
            font-family: sans-serif;
            font-size: 15px;
            letter-spacing: 0.3px;
        }

        input,select{
            width:220px;
            height: 40px;
            background: none;
            border:0;
            border-bottom: 1px dotted green;
            margin-bottom: 6px;
            outline: none;
			color:blue;
			style: bold;
        }

        div.box{
            float: left;
            width:290px;
			border-color: blue;
        }

        
        button[type="submit"]{
            clear: both;
            display: block;
            width:100%;
            height: 40px;
            color: white;
            border-radius: 4px;
            text-align: center;
            line-height: 40px;
            background-color: rgba(37, 110, 4, 1);
            font-size: 18px;
            font-family: sans-serif;
            letter-spacing: 1.5px;
            cursor: pointer;
            border: 0;
            margin-left: 5vw;
            margin-bottom: 100px;
        }
		
		button[type="reset"]{
            clear: both;
            display: block;
            width:100%;
            height: 40px;
            color: white;
            border-radius: 4px;
            text-align: center;
            line-height: 40px;
            background-color: rgba(37, 110, 4, 1);
            font-size: 18px;
            font-family: sans-serif;
            letter-spacing: 1.5px;
            cursor: pointer;
            border: 0;
            margin-left: 5vw;
            margin-bottom: 50px;
        }

        div#form::-webkit-scrollbar{
            width:0;
        }
		
		.card{
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			transition:0.3s;
			width:40%;
			border-radius:5px;
			padding:5px;
			background:#e6e6ff;
			font-size: 20px;
		}
		

        @media (max-width:600px){
            div#logo{
                margin-top: 6vh;
                width:120px;
                height: 120px;
            }

            img#logo{
                width:80px;
                height: 80px;
            }
            p#sch_name{
                width:92vw;
                margin-left:4vw;
                font-size: 17px;
            }
            p#description{
                width:92vw;
                margin-left:4vw;
                font-size: 14px;
            }
            div#apply{
                width: 36vw;
                height:30px;
                margin-top: 30px;
                font-size:14px;
            }
            
            
            div#banner{
            width:92vw;
            margin-left:4vw;
            //background: red;
            }
            div#logo2{
            clear:both;
                margin-top: 0;
                width:120px;
                height: 120px;
                margin:0 auto;

            }

            img#logo2{
                width:80px;
                height: 80px;
            }
            
            div#banner_txt{
            width:100%;
            margin-left:0;
            }
            p#sch_name2{
                width:100%;
                //margin-left:4vw;
                margin-bottom:3px;
                font-size: 17px;
                color:green;
            }
            p#description2{
                width:92vw;
                margin-left:0;
                margin-top:3px;
                font-size: 13px;
            }
            
            div#main{
            //display:none;
            box-shadow:unset;
            background:none;
            width:92vw;
            margin:10px auto;
            //background:red;
            padding:0;
            }
            
            div.box{
            clear:both;
            width:100%;
            //background:green;
            }
            
            div.field{
            width:100%;
            background:white;
            padding:10px 0px 20px 8px;
            border-radius:6px;
            }
            input,select{
            width:100%;
            }
        }

    </style>
</head>
<body>
<body>

    <div id="load">
    
        <div id="logo">
            <img src="Images/schoolbadge.jpg" id="logo">
        </div>
        <p id="sch_name"><b>THE BRIGHT DAY AND BOARDING PRIMARY SCHOOL</b></p>
        <p id="description">NEW PUPILS' APPLICATION FORM</p>
		<center><div class="card">
		<p align="left">Greetings and Best wishes to you, our dear prospective Parents/Guardians.<b>we are now also receiving 
		applications for new vacancies online</b> through this portal. Please click on 
		the button below to tender-in your application.</p>
		<p><font face="times new roman"><i><b>Expect First Class Educational Services</b></i></font>
		</p></div></center>
		
        <div id="apply" onclick="loadpage_func()">APPLY NOW</div>
		<center><b><div style="margin-top:20px; font-size:25px; color:yellow">For inquiries contact
			<p>Phone Number 1 | Phone Number 2 | Phone Number 3 | Phone Number 5</p>
			<p><span style="font-size:25px; color:yellow">put here the domain name | put here the email of the school</span>
		</p></div></b></center>
    </div>
    
    <div id="form">
    <?php include 'navbar.php';?>
        <div id="banner">
            <div id="logo2">
                <img src="Images/schoolbadge.jpg" id="logo2">
            </div>
            <div id="banner_txt">
                <p id="sch_name2"><b>THE BRIGHT DAY AND BOARDING SCHOOL</b></p>
                <p id="description2">APPLICATION FORM FOR NEW APPLICANTS</p>
            </div>
        </div>
    
<div id="main">
    <form name="myForm" action="uploads1.php" onsubmit="return emptyFields()" method="post">
        <div class="box">
    <div class="field">
        <p class="label">Surname</p>
        <input type="text" name="fname" placeholder="Your answer">
    </div>

    
    <div class="field">
        <p class="label">Other Names</p>
        <input type="text" name="lname" placeholder="Your answer">
    </div>

    <div class="field">
        <p class="label">Gender</p>
			<p style="font-size:12px"><input type="radio" name="sex" value="M" style="width:30px; height: 15px;">MALE
			</p><p style="font-size:12px"><input type="radio" name="sex" value="F" style="width:30px; height: 15px;">FEMALE
    </p></div>

    <div class="field">
        <p class="label">Date of Birth</p>
        <input type="date" name="dob">
    </div>
	
	<div class="field">
        <p class="label">Religion</p>
        <select name="religion">
			<option>choose ....</option>
			<option value="Adventist">Adventist</option>
			<option value="Anglican">Anglican</option>
            <option value="Anglican">Born Again</option>
			<option value="Catholic">Catholic</option>
			<option value="Moslem">Moslem</option>
			<option value="Other">Other</option>
		</select>
    </div>
</div>

<div class="box">
    <div class="field">
        <p class="label">Name of Parent/Guardian</p>
        <input type="text" name="pname" placeholder="Your answer">
    </div>
	
	<div class="field">
        <p class="label">Relationship</p>
        <input type="text" name="relation" placeholder="e.g Father/Mother/Uncle">
    </div>

    <div class="field">
        <p class="label">Parent Phone Contact (preferably WhatsApp number if available)</p>
        <input type="text" name="pcontact" placeholder="e.g 077xxxxxxx">
    </div>

    <div class="field">
        <p class="label">E-mail of Parent/Guardian</p>
        <input type="email" name="pemail" placeholder="Your answer">
    </div>

	<div class="field">
        <p class="label">Abode:</p>
			<p style="font-size:12px"><input type="radio" name="abode" value="B" style="width:30px; height: 15px;">BOARDING
			</p><p style="font-size:12px"><input type="radio" name="abode" value="D" style="width:30px; height: 15px;">DAY SCHOLAR
    </p></div>
</div>

<div class="box">
	<h4>Results</h4>
		<hr>
		
    <div class="field">
        <p class="label">Former School</p>
        <input type="text" name="pschool" placeholder="Your answer">
    </div>
	
	<div class="field">
        <p class="label">Index Number(if any)</p>
        <input type="text" name="indexno" placeholder="e.g xxxxxx/xxx (9 numbers)">
    </div>

    <div class="field">
        <p class="label">Enter the Pupil's Results from the Former School</p>
        <!-- <input type="text" name="indexno" placeholder="e.g xxxxxx/xxx (9 numbers)"> -->
    </div>

    <div class="field">
    <table>
		<tbody><tr>
			<th class=""></th>
			<td>D1</td>
			<td>D2</td>
			<td>C3</td>
			<td>C4</td>
			<td>C5</td>
			<td>C6</td>
			<td>P7</td>
			<td>P8</td>
			<td>F9</td>
		</tr>
		<tr>
			<th class="" align="left">English</th>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="1"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="2"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="3"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="4"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="5"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="6"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="7"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="8"></td>
			<td><input type="radio" name="eng" style="width:10px; height: 15px;" value="9"></td>
		</tr>
		<tr>
			<th class="" align="left">Mathematics</th>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="1"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="2"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="3"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="4"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="5"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="6"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="7"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="8"></td>
			<td><input type="radio" name="maths" style="width:10px; height: 15px;" value="9"></td>
		</tr>
		<tr>
			<th class="" align="left">Science</th>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="1"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="2"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="3"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="4"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="5"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="6"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="7"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="8"></td>
			<td><input type="radio" name="sci" style="width:10px; height: 15px;" value="9"></td>
		</tr>
		<tr>
			<th class="" align="left">Social Studies</th>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="1"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="2"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="3"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="4"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="5"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="6"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="7"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="8"></td>
			<td><input type="radio" name="sst" style="width:10px; height: 15px;" value="9"></td>
		</tr>
	</tbody></table>
	</div>
	
	<div class="field" style="background:yellow; padding:5px">
        <p class="label"><b>Note</b></p>
        <p><span style="color: darkgreen; font-size: 18px">When coming to school for the admission, you will be required to present a <b>copy of results</b> at school before receiving an admission letter</span></p>
    </div>
</div>
<div class="field">
		<div style="float:left; width:30%;">
			<button type="submit" style="width:100px">SUBMIT</button>
        </div>
		<div style="float:left; width:30%;">
			<button type="reset" style="width:100px">CANCEL</button>
        </div>
    </div>
</div>

</form></div>


<!-- <div class="field">
		<div style="float:left; width:30%;">
			<button type="submit" style="width:100px">SUBMIT</button>
        </div>
		<div style="float:left; width:35%;">
			<button type="reset" style="width:100px">CANCEL</button>
        </div>
    </div>
</div> -->


</body>
</body>
</html>