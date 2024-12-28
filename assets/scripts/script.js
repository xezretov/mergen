const frontendSkills = [
    { name: "Html", icon: "🌐" },
    { name: "CSS", icon: "🎨" },
    { name: "Bootstrap-3-5", icon: "📦" },
    { name: "TailwindCSS", icon: "🌟" },
    { name: "Javascript", icon: "📜" },
    { name: "VueJS", icon: "🖥️" },
  ];

  const backendSkills = [
    { name: "PHP", icon: "🐘" },
    { name: "MySQL", icon: "💾" },
    { name: "Laravel", icon: "🚀" },
  ];

  const frontendList = document.getElementById("frontendList");
  const backendList = document.getElementById("backendList");
  const skillContent = document.getElementById("skillContent");

  let currentIndex = 0;
  let isFrontend = true;
  let finalSkillShown = false;

  function showSkill() {
    if (!finalSkillShown) {
      const skills = isFrontend ? frontendSkills : backendSkills;
      const skillList = isFrontend ? frontendList : backendList;

      if (currentIndex < skills.length) {
        const skill = skills[currentIndex];
        const listItem = document.createElement("li");
        listItem.textContent = skill.name;
        skillList.appendChild(listItem);

        skillContent.textContent = `${skill.icon} ${skill.name}`;
        skillContent.classList.add("show");

        setTimeout(() => {
          skillContent.classList.remove("show");
        }, 1000);

        currentIndex++;
        setTimeout(showSkill, 1500); 
      } else if (isFrontend) {
        isFrontend = false;
        currentIndex = 0;
        setTimeout(showSkill, 1500);
      } else {
        skillContent.textContent = "🚀 Full Stack";
        skillContent.classList.add("final");
        finalSkillShown = true;
      }
    }
  }

  document.addEventListener("DOMContentLoaded", showSkill);


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