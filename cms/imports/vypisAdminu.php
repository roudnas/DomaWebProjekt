 <!DOCTYPE html>
 <html lang="cs" dir="ltr">
   <body>
     <div class="adminTable">
       <tr>
         <th>ID</th>
         <th>Uživ. jméno</th>
         <th>Jméno</th>
         <th>Příjmení</th>
         <th>Pozice</th>
       </tr>
     </div>
   </body>
 </html>

 <?php
//
   require 'dbconn.php';

   mysqli_set_charset($conn, "utf8");

   $sql = "SELECT id, username, name, surname, pozition FROM users;";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0) {
     while ($row = mysqli_fetch_array($result)) { //Pro ziskani vsech dat z databaze
       $showID = $row[0];
       $showUserName = $row[1];
       $showName = $row[2];
       $showSurname = $row[3];
       $showPozition = $row[4];

       echo "<tr>

               <td>$showID</td>
               <td>$showUserName</td>
               <td>$showName</td>
               <td>$showSurname</td>
               <td>$showPozition</td>

             </tr>";

     }
   }

  ?>
