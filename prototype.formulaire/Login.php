<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <title>formulaire d'utilisation</title>
</head>
<body>
                   <form method="post">
                <label>Name:</label>
         <input type="text"      name="Name"   > 
                        <br>
                   <label>password: </label>  
         <input type="password"   name="password"  value="password">        
                          <br> 
        <input type="submit"  name=" login"   value="login" >      
                        </form>                                    
                     </body>
           </html>
                  <?php
       $users = [
        ["name"=>"Ahmed","password"=>"admin123","role"=>"administrateur","active"=>true],
        ["name"=>"Sara","password"=>"pass456","role"=>"formateur","active"=>true],
        ["name"=>"Leila","password"=>"test789","role"=>"apprenant","active"=>false],
        ["name"=>"Alae","password"=>"test309","role"=>"apprenant","active"=>true]
    ];
    
    if(isset($_POST["login"])){
    
        $found = false;
    
        foreach($users as $user){
    
            if($user["Name"] == $_POST["Name"] && $user["password"] == $_POST["password"]){
    
                $found = true;
    
                if(!$user["active"]){
                    echo "Compte désactivé";
                    exit();
                }
    
                echo "Bienvenue ".$user["name"]." (".$user["role"].")";
                exit();
            }
        }
    
        if(!$found){
            echo "Incorrect credentials";
        }
    
             }
       ?>
        
                   



       

 