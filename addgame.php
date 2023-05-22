<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 300px;
        }
        h4{
            margin: 0;
        }
    </style>
    <form action="includes/addgame.inc.php" method="post">
        <h1>game form</h1>
        <input type="text" name="title" placeholder="title">
        <h4>description</h4>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <select name="genre" id="">
            <option value="action">action</option>
            <option value="adventrure">adventrure</option>
            <option value="shooting">shooting</option>
            <option value="arcade">arcade</option>
            <option value="un">fun</option>
        </select>
        <h4>image</h4>
        <input type="text" name="image">
        <input type="submit" value="submit" name="submit">

    </form>
    
    <script src="general.js"></script>
</body>

</html>