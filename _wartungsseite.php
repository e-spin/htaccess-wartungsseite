<?php
header("HTTP/1.1 503 Service Temporarily Unavailable");
header("Status: 503 Service Temporarily Unavailable");
header("Retry-After: 3600");
?>
<html>
<head>
<title>*** <SEITENNAME> W A R T U N G ***</title>
<meta name="robots" content="none" />
</head>
<body>
<h1>Wartungsmodus</h1>
<p><a title="<SEITENNAME>" href="http://<DOMAIN>"><DOMAIN></a> wird aktuell gewartet.<br />
Bitte versuchen Sie den Zugriff <strong>ab <DATUM> ab ca. <Uhrzeit>h</strong>.</p>
<p>Wir entschuldigen die Unannehmlichkeiten!</p>
<p>&nbsp;</p>
</body>
</html>