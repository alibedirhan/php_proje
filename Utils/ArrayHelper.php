<?php


class ArrayHelper
{
    public static function getData($dizi, $key){
        foreach ($dizi as $item){
            if ($item['anahtar'] == $key){
                return $item['deger'];
            }
        }
    }

}
