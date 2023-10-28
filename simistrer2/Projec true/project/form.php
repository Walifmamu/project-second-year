<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
  background-color: #f6f6f6;
   }


    .contact {
    
    margin: 100px 100px; /*contact box position*/
    position: relative;
    width: 700px;
    height: 500px;
    border-radius: 20px;
    padding: 40px;
    box-sizing: border-box;
    background: #ecf0f3;
    box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
    text-align: center;
    }



    input::placeholder {
    color: gray;
    }

    input {
    background: #ecf0f3;
    padding: 10px;
    padding-left: 20px;
    height: 50px;
    font-size: 14px;
    border-radius: 10px;
    box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
    }

    .fname {
    color: #000;
    margin: 10px;
    }

    .lname {
    margin: 10px;
    }

    .email{
    margin: 10px;

    }

    .submit {
    background-color: #24262b;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    cursor: pointer;
    font-size: 18px;
    height: 50px;
    margin-top: 38px;
    outline: 0;
    text-align: center;
    width: 100%;
    }

    .submit:active {
    background-color: #FFDE59;
    }

    .message img{
    width: 400px;
    height: 400px;
    position: relative;
    left: 720px;
    bottom: 350px;

    }

</style>
<body>    
<form action="process.php" method="post">
  <div class="contact">
      <h2>CONTACT ME</h2>
        <div class="fname">
          <label for="name">First name:</label>
          <input type="text" id="name" name="full_name" placeholder="Enter your real name" pattern="[A-Za-z]{3,}" required>
        </div>

        <div class="lname">
          <label for="name">Last name:</label>
          <input type="text" id="name" name="last_name" placeholder="Enter your real last name" pattern="[A-Za-z]{3,}"  required>
        </div>

        <div class="email">
            <label for="email">Email:</label>
            <input type="text" id="email" name="your_email" placeholder="name@example.com" pattern= "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"  required>
          </div>

        <div class="message">
            <label for="message">Message</label>
            <input type="text" id="name" name="m_essage" placeholder="message" pattern="[A-Za-z]{3,}" required>
        </div>

          <div class="submit1">
            <button type="text" class="submit">submit</button>
          </div> 
          <div class="message"><img src="nn.jpg" alt=""></div>
  </div>
</form>  

</body>
</html>