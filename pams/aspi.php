<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pams</title>
    <link rel="stylesheet" href="main1.css">
  </head>
  <body>

    <table>
      <thead>
        <tr>
          <th colspan="3"><h1>Personal Aspirations management system</h1></th>
        </tr>

      </thead>
      <tbody>
      <tr>
        <td>
          <div class="left">
          <p><a href="index.html">Me</a></p>
          <p><a href="family.html">My family</a></p>
          <p><a href="educations.html">My education</a></p>
          <p><a href="newAspiration.html">My aspirations</a></p>
          <p><a href="myhobbies.html">My Hobbies</a></p>

         </div>
        </td>
        <td >
          <h2>Rohini's Aspirations</h2>
         <table class="middle">
           <thead>
            <tr>
              <th>Id</th>
              <th>Aspiration</th>
              <th>Start Date</th>
              <th>Due Date</th>
              <th>Priority</th>
              <th>Status</th>
            </tr>
           </thead>
           <tbody>
             <!-- Get aspirations from backend -->

             <!--1	Connect to the database
                 (a) Choose the connection type - chose MySQLi not PDO
                 (b) Get credentials
                 (c) Create connection
                 (d) Validate -->
        
            <?php
              $dbServer = "localhost";
              $username = "root";
              $dbPassword = "";
              $database = "pams";

              $con = new mysqli($dbServer, $username, $dbPassword, $database);

              if ($con->connect_error) {
                echo "Could not connect to the database" ;
              } else {
                echo "CONNECTED";
              };
              //echo "Step 1 = Connection successful";


             /* 2	Get the aspirations from the table
                  (a) Form an SQL statement
                  (b) Execute that SQL statement */

            $sql = "SELECT * FROM `aspirations`";
            $aspirations = mysqli_query($con, $sql);


             // 3	Display aspirations one by one
             while ($asp = mysqli_fetch_array($aspirations,MYSQLI_ASSOC)) {
              ?>
            
            <tr>
                <td><?php echo $asp["Id"];?></td>
                <td><?php echo $asp["Aspiration"];?></td>
                <td><?php echo $asp["Start_Date"];?></td>
                <td><?php echo $asp["Due_date"];?></td>
                <td><?php echo $asp["Priority"];?></td>
                <td><?php echo $asp["Status"];?></td>
              </tr> 
             
          
              <?php
             };
              ?>
             


             <!-- Get aspirations from backend -->
          </tbody>
        </table></td>
        <td><img src="Roh.jpeg" alt="Rohini" style="width:12rem;"></td>
      </tr>
      <tr>
        <td>WTA_ASSIGNMENT</td>
        <td>Rohini</td>
        <td>WEB TECHNOLOGIES</td>
      </tr>
      </tbody>
    </table>
  </body>
</html>

              