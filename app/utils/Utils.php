<?php

class Utils  extends Database{
    public static function getDate() : String {
        return date('Ymd');
    }

    public static function withLeadingZero(int $zeros, string $number, ) : string {
        return str_pad($number, $zeros, '0', STR_PAD_LEFT);
    }

}