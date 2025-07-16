<?php include "../model/database.php";

//start session management 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Link to Bootstrap dependencies-->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript" src="http://code.jquery.com/iquery-latest.js"></script>
  </head>

<body id="to-do">

  <div class="container">
    
  <!-- NAVIGATION MENU -->
    <nav id="header">
      <div class="nav-logo" onclick="scrollToHome()">
        <p class="nav-name">MY<span>PORTFOLIO</span></p>
      </div>
      <div class="nav-menu" id="navMenu">
        <ul class="nav_menu_list">
          <li class="nav_list">
            <a class="nav-link home" href="../index.html">Home</a>
          </li>
          <li class="nav_list">
            <a class="nav-link" href="todo_list.html">To-do List</a>
          </li>
          <li class="nav_list">
            <a class="nav-link active-link">Schedule</a>
          </li>
          <li class="nav_list">
            <a class="nav-link contact" onclick="scrollToContact()">Contact</a>
          </li>
        </ul>
      </div>
      <div class="nav-menu-btn">
        <i class="uil uil-bars" id="toggleBtn"></i>
      </div>
    </nav>

    <section class="section">
      <div class="top-header">
        <h1>SCHE<span>DULE</span></h1>
      </div>

      <table class="table table-border timetable">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Monday</th>
                    <th scope="col">Tuesday</th>
                    <th scope="col">Wednesday</th>
                    <th scope="col">Thursday</th>
                    <th scope="col">Friday</th>
                    <th scope="col">Saturday</th>
                    <th scope="col">Sunday</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                    <td id="time">9 am</td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '9AM' AND weekday = 'Monday'";

                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '9AM' AND weekday = 'Tuesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '9AM' AND weekday = 'Wednesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '9AM' AND weekday = 'Thursday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '9AM' AND weekday = 'Friday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '9AM' AND weekday = 'Saturday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM classes WHERE time = '9AM' AND weekday = 'Sunday'";
                        $result = $conn->query($sql);
                        foreach($result as $row){
                            echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                        }
                        echo '</a>';
                        ?>
                </tr>
                <tr>
                    <td id="time">12 pm</td>
                    <td>
                        <?php
                        $sql = "SELECT * FROM classes WHERE time = '12PM' AND weekday = 'Monday'";
                        $result = $conn->query($sql);
                        foreach($result as $row){
                            echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                            echo $row['class'] . "<br>";
                            echo $row['level'] . "<br>";
                            echo $row['duration'];
                            }
                            echo '</a>';
                        ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '12PM' AND weekday = 'Tuesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '12PM' AND weekday = 'Wednesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '12PM' AND weekday = 'Thursday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '12PM' AND weekday = 'Friday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '12PM' AND weekday = 'Saturday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '12PM' AND weekday = 'Sunday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                </tr>
                <tr>
                    <td id="time">3 pm</td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '3PM' AND weekday = 'Monday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '3PM' AND weekday = 'Tuesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '3PM' AND weekday = 'Wednesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '3PM' AND weekday = 'Thursday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '3PM' AND weekday = 'Friday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '3PM' AND weekday = 'Saturday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '3PM' AND weekday = 'Sunday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                </tr>
                <tr>
                    <td id="time">6 pm</td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '6PM' AND weekday = 'Monday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '6PM' AND weekday = 'Tuesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '6PM' AND weekday = 'Wednesday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '6PM' AND weekday = 'Thursday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '6PM' AND weekday = 'Friday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '6PM' AND weekday = 'Saturday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                    </td>
                    <td>
                    <?php
                    $sql = "SELECT * FROM classes WHERE time = '6PM' AND weekday = 'Sunday'";
                    $result = $conn->query($sql);
                    foreach($result as $row){
                        echo '<a href="booking.php?id=' . $row['class_id'] . '">';
                        echo $row['class'] . "<br>";
                        echo $row['level'] . "<br>";
                        echo $row['duration'];
                    }
                    echo '</a>';
                    ?>
                </tr>
            </tbody>
        </table>
    </section>

    <footer>
        <div class="top-footer">
            <p>MY<span>PORTFOLIO</span></p>
        </div>
        <div class="middle-footer">
            <ul class="footer_menu_list">
                <a onclick="scrollToHome()">Home</a>
                <a onclick="scrollToAbout()">About</a>
                <a onclick="scrollToProjects()">Projects</a>
                <a onclick="scrollToContact()">Contact</a>
            </ul>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; <a href="#home" style="text-decoration: none;">Olga Pagina</a></p>
        </div>
     </footer>
  </div>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="../js/script2.js"></script>
   <script type= "text/javascript" src="js/script.js"></script>
</body>
</html>