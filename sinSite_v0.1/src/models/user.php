<?php

namespace Application\Model;

require_once('src/lib/database.php');

class UserC {
    
    public int $id;
    public string $Fname;
    public string $name;
    public string $email;
    public string $password;
    public string $classe;
    public int $passLvl;
}

class UserRepository {
    
    public \DatabaseConnection $connection;
    
    function getUser(string $identifier) {
    
        $q = $this->connection->getConnection()->prepare(
            "SELECT * FROM `users` WHERE id = ?"
        );
        $q->execute([$identifier]);
     
        $row = $q->fetch();
        $post = new UserC();
        $post->id = $row['id'];
        $post->Fname = $row['Fname'];
        $post->name = $row['name'];
        $post->classe = $row['classe'];
        $post->email = $row['email'];
        $post->passwd = $row['password'];
        $post->passLvl = $row['passLvl'];
     
        return $post;
    }
    
    function getUsers(){
    
        // We retrieve the 5 last blog posts.
        $q = $this->connection->getConnection()->query(
            "SELECT * FROM `users` WHERE 1 ORDER BY id"
        );
        $posts = [];
        while(($row= $q->fetch())) {
            $post = new UserC();
            $post->id = $row['id'];
            $post->Fname = $row['Fname'];
            $post->name = $row['name'];
            $post->classe = $row['classe'];
            $post->email = $row['email'];
            $post->passwd = $row['password'];
            $post->passLvl = $row['passLvl'];
        
            $posts[] = $post;
        }
        
        return $posts;
    }
    
    function verifyUser(string $email)
    {
        $q = $this->connection->getConnection()->prepare(
            "SELECT * FROM `users` WHERE email = ?"
        );
        $q->execute([$email]);
        
        $row = $q->fetch();
        $post = new UserC();
        $post->id = $row['id'];
        $post->Fname = $row['Fname'];
        $post->name = $row['name'];
        $post->classe = $row['classe'];
        $post->email = $row['email'];
        $post->passwd = $row['password'];
        $post->passLvl = $row['passLvl'];
        
        return $post;
    }
}

class AddUserRepository {
    
    public \DatabaseConnection $connection;
    
    function addUser($input)
    {
        try{
            $option = ['cost' => 12,];
            $hashpass = password_hash($input['passwd'], PASSWORD_BCRYPT, $option);
            
            $q = $this->connection->getConnection()->prepare(
                "INSERT INTO users(Fname, name, email, password, passLvl) VALUES( :Fname, :name, :email, :passwd, '0')"
            );
            $userChangment = $q->execute([
                'Fname' => $input['Fname'],
                'name' => $input['name'],
                'email' => $input['email'],
                'passwd' => $hashpass,
            ]);
            return ($userChangment > 0);
        } catch(Exception $e){
            echo $e->message;
        }
    }
}