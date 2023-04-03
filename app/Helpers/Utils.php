<?php

namespace App\Helpers;

class Utils
{
    public static function getDayName(int $day): string
    {
        if ($day === 0) {
            return 'Domingo';
        }
        if ($day === 1) {
            return 'Lunes';
        }
        if ($day === 2) {
            return 'Martes';
        }
        if ($day === 3) {
            return 'Miércoles';
        }
        if ($day === 4) {
            return 'Jueves';
        }
        if ($day === 5) {
            return 'Viernes';
        }
        if ($day === 6) {
            return 'Sábado';
        }

        return '';
    }
}
