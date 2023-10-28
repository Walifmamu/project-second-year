<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add store</title>
    <style type="text/css">
        body{
            font-family:sans-serif;
            
            background-color: transparent;
            
        }
        label{
            font-color:#ffffff;
            width: 118px;
            display: inline-flex;
            margin-bottom: 2px;
            padding: 11px 5px;
            
           
           
        }
        .wrap{
            width: 400px;
            margin: auto;
            padding: 20px;
            background-color:rgb(212 231 206 / 52%);
            border-radius: 10px;
            text-align: center;
            box-shadow: 3px 3px 5px black;
            margin-top: 10px;
            margin-bottom: 20px;
 
        }
        .judul{
            color: black;
            font-size: 30px;
            height: 50px;
            text-align: left;
            padding: 20px
 
        }
        input{
            width: 50%;
            height: 22px;
            padding:5px;
            border-radius: 39px;
            margin: 10px;
            font-size: 18px;
            border-left: 1px solid #337ab7;
            border-top: 0px solid black;
            border-right: 0px solid #337ab7;
            border-bottom: 1px solid #337ab7;
        }
    
        
        


        .button{
            position: relative;
            width: 155px;
            height: 43px;
            font-size: 20px;
            background-color: rgba(24, 216, 14, 0.492);
            border:none;
            border-radius: 39px;
            cursor: pointer;
            transition: width  .5s;
            border-radius: .5s;
        }
        
        .button *{
            position:absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            transition: opacity .25s;
        }
        .icon{
            opacity: 0;
        }
        .button:focus{
            width: 30px;
            background-color: red;
            border-radius: 50%;        
        }
        .button:focus .text {
            opacity: 0;
        }
        .button:focus .icon{
            opacity: 1;
            transition-delay: 5s;
        }
    </style>
</head>
<body>
<div class="wrap">
        
        <div class="content">
<h1  id="div" align="center"><font color="#337ab7"><b>Add Store</b></font></h1>
    <center>
      <form action="connect.php" method="post">
        <label><font color="#000"> Store Name</label>
          <input type="text" name="store_name" placeholder="Store Name" pattern="[A-Za-z]{3,}" required><br>
        <label>Type store</label>
          <input type="text" name="type_store" placeholder="Type store" pattern="[A-Za-z]{3,}" required><br>
        <label>Name</label>
          <input type="text" name="n_me" placeholder="Name" pattern="[A-Za-z]{3,}" required><br>
        <label>Lastname</label>
          <input type="text" name="lastname" placeholder="Lastname"pattern="[A-Za-z]{3,}" required> <br>
        <label>Email </label>
          <input type="text" name="email" placeholder="Email" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required><br>
        <label>Phone Number</label>
          <input type="text" name="phone_number" placeholder="Phone Number" pattern="[0]{1}[0-9]{9,}" required ><br>
        <label>Details</label>
          <input type="text" name="details" placeholder="Details" pattern="[A-Za-z]{3,}" required><br>
        <br>
        <button class="button">
            <span class="text">Submit</span>
            <i class="ri-check-line icon"></i>
        </button>

      </form>
    </center>
</body>
</html>