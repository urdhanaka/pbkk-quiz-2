<!DOCTYPE html>
<html>

<head>
  <title>Dummy Page</title>
</head>

<body>
  <h1>Welcome to the Dummy Page!</h1>
  <p>This is just a placeholder page for testing purposes.</p>
</body>

<button onclick="logout()">Logout</button>

<script>
  function logout() {
    window.location.href = "/logout";
  }
</script>
</html>
