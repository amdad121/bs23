<?php

require_once('../classes/Category.php');

// $category = new Category();
// $category->getCategoryData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 02 for BS23</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="bg-white mx-auto max-w-sm mt-10 p-4 rounded">
        <h2 class="text-center font-semibold pb-2 mb-2 border-b">Task 02 for <span class="text-sky-400">BS23</span></h2>
        
        <ul class="list-disc list-inside">
            <li><a class="text-lg" href="/pages/task1.php">Task 01</a></li>
            <li><a class="text-lg" href="/pages/task2.php">Task 02</a></li>
        </ul>

        <div class="text-center">
            <a href="/index.php">Back to Index</a>
        </div>
    </div>
</body>
</html>