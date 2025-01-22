<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Beschrijving van de Woning</title>
</head>
<body>
  <div class="container" style="margin:40px;">
      <h1 class="display-5">Beschrijving van de Woning: {{ $woning->naam }}</h1>
      <p><strong>Beschrijving:</strong> {{ $woning->beschrijving }}</p>
      <a href="/woning" class="btn btn-secondary">Terug naar het woning overzicht</a>
  </div>
</body>
</html>