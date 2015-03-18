<?php

/**
 * Description of metWidgetTools
 * 
 * Supplementary tools for widgets
 *
 * @author northway
 */
class sfWidgetTools {
  
  /**
   * 
   * Wider year selection selection for: 
   * sfWidgetFormDate,
   * sfWidgetFormTime, 
   * sfWidgetFormDateTime,
   * sfWidgetFormI18nDate, 
   * sfWidgetFormI18nTime, 
   * sfWidgetFormI18nDateTime, 
   * sfWidgetFormDateRange
   * 
   * @return array Years
   */
  public static function AddMoreYears() {
    $yearFrom = date('Y') - 10;
    $yearTo = date('Y') + 11;

    $years = array();

    for ($i = $yearFrom; $i < $yearTo; $i++) {
      array_push($years, $i);
    }

    return $years;
  }

}
