<?php

/**
 * Description of sfStringTools
 * 
 * Supplementary tools for strings
 *
 * @author northway
 */
class sfStringTools {
  
  /**
   * Replacing all non ASCII characters by a -
   *
   * @param string $text
   * @return string 
   */
  public static function Slugify($text) {

    // replace non letter or digits by -
    $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

    // trim
    $text = trim($text, '-');

    // transliterate
    if (function_exists('iconv')) {
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }

    // lowercase
    $text = strtolower($text);

    // remove unwanted characters
    $text = preg_replace('#[^-\w]+#', '', $text);

    if (empty($text)) {
      return 'n-a';
    }

    return $text;
  }
  
  /**
   * Creates a MD5 string with the 
   * given string and actual datetime
   * 
   * @param string $str
   * @return string
   */
  public static function PrefixMD5DateTimeWithString($str) {
    return md5(date("Y-m-d H:i:s") . $str);
  }
  
}
