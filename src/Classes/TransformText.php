<?php

namespace App\Classes;

class TransformText
{
    /**
     * Меняет порядок букв в каждом слове на обратный с сохранением регистра и пунктуации
     * @param string $text
     * @return array|string|null
     */
    public function stringRevers(string $text): array|string|null
    {
        return preg_replace_callback('/[\d\w]+/u', function ($matches) {
            $chars = mb_str_split($matches[0]);
            $chars = array_reverse($chars);
            return implode('', $chars);
        }, $text);
    }

}