<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Page</title>
</head>
<body>
  hai {{Auth()->user()->name}}
  level kamu adalah {{Auth()->user()->roles}}
</body>
</html>