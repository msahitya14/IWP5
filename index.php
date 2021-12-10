<?php
$sem = ''; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP lab da-5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="sidenav">
        <button class="dropdown-btn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <button class="sem1" onclick="fn(this.classList[0])">Sem1</button>
            <br>
            <button class="sem2" onclick="fn(this.classList[0])"> Sem2</button>
            <br>
            <button class="sem3" onclick="fn(this.classList[0])">Sem3</button>
            <br>
        </div>
    </div>
    <h3>Sahitya Madipalli</h3>
    <h3>19BCI0232</h3>
    <h5 class="sem"></h5>
    <hr>
    <div class="hidden" id='sem1'>
        <h1>FallSemester 2019-20</h1>
        <?php $sem = 'sem1' ?>
        <h1><?php echo $sem ?></h1>
        <br>
        <?php include 'sem1.php'; ?>
    </div>
    <div class="hidden" id='sem2'>
        <h1>WinterSemester 2019-20</h1>
        <?php $sem = 'sem2' ?> <h1>
            <?php echo $sem ?></h1>
        <br>
        <?php include 'sem2.php'; ?>
    </div>
    <div class="hidden" id='sem3'>
        <h1>FallSemester 2020-21</h1>
        <?php $sem = 'sem3' ?>
        <h1><?php echo $sem ?></h1>
        <br>
        <?php include 'sem3.php'; ?>
    </div>

    <script>
        function fn(name) {
            let m = document.getElementById(name);
            m.classList.toggle('hidden');
        }
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>