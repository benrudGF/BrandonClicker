<!DOCTYPE html>
<html>
<head>
    <title>Clicker Page</title>
    <script src="script.js"></script>
</head>
<body>
    <h1>Score</h1>
		<div id="score">0</div>
		<hr>
    <button id="clicker">Click Me!</button>
    
	
	
		<script>
			document.getElementById('clicker').addEventListener('click', function() {
				var score = document.getElementById('score');
				score.textContent = parseInt(score.textContent) + 1;
			});
    </script>
</body>
</html>