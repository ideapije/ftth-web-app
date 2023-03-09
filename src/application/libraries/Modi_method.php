<?php

class Modi_method
{
    /**
     * Langkah-langkah MODI berikut untuk menyelesaikan masalah transportasi: 
     * 1. Mulailah dengan solusi awal yang layak untuk masalah transportasi. Ini dapat ditemukan menggunakan aturan sudut barat laut, metode biaya minimum, atau metode perkiraan Vogel.
     * 2. Hitung "biaya peluang" untuk setiap variabel non-dasar (yaitu, setiap rute transportasi yang tidak digunakan). Ini dilakukan dengan menambahkan nilai penawaran dan permintaan untuk rute tersebut ke biaya transportasi untuk rute tersebut.
     * 3. Temukan variabel non-dasar (rute transportasi yang tidak digunakan) dengan biaya peluang terkecil. Ini adalah rute yang akan digunakan untuk memodifikasi solusi awal.
     * 4. Periksa apakah permintaan di tujuan rute yang dipilih lebih besar dari atau kurang dari pasokan di sumbernya.
     *      4.1 Jika permintaan lebih besar dari penawaran, alokasikan pasokan penuh ke rute yang dipilih dan kurangi permintaan di tujuan yang sesuai.
     *      4.2 Jika permintaan kurang dari penawaran, alokasikan permintaan penuh ke rute yang dipilih dan kurangi pasokan di sumber yang sesuai.
     * 5. Ulangi proses ini sampai tidak ada perbaikan lebih lanjut yang dapat dilakukan. Pada titik ini, solusinya optimal.
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
