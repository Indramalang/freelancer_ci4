<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Terjadi Kesalahan</h1>
    <p><?= esc($message ?? 'Error tidak diketahui.'); ?></p>
</body>
</html>