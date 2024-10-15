<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    
    <div class="container">
    </br>
    </br>
        <h1><b>Welcome to the E-Commerce Platform</b></h1>

        <img src="images/logo.png" alt="E-Commerce Logo" class="bottom-image">
        <form action="home.php" method="POST">
            <label for="visitorName">Visitor Name:</label>
            <input type="text" id="visitorName" name="visitorName" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            
            <button type="submit">Submit</button>
        </form>
        
       
    </div>
</body>
</html>
