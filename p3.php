<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><center>Manipulating Numbers</center></h1>
        <div class="box">
            <h2> First Semester (Midterm)</h2>
            <?php
            // Static values for the first semester
            $quiz1 = 85; // Example score
            $quiz2 = 90; // Example score
            $quiz3 = 78; // Example score
            $project1 = 88; // Example score
            $midterm = 92; // Example score

            // Calculate midterm grade
            $averageQuizzes1 = ($quiz1 + $quiz2 + $quiz3) / 3;
            $midtermGrade = ($averageQuizzes1 * 0.3) + ($project1 * 0.2) + ($midterm * 0.5);

            // Static values for the second semester
            $quiz4 = 80; // Example score
            $quiz5 = 85; // Example score
            $quiz6 = 90; // Example score
            $project2 = 87; // Example score
            $project3 = 91; // Example score
            $finalExam = 95; // Example score

            // Calculate tentative final grade
            $averageQuizzes2 = ($quiz4 + $quiz5 + $quiz6) / 3;
            $averageProjects2 = ($project2 + $project3) / 2;
            $tentativeFinalGrade = ($averageQuizzes2 * 0.3) + ($averageProjects2 * 0.2) + ($finalExam * 0.5);

            // Calculate final-final grade
            $finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

            // Display results
            echo "<h2>Results</h2>";
            echo "<p><strong>Midterm Grade:</strong> " . number_format($midtermGrade, 2) . "</p>";
            echo "<p><strong>Tentative Final Grade:</strong> " . number_format($tentativeFinalGrade, 2) . "</p>";
            echo "<p><strong>Final-Final Grade:</strong> " . number_format($finalFinalGrade, 2) . "</p>";
            ?>
            <p><a href="index.html">Return to Main Page</a></p>
        </div>
    </div>
    <center>John Carlo G. Romera<br>October 12, 2024</center>
</body>
</html>
