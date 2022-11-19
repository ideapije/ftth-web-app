<?php

class Modi_method
{
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
}
