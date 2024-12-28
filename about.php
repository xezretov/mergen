<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .typing {
      white-space: pre-wrap;
      overflow: hidden;
      display: inline-block;
    }

    .cursor {
      border-right: 2px solid white;
      display: inline-block;
      animation: blink-caret 0.7s step-end infinite;
    }

    @keyframes blink-caret {
      50% {
        border-color: transparent;
      }
    }
  </style>
</head>
<body class="bg-black text-white font-sans h-screen">

  <?php include('./components/nav.php'); ?>

  <div class="max-w-4xl mx-auto px-4 mt-12">
    <h1 class="text-5xl font-bold mb-4">About Me</h1>
    <hr class="border-white mb-6">

    <div class="text-lg mb-6 typing">
      <span id="typingText"></span><span class="cursor"></span>
    </div>
  </div>

  <script>
    const text = `Hi there! 👋 My name is Mergen, and I’m a passionate Full-Stack Developer with a love for creating functional, user-friendly, and visually appealing web applications.

I thrive on challenges and continuously push myself to learn and implement the latest technologies. With a solid foundation in both front-end and back-end development, I aim to deliver seamless digital experiences.

When I’m not coding, you’ll find me exploring new tech trends, contributing to open-source projects, or brainstorming innovative ideas to make the web a better place.

Every project I work on is a step forward in my journey of personal and professional growth. Let’s connect and build something amazing together! 🚀
`;

    const typingText = document.getElementById("typingText");
    let index = 0;

    function typeEffect() {
      if (index < text.length) {
        typingText.textContent += text.charAt(index); 
        index++;
        setTimeout(typeEffect, 10);
      }
    }
    document.addEventListener("DOMContentLoaded", typeEffect);
  </script>
</body>
</html>
