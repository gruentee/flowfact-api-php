<?php
/**
 * User: connzen
 * Date: 04.07.16
 * Time: 13:24
 */

namespace Flowfact;


class Util
{
    public function isValidUuid3($uuid)
    {
        $patternUuid3 = '/^[0-9A-F]{8}-[0-9A-F]{4}-3[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';
        return preg_match($patternUuid3, $uuid) == TRUE;
    }
}