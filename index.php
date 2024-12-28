<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
  <?php include('./components/nav.php'); ?>

  <div class="flex items-center">
    <div class="w-full flex flex-col lg:flex-row h-screen">
      <div class="flex-1">
        <img
          src="./assets/images/portfolio.png"
          alt="Mergen Portfolio"
          class="h-full w-full object-cover object-top"
        />
      </div>
      <div class="flex-1 flex items-center justify-center p-8">
        <div>
          <h1 class="text-5xl font-bold underline mb-6">My Portfolio</h1>
          <p class="text-lg leading-relaxed">
            Building the future, one line of code at a time. Embrace challenges, keep learning, and create solutions that inspire the world. Every project is a step closer to greatness.
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
