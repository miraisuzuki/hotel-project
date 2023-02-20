<?php

    require "database.php";

    class Admin extends Database
    {
        public function createAdminUser($username,$password)
        {
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin`(`username`, `password`) VALUES ('$username', '$encrypted_password')";

            if($result=$this->conn->query($sql))
            {
                header("Location: ../views/admin-login.php");
            }
            else
            {
                die("Registration Failed");
            }
        }

        public function login($username,$password)
        {
            $sql = "SELECT `id`,`username`,`password` FROM `admin` WHERE username = '$username'";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1)
            {
                $admin_details = $result->fetch_assoc();
                if(password_verify($password, $admin_details['password']))
                {
                    session_start();

                    $_SESSION['admin_id'] = $admin_details['id'];
                    $_SESSION['username'] = $admin_details['username'];

                    header("location: ../views/admin-room-list.php");
                    exit;
                }
                else
                {
                    die("Incorrect Password.");
                }
            }
            else
            {
                die("Username Not Found.");
            }

        }

        

    }