<?php

namespace Davidvandertuijn;

class Iban
{
    /**
     * @var array
     */
    protected static $aLengths = [
        'AL' => 28, 'AD' => 24, 'AT' => 20, 'AZ' => 28, 'BH' => 22, 'BY' => 28, 'BE' => 16, 'BA' => 20,
        'BR' => 29, 'BG' => 22, 'CR' => 22, 'HR' => 21, 'CY' => 28, 'CZ' => 24, 'DK' => 18, 'DO' => 28,
        'SV' => 28, 'EE' => 20, 'FO' => 18, 'FI' => 18, 'FR' => 27, 'GE' => 22, 'DE' => 22, 'GI' => 23,
        'GR' => 27, 'GL' => 18, 'GT' => 28, 'HU' => 28, 'IS' => 26, 'IQ' => 23, 'IE' => 22, 'IL' => 23,
        'IT' => 27, 'JO' => 30, 'KZ' => 20, 'XK' => 20, 'KW' => 30, 'LV' => 21, 'LB' => 28, 'LI' => 21,
        'LT' => 20, 'LU' => 20, 'MK' => 19, 'MT' => 31, 'MR' => 27, 'MU' => 30, 'MD' => 24, 'MC' => 27,
        'ME' => 22, 'NL' => 18, 'NO' => 15, 'PK' => 24, 'PS' => 29, 'PL' => 28, 'PT' => 25, 'QA' => 29,
        'RO' => 24, 'LC' => 32, 'SM' => 27, 'ST' => 25, 'SA' => 24, 'RS' => 22, 'SC' => 31, 'SK' => 24,
        'SI' => 19, 'ES' => 24, 'SE' => 24, 'CH' => 21, 'TL' => 23, 'TN' => 24, 'TR' => 26, 'UA' => 29,
        'AE' => 23, 'GB' => 22, 'VG' => 24,
    ];

    /**
     * To Human Friendly.
     *
     * @param string $sIban
     *
     * @return string
     */
    public static function toHumanFriendly(string $sIban): string
    {
        return trim(chunk_split($sIban, 4, ' '));
    }

    /**
     * Validate.
     *
     * @param string $sIban
     *
     * @return bool
     */
    public static function validate(string $sIban): bool
    {
        $iCountryCode = substr($sIban, 0, 2);

        if (!array_key_exists($iCountryCode, self::$aLengths)) {
            return false;
        }

        if (strlen($sIban) != self::$aLengths[$iCountryCode]) {
            return false;
        }

        $aFind = [
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        ];

        $aReplace = [
            '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36',
        ];

        $sChecksum = substr($sIban, 4).substr($sIban, 0, 4);

        $sNumber = str_replace($aFind, $aReplace, $sChecksum);

        $iRemainder = bcmod($sNumber, '97');

        if ($iRemainder != 1) {
            return false;
        }

        return true;
    }
}
