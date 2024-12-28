<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Skills</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white font-sans">

  <?php include('./components/nav.php'); ?>

  <div class="max-w-6xl mx-auto px-4 mt-12">
    <h1 class="text-5xl font-bold mb-4 text-left">My Skills</h1>
    <hr class="border-white mb-8">

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <div>
        <div class="flex justify-between">
          <div>
            <h2 class="text-2xl font-semibold mb-4">Front End</h2>
            <ul id="frontendList" class="list-disc pl-6"></ul>
          </div>

          <div class="border-l border-white mx-8"></div>

          <div>
            <h2 class="text-2xl font-semibold mb-4">Back End</h2>
            <ul id="backendList" class="list-disc pl-6"></ul>
          </div>
        </div>
        <p class="mt-6">And I also can work with WordPress and Tilda.</p>
      </div>

      <div class="flex items-center justify-center">
        <div class="skill-box">
          <div id="skillContent" class="skill-content">
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="./assets/scripts/script.js"></script>
</body>
</html>
