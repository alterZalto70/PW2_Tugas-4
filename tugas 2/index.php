<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DAFTAR NAMA PAHLAWAN NASIONAL REPUBLIK INDONESIA</title>
    </head>

    <body>

        <?php
        $pahlawannasionalindonesia = array(
            "desc 1" => array(
                "Nama" => "Abdul Mu'is </br> 1883 - 1959",
                "SK Presiden" => "218 Tahun 1959",
                "Asal Daerah Pengusul" => "Sumatra Barat",
                "Gambar" => "../tugas 2/img/Abdul Muis.jpg"
            ),
            "desc 2" => array(
                "Nama" => "Ki Hadjar Dewantoro </br> 1889 - 1959",
                "SK Presiden" => "305 Tahun 1959 </br> 28 - 11 - 1959",
                "Asal Daerah Pengusul" => "D.I. Yogyakarta",
                "Gambar" => "../tugas 2/img/Ki Hajar Dewantara.jpg"
            ),
            "desc 3" => array(
                "Nama" => "Surjopranoto </br> 1871-1959",
                "SK Presiden" => "310 Tahun 1959 </br> 30 - 11 - 1959",
                "Asal Daerah Pengusul" => "D.I. Yogyakarta",
                "Gambar" => "../tugas 2/img/RM Suryopranoto.jpg"
            ),
            "desc 4" => array(
                "Nama" => "Mohammad Hoesni Thamrin </br> 1894 - 1941",
                "SK Presiden" => "175 Tahun 1960 </br> 28 - 7 - 1960",
                "Asal Daerah Pengusul" => "DKI Jakarta",
                "Gambar" => "../tugas 2/img/MH Thamrin.jpg"
            ),
            "desc 5" => array(
                "Nama" => "K.H. Samanhudi </br> 1878 - 1956",
                "SK Presiden" => "590 Tahun 1961 </br> 9 - 11 - 1961",
                "Asal Daerah Pengusul" => "Jawa Tengah",
                "Gambar" => "../tugas 2/img/K.H. Samanhudi.jpg"
            ),
            "desc 6" => array(
                "Nama" => "H.O.S. Tjokroaminoto </br> 1883 - 1934",
                "SK Presiden" => "590 Tahun 1961 </br> 9 - 11 - 1961",
                "Asal Daerah Pengusul" => "Jawa Timur",
                "Gambar" => "../tugas 2/img/H.O.S. Tjokroaminoto.jpg"
            ),
            "desc 7" => array(
                "Nama" => "Danudirja Setyabudi </br> 1897 - 1950",
                "SK Presiden" => "590 Tahun 1961 </br> 9 - 11 - 1961",
                "Asal Daerah Pengusul" => "Jawa Timur",
                "Gambar" => "../tugas 2/img/Danudirja Setyabudi.jpg"
            ),
            "desc 8" => array(
                "Nama" => "Sisingamangaraja XII </br> 1849 - 1907",
                "SK Presiden" => "590 Tahun 1961 </br> 9 - 11 - 1961",
                "Asal Daerah Pengusul" => "Sumatera Utara",
                "Gambar" => "../tugas 2/img/Sisingamangaraja XII.jpg"
            ),
            "desc 9" => array(
                "Nama" => "Dr.G.S.S.J.Ratulangi </br> 1890 - 1949",
                "SK Presiden" => "590 Tahun 1961 </br> 9 - 11 - 1961",
                "Asal Daerah Pengusul" => "Sulawesi Utara",
                "Gambar" => "../tugas 2/img/Dr.G.S.S.J.Ratulangi.jpg"
            ),
            "desc 10" => array(
                "Nama" => "Dr. sutomo </br> 1888 - 1938",
                "SK Presiden" => "657 Tahun 1961 </br> 27 - 12 - 1961",
                "Asal Daerah Pengusul" => "Jawa Timur",
                "Gambar" => "../tugas 2/img/Dr. sutomo.jpg"
            ),
        );
    ?>

            <h1 style="text-align: center;">DAFTAR NAMA PAHLAWAN NASIONAL REPUBLIK INDONESIA</h1>
            <table border='1' cellpadding="3" cellspacing="0">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>SK Presiden</th>
                    <th>Asal Daerah Pengusul</th>
                    <th>Gambar</th>
                </tr>

                <?php 
                $nomor = 1;
                foreach ($pahlawannasionalindonesia as $desc) {
                    echo "<tr>";
                    echo "<td>$nomor</td>";
                    echo "<td>" . $desc["Nama"] . "</td>";
                    echo "<td>" . $desc["SK Presiden"] . "</td>";
                    echo "<td>" . $desc["Asal Daerah Pengusul"] . "</td>";
                    echo "<td><img src='" . $desc["Gambar"] . "' width='250'></td>";
                    echo "</tr>";
                    $nomor++;
                };

                ?>
            </table>
        </body>
</html>

