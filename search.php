
<?php
          
          // header('Content-Type: application/json');
          // header("Access-Control-Allow-Origin: *");

          $servername = "localhost";
          $username= "root";
          $password= "";
          $database= "myshop";
                                
          $conn = mysqli_connect($servername, $username, $password, $database);

          $sql =  "SELECT * FROM `myshop`";
          $result = mysqli_query($conn, $sql);
          $json_array = array();

         while($data = mysqli_fetch_assoc($result)){

              $json_array[] = $data;
             }

         echo json_encode($json_array);  
        
         

         ?>