<?php
namespace App\Functions;

use App\Functions\FormatGroups;
use Illuminate\Support\Collection;

class GroupFlights {
  /**
   * Group given array of flights by price and fare.
   *
   * @param  array $arrayOfFlights
   *
   * @return array $flights
  */
  public function group($arrayOfFlights){
    // Count flights
    $totalFlights = count($arrayOfFlights);

    // Create a collection with the given array.
    $flightCollection = collect($arrayOfFlights)->values();

    // Initiate Group array
    $group = array();

    // Get inbound flights.
    $inbound = $flightCollection
                ->where('inbound', '=', 1)
                ->flatten();

    // Get outbound flights.
    $outbound = $flightCollection
                ->where('outbound', '=', 1)
                ->flatten();

    /* Run through inbound and outbound collection
     * and make pairs by price and fare
    */
    foreach($inbound as $keyIn => $flightInbound){
      $priceInbound = intval($flightInbound->price);
      $fareInbound = $flightInbound->fare;

      foreach($outbound as $keyOut => $flightOutbound){
        $priceOutbound = intval($flightOutbound->price);
        $fareOutbound = $flightOutbound->fare;

        if($fareInbound == $fareOutbound) {
          $sum = $priceInbound + $priceOutbound;

          $group[$sum]['inbound'] = $inbound->where('price', $priceInbound)
                                            ->where('fare', $fareInbound)
                                            ->flatten();

          $group[$sum]['outbound'] = $outbound->where('price', $priceOutbound)
                                              ->where('fare', $fareOutbound)
                                              ->flatten();
        }
      }
    }

    $formattedGroups = FormatGroups::format($group, $totalFlights, $arrayOfFlights);

    return $formattedGroups;
  }
  
}