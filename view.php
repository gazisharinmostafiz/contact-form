<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Submitted Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class = "container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Subject</th>
                  </tr>
                </thead>
    
                <tbody class="table-light text-dark">
                <?php
                    $conn = mysqli_connect("localhost", "root","","contactform");
                    if($conn->connect_error){
                        die("Connection failed:". $conn-> connect_error);
                    }
                    $sql = "SELECT id,firstname,lastname,country,subject from messages";
                    $result = $conn-> query($sql);

                    if($result -> num_rows > 0){
                        while ($row = $result-> fetch_assoc()){
                          echo "<tr><td>". $row["id"] . "</td><td>". $row["firstname"] . "</td><td>". $row["lastname"] . "</td><td>" . $row["country"] . "</td><td>" . $row["subject"]. "</td><tr>";
                        }
                        echo "</table>";
                    }
                    else {
                      echo "0 result";
                    }
                    $conn-> close();
                ?>
                </tbody>
              </table>
        </section>
        <section class=" container ">
          <button class="btn btn-danger"><a class="text-light" href="index.html">Back</a></button>
        </section>
    </main>

              
    <footer class="container">
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2023 Copyright || Gazi Sharin Mostafiz
        </div>
      </footer>







    <!-- js bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>