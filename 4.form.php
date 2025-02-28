<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <main>
        
        <form action="includes/formhandler.php" method="post"> 
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="Firstname...">

            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Lastname...">

            <label for="favouritefruit">Favourite Fruit?</label>
            <select name="favouritefruit" id="favouritefruit">
                <option value="none">None</option>
                <option value="apple">Apple</option>
                <option value="grapes">Grapes</option>
                <option value="mango">Mango</option>
                <option value="orange">Orange</option>
                <option value="pineapple">Pineapple</option>
            </select>
            <button type="submit">Submit</button>


        </form>
    </main>
    
</body>
</html>