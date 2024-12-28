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

  document.addEventListener("DOMContentLoaded", showSkill);s