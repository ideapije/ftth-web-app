<?php

class Least_cost
{
    /**
     * Berikut adalah implementasi model least cost pada perintah skrip coding PHP:
     * 1. Sel-sel matriks harus berisi biaya distribusi per core dari sumber yang sesuai menuju ke tujuan yang sesuai.
     * 2. Inisialisasi sel biaya distribusi ke semua nol. Matriks ini akan menyimpan jumlah distribusi akhir untuk setiap pasangan sumber ke tujuan.
     * 3. Hitung total supply dan total demand untuk memulai alokasi. Supply adalah jumlah total core yang tersedia di setiap sumber dan demand adalah jumlah total core yang dibutuhkan di setiap tujuan.
     * 4. Periksa apakah permintaan di tujuan rute yang dipilih lebih besar dari atau kurang dari pasokan di sumbernya.
     *    - Jika permintaan lebih besar dari penawaran, alokasikan pasokan penuh ke rute yang dipilih dan kurangi permintaan di tujuan yang sesuai.
     *    - Jika permintaan kurang dari penawaran, alokasikan permintaan penuh ke rute yang dipilih dan kurangi pasokan di sumber yang sesuai.
     * 5. Ketika seluruh demand sudah terpenuhi, matriks solusi berisi jumlah distribusi yang optimal dari hasil metode least cost.
     **/
    public function least_cost_solution($costs, $supply, $demand)
    {
        // Inisialisasi semua sel ke nol mengunakan array
        $solution = array_fill(0, count($supply), array_fill(0, count($demand), 0));
        // Hitung total supply dan total demand pada sel dalam tabel
        $netSupply = $supply;
        $netDemand = $demand;
         // Mencari apakah jumlah supply dan demand sama jumlahnya dengan mencari hasil akhirnya 0
        while (array_sum($netSupply) != 0 || array_sum($netDemand) != 0) {
            // Temukan sel pada demand dengan jumlah terbesar atau jumlah supply yang masih lebih
            $maxExcess = max(array_merge([0], array_map(function ($x) {
                return abs($x);
            }, array_merge($netSupply, $netDemand))));
            $maxExcessIndex = array_search($maxExcess, $netSupply) !== false ? array_search($maxExcess, $netSupply) : array_search($maxExcess, $netDemand) + count($supply);
            $isSupply = $maxExcessIndex < count($supply);
            
            
            if ($isSupply) {
                // Temukan sel dengan biaya distribusi terkecil dengan demand yang belum teralokasi
                $minCost = INF;
                $minCostIndex = -1;
                for ($i = 0; $i < count($demand); $i++) {
                    if ($netDemand[$i] > 0 && $costs[$maxExcessIndex][$i] < $minCost) {
                        $minCost = $costs[$maxExcessIndex][$i];
                        $minCostIndex = $i;
                    }
                }
                // Kirimkan jumlah maksimum supply dari sel yang memiliki supply lebih ke sel demand
                $shippingAmount = min($maxExcess, $netDemand[$minCostIndex]);
                $solution[$maxExcessIndex][$minCostIndex] += $shippingAmount;
                $netSupply[$maxExcessIndex] -= $shippingAmount;
                $netDemand[$minCostIndex] -= $shippingAmount;
            } else {
                // Temukan sel dengan biaya distribusi terkecil dengan lebih banyak supply
                $minCost = INF;
                $minCostIndex = -1;
                for ($i = 0; $i < count($supply); $i++) {
                    if ($netSupply[$i] > 0 && $costs[$i][$maxExcessIndex - count($supply)] < $minCost) {
                        $minCost = $costs[$i][$maxExcessIndex - count($supply)];
                        $minCostIndex = $i;
                    }
                }
                // Kirimkan jumlah maksimum supply dari sel yang memiliki supply lebih ke sel demand
                $shippingAmount = min($maxExcess, $netSupply[$minCostIndex]);
                $solution[$minCostIndex][$maxExcessIndex - count($supply)] += $shippingAmount;
                $netSupply[$minCostIndex] -= $shippingAmount;
                $netDemand[$maxExcessIndex - count($supply)] -= $shippingAmount;
            }
        }

        return $solution;
    }
}
