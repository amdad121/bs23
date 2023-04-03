<?php

require_once('../classes/Category.php');

$category = new Category();
$result = $category->getCategoryItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 01 for BS23</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200">
    <div class="bg-white mx-auto max-w-sm mt-10 p-4 rounded">
        <h2 class="text-center font-semibold pb-2 mb-2 border-b">Task 01 for <span class="text-sky-400">BS23</span></h2>

        <div>
            <table class="table w-full">
                <thead>
                    <tr>
                        <th class="border">Category Name</th>
                        <th class="border">Total Items</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($result) > 0) : ?>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td class="border"><?php echo $row['name']; ?></td>
                        <td class="border text-center"><?php echo $row['total_items']; ?></td>
                    </tr>
                    <?php endwhile ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-2">
            <a href="/index.php">Back to Index</a>
        </div>
    </div>
</body>
</html>