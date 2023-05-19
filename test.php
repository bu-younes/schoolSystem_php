<!DOCTYPE html>
<html>
<head>
  <style>
    /* Styles for the navigation bar */
    .navbar {
      background-color: #333;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }

    .navbar-title {
      font-size: 20px;
      font-weight: bold;
    }

    .navbar-logout-btn {
      background-color: #f44336;
      color: #fff;
      border: none;
      padding: 8px 16px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Rest of the form styles */
    form {
      max-width: 500px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="date"],
    select,
    textarea {
      width: 100%;
      margin-bottom: 10px;
    }

    select {
      width: 100%;
    }

    .time-select {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .time-select select {
      width: 48%;
    }

    button {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="navbar-title">PROJECT MANAGEMENT TOOL</div>
    <div>
      <img src="tech-mahindra-icon.png" alt="Tech Mahindra Icon" height="30" width="30">
      <button class="navbar-logout-btn" onclick="logout()">Logout</button>
    </div>
  </div>

  <form>
    <label for="date">Date for Logs:</label>
    <input type="date" id="date" name="date" required>

    <label for="tower">Tower:</label>
    <select id="tower" name="tower" required>
      <option value="">Select Tower</option>
      <option value="AD">AD</option>
      <option value="MS">MS</option>
    </select>

    <label for="stream">Stream:</label>
    <select id="stream" name="stream" required>
      <option value="">Select Stream</option>
      <!-- Add options for streams here -->
    </select>

    <label for="project">Project Name:</label>
    <select id="project" name="project" required>
      <option value="">Select Project</option>
      <!-- Add options for projects here -->
    </select>

    <div class="time-select">
      <label for="start-time-hour">Start Time:</label>
      <select id="start-time-hour" name="start-time-hour" required>
        <option value="">Hour</option>
        <!-- Add options for hours (0-23) here -->
      </select>

      <label for="start-time-minute">&nbsp;</label>
      <select id="start-time-minute" name="start-time-minute" required>
        <option value="">Minute</option>
        <option value="0">00</option>
        <option value="15">15</option>
        <option value="30">30</option>
        <option value="45">45</option>
      </select>
    </div>

    <div class="time-select">
      <label for="end-time-hour">End Time:</label>
      <select id="end-time-hour" name="end-time-hour" required>
<option value="">Hour</option>
<!-- Add options for hours (0-23) here -->
</select>
<label for="end-time-minute">&nbsp;</label>
  <select id="end-time-minute" name="end-time-minute" required>
    <option value="">Minute</option>
    <option value="0">00</option>
    <option value="15">15</option>
    <option value="30">30</option>
    <option value="45">45</option>
  </select>
</div>

<label for="task">Task Name:</label>
<select id="task" name="task" required>
  <option value="">Select Task</option>
  <!-- Add options for tasks here -->
</select>

<label for="other-task">Other Task:</label>
<input type="text" id="other-task" name="other-task">

<label for="description">Description:</label>
<textarea id="description" name="description" required></textarea>

<button type="submit">Save</button>
<button type="reset">Clear</button>
</form>
</body>
</html>
