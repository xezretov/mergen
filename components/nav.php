<nav class="bg-zinc-800 text-white">
  <div class="container mx-auto flex justify-between items-center py-4 px-6">
    <h1 class="text-xl font-bold">Mergen Xezretov</h1>

    <button id="menuButton" class="lg:hidden text-2xl focus:outline-none">
      ☰
    </button>

    <ul id="menu" class="hidden lg:flex space-x-6">
      <li><a href="index.php" class="hover:underline">Home</a></li>
      <li><a href="about.php" class="hover:underline">About me</a></li>
      <li><a href="skills.php" class="hover:underline">My skills</a></li>
      <li><a href="contact.php" class="hover:underline">Contact</a></li>
    </ul>
  </div>

  <ul id="mobileMenu" class="hidden flex-col space-y-4 bg-zinc-800 text-center lg:hidden px-6 py-4">
    <li><a href="index.php" class="hover:underline">Home</a></li>
    <li><a href="about.php" class="hover:underline">About me</a></li>
    <li><a href="skills.php" class="hover:underline">My skills</a></li>
    <li><a href="contact.php" class="hover:underline">Contact</a></li>
  </ul>
</nav>

<script>
  const menuButton = document.getElementById("menuButton");
  const mobileMenu = document.getElementById("mobileMenu");

  menuButton.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
  });
</script>
