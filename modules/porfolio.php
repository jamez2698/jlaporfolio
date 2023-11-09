
<style>
   
    </style>

<section id="portfolio" class="section min-vh-100">
        <div class="container">
            <h1 class="sample">SAMPLE DESIGN</h1>


            <div class="buttons">
              <button class="btn" onclick="showGroup('idsample')">ID's</button>
              <button class="btn" onclick="showGroup('logo')">Logo's</button>
              <button class="btn" onclick="showGroup('jersy')">Jerseys </button>
              <button class="btn" onclick="showGroup('banners')">Banner's </button>
              <button class="btn" onclick="showGroup('cataloglabel')">Catalog and Label</button>
              <button class="btn" onclick="showAll()">Show All</button>
            </div>

          
          
            <div class="person-group" id="idsample-group"> 
                <div class="titles">ID SAMPLE</div>
                <div class="portfolio-items">
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/ID front1.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>FRONT</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/ID front2.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>FRONT</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/ID front3.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>FRONT</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/ID back.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>BACK</p>
                    </div>
                </div>
            </div>
      
            <div class="person-group" id="logo-group"> 
                <div class="titles">LOGO</div>
                <div class="portfolio-items">
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/logo1.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>JIMS FARMS</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/logo2.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>JAMES REALTY</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/logo3.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>JAMEZ COMP TECH</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/logo4.png" class="square-image" alt="Project 1">
                        </div>
                        <p>BEACON MASONIC</p>
                    </div>
                </div>
            </div>

            <div class="person-group" id="jersy-group"> 
                <div class="titles">JERSEYS</div>
                <div class="portfolio-items">
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/JERSY1.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>JERSY 1</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/JERSY2.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>JERSY 2</p>
                    </div>
                </div>
            </div>

            <div class="person-group" id="banners-group"> 
                <div class="titles">BANNER'S</div>
                <div class="portfolio-items">
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/banner1.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>HIRING</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/banner2.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>WELCOME</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/banner3.png" class="square-image" alt="Project 1">
                        </div>
                        <p>BIRTHDAY</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/banner4.png" class="square-image" alt="Project 1">
                        </div>
                        <p>ADVISORY</p>
                    </div>
                </div>
            </div>
            <div class="person-group" id="cataloglabel-group"> 
                <div class="titles">CATALOG AND LABEL</div>
                <div class="portfolio-items">
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/catalogue.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>CATALOGUE</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/cocowater.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>COCO WATER LABEL</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/flour.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>FLOUR LABEL</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/RBD.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>RBD LABEL</p>
                    </div>
                    <div class="portfolio-item">
                        <div class="image-container">
                        <img src="assets/image/VCO.jpg" class="square-image" alt="Project 1">
                        </div>
                        <p>VCO LABEL</p>
                    </div>
                </div>
            </div>












       


        </div>
    
            <div class="image-popup" id="popup">
                <div class="popup-box">
                    <span class="close" id="close">&times;</span>
                    <img class="popup-content" id="popup-image" src="">
                </div>
            </div>

    </section>





    <script>
  function showGroup(groupName) {
      // Hide all groups
      var groups = document.querySelectorAll('.person-group');
      for (var i = 0; i < groups.length; i++) {
          groups[i].classList.add('hidden');
      }

      // Show the selected group
      document.getElementById(groupName + '-group').classList.remove('hidden');
  }

  function showAll() {
      // Show all groups
      var groups = document.querySelectorAll('.person-group');
      for (var i = 0; i < groups.length; i++) {
          groups[i].classList.remove('hidden');
      }
    
  }
</script>
<script>
        const imageContainers = document.querySelectorAll(".image-container");
        const popup = document.getElementById("popup");
        const popupImage = document.getElementById("popup-image");
        const close = document.getElementById("close");

        imageContainers.forEach((container) => {
            const image = container.querySelector(".square-image");

            image.addEventListener("click", function() {
                popup.style.display = "flex";
                popupImage.src = image.src;

                // Add the "active" class to the popup and popup box to trigger the fade-in effect
                popup.classList.add("active");
            });

            close.addEventListener("click", function() {
                // Remove the "active" class to trigger the fade-out effect
                popup.classList.remove("active");

                // Set a timeout to hide the popup after the fade-out animation
                setTimeout(() => {
                    popup.style.display = "none";
                }, 500); // Adjust the timeout to match the transition duration
            });

            window.addEventListener("click", function(event) {
                if (event.target === popup) {
                    close.click(); // Close the popup if clicking outside the popup box
                }
            });
        });
    </script>