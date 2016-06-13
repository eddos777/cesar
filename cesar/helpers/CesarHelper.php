<?php

namespace app\helpers;

class CesarHelper
{
    public static function crypt($text, $shift)
    {

//Тут будет новое, закодированное сообщение
        $newText = '';

//Алфавит и еще не преобразованный алфавит
        $code = $alpha = 'abcdefghijklmnopqrstuvwxyz';

//Пробегаемся по алфавиту, сдвигаем символы
        for ($i = 0; $i < $shift; $i++) {
            $first = mb_substr($code, 0, 1, 'utf-8'); //Находим первый символ
            $code = mb_substr($code, 1, mb_strlen($code, 'utf-8'), 'utf-8') . $first; //Ставим его в конец
        }

        $alpha .= mb_strtoupper($alpha, 'utf-8'); //Добавляем к алфавиту буквы в верхнем регистре
        $code .= mb_strtoupper($code, 'utf-8'); //Тоже самое для кода

        $text_length = mb_strlen($text, 'utf-8'); //Узнаем длину сообщения

        for ($i = 0; $i < $text_length; $i++) { //Пробегаемся по каждому символу сообщения
            $char = mb_substr($text, $i, 1, 'utf-8'); //Узнаём символ
            $pos = mb_strpos($alpha, $char, 0, 'utf-8'); //Определяем позицию символа в алфавите
            if ($pos !== false) { //Если позиция найдена
                $newText .= mb_substr($code, $pos, 1, 'utf-8'); //Добавляем к зашифрованному сообщению преобразованный символ
            } else {
                $newText .= $char; //Просто добавляем символ
            }
        }

       return $newText;
    }


    public static function decrypt($text)
    {

    }

}

