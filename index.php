<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
<body>


    
    <div class="container">
        <div class="row">
            
            <h1 class="text-center text-uppercase">complete form</h1>

            
            <div class="mx-auto">

            
        <form action="data.php" method="post" enctype="multipart/form-data" onsubmit="return myFun()">
        <p class="text-danger" id="msg"></p>
        <div class="form-group">
            <input type="text" name="fullname" id="name" class="form-control" placeholder="name">
        </div>


        <div class="form-group">
            <input type="text" name="email" id="email" class="form-control" placeholder="email">
        </div>

        <div class="form-group">
            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="mobile">
        </div>

        <div class="form-group">
            <input type="date" name="dob" id="dob" class="form-control" >
        </div>

        <div class="form-group">
            <input type="radio" name="gender" id="mm" value="Male"><label for="">Male</label>
            <input type="radio" name="gender" id="ff" value="Female"><label for="">Female</label>
        </div>

        <div class="form-group">
            <input type="checkbox" name="hobby" value="games" id="gg" ><label for="">Games</label>

            <input type="checkbox" name="hobby" value="reading" id="rr"><label for="">reading</label>

            <input type="checkbox" name="hobby" value="outing" id="oo"><label for="">outing</label>
        </div>

        <div class="form-group">
            <select name="state" id="state" class="form-control">
                <option value="">select state</option>
                <option value="punjab">punjab</option>
                <option value="delhi">delhi</option>
                <option value="haryana">haryana</option>
            </select>
        </div>

        <div class="form-group">
           <input type="file" name="img[]" id="img" multiple="multiple">
        </div>
        
        <div class="form-group">
           <input type="submit" name="submit" value="submit">
        </div>
        
        
        </form>


        </div>
        </div>

    </div>





    

    <script src="app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>