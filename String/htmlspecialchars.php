<?php
$html = "<html>Texte html</html>";

echo htmlspecialchars($html); // &lthtml ...

echo htmlspecialchars_decode($html); // <html>Texte html</html>