<?php

class Revert
{
    public function revertCharacters($str)
    {
        $arr = explode(' ', $str); // Разбить строку на массив

        foreach ($arr as $key => $elem) { // Перебрать массив
            $arr[$key] = $this->revertWord($elem); // Изменить порядок букв в элементе массива
        }

        return implode(' ', $arr); // Обеденить элементы массива в строку через пробел
    }

    private function revertWord($word) // Изменить порядок букв в слове
    {
        $arr = str_split($word); // Преобразовать строку в массив
        $arrRev = str_split(mb_strtolower(preg_replace('/\pP/iu', '', $word))); // Преобразовать строку в массив, без знаков пинктуации и реверсировать порядок элементов
        $num = count($arrRev) - 1; // количество элементов реверсированого массива

        for ($i = 0; $i < count($arr); $i++) { // Меребрать массив
            if (ctype_punct($arr[$i])) continue; // Если элемент является знаком пунктуации, пропустить итерацию массива

            if (ctype_upper($arr[$i])) { // Если элемент массива в верхнем регистре
                $arr[$i] = strtoupper($arrRev[$num]); // Заменить на элемент в верхнем регистере
            } else {
                $arr[$i] = $arrRev[$num]; // Заменить элемент
            }

            $num--;
        }

        return implode($arr); // Вернуть массив обедененый в строку
    }
}
