<?php
Class Speedometer
{

    const speed = [
        ‘kilomètre 10’ => ‘6.21 miles’,
        ‘kilomètre 20’ => ‘12.5 miles’,
        ‘kilomètre 25’ => ‘15.5 miles’,
        ‘kilomètre 30’ => ‘18.6 miles’,
    ];


    public static function convertKmToMiles(string $speedmetre) : ?string
    {
        return array_key_exists($speedmetre, self::speed) ? self::speed[$speedmetre] : null;
    }
}
echo Speedometer::convertKmToMiles(10);