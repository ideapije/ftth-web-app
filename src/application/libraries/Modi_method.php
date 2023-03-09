<?php

class Modi_method
{
    /**
     * Berikut langkah-langkah penyelesaian optimalisasi dengan metode MODI : 
     * 1. Langkah pertama adalah menghitung bilangan indeks, baik indeks baris (Si) maupun indeks kolom (Dj).
     *    Ini dilaksanakan dengan menitik beratkan pada sel yang sudah terisi,  dimana berlaku rumus:
     *      Ri + Kj = Cij
     *    Dimana:
     *      Cij = Biaya dari tiap sel (i, j) yang terisi
     *      Ri  = Indeks baris
     *      Kj  = Indeks kolom
     *      tetapkan R1 = 0
     * 2. Menghitung indeks yang ditingkatkan atau sel yang tidak terisi. Langkah ini dilakukan begitu harga baris dan 
     *    kolom sudah dihitung menggunakan sel yang sudah terisi. Langkah ini dapat dilakukan dengan menggunakan rumus:
     *    Iij = Cij - Ri - Kj
     *    Dimana:
     *      Iij = Indeks yang akan ditingkatkan untuk tiap sel yang belum terisi
     *      Cij = Biaya pada baris ke i dan kolom ke j yang belum terisi
     *      Ri  = Baris ke i
     *      Kj  = Kolom ke j
     * 3. Solusi optimal tercapai apabila hasil perhitungan indeks seluruhnya sudah positif.
     */
    public $bfs_copy = [];

    public function get_uv($bfs, $cost_matrix, $default)
    {
        $u = array_fill(0, count($cost_matrix), null);
        $v = array_fill(0, count($cost_matrix[0]), null);

        $u[$default] = 0;
        $this->bfs_copy = $bfs;
        $len_bfs_copy = count($this->bfs_copy);
        // var_dump($len_bfs_copy);
        while ($len_bfs_copy > 0) {
            foreach ($this->bfs_copy as $index => $bv) {
                $i = $bv[2][0];
                $j = $bv[2][1];

                if ($u[$i] === null && $v[$j] === null) {
                    continue;
                }
                $c_ij = $cost_matrix[$i][$j];
                if ($u[$i] === null) {
                    $u[$i] = $c_ij - $v[$j];
                }
                if ($v[$j] === null) {
                    $v[$j] = $c_ij - $u[$i];
                }

                array_pop($this->bfs_copy);
                break;
            }
        }
        //return $this->bfs_copy;
        return [$u, $v];
    }

    public function convert_values_to_integer($data)
    {
        $send = [];
        foreach ($data as $value) {
            $send[] = intval($value);
        }
        return $send;
    }

    public function transpose_to_cost_matrix($data = [])
    {
        $send = [];
        $len_first_item = count($data[0] ?? []);
        for ($index = 0; $index < $len_first_item; $index++) {
            $rows = [];
            foreach ($data as $item) {
                $rows[] = intval($item[$index] ?? null);
            }
            $send[] = $rows;
        }
        return $send;
    }

    public function modi_solution($costs, $supply, $demand)
    {
        // 1. Initialize variables
        $n = count($costs);
        $m = count($costs[0]);
        $u = $v = array_fill(0, $n + $m + 1, 0);
        $pred = array_fill(0, $n + $m + 1, 0);
        $x = array_fill(0, $n + $m + 1, 0);

        // 2. Initialize the supply and demand variables
        for ($i = 1; $i <= $n; $i++) {
            $u[$i] = $supply[$i - 1];
        }
        for ($j = $n + 1; $j <= $n + $m; $j++) {
            $v[$j] = $demand[$j - $n - 1];
        }

        // 3. Initialize the costs and pred arrays
        for ($i = 1; $i <= $n; $i++) {
            for ($j = $n + 1; $j <= $n + $m; $j++) {
                $costs[$i][$j - $n - 1] += $u[$i] + $v[$j];
                $pred[$j] = $i;
            }
        }

        // 4. Find the initial feasible solution
        $z = 0;
        for ($j = $n + 1; $j <= $n + $m; $j++) {
            $min = INF;
            $k = 0;
            for ($i = 1; $i <= $n; $i++) {
                if ($costs[$i][$j - $n - 1] < $min) {
                    $min = $costs[$i][$j - $n - 1];
                    $k = $i;
                }
            }
            $z += $min;
            $x[$j] = $v[$j];
            $v[$j] = 0;
            if ($x[$j] > $u[$k]) {
                $x[$pred[$j]] = $u[$k];
                $v[$j] = $x[$j] - $u[$k];
                $u[$k] = 0;
            } else {
                $x[$pred[$j]] = $x[$j];
                $u[$k] -= $x[$j];
            }
        }

        // 5. Iteratively improve the solution
        while (true) {
            // Find the non-basic variable with the smallest positive cost
            $min = INF;
            $k = 0;
            for ($j = $n + 1; $j <= $n + $m; $j++) {
                if ($costs[0][$j - $n - 1] < $min && $v[$j] > 0) {
                    $min = $costs[0][$j - $n - 1];
                    $k = $j;
                }
            }
        }
        return $costs;
    }
}
