<?php
    //create a function to add a new user 
    function add_new_user($name, $lastname, $email, $password) { 
        global $conn;

        $sql = "INSERT INTO clients (name, lastname, email, password) VALUES (:name, :lastname, :email, :password)"; 
        $statement = $conn->prepare($sql); 
        $statement->bindValue(':name', $name); 
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $result = $statement->execute();
        $statement->closeCursor();
        //die($firstname);
        return $result;  
    }
    
    //create a function to login 
    function login($email, $password) { 
        global $conn;

        $sql = "SELECT * FROM clients WHERE email = :email";
        $statement = $conn->prepare($sql);
        $statement->bindValue(':email', $email); 
        $statement->execute(); 
        $result = $statement->fetch();
        $name = $_GET['name'];
        if (isset($result[0])) {   
            if (password_verify($password, $result['password'])){
                $count = $statement->rowCount(); 
                return $count;
                return $name;
            } 

        else {
            //invalid password
        }
        } 
    }

    //create a function to add new booking
    function add_booking($client_id, $trainer_id, $class_id){
        global $conn;

        $sql = "INSERT INTO clients_booking (client_id, trainer_id, class_id) VALUES (:client_id, :trainer_id, :class_id)";
        $statement = $conn->prepare($sql); 
        $statement->bindValue(':client_id', $client_id);
        $statement->bindValue(':trainer_id', $trainer_id);
        $statement->bindValue(':class_id', $class_id);
        $result = $statement->execute();
        $statement->closeCursor();
        return $result;  
    }

    //create a function to add new post
    function add_post($client_id, $blog_name, $blog_body){
        global $conn;

        $sql = "INSERT INTO blogs (client_id, blog_name, blog_body) VALUES (:client_id, :blog_name, :blog_body)";
        $statement = $conn->prepare($sql); 
        $statement->bindValue(':client_id', $client_id);
        $statement->bindValue(':blog_name', $blog_name);
        $statement->bindValue(':blog_body', $blog_body);
        $result = $statement->execute();
        $statement->closeCursor();
        return $result;  
    }
?>