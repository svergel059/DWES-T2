<?php

class TriangleGenerator
{
    public static function generateTriangle(int $altura): string
    {
        if ($altura <= 0) {
            return "";
        }

        $resultado = "";
        for ($i = 0; $i < $altura; $i++) {
            $espacios = str_repeat("&nbsp;", $altura - 1 - $i);
            $asteriscos = str_repeat("*", 2 * $i + 1);
            $resultado .= "<p>" . $espacios . $asteriscos . "</p>";
        }
        return $resultado;
    }
}
