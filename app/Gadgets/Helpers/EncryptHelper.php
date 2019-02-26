<?php
/**
 * Created by PhpStorm.
 * User: caiwen
 * Date: 2019/2/25
 * Time: 15:50
 */

namespace App\Gadgets\Helpers;


use Crypt_Rijndael;

class EncryptHelper
{
    const ENCRYPT_KEY = '434b8e8eab3498e5741f26698457c42f';

    public static function decrypt($term)
    {
        $rijndael = new Crypt_Rijndael(CRYPT_RIJNDAEL_MODE_ECB);
        $rijndael->setKey(self::ENCRYPT_KEY);
        $rijndael->setKeyLength(256);
        $rijndael->disablePadding();
        $rijndael->setBlockLength(256);
        return str_replace("\0","",$rijndael->decrypt(base64_decode(trim($term))));
    }
}