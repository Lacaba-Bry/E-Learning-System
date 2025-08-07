<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home - BryanCodeX</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #0f111b;
      color: #ffffff;
      font-size: 12px;
    }

    .pixel-box {
      background-color: #1a1c29;
      border: 1px solid #2e3047;
      border-radius: 8px;
      padding: 16px;
    }

    .greeting-box {
      display: flex;
      align-items: center;
      background-color: #1a1c29;
      border: 1px solid #2e3047;
      border-radius: 8px;
      padding: 16px;
      margin-bottom: 24px;
    }

    .greeting-box img {
      width: 40px;
      margin-right: 12px;
    }

    .section-title {
      font-size: 14px;
      margin: 24px 0 12px;
    }

    .course-card {
      background-image: url('images/sql-bg.png');
      background-size: cover;
      background-position: center;
      border-radius: 8px;
      padding: 20px;
      color: white;
    }

    .progress-bar-bg {
      background-color: #2e3047;
      border-radius: 10px;
      height: 10px;
      margin-bottom: 10px;
    }

    .progress-bar-fill {
      background-color: #ffd60a;
      height: 10px;
      border-radius: 10px;
      width: 30%;
    }

    .action-buttons .btn {
      font-size: 10px;
      font-family: 'Press Start 2P', cursive;
      margin-right: 8px;
    }

    .explore-box {
      border: 1px solid #2e3047;
      background-color: #1a1c29;
      border-radius: 8px;
      padding: 16px;
      height: 100%;
    }

    .explore-box img {
      width: 24px;
      margin-bottom: 10px;
    }

    .sidebar {
      position: sticky;
      top: 20px;
    }

    .profile-box img {
      width: 60px;
      border-radius: 50%;
    }

    .event-box .event {
      display: flex;
      align-items: center;
      margin-bottom: 12px;
    }

    .event-date {
      background-color: #facc15;
      color: black;
      font-weight: bold;
      padding: 8px;
      border-radius: 6px;
      text-align: center;
      margin-right: 10px;
      width: 44px;
    }

    .profile-box,
    .event-box {
      background-color: #1a1c29;
      border: 1px solid #2e3047;
      border-radius: 8px;
      padding: 16px;
      margin-bottom: 16px;
    }

    a.btn-view {
      background-color: transparent;
      border: 1px solid white;
      padding: 6px 10px;
      display: inline-block;
      color: white;
      font-size: 10px;
      text-decoration: none;
      margin-top: 10px;
    }

    a.btn-view:hover {
      background-color: white;
      color: black;
    }
  </style>
</head>
<body>

<div class="container p-4 px-5">
  <div class="row">
    <!-- Main Content -->
    <div class="col-lg-9">

      <!-- Greeting -->
      <div class="greeting-box">
        <img src="images/pc.png" alt="PC Icon">
        <span>Hiii @BryanCodeX! So happy to see you again!</span>
      </div>

      <!-- Jump back in -->
      <h5 class="section-title">Jump back in</h5>
      <div class="course-card mb-4">
        <div class="progress-bar-bg">
          <div class="progress-bar-fill"></div>
        </div>
        <p style="font-size: 10px; text-transform: uppercase; margin-bottom: 0;">Course</p>
        <h4>SQL</h4>
        <p>Next exercise: Music Playlist</p>
        <div class="action-buttons">
          <a href="#" class="btn btn-primary btn-sm">Continue Learning</a>
          <a href="#" class="btn btn-outline-light btn-sm">View course</a>
        </div>
      </div>

      <!-- Explore more -->
      <h5 class="section-title">Explore more</h5>
      <div class="row g-3">
        <div class="col-md-6 col-lg-3">
          <div class="explore-box text-center">
            <img src="images/snake.png" alt="Challenge Icon">
            <h6>Challenge Packs</h6>
            <p>Practice what you learned with bite-sized code challenges.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="explore-box text-center">
            <img src="images/rocket.png" alt="Project Icon">
            <h6>Project Tutorials</h6>
            <p>Explore fun, step-by-step projects from beginner to advanced.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="explore-box text-center">
            <img src="images/egg.png" alt="30Nites Icon">
            <h6>#30NitesOfCode</h6>
            <p>Commit to 30 days of learning and building—while raising a pet!</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="explore-box text-center">
            <img src="images/monitor.png" alt="Builds Icon">
            <h6>Builds</h6>
            <p>Create and share code snippets and projects in the browser.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- Sidebar -->
    <div class="col-lg-3 sidebar">
      <!-- Profile -->
      <div class="profile-box text-center">
        <img src="images/cat.png" alt="Profile">
        <h6 class="mt-2">BryanCodeX</h6>
        <p style="font-size: 10px;">Level 2</p>
        <p>⭐ 120 XP <br> 🥉 Bronze <br> 🔥 1 Day streak <br> 💎 1 Badge</p>
        <a href="#" class="btn-view">View profile</a>
      </div>

      <!-- Upcoming Events -->
      <div class="event-box">
        <h6>Upcoming Events</h6>
        <div class="event">
          <div class="event-date">AUG<br>13</div>
          <div>
            Resume Review Workshop<br>
            <small>Wed Aug 13th @ 2:00pm ET</small>
          </div>
        </div>
        <div class="event">
          <div class="event-date">AUG<br>27</div>
          <div>
            August Challenge Presentations<br>
            <small>Wed Aug 27th @ 3:00pm ET</small>
          </div>
        </div>
        <div class="event">
          <div class="event-date">SEP<br>10</div>
          <div>
            Club LinkedIn Profile Reviews<br>
            <small>Wed Sep 10th @ 3:00pm ET</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
