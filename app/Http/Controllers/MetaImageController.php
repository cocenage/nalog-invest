<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetaImageController extends Controller
{
    public function generate($text)
    {
        // Устанавливаем заголовки для работы с изображением
        header('Content-Type: image/png');

        // Создаем изображение
        $width = 1200;
        $height = 630;
        $image = imagecreatetruecolor($width, $height);

        // Устанавливаем цвета
        $backgroundColor = imagecolorallocate($image, 255, 255, 255); // белый
        $textColor = imagecolorallocate($image, 0, 0, 0); // черный

        // Заполняем фон
        imagefilledrectangle($image, 0, 0, $width, $height, $backgroundColor);

        // Добавляем текст
        $fontPath = storage_path(path: 'fonts/Montserrat-Regular.ttf'); // убедитесь, что файл существует

        $fontSize = 40;
        $bbox = imagettfbbox($fontSize, 0, $fontPath, $text); // получаем размеры текста
        $x = ($width - ($bbox[2] - $bbox[0])) / 2; // центруем по оси X
        $y = ($height - ($bbox[1] - $bbox[7])) / 2;  // центруем по оси Y
        imagettftext($image, $fontSize, 0, $x, $y, $textColor, $fontPath, $text);

        // Выводим изображение
        imagepng($image);
        imagedestroy($image);
    }
}
