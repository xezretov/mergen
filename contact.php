<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white font-sans">
  <?php include('./components/nav.php'); ?>
  <div class="max-w-6xl mx-auto px-4 mt-16 lg:mt-32">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
      <div class="flex justify-center">
        <img src="./assets/images/contact.png" alt="Phone Image" class="rounded-lg shadow-md max-w-full h-auto">
      </div>
      <div>
        <h1 class="text-4xl lg:text-5xl font-bold mb-4">My Contact</h1>
        <hr class="border-white mb-6">
        <p class="text-base lg:text-lg mb-6">
          You can contact me using phone number, email or just by being on this site. I'll be happy to hear from you.
        </p>
        <ul class="space-y-4">
          <li class="flex items-center">
            <span class="text-2xl mr-4">📞</span>
            <a href="tel:+998910738065" class="hover:text-gray-500">
              +998 91 073 80 65
            </a>
          </li>
          <li class="flex items-center">
            <span class="text-2xl mr-4">🌐</span>
            <p>You're on my site 😁</p>
          </li>
          <li class="flex items-center">
            <span class="text-2xl mr-4">✉️</span>
            <a href="mailto:xezretovmergen@gmail.com" class="underline hover:text-gray-500">
              xezretovmergen@gmail.com
            </a>
          </li>
          <li class="flex items-center">
            <span class="text-2xl mr-4">📍</span>
            <span>Uzbekistan , Karshi </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
