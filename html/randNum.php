<?php
function randomRotate() {
    return rand(-3, 3);
}

$buttonCount = 5; // Change this to the number of buttons you have

for ($i = 1; $i <= $buttonCount; $i++)
{
    $rotation = randomRotate();
    echo "<button class='random-rotate' style='transform: rotate({$rotation}deg);'>Button {$i}</button>";
}
?>