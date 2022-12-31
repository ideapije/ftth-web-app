<div class="container py-3">
    <h1>Panduan</h1>

    <h2>Least Cost</h2>
    <br>
    <p>
        Prinsip dasar penyelesaian awal dengan metode least cost tidak jauh berbeda dengan metode
        northwest corner. Hanya saja pengisian tidak dari sel yang biaya pengirimannya terendah. Pada
        sel itu diisi dengan barang sebanyak mungkin. Jika ada beberapa sel yang biaya terendahnya sama,
        maka dipilih yang mana saja. Metode least cost juga disebut metode greedy karena sifatnya selalu memulai penyelesaian dari biaya yang paling kecil tanpa memperhitungkan efek terhadap
        keseluruhan proses. Meskipun selalu dimulai dari sel yang biayanya kecil, namun metode ini
        belum tentu menghasilkan penyelesaian optimal. Secara logika, hasil yang didapat dengan metode
        least cost akan lebih baik dibandingkan dengan metode northwest corner dalam pengisian sel
        mempertimbangkan biaya pengiriman pada sel yang bersangkutan. Akibatnya, total biaya
        pengiriman akan cenderung tidak optimal.
    </p>
    <a href="<?= site_url('welcome/tutorial/least-cost') ?>">Pelajari selengkapnya</a>
    <hr>
    <h2>MODI (Modified Distribution)</h2>
    <br>
    <p>
        Metode MODI sama dengan algoritma metode Stepping Stone dengan teknik untuk
        menghitung indeks yang akan ditingkatkan. Perbedaan antara kedua cara ini terletak pada langkah-
        langkah yang digunakan untuk menyelesaikan persoalan yang mana terdapat jejak tertutup yang
        akan ditelusuri. Metode MODI menghitung indeksi yang akan ditingkatkan ialah tanpa
        menggambarkan semua jejak tertutup.
    </p>
    <a href="<?= site_url('welcome/tutorial/modi') ?>">Pelajari selengkapnya</a>
</div>