<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Courses - BryanCodeX</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #0f111b;
      color: #ffffff;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    .hero {
      text-align: center;
      padding: 60px 20px;
      background: url("asset/image/Index/home/courses-bg.png") no-repeat center;
      background-size: cover;
      border-radius: 0 0 20px 20px;
      margin-bottom: 40px;
    }
    .hero h1 {
      font-size: 32px;
      margin-bottom: 10px;
    }
    .hero p {
      color: #ccc;
    }

    .section-title {
      font-size: 18px;
      margin: 30px 0 20px;
      border-left: 4px solid #ffd60a;
      padding-left: 10px;
    }

    .course-card {
      background-color: #1a1c29;
      border: 1px solid #2e3047;
      border-radius: 10px;
      overflow: hidden;
      transition: transform 0.2s ease;
      height: 100%;
    }
    .course-card:hover {
      transform: scale(1.03);
    }
    .course-card img {
      width: 100%;
      height: 140px;
      object-fit: cover;
    }
    .course-card-body {
      padding: 15px;
    }
    .course-card h6 {
      font-size: 14px;
      margin-bottom: 6px;
    }
    .course-card p {
      font-size: 12px;
      color: #aaa;
      margin: 0;
    }

    .filter-buttons .btn {
      margin: 5px;
      font-size: 12px;
    }
  </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero">
  <h1>Explore the World of Learning</h1>
  <p>Choose from interactive courses, coding challenges, and fun story-based lessons!</p>
</div>

<div class="container">

  <!-- Section 1 -->
  <h5 class="section-title">📘 The Legend of Python</h5>
  <div class="row g-3">
    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/python1.png" alt="Course">
        <div class="course-card-body">
          <h6>Introduction to Python</h6>
          <p>Start your coding journey with Python basics.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/python2.png" alt="Course">
        <div class="course-card-body">
          <h6>Python Functions</h6>
          <p>Learn to write reusable blocks of code.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/python3.png" alt="Course">
        <div class="course-card-body">
          <h6>Python Adventure</h6>
          <p>Level up your skills with fun story quests.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 2 -->
  <h5 class="section-title">🌍 The Origins Trilogy</h5>
  <div class="row g-3">
    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/html.png" alt="Course">
        <div class="course-card-body">
          <h6>HTML Foundations</h6>
          <p>Learn how to structure your first webpage.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/css.png" alt="Course">
        <div class="course-card-body">
          <h6>CSS Styling</h6>
          <p>Make your websites shine with modern styles.</p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/js.png" alt="Course">
        <div class="course-card-body">
          <h6>JavaScript Basics</h6>
          <p>Bring interactivity and life to your sites.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Section 3 -->
  <h5 class="section-title">🎓 All Courses</h5>
  <div class="filter-buttons mb-3">
    <button class="btn btn-outline-light btn-sm">All</button>
    <button class="btn btn-outline-light btn-sm">Web Dev</button>
    <button class="btn btn-outline-light btn-sm">Data Science</button>
    <button class="btn btn-outline-light btn-sm">Games</button>
  </div>

  <div class="row g-3">
    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/sql.png" alt="Course">
        <div class="course-card-body">
          <h6>SQL</h6>
          <p>Learn to manage and query databases with SQL.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/data.png" alt="Course">
        <div class="course-card-body">
          <h6>Data Structures</h6>
          <p>Understand arrays, stacks, and linked lists.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="course-card">
        <img src="asset/image/courses/react.png" alt="Course">
        <div class="course-card-body">
          <h6>React</h6>
          <p>Build modern apps with reusable components.</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
