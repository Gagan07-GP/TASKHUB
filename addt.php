<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="utility.css">
    <!-- <link rel="stylesheet" href="addt.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <style>
        /* .sbtn {
    align-content: center !important;
    margin-left: 20vw;
    border: 2px solid #1a1a1a !important;
    transition: box-shadow 0.3s !important;
}

.smhi {
    position: relative !important;
    z-index: 2 !important;
    top: 0 !important;
}

.form-check {
    margin-right: 6vw !important;
}

.sbtn :hover {
    box-shadow: 0 9px 20px rgb(109, 109, 109) !important;
} */

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: #fff;
        }

        .form-label {
            margin-top: 3vh;
        }

        .container {
            position: relative;
            max-width: 700px;
            width: 100%;
            background: #fff;
            padding: 0px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .container header {
            font-size: 1.5rem;
            color: #333;
            font-weight: 500;
            text-align: center;
        }

        .form {
            margin-top: 30px;
        }

        .input-box {
            width: 100%;
            margin-top: 20px;
        }

        .input-box label {
            color: #333;
        }

        .input-box input,
        .input-box select {
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            padding: 0 15px;
        }

        .input-box input:focus,
        .input-box select:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .column {
            display: flex;
            column-gap: 15px;
        }

        .gender-box {
            margin-top: 20px;
        }

        .gender-box h3 {
            color: #333;
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .gender-option {
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;
        }

        .form-check {
            margin: 0vw 2vw 3vh 2vw;
        }

        .gender {
            column-gap: 5px;
        }

        .gender input {
            accent-color: #333;
        }

        .gender label {
            color: #333;
        }

        .address {
            margin-top: 15px;
        }

        .sbtn {
            height: 50px;
            width: 77%;
            color: #fff;
            font-size: 1rem;
            font-weight: 400;
            margin-top: 30px;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            background: #333;
        }

        .sbtn:hover {
            background: #444;
        }

        .fm {
            margin-top: 1vh !important;
        }

        .f {
            height: 12vh;
        }

        @media screen and (max-width: 500px) {
            .column {
                flex-wrap: wrap;
            }

            .gender-option {
                row-gap: 15px;
            }
        }
    </style>
</head>

<body class="just">
    <!-- <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $taskname = $_POST['taskname'];
        $priority = $_POST['priority'];
        $phase=$_POST['phase'];
        $deadline=$_POST['deadline'];
        $focus=$_POST['focus'];
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'TASKHUB';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql="INSERT INTO `addtask7` (`taskname`, `priority`, `phase`, `deadline`, `focus`) VALUES ('$taskname', '$priority', '$phase', '$deadline', '$focus')";
        $result=mysqli_query($conn,$sql);
        // Check connection
        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show smhi" role="alert" style="display: relative; top:0; right: auto; left: auto;">
  <strong>Success!</strong> Task has been Added successfully !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>' ;
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Theres been technical Issue, Our team is Working on this, thanks for patience!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
        }
        }
    ?> -->
    <form action="/PROJECT/addt.php" method="post"
        style="width: 40vw; height: 44vh; margin: 6vh;" class="just">
        <div class="form-row" style="box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); height: 91vh;">
            <div class="form-group col-md-6 just mt-4" style="width: 50vw; text-align:center; flex-direction:column">
                <label for="taskname ml-4">TASK NAME</label>
                <input type="taskname" class="form-control w-75" name="taskname" id="taskname"
                    placeholder="your task name">
            </div>
            <!-- <label for="">PRIORITY</label> -->
            <div class="form-group col-md-4 just mt-4" style="width: 50vw; text-align:center; flex-direction:column">
                <label for="priority ml-4">PRIORITY</label>
                <select id="priority" name="priority" class="form-control w-75">
                    <option selected>Medium</option>
                    <option value="high">High</option>
                    <!-- <option value="medium">MEDIUM</option> -->
                    <option value="low">Low</option>
                </select>
            </div>
            <div class="form-group col-md-4 just mt-4" style="width: 50vw; text-align:center; flex-direction:column">
                <label for="phase ml-4">PHASE</label>
                <select id="phase" name="phase" class="form-control w-75">
                    <option selected>On Deck</option>
                    <option value="In Flow">In flow</option>
                    <option value="Completed">Completed</option>
                    <!-- <option value="low">LOW</option> -->
                </select>
            </div>
            <!-- </div> -->
            <div class="container just mt-4" style="width: 20vw; text-align:center; flex-direction:column">
                <!-- <form> -->
                <div class="mb-3">
                    <label for="deadline" class="form-label fm ml-4">Deadline:</label>
                    <input type="datetime-local" class="form-control" id="deadline" name="deadline">
                </div>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                <!-- </form> -->
            </div>
            <label for="focus" class="form-label ml-4 just" style="text-align: center;">Select Focus :</label>
            <div class="just">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="focus" id="Red" value="Red">
                    <label class="form-check-label" for="Red">
                        Red
                    </label>
                </div>
                <div class="form-check mx-7">
                    <input class="form-check-input" type="radio" name="focus" id="Green" value="Green" checked>
                    <label class="form-check-label" for="Green">
                        Green
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="focus" id="Blue" value="Blue">
                    <label class="form-check-label" for="Blue">
                        Blue
                    </label>
                </div>
            </div>
            <div class="f just">
                <button type="submit" class="btn btn-primary bg-secondary text-white sbtn mt-2" id="sbtnadd"><a
                        id="stask" href="cook.php" class="text-light" style="text-decoration: none;">SAVE
                        TASK</a></button>
            </div>
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
    </script>
    <script>
        var sbutton = document.getElementsById("sbtnadd");
        sbutton.addEventlistener("click", function () {
            alert("Task has been Saved Successfully!");
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>