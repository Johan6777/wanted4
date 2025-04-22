<?php
$data = json_decode(file_get_contents("https://script.google.com/macros/s/AKfycby_HK7qXPZXjzvtHN_8RGQ94BBL2u_26GkJrwuSWlZIR7Rg68rKnpS9BEBiIJyq77za/exec"), true);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>ข้อมูลจาก Google Sheets</title>
  <style>
    body { font-family: sans-serif; padding: 20px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ccc; padding: 8px; }
    th { background-color: #eee; }
  </style>
</head>
<body>
  <h2>ข้อมูลจาก Google Sheets</h2>
  <table>
    <?php foreach ($data as $i => $row): ?>
      <tr>
        <?php foreach ($row as $cell): ?>
          <?= $i === 0 ? "<th>" : "<td>" ?><?= htmlspecialchars($cell) ?><?= $i === 0 ? "</th>" : "</td>" ?>
        <?php endforeach ?>
      </tr>
    <?php endforeach ?>
  </table>
</body>
</html>
