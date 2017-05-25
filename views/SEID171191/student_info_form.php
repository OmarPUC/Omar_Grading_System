<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>student_info_form</title>


    <link href="../../Resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="../../Resources/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style type="text/css">
        .bs-example{
            margin: 20px;
        }

    </style>

</head>
<body>

<div class="bs-example" style="background-color: beige;height: auto;width: 50%;">

    <div>
        <h1 align="center"> Student Information Form</h1>
        <form action="store.php" method="post">


            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Your Name Here...">
            </div>
            <div class="form-group">
                <label for="StudentID">Student ID</label>
                <input type="text" class="form-control" id="StudentID" name="StudentID" placeholder="Enter Your Student ID Here...">
            </div>
            <h1 align="center"> Mark Obtained</h1>
            <div class="form-group">
                <label for="Subject">Bangla</label>
                <input type="text" class="form-control" id="" name="Bangla">
            </div>
            <div class="form-group">
                <label for="Subject">English</label>
                <input type="text" class="form-control" id="" name="English">
            </div>
            <div class="form-group">
                <label for="Subject">Math</label>
                <input type="text" class="form-control" id="" name="Math">
            </div>
            <div class="form-group">
                <label for="Subject">ICT</label>
                <input type="text" class="form-control" id="" name="ICT">
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>


    </div>

</div>
</body>
</html>