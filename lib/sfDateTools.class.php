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
   * Calculates the time difference between two datetime
   * 
   * @param DateTime $firstTime
   * @param DateTime $lastTime
   * @return int
   */
  public static function TimeDiff($firstTime, $lastTime) {

    // convert to unix timestamps
    $firstTime = strtotime($firstTime);
    $lastTime = strtotime($lastTime);

    // perform subtraction to get the difference (in seconds) between times
    $timeDiff = $lastTime - $firstTime;

    // return the difference
    return $timeDiff;
  }
  
}
