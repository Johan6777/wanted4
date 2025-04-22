<?php
// URL ของ Google Apps Script Web App ที่สร้างไว้
$url = "https://script.google.com/macros/s/AKfycbwx6RUpnQ4OPDbQadDpRHIGugR0wCJkjWoVKVgrCsEuw1VRorclPw5jvQD1mdrQnNy2/exec";

// ดึงข้อมูลจาก Google Sheet
$data = json_decode(file_get_contents($url), true);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>แสดงข้อมูลจาก Google Sheets</title>
  <style>
    body { font-family: sans-serif; padding: 20px; }
    table { border-collapse: collapse; width: 100%; }
    td, th { border: 1px solid #ccc; padding: 8px; }
    th { background-color: #f0f0f0; }
  </style>
</head>
<body>
  <h2>ข้อมูลจาก Google Sheet</h2>
  <table>
    <?php
    foreach ($data as $i => $row) {
      echo "<tr>";
      foreach ($row as $cell) {
        $content = htmlspecialchars($cell);
        echo $i == 0 ? "<th>$content</th>" : "<td>$content</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>
