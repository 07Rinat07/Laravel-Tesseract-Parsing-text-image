#### Laravel Tesseract. 

<div align="center">
  <img src="https://media.giphy.com/media/dWesBcTLavkZuG35MI/giphy.gif" width="600" height="300"/>
</div>

#### Парсинг текста с изображений в laravel и php. Извлекаем текст из изображений
* Установка Tesseract на Windows:
  https://codetoprosper.com/tesseract-ocr-for-windows
* Tesseract composer расширение:
  https://github.com/thiagoalessio/tesseract-ocr-for-php
* Tesseract словарь кириллица:
  https://github.com/tesseract-ocr/tessdata/blob/main/rus.traineddata
#### Установка для Линукс Убунту
* sudo apt update
* sudo apt install tesseract-ocr-rus
* Tesseract-ocr языковые файлы для русского языка
  https://github.com/tesseract-ocr/

#### Установка расширения в проект:
* composer require thiagoalessio/tesseract_ocr

#### Для проекта
* скачай картинку с текстом и перемести ее в проект в папку public
* создай консольную команду для запуска --- php artisan make:command GoCommand
* в файле GoCommand.php внеси изменения на такое: protected $signature = 'go'; и еще ниже public function handle()
  public function handle()
  {
  $image = public_path('/doc.test.jpg');
  $tesseract = new TesseractOCR($image);

        $content = $tesseract->lang('rus')->run();
        dd($content);
  }
* скачай пакет языка на русском---https://github.com/tesseract-ocr/tessdata/blob/main/rus.traineddata нажав на кнопку по центру View raw
* если на windows то дальше пройди по пути C:\Program Files\Tesseract-OCR\tessdata и вставь этот пакет русского языка и сохрани
* php artisan go (в кансоле набери и увидешь текст с картинки)

