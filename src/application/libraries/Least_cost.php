<?php

class Least_cost
{
    public function get_solution($costs, $supply, $demand)
    {
        $solution = array_fill(0, count($supply), array_fill(0, count($demand), 0));
        $netSupply = $supply;
        $netDemand = $demand;

        while (array_sum($netSupply) != 0 || array_sum($netDemand) != 0) {
            $maxExcess = max(array_merge([0], array_map(function ($x) {
                return abs($x);
            }, array_merge($netSupply, $netDemand))));
            $maxExcessIndex = array_search($maxExcess, $netSupply) !== false ? array_search($maxExcess, $netSupply) : array_search($maxExcess, $netDemand) + count($supply);
            $isSupply = $maxExcessIndex < count($supply);

            if ($isSupply) {
                $minCost = INF;
                $minCostIndex = -1;
                for ($i = 0; $i < count($demand); $i++) {
                    if ($netDemand[$i] > 0 && $costs[$maxExcessIndex][$i] < $minCost) {
                        $minCost = $costs[$maxExcessIndex][$i];
                        $minCostIndex = $i;
                    }
                }
                $shippingAmount = min($maxExcess, $netDemand[$minCostIndex]);
                $solution[$maxExcessIndex][$minCostIndex] += $shippingAmount;
                $netSupply[$maxExcessIndex] -= $shippingAmount;
                $netDemand[$minCostIndex] -= $shippingAmount;
            } else {
                $minCost = INF;
                $minCostIndex = -1;
                for ($i = 0; $i < count($supply); $i++) {
                    if ($netSupply[$i] > 0 && $costs[$i][$maxExcessIndex - count($supply)] < $minCost) {
                        $minCost = $costs[$i][$maxExcessIndex - count($supply)];
                        $minCostIndex = $i;
                    }
                }
                $shippingAmount = min($maxExcess, $netSupply[$minCostIndex]);
                $solution[$minCostIndex][$maxExcessIndex - count($supply)] += $shippingAmount;
                $netSupply[$minCostIndex] -= $shippingAmount;
                $netDemand[$maxExcessIndex - count($supply)] -= $shippingAmount;
            }
        }

        return $solution;
    }
}
