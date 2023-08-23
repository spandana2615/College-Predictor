<html>
    <head>
</head>
<body>
    <style>
        body 
        {
            background-image: url('https://images.unsplash.com/photo-1627484164075-1f4126482550?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YmxhbmslMjBwYXBlcnxlbnwwfHwwfHw%3D&w=1000&q=80');
            height:100vh;
            background-size:cover;
            background-position:center;
            text-align:center ;
            font-size:20px;
        }
    </style>
    <form action="select.php" method="post">
    <!-- <div class="container"> -->
            <?php
            $mysqli = require __DIR__ . "/database.php";
            $sql ="INSERT INTO inputvalues (firstname,lastname,gender,rank,caste,branch)
                VALUES (?, ?, ?,?,?,?)";
            $stmt = $mysqli->stmt_init();
            if(!$stmt->prepare($sql)){
                die("SQL error: " . $mysqli->error);
            }

            $stmt->bind_param(
                "sssiss",
                $_POST["firstname"],
                $_POST["lastname"],
                $_POST["gender"],
                $_POST["rank"],
                $_POST["caste"],
                $_POST["branch"]);
               
            if($stmt->execute()){
                die("Your information has successfully stored.");
            } 
            ?>
    <!-- </div> -->
</form>
</body>
</html>