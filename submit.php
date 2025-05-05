<?php
$rating = $_POST['rating'] ?? 'بدون تقييم';
$feedback = $_POST['feedback'] ?? 'لا توجد ملاحظات';

$date = date("Y-m-d H:i:s");
$entry = "التاريخ: $date\nالتقييم: $rating\nالملاحظات: $feedback\n----------------------\n";

file_put_contents("feedbacks.txt", $entry, FILE_APPEND);

echo "<h3>شكرًا على تقييمك!</h3>";
echo "<a href='index.html'>رجوع</a>";
?>
