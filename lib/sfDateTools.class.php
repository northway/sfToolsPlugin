<?php

/**
 * Description of sfDateTools
 * 
 * Supplementary tools for dates
 *
 * @author northway
 */
class sfDateTools {
  
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
