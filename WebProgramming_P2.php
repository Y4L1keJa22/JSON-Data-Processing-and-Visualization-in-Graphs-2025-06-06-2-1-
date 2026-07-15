<!DOCTYPE html>

<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="WebProgramming_P2_styles.css">
<title>Display MySQL Database Data in Chart.js Using PHP and Javascript</title>
</head>
<body>
<div class="chart">
<h1>Daily Income</h1>
  <canvas id="sigma"></canvas>
  <button onclick="previousGraph()">Previous</button>
  <button onclick="nextGraph()">Next</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="WebProgramming_P2_script.js"></script>
</body>
</html>