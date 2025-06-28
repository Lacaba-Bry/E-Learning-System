<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Codédex Header</title>
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Mulish', sans-serif;
      background-color: #000510;
      color: white;
      margin: 0;
    }

    .navbar {
      background-color: #000510;
      border-bottom: 1px solid #111;
      z-index: 10;
    }

    .logo {
      font-weight: 900;
      font-size: 1.5rem;
      color: #fff;
    }

    .navbar-nav .nav-link {
      color: white !important;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .dropdown-toggle::after {
      display: none !important;
    }

    .arrow-icon {
      width: 10px;
      height: 10px;
      transition: transform 0.3s ease;
    }

    .dropdown.show .arrow-icon {
      transform: rotate(180deg);
    }

    .navbar-nav .dropdown {
      position: relative;
    }

    .dropdown-hover-zone {
      position: absolute;
      top: 100%;
      left: 0;
      height: 20px;
      width: 100%;
      z-index: 998;
      background: transparent;
    }

    .dropdown-menu {
      top: 100%;
      left: 50%;
      transform: translateX(-50%) translateY(10px);
      position: absolute;
      background: rgba(15, 15, 25, 0.9);
      backdrop-filter: blur(12px);
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
      opacity: 0;
      visibility: hidden;
      display: none;
      transition: opacity 0.3s ease, transform 0.3s ease;
      text-align: left;
      min-width: 300px;
      z-index: 999;
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .dropdown.show .dropdown-menu {
      display: block;
      opacity: 1;
      visibility: visible;
      transform: translateX(-50%) translateY(0);
    }

    /* Horizontal layout for dropdown menu */
  /* Horizontal layout for dropdown menu */
.dropdown-menu.mega-menu {
  display: flex;
  flex-direction: row; /* Make items horizontal */
  justify-content: space-between;
  gap: 50px;
  min-width: 1000px;
  max-width: 90vw;
  flex-wrap: wrap; /* Allows wrapping if content is too wide */
}

/* Fix columns in mega menu */
.dropdown-menu.mega-menu > div {
  flex: 1;
  min-width: 200px;
  max-width: 300px;
}

    .dropdown-menu h4 {
      color: #999;
      font-size: 0.85rem;
      margin-bottom: 16px;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 600;
      border-bottom: 1px solid rgba(255,255,255,0.05);
      padding-bottom: 6px;
      white-space: nowrap;
    }

    .dropdown-menu a {
      color: #ddd;
      font-size: 0.9rem;
      display: block;
      margin-bottom: 10px;
      text-decoration: none;
      padding: 5px 0;
      border-radius: 4px;
      transition: background 0.2s ease, color 0.2s ease;
    }

    .dropdown-menu a:hover {
      background-color: rgba(255, 255, 255, 0.05);
      color: #fff;
    }

    .dropdown-menu a.club {
      color: #5ddcff;
      font-weight: bold;
    }

    .recommended {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 16px;
      padding-bottom: 8px;
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }

    .recommended img {
      width: 48px;
      height: 48px;
      border-radius: 10px;
      object-fit: cover;
      box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    }

    .btn-signup {
      background-color: #ffeb3b;
      color: #000;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 6px;
      border: none;
      box-shadow: 2px 2px 0px #a88a00;
      transition: 0.2s ease;
    }

    .btn-signup:hover {
      background-color: #fdd835;
    }

    @media (max-width: 991.98px) {
      .dropdown-menu {
        position: static !important;
        transform: none !important;
        width: 100% !important;
        min-width: unset !important;
        padding: 20px;
        display: block !important;
      }

      .dropdown-menu.mega-menu {
        display: block !important;
        flex-direction: column !important;
        gap: 20px;
      }
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg px-4 py-3">
  <div class="container-fluid d-flex justify-content-between align-items-center">
    <span class="navbar-brand logo">🪙 BryanDex</span>

    <div class="flex-grow-1 d-flex justify-content-center position-relative">
      <ul class="navbar-nav gap-3 d-flex align-items-center">
        <!-- Learn -->
        <li class="nav-item dropdown" id="learnDropdown">
          <a class="nav-link" href="#">
            Learn
            <svg class="arrow-icon" viewBox="0 0 20 20" fill="white"><path d="M5.5 7l4.5 4.5L14.5 7z"/></svg>
          </a>
          <div class="dropdown-hover-zone"></div>
          <div class="dropdown-menu mega-menu">
  <div>
    <h4>DATA SCIENCE</h4>
    <a href="#">Python</a>
    <a href="#">Intermediate Python</a>
    <a href="#">NumPy</a>
    <a href="#">SQL</a>
    <a href="#">Gen AI</a>
  </div>
  <div>
    <h4>WEB DEV</h4>
    <a href="#">HTML</a>
    <a href="#">CSS</a>
    <a href="#">JavaScript</a>
    <a href="#">Intermediate JavaScript</a>
    <a href="#">React</a>
    <a href="#">p5.js</a>
    <a href="#" class="club">Node.js CLUB</a>
  </div>
  <div>
    <h4>TOOLS</h4>
    <a href="#">Command Line</a>
    <a href="#">Git & GitHub</a>
    <h4 class="mt-3">COMPUTER SCIENCE</h4>
    <a href="#">C++</a>
    <a href="#">Java</a>
    <a href="#" class="club">Data Structures & Algorithms</a>
  </div>
</div>

        </li>

        <!-- Practice -->
        <li class="nav-item dropdown" id="practiceDropdown">
          <a class="nav-link" href="#">
            Practice
            <svg class="arrow-icon" viewBox="0 0 20 20" fill="white"><path d="M5.5 7l4.5 4.5L14.5 7z"/></svg>
          </a>
          <div class="dropdown-menu">
            <a href="#">Challenge Packs</a>
            <a href="#">Project Tutorials</a>
            <a href="#">#30NitesOfCode</a>
          </div>
        </li>

        <li class="nav-item"><a class="nav-link" href="#">Build</a></li>

        <!-- Community -->
        <li class="nav-item dropdown" id="communityDropdown">
          <a class="nav-link" href="#">
            Community
            <svg class="arrow-icon" viewBox="0 0 20 20" fill="white"><path d="M5.5 7l4.5 4.5L14.5 7z"/></svg>
          </a>
          <div class="dropdown-menu">
            <a href="#">Home</a>
            <a href="#">Worlds</a>
          </div>
        </li>

        <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
      </ul>
    </div>

    <button class="btn btn-signup">Sign Up</button>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const dropdowns = ['learnDropdown', 'practiceDropdown', 'communityDropdown'];
  dropdowns.forEach(id => {
    const dropdown = document.getElementById(id);
    let timeout;

    dropdown.addEventListener('mouseenter', () => {
      clearTimeout(timeout);
      dropdown.classList.add('show');
      dropdown.querySelector('.dropdown-menu').classList.add('show');
    });

    dropdown.addEventListener('mouseleave', () => {
      timeout = setTimeout(() => {
        dropdown.classList.remove('show');
        dropdown.querySelector('.dropdown-menu').classList.remove('show');
      }, 150); // buffer delay
    });
  });
</script>

</body>
</html>
