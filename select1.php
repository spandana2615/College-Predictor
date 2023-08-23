<?php
$url='https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-photos-vectors%2Fcollege-background&psig=AOvVaw0KrE8Zq8hI3hBge9LMGcYr&ust=1684169667576000&source=images&cd=vfe&ved=0CA4QjRxqFwoTCKjfjYej9f4CFQAAAAAdAAAAABAD';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        body{
            background-image:url('<?php echo $url ?>');
            height:100vh;
            background-size:cover;
            background-position:center;
            text-align:center;
            font-size:30px;
            top:20%;
        }
        table{
            font-size: 25px;
            text-align: center;
            width:100%;
        }
    </style>
</head>
<body>
<h3> Congratulations...! We have some College Suggestions for you based on your Rank</h3>
    <p>COLLEGES   LIST</p>
    <div class="container">
        <table>
            
            <?php
            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,'db_colleges');
            if(isset($_POST['search']))
            {
                $gender=$_POST['gender'];
                $rank=$_POST['rank'];
                $caste=$_POST['caste'];
                $branch = $_POST['branch'];
                $query = "SELECT * FROM colleges_table WHERE gender='$gender' AND caste='$caste' AND branch='$branch' AND closingrank<='$rank' ";
                $query_run=mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($query_run))
                {
                        echo" <a href='apply.html'> {$row["colleges"]}</a> <br>";
                }
            }
            ?>
        </table>
        </div>
</body>
</html>