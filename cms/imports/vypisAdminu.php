 <!DOCTYPE html>
 <html lang="cs" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

     <div class="adminTable">
       <tr>
         <th>ID</th>
         <th>Jméno</th>
         <th>Poznámka</th>
       </tr>

     </div>

   </body>
 </html>

 <?php
//
   require 'dbconn.php';

   mysqli_set_charset($conn, "utf8");

   $sql = "SELECT id, name, comment FROM users;";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0) {
     while ($row = mysqli_fetch_array($result)) { //Pro ziskani vsech dat z databaze
       $showID = $row[0];
       $showName = $row[1];
       $showComment = $row[2];

       echo "<tr>

               <td>$showID</td>
               <td>$showName</td>
               <td>$showComment</td>

             </tr>";

     }
   }

  ?>
