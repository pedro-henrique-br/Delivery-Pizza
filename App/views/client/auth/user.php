<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
</head>
<body>

<div class="flex">
    
    <?php require 'parts/sidebar.php' ?>

    <main class="p-6">
      <h1 class="text-2xl font-bold text-gray-600">
        <h1>User <?php echo $_SESSION["email"] ?></h1>
      </h1>
    </main>
  </div>

</body>
</html>