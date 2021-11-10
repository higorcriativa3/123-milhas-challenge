<?php
namespace App\Functions;

use Illuminate\Support\Str;
use Illuminate\Support\Collection;

class FormatGroups {

  /**
   * Format given group.
   *
   * @param  array $groups
   * @param  int $totalFlights
   * @param  array $flights
   *
   * @return array $formattedGroups
  */
  public static function format($groups, $totalFlights, $flights){
    // Initiate array of groups
    $formattedGroups = array();

    // Get total of groups
    $totalGroups = count($groups);

    foreach($groups as $key => $group) {
      // dd($key);
      $formattedGroup = [
        'uniqueId' => random_int(1111, 9999), // Generate 4 digits unique id
        'totalPrice' => $key, // Key has the total group price 'cause of the previous logic that creates it
        'group' => $group
      ];

      $formattedGroups[] =  $formattedGroup;
    }

    $wrap = [
      'flights' => $flights,
      'groups' => $formattedGroups,
      'totalGroups' => $totalGroups,
      'totalFlights' => $totalFlights,
      'cheapestPrice' => $formattedGroups[0]['totalPrice'], // In order, the first is always the cheapest
      'cheapestGroup' => $formattedGroups[0]['uniqueId'],
    ];

    return $wrap;
  }
}