<?php
/**
 * Created by PhpStorm.
 * User: bmille
 * Date: 03/02/2016
 * Time: 17:47
 */
namespace Ens\JobeetBundle\Utils;
class Jobeet
{
    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
}

?>