<?php

/**
 * Description of sfFileTools
 * 
 * Supplementary tools for files
 *
 * @author northway
 */
class sfFileTools {

  /**
   * Removes the extension from a file name
   * 
   * @param string $file
   * @param string $extension
   * @return string
   */
  public static function RemoveFileExtension($file, $extension) {
    return str_replace($extension, "", $file);
  }

}
