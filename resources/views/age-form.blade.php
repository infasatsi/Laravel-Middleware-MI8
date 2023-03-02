<!DOCTYPE html>
<html>
<head>
	<title>Age Form</title>
</head>
<body>
    
    @if (session('error'))
    <div style="color: red;">
        {{ session('error') }}
    </div>
    @endif

    <form method="POST" action="/dashboard">
		@csrf
		<label>Enter your age:</label>
		<input type="number" name="age" required>
		<button type="submit">Submit</button>
	</form>
</body>
</html>
