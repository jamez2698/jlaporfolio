const textElement = document.getElementById('text-type');
const jobs = ["WEB DEVELOPER", "GRAPHIC ARTIST", "VIDEO EDITOR"];
let jobIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < jobs[jobIndex].length) {
    textElement.textContent += jobs[jobIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, 50); // Adjust the typing speed (milliseconds)
  } else {
    setTimeout(erase, 1000); // Wait for a while after typing
  }
}

function erase() {
  if (charIndex > 0) {
    textElement.textContent = jobs[jobIndex].substring(0, charIndex - 1);
    charIndex--;
    setTimeout(erase, 30); // Adjust the erasing speed (milliseconds)
  } else {
    jobIndex = (jobIndex + 1) % jobs.length; // Cycle through job titles
    setTimeout(type, 500); // Wait before typing the next title
  }
}

type(); // Start typing on page load
