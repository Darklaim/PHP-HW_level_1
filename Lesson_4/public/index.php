<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 4</title>
</head>
<body>

<div class="slider">
<?php
// Функция для удаления лишних файлов 
function excess($files) {
  $result = array();
  for ($i = 0; $i < count($files); $i++) {
    if ($files[$i] != "." && $files[$i] != "..") $result[] = $files[$i];
  }
  return $result;
}
  $dir = "img"; // Путь к директории, в которой лежат изображения
  $files = scandir($dir); // Получаем список файлов из этой директории
  $files = excess($files); // Удаляем лишние файлы
?>
<?php
// Вывод изображений на страницу сайта по 3 штуки на одну строку
for ($i = 0; $i < count($files); $i++) { ?>
<a href="<?=$dir."/".$files[$i]?>" target="_blank"><img src="<?=$dir."/".$files[$i]?>" alt="picrute" width = 200 height = 250 /></a>
<?php if (($i + 1) % 3 == 0) { 
echo '<br>';
  } 
} 
?>
</div>

</body>
</html>