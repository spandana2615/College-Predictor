<?php
$url='https://c4.wallpaperflare.com/wallpaper/165/275/593/colorful-windows-10-gradient-minimalism-soft-gradient-hd-wallpaper-preview.jpg';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style type="text/css">
        body{
           
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
        <table align="center" border="1px" style="width:600px; line-height:40px;">
            
            <?php
            $connection=mysqli_connect("localhost","root","");
            $db=mysqli_select_db($connection,'hackathon');
            if(isset($_POST['search']))
            {
                $rank=$_POST['rank'];
                $branch = $_POST['branch'];
                $query = "SELECT * FROM colleges_list WHERE branch='$branch' AND closingrank>='$rank' ";
                $query_run=mysqli_query($connection,$query);
                while($row=mysqli_fetch_array($query_run))
                {
                    ?>
                    
                    <tr><td><?php  echo" <a href='apply.html'> {$row["colleges"]}</a> <br>" ?></td>
                    <?php
                }
            }
            ?>
        </table>
        </div>
</body>
</html>