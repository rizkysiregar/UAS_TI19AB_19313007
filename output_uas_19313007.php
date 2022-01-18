<?php 


	if (isset($_POST['proses'])) {
		$dataBarang = $_POST['Databarang'];
		$namaPembeli = $_POST['namaPembeli'];
        $nomerHp = $_POST['nomerHp'];
        $jumlahBeli = $_POST['jumlahBeli'];
	}


// jika ada komponen yang kosong

    if (!empty($namaPembeli) || !empty($nomerHp) || !empty($jumlahBeli)) {

           // swich case ketika Data barang sama dengan "n"
        switch ($dataBarang) {
            case 'A':
                $namaBarang = "Nasi Rendang";
                $harga = 35000;
                break;
            case 'B':
                $namaBarang = "Nasi Ayam";
                $harga = 27500;
                break;
            case 'C':
                $namaBarang = "Nasi Ikan";
                $harga = 19500;
                break;
            case 'D':
                $namaBarang = "Nasi Telor";
                $harga = 14500;
                break;
            
            default:
                echo "Piliahn tidak Ada";
                break;
        }

        // total harga 

        $total = $harga * $jumlahBeli;

        // bonus

        if ($total > 100000) {
            $bonus = "Jus Alpukat";
        }elseif ($total > 50000) {
            $bonus = "Jus Jeruk";
        }else{
            $bonus = "Es Teh";
        }

    }else{


        // ketika ada komponen yang tidak di isi
        echo "<script> alert('Semua Komponen Harus Di isi!!'); </script>";
        header("Location: input_uas_19313007.php");
        exit();
    }


    


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>OUTPUT DATA PENJUALAN </title>
 </head>
 <style>

    body{
        background-image: url('img/img2.jpg');
        color: white;
    }

     table{
        margin-top: 20px;
        background-color: black;
        width: 400px;


     }
     
     .identitas{
        background-color: black;
        display: inline-block;
        margin-top: 10px;
        padding: 5px;
     }

     a{
        color: white;
        font-size: 40px;
        color: lightgreen;
        text-decoration: none;
     }

    p {
        text-align: center;
        background-color: coral;
        padding:2px;


    }


 </style>
 <body>

    <div class="identitas">
        <h3>Nama  : Habib Rizky A.Siregar</h3>
        <h3>Npm   : 19313007</h3>
        <h3>Prodi : Teknologi Informasi 19A</h3>
    </div>

    <h2 style="text-align: center;">OUTPUT DATA PENJUALAN BARANG</h2>

 	<table border="1" align="center" cellspacing="1" cellpadding="10">
 		<tr>
 			<td> Data Barang: </td>
 			<td> <h4> <?= $dataBarang ?></h4> </td>
 		</tr>

 		<tr>
 			<td>Nama: </td>
 			<td><?= $namaBarang ?></td>
 		</tr>

 		<tr>
 			<td>Harga: </td>
 			<td><?= 'Rp. ' .$harga ?></td>
 		</tr>

 		<tr>
 			<td>Nama Pembeli: </td>
 			<td><?= $namaPembeli ?></td>
 		</tr>

 		<tr>
 			<td>Nomer HP:</td>
 			<td> <?= $nomerHp ?></td>
 		</tr>

 		<tr>
 			<td>Jumlah Beli:</td>
 			<td> <?= $jumlahBeli . ' Porsi'?></td>
 		</tr>

 		<tr>
 			<td>Total Harga:</td>
 			<td> <?= 'Rp. ' . $total; ?></td>
 		</tr>

 		<tr>
 			<td>Bonus: </td>
 			<td><?= $bonus ?></td>
 		</tr>

 	</table>

    <p><a href="input_uas_19313007.php">Kembali</a></p>
 	
 </body>
 </html>