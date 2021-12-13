<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../public/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <title>So-Buzz</title>
</head>    
<body>
<main class="result_main">
 <div id="result">
 <h1>Quizz Result</h1>
 
        <?php
            $response1 = $_POST['question-1'];
            $response2 = $_POST['question-2'];
            $response3 = $_POST['question-3'];
            $response4 = $_POST['question-4'];
            $response5 = $_POST['question-5'];
            $response6 = $_POST['question-6'];
            $response7 = $_POST['question-7'];
            $response8 = $_POST['question-8'];
        
            $result = 0; // Start to 0
            if ($response1 == "C") { 
                $result++; 
            }
            if ($response2 == "C") { 
                $result++; 
            }
            if ($response3 == "C") { 
                $result++; 
            }
            if ($response4 == "B") { 
                $result++; 
            }
            if ($response5 == "C") { 
                $result++; 
            }
            if ($response6 == "D") { 
                $result++; 
            }
            if ($response7 == "A") { 
                $result++; 
            }
            if ($response8 == "D") { 
                $result++; 
            }
            if ($result >= 6 ) {
                echo "<div id='results'>$result / 8 Félicitations !!!!</div>";
                echo "<img class='img_result' src='../../public/image/reussite.png'";
            } else {
                echo "<div id='results'>$result / 8 - Besoin d'une nouvelle chance ?</div>";
                echo "<img class='img_result' src='../../public/image/croix.png'";
            }  
        ?>
 </div>
 </main>
</body>
</html>