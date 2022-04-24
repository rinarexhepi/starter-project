<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Dashboard</title>

    <style>
         
    body{
    height: 100%;
    background-color: #f7d9cf;
    }

    .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgb(204, 204, 204);
    color: white;
    text-align: center;
    }

    .navbar {
    width: 100%;
    background-color: whitesmoke;
    overflow: auto;
    height: 50px;
  }

    .navbar a {
    float: left;
    text-align: center;
    padding: 12px;
    color: #6f4f3a;
    text-decoration: none;
    font-size: 17px;
    }
  
    .navbar a:hover {
    background-color: #ffffff88;
    }

  </style>

</head>
<body>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="AboutUs.php">Contact</a>
    <a href="Shop.php">Shop</a>
       </div>
    

    <table border="1">
             <tr>
                 <th>ID</th>
                 <th>NAME</th>
                 <th>SURNAME</th>
                 <th>EMAIL</th>
                 <th>USERNAME</th>
                 <th>PASSWORD</th>
                 <th>Edit</th>
                 <th>Delete</th>
                 
             </tr>

             <?php 
             include_once '../repository/userRepository.php';

             $userRepository = new UserRepository();

             $users = $userRepository->getAllUsers();

             foreach($users as $user){
                echo 
                "
                <tr>
                     <td>$user[id]</td>
                     <td>$user[name]</td>
                     <td>$user[surname] </td>
                     <td>$user[email] </td>
                     <td>$user[username] </td>
                     <td>$user[password] </td>
                     <td><a href='edit.php?id=$user[id]'>Edit</a> </td>
                     <td><a href='delete.php?id=$user[id]'>Delete</a></td>
                     
                </tr>
                ";
             }

             
             
             ?>
    </table>
</body>
<footer>
  
  <div class="footer">
    <p>All rights reserved by Rina Rexhepi & Lorent Kelani 2021-2022</p>
  </div>

</footer>
</html>