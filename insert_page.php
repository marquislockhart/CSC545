<! DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Art</title>
    </head>
    <body>
        <!-- insert data. change variables to match whatever database needs --> 
        <h1> Insert data in this bitch </h1>
        <form action="insert.php" method="post">
            ID<input required type="text" name="_id" value="">
            Name<input required type="text" name="name" value="">
            Image URL<input required type="text" name="city" value="">
            <button type="submit" name="button"> SAVE </button>
        </form>

        <!-- press YEEHAW to view images -->
        <form action="insert.php" method="get">
            <button type="submit" name="button"> YEEHAW </button>
        </form>
    </body>
</html>
