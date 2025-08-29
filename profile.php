<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile - Bryan C.</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #0d0d1a;
      color: #fff;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
    }

    .container {
      max-width: 900px;
      width: 100%;
      margin: 0 auto;
    }

    .cover {
      background: url('asset/image/profile/profilebg.png') no-repeat center;
      background-size: cover;
      height: 200px;
      position: relative;
      border-radius: 10px 10px 0 0;
    }
    .avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 3px solid #fff;
      position: absolute;
      bottom: -50px;
      left: 20px;
    }
    .profile-header {
      padding: 70px 20px 20px 20px;
      text-align: left;
    }
    .profile-header h1 {
      margin: 0;
    }
    .profile-header button {
      margin-top: 10px;
      padding: 6px 12px;
      border: none;
      border-radius: 6px;
      background: #ff6ec7;
      color: white;
      cursor: pointer;
    }

    .tabs {
      display: flex;
      gap: 10px;
      margin: 20px 0;
      flex-wrap: wrap;
    }
    .tab {
      padding: 5px 15px;
      background: #1a1a33;
      border-radius: 8px;
    }

    .section {
      margin: 20px 0;
      padding: 15px;
      background: #1a1a33;
      border-radius: 10px;
    }
    .section h3 {
      margin-top: 0;
    }

    /* Bio + Pinned side by side */
    .row {
      display: flex;
      gap: 20px;
      margin: 20px 0;
    }
    .row .section {
      flex: 1;
    }

    .stats {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }
    .stat {
      background: #0d0d26;
      padding: 15px;
      border-radius: 10px;
      text-align: center;
      min-width: 120px;
      flex: 1;
    }
    .stat h3 {
      margin: 0;
      font-size: 22px;
      color: #ff6ec7;
    }
    .stat p {
      margin: 5px 0 0;
      font-size: 14px;
    }

    .pet-cafe {
      text-align: center;
    }
    .pet-cafe img {
      width: 80px;
    }
  </style>
</head>
<body>
  <div class="container">

  <!-- Cover and Avatar -->
  <div class="cover">
    <img src="avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <!-- Profile Header -->
  <div class="profile-header">
    <h1>Lacaba, Bryan C.</h1>
    <p>@BryanCodeX</p>
    <p>0 following • 0 followers</p>
    <button>Edit Profile</button>
  </div>

  <!-- Tabs -->
  <div class="tabs">
    <div class="tab">Bio</div>
    <div class="tab">Pinned</div>
    <div class="tab">Stats</div>
    <div class="tab">Skills</div>
    <div class="tab">Pet Café</div>
    <div class="tab">Posts (0)</div>
    <div class="tab">Projects (0)</div>
    <div class="tab">Certificates</div>
  </div>

  <!-- Bio + Pinned Row -->
  <div class="row">
    <div class="section">
      <h3>Bio</h3>
      <p><strong>Lvl 2</strong></p>
      <p>You don’t have anything in your bio. <a href="#">Go to account</a> and edit profile.</p>
      <p><small>Joined Apr 10, 2025</small></p>
    </div>

    <div class="section">
      <h3>Pinned</h3>
      <p>Pin a project</p>
    </div>
  </div>

  <!-- Stats -->
  <div class="section">
    <h3>Stats</h3>
    <div class="stats">
      <div class="stat">
        <h3>8</h3>
        <p>Exercises</p>
      </div>
      <div class="stat">
        <h3>120</h3>
        <p>Total XP</p>
      </div>
      <div class="stat">
        <h3>1</h3>
        <p>Course Badges</p>
      </div>
      <div class="stat">
        <h3>2</h3>
        <p>Daily Streak</p>
      </div>
    </div>
  </div>

  <!-- Skills -->
  <div class="section">
    <h3>Skills</h3>
    <p>Add skills from <a href="#">account settings</a>.</p>
  </div>

  <!-- Pet Café -->
  <div class="section pet-cafe">
    <h3>Pet Café</h3>
    <img src="egg.png" alt="Pet Egg">
  </div>

  <!-- Posts / Projects / Certificates -->
  <div class="section">
    <p>You have not made a post yet. <a href="#">Say hi in the community</a></p>
  </div>

</div>

</body>
</html>
