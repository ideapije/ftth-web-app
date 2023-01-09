<?php

class Least_cost
{
    /**
     * Here is a general outline of how you could implement the least cost method in PHP:
     * 1. Begin by representing the transportation problem as a matrix, with the rows representing the sources and the columns representing the destinations. The cells of the matrix should contain the cost of shipping one unit of goods from the corresponding source to the corresponding destination.
     * 2. Initialize the solution matrix to all zeros. This matrix will store the final shipping amounts for each source-destination pair.
     * 3. Calculate the net supply and net demand at each location. The net supply is the total amount of goods available at each source, and the net demand is the total amount of goods needed at each destination.
     * 4. While there is still unbalanced supply or demand:
     *     4.1 Find the location with the largest excess supply or demand (whichever is greater in magnitude).
     *     4.2 If the excess supply is greater, find the location with the smallest cost for shipping to a location with excess demand.
     *     4.3 If the excess demand is greater, find the location with the smallest cost for shipping from a location with excess supply.
     *     4.4 Ship the maximum amount possible from the excess supply location to the excess demand location, and update the solution matrix and the net supply and demand values accordingly.
     * 5. When there is no more unbalanced supply or demand, the solution matrix contains the optimal shipping amounts for the unbalanced transportation problem.
     */
    public function least_cost_solution($costs, $supply, $demand)
    {
        // 2. Initialize the solution matrix to all zeros
        $solution = array_fill(0, count($supply), array_fill(0, count($demand), 0));
        // 3. Calculate the net supply and net demand at each location
        $netSupply = $supply;
        $netDemand = $demand;
         // 4. While there is still unbalanced supply or demand
        while (array_sum($netSupply) != 0 || array_sum($netDemand) != 0) {
            // Find the location with the largest excess supply or demand (whichever is greater in magnitude)
            $maxExcess = max(array_merge([0], array_map(function ($x) {
                return abs($x);
            }, array_merge($netSupply, $netDemand))));
            $maxExcessIndex = array_search($maxExcess, $netSupply) !== false ? array_search($maxExcess, $netSupply) : array_search($maxExcess, $netDemand) + count($supply);
            $isSupply = $maxExcessIndex < count($supply);
            
            
            if ($isSupply) {
                // 4.1 Find the location with the smallest cost for shipping to a location with excess demand
                $minCost = INF;
                $minCostIndex = -1;
                for ($i = 0; $i < count($demand); $i++) {
                    if ($netDemand[$i] > 0 && $costs[$maxExcessIndex][$i] < $minCost) {
                        $minCost = $costs[$maxExcessIndex][$i];
                        $minCostIndex = $i;
                    }
                }
                // Ship the maximum amount possible from the excess supply location to the excess demand location
                $shippingAmount = min($maxExcess, $netDemand[$minCostIndex]);
                $solution[$maxExcessIndex][$minCostIndex] += $shippingAmount;
                $netSupply[$maxExcessIndex] -= $shippingAmount;
                $netDemand[$minCostIndex] -= $shippingAmount;
            } else {
                // 4.3 Find the location with the smallest cost for shipping from a location with excess supply
                $minCost = INF;
                $minCostIndex = -1;
                for ($i = 0; $i < count($supply); $i++) {
                    if ($netSupply[$i] > 0 && $costs[$i][$maxExcessIndex - count($supply)] < $minCost) {
                        $minCost = $costs[$i][$maxExcessIndex - count($supply)];
                        $minCostIndex = $i;
                    }
                }
                // Ship the maximum amount possible from the excess supply location to the excess demand location
                $shippingAmount = min($maxExcess, $netSupply[$minCostIndex]);
                $solution[$minCostIndex][$maxExcessIndex - count($supply)] += $shippingAmount;
                $netSupply[$minCostIndex] -= $shippingAmount;
                $netDemand[$maxExcessIndex - count($supply)] -= $shippingAmount;
            }
        }

        return $solution;
    }
}
