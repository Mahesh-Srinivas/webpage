<!DOCTYPE html>
<html>
<head>
  <title>Club Members</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .member-card {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
      max-width: 500px;
      margin: 20px auto;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    .member-img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
    }
    .member-description {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="member-card">
    <img src="Images/mb.jpg" alt="Member 1" class="member-img">
    <h2>Bhanu Bhargavi</h2>
    <p class="member-description">
      Skills: Web Development, Graphic Design<br>
      Education: Bachelor's in Computer Science
    </p>
  </div>
  
  <div class="member-card">
    <img src="Images/kk.jpg" alt="Member 2" class="member-img">
    <h2>Karthikeya </h2>
    <p class="member-description">
      Skills: Marketing, Event Planning<br>
      Education: Bachelor's in Business Administration
    </p>
  </div>
  
  <!-- Add more member cards below this line -->
</body>
</html>
