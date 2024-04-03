<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge6</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }

        .odd {
            background-color: lightblue;
        }

        .even {
            background-color: lightgreen;
        }

    </style>
</head>
<body>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>gambar</th>
            <th>Jumlah Kaki</th>
            <th>cari</th>

        </tr>
        <?php
            $data = array('Ayam', 'Angsa', 'Bebek', 'Domba', 'Kalkun', 'Kambing', 'Kelinci', 'Kerbau', 'Kuda', 'Sapi');
            $jumlahKaki = array('Ayam' => 2, 'Angsa' => 2, 'Bebek' => 2, 'Domba' => 4, 'Kalkun' => 2, 'Kambing' => 4, 'Kelinci' => 4, 'Kerbau' => 4, 'Kuda' => 4, 'Sapi' => 4);

            sort($data);
            
            $i = 1;
            foreach($data as $item){
                $item_lcfirst = lcfirst($item);
                ?>
                <tr class="<?= $i % 2 == 0 ? 'even' : 'odd' ?>">
                <td><?= $i ?></td>
                <td><?= $item ?></td>
                <td><img src="img/<?= $item_lcfirst?>.jpg" alt="<?= $item ?>" width="100"></td>
                <td><?= $jumlahKaki[$item] ?></td>
                <td><a href="https://www.google.com/search?tbm=isch&q=<?= $item ?>" target="_blank">cari</a></td>
                </tr>
            <?php   
            $i++;
            }
            ?>

    </table>
</body>
</html>