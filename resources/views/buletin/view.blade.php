<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
</head>

<body>
    <iframe src="{{ asset('storage/buletins/' . $fileName) }}" width="100%" height="600px"></iframe>
</body>

</html>
