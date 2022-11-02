<?php

class Least_cost
{
    /**
     * Least Cost Method (LCM) Steps (Rule)
     * * Step-1: 	Select the cell having minimum unit cost cij and allocate as much as possible, i.e. min(si,dj).
     * * Step-2: 	a. Subtract this min value from supply si and demand dj.
     * * b. If the supply si is 0, then cross (strike) that row and If the demand dj is 0 then cross (strike) that column.
     * * c. If min unit cost cell is not unique, then select the cell where maximum allocation can be possible
     * * Step-3: 	Repeat this steps for all uncrossed (unstriked) rows and columns until all supply and demand values are 0. 
     * */
    private $supply;
    private $demands;
    private $costs;

    public function __construct($supply = [], $demands = [], $costs = [])
    {
        $this->supply = $supply;
        $this->demands = $demands;
        $this->costs = $costs;
    }

    public function getSupply()
    {
        return $this->supply;
    }

    public function getDemands()
    {
        return $this->demands;
    }

    public function getCosts()
    {
        return $this->costs;
    }

    public function get_min_values()
    {
        $results = [];
        $n_supply = count($this->getSupply());
        $n_demands = count($this->getDemands());
        var_dump($n_supply, $this->getDemands());
        $costs = $this->getCosts();
        for ($i = 0; $i < $n_demands; $i++) {
            for ($j = 0; $j < $n_supply; $j++) {
                var_dump($costs[$i][$j]);
            }
        }
        return $results;
    }
}
