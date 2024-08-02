<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'TASKHUB';

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TASKHUB</title>
    <link rel="stylesheet" href="mainhm.css">
    <link rel="stylesheet" href="utility.css">
    <link rel="stylesheet" href="foot.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="cook.css">
    <link rel="stylesheet" href="feat.css">
    <link rel="stylesheet" href="cookstyle.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <style>
        .card{
        }
    </style> -->
</head>

<body>
    <header>
        <nav class="nvbr">
            <div class="ttl">TASKHUB</div>
            <ul class="navlist">
                <a class="navsec" href="feat.html">
                    <li>FEATURES</li>
                </a>
                <a class="navsec" href="connectab.php" id="cons"><li>CONNECT WITH US</li></a>
                <a class="navsec" href="feedback.php">USER VOICE</li></a>
                <a class="navsec" href="Q&A.php"><li>HELP DESK</li></a>
                <!-- <div class="signbtn">
                <div class="signsec">Ramesh Kamble</div>
              <div class="signsec"><a href="#">SIGN UP</a></div>
            </div> -->
            </ul>
        </nav>
    </header>
    <main class="maintask">
        <div class="taskprio">
            <div class="priohdtext">PRIORITY</div>
            <div class="boxprio" id="h">
                <!-- <div class="background-image"></div> -->
                <!-- <div class="boxtext">HIGH</div> -->
                <div class="count" id="hpr">
                    <?php
      $sql = "SELECT COUNT(*) AS hgh FROM addtask7 WHERE priority='High'";
      $result = mysqli_query($con, $sql);
      if ($result->num_rows>0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // extract($row);
          echo $row["hgh"];
        }
      }
    ?>
                </div>
            </div>
            <div class="boxprio" id="m">
                <!-- <div class="boxtext">MEDIUM</div> -->
                <div class="count" id="mpr" style="font-size: 20px;">
                    <?php
                        $sql = "SELECT COUNT(*) AS mdm FROM addtask7 WHERE priority='Medium'";
                        $result = mysqli_query($con, $sql);
                        if ($result->num_rows>0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // extract($row);
                                echo $row["mdm"];
                            }
                        }
                        ?>
                </div>
            </div>
            <div class="boxprio" id="l">
                <!-- <div class="boxtext">LOW</div> -->
                <div class="count" id="lpr" style="font-size: 20px;">
                    <?php
                        $sql = "SELECT COUNT(*) AS lwl FROM addtask7 WHERE priority='Low'";
                        $result = mysqli_query($con, $sql);
                        if ($result->num_rows>0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // extract($row);
                                echo $row["lwl"];
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="maincont">
            <div class="containhd just">
                <div id="taskhd" class="just">Welcome to TASKHUB, SAGAR</div>
                <div id="tasksubhd" class="just">Get started by adding new tasks or searching for existing ones. Keep
                    your tasks up-to-date and stay on top of your work.</div>
            </div>
            <div class="taskcontainer addcontain">
                <a href="addt.php">
                    <div class="tasksection" id="addt">
                        <div class="img">
                            <img id="addimg" src="addtask.webp" alt="ADD TASK" width="45px">
                        </div>
                        <div class="addtask">ADD NEW TASK</div>
                    </div>
                </a>
                <div class="tasksection just" id="ssec">
                    <div>
                        <input type="text" id="search-box" placeholder="Enter your Task Name to Search">
                        <!-- <button onclick="searchTasks()">s</button> -->
                    </div>
                    <div class="btn">
                        <!-- <button type="submit" id="bntn" onlick="searchTasks()"><img id="imgs" src="search.png"
                                alt="SEARCH" class="btn"></button> -->
                        <button type="submit" id="bntn"><img id="imgs" src="search.png" alt="SEARCH"
                                class="btn-img"></button>
                    </div>

                </div>
                <table class="tbtask">
                    <thead>
                        <tr class="trmg">
                            <th style="width: 40vw;">TASK NAME</th>
                            <th style="width: 5vw;">PRIORITY</th>
                            <th style="width: 5vw;">PHASE</th>
                            <th style="width: 5vw;">DEADLINE</th>
                            <!-- <th style="width: 5vw;">FOCUS</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
        $sql = "SELECT * FROM addtask7";
        $result = mysqli_query($con, $sql);
        if ($result) {
            // linear-gradient(135deg, #D0E4F7, #8AB6D6)
            while ($row = mysqli_fetch_assoc($result)) {
                extract($row);
                $backgroundColor = '';
                $borderRadius = '';
                if ($focus == 'Red') {
                    $backgroundColor = 'linear-gradient(135deg, #FEC5C0, #F76C6C)';
                    $borderRadius = 'border-radius: 10px;';
                } elseif ($focus == 'Green') {
                    $backgroundColor = 'linear-gradient(135deg, #A8D5BA, #D0F0C0)';
                    $borderRadius = 'border-radius: 10px;';
                } elseif ($focus == 'Blue') {
                    $backgroundColor = 'linear-gradient(135deg, #D0E4F7, #8AB6D6)';
                    $borderRadius = 'border-radius: 10px;';
                }
                $progress = 0;
                if ($phase == 'On Deck') {
                    $progress = 10;
                } elseif ($phase == 'In Flow') {
                    $progress = 50;
                } elseif ($phase == 'Completed') {
                    $progress = 100;
                }
                echo "<tr class='card' style='background: {$backgroundColor}; {$borderRadius} padding: 5px 10px; height: 40px; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold; color: #333; text-align:center;'>";
                echo "<td>{$taskname}</td>";
                echo "<td>{$priority}</td>";
                echo "<td>{$phase}</td>";
                echo "<td>{$deadline}</td>";
                // echo "<td>{$focus}</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td colspan='4'>";
                echo "<div class='progress-bar'>";
                echo "<div class='progress' style='width: $progress%; background-color: #5e5e5e; height: 10px;'>";
                echo "</div>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
            mysqli_free_result($result);
        } else {
            echo "<tr><td colspan='5'>Error: " . mysqli_error($con) . "</td></tr>";
        }
        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="taskstatus">
            <div class="stathdtext">STATUS</div>
            <div id="done" class="boxstat">
                <!-- <div class="boxtexts">COMPLETED</div> -->
                <div class="count" id="yes" style="font-size: 20px;">
                    <?php
                        $sql = "SELECT COUNT(*) AS comp FROM addtask7 WHERE phase='Completed'";
                        $result = mysqli_query($con, $sql);
                        if ($result->num_rows>0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // extract($row);
                                echo $row["comp"];
                            }
                        }
                        ?>
                </div>
            </div>
            <div id="still" class="boxstat">
                <!-- <div class="boxtexts">IN FLOW</div> -->
                <div class="count" id="prog" style="font-size: 20px;">
                    <?php
                        $sql = "SELECT COUNT(*) AS progs FROM addtask7 WHERE phase='In Flow'";
                        $result = mysqli_query($con, $sql);
                        if ($result->num_rows>0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // extract($row);
                                echo $row["progs"];
                            }
                        }
                        ?>
                </div>
            </div>
            <div id="not" class="boxstat">
                <!-- <div class="boxtexts">ON DECK</div> -->
                <div class="count" id="notcomp" style="font-size: 20px;">
                    <?php
                        $sql = "SELECT COUNT(*) AS ncomp FROM addtask7 WHERE phase='On Deck'";
                        $result = mysqli_query($con, $sql);
                        if ($result->num_rows>0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                // extract($row);
                                echo $row["ncomp"];
                            }
                        }
                        ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
    <div class="foot">
            <ul class="footul firfoot">
                <li class="footsec"><a class="footlink" href="connectab.php">ABOUT US</a></li>
                <li class="footsec"><a class="footlink" href="jb.php">APPLY FOR JOB</a></li>
            </ul>
            <div class="socials just">
                <h5 class="sochead">SOCIAL MEDIA</h5>
                <div class="socialimgdiv">
                    <a href="https://www.linkedin.com/in/gagan-patil-5b274a255?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><img width="30px" src="icon/li.png" class="socialimg"></a>
                    <a href="https://wa.me/7620449969"><img width="30px" src="icon/Wh.png" class="socialimg"></a>
                    <a href="https://github.com/Gagan07-GP"><img width="30px" src="unnamed.png" class="socialimg"></a>
                    <a href="https://www.facebook.com/profile.php?id=100086158813428&mibextid=ZbWKwL"><img width="30px" src="icon/fa.png" class="socialimg"></a>
                </div>
            </div>
            <ul class="footul secfoot">
                <li class="footsec"><a class="footlink" href="pp.php">PRIVACY POLICY</a></li>
                <li class="footsec"><a class="footlink" href="connectab.php">CONTACT US</a></li>
                <!-- <li class="footsec"><a class="footlink" href="#">MORE WEBSITES OF TASK MANAGAMENT TOOL</a></li> -->
            </ul>
        </div>
    </footer>
    <!-- <script>
        function searchTasks() {
            const input = document.getElementById('search-box').value.toUpperCase();
            const rows = document.getElementsByClassName('card');
            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                let match = false;
                for (let j = 0; j < cells.length; j++) {
                    const text = cells[j].textContent.toUpperCase();
                    if (text.indexOf(input) > -1) {
                        match = true;
                        break;
                    }
                }
                row.style.disaddtask7 = match ? '' : 'none';
            }
        }
    </script> -->
    <script>
        // Function to handle search
        function searchTasks() {
            const input = document.getElementById('search-box').value.trim().toUpperCase();
            const cards = document.getElementsByClassName('card');
            const progressBars = document.getElementsByClassName('progress-bar');

            // Loop through each card
            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                const taskName = card.textContent.toUpperCase();
                const progressBar = progressBars[i];

                // Check if the input matches the task name
                if (taskName.includes(input)) {
                    card.style.display = '';
                    progressBar.style.display = ''; // Show the progress bar
                } else {
                    card.style.display = 'none';
                    progressBar.style.display = 'none'; // Hide the progress bar
                }
            }
        }

        // Attach click event listener to the search button
        document.getElementById('bntn').addEventListener('click', searchTasks);
    </script>
    <!-- <script>
        // Function to handle search
        function searchTasks() {
            const input = document.getElementById('search-box').value.trim().toUpperCase();
            const cards = document.getElementsByClassName('card');

            // Loop through each card
            for (let i = 0; i < cards.length; i++) {
                const card = cards[i];
                const taskName = card.textContent.toUpperCase();

                // Check if the input matches the task name
                if (taskName.includes(input)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            }
        }

        // Attach click event listener to the search button
        document.getElementById('bntn').addEventListener('click', searchTasks);
    </script> -->

</body>

</html>