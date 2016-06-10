<html>
<head>
    <title> Learn_Classes </title>
    <style>
        body {
        }
    </style>
</head>
<body>
    <h1> <?php echo "Hello " . $this->_user->getname() . ' From hello.php'; ?> </h1>

    <form action="/contact" method="post">
        <input type="submit" value="POST button">
    </form>
</body>
</html>