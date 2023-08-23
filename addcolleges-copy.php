<?php
            $mysqli = require __DIR__ . "/database.php";
            $sql ="INSERT INTO colleges_table (colleges,openingrank,closingrank,branch,gender,caste)
                VALUES (?, ?, ?,?,?,?)";
            $stmt = $mysqli->stmt_init();
            if(!$stmt->prepare($sql)){
                die("SQL error: " . $mysqli->error);
            }

            $stmt->bind_param(
                "siisis",
                $_POST["collegename"],
                $_POST["openingrank"],
                $_POST["closingrank"],
                $_POST["branch"],
                $_POST["gender"],
                $_POST["caste"]);
               
            if($stmt->execute()){
                die("Your information has successfully stored.");
            } else{

                die($mysqli->error . " " . $mysqli->errno);
            }
            ?>