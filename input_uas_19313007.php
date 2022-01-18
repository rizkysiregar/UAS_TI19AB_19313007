
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Data - 19313007 - Habib Rizky A.Siregar</title>
	<style>
		body {
			background-image: url(img/img1.jpg);
			color: white;

		}

		table {
			background-color: salmon;
		}

		.identitas{
        background-color: black;
        display: inline-block;
        margin-top: 10px;
        padding: 5px;
     }
	</style>
</head>

<body>


	<div class="identitas">
        <h3>Nama  : Habib Rizky A.Siregar</h3>
        <h3>Npm   : 19313007</h3>
        <h3>Prodi : Teknologi Informasi 19A</h3>
    </div>

	<form action="output_uas_19313007.php" method="post">

		<h2 style="text-align: center;">DATA PENJUALAN BARANG</h2>

		<table border="1" cellspacing="1" cellpadding="2" width="800px" align="center">



			<tr>
				<td>
					<h4> Data Barang :</h4>
				</td>

				<td>

					<select name="Databarang" id="barang">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
					</select>

				</td>
			</tr>

			<tr>
				<td>
					<h4>Nama Pembeli :</h4>
				</td>
				<td> <input type="text" id="namaPembeli" placeholder="Nama anda ..." name="namaPembeli" size="40px"> </td>
			</tr>

			<tr>
				<td>
					<h4>Nomer HP :</h4>
				</td>
				<td> <input type="number" id="hp" placeholder="Nomer Handphone ..." name="nomerHp"></td>
			</tr>

			<tr>
				<td>
					<h4>Jumlah Beli :</h4>
				</td>
				<td> <input type="number" placeholder="Jumlah Beli.. .." id="jumlahBeli" name="jumlahBeli"></td>
			</tr>

			<tr>
				<td>
					<button id="proses" name="proses">Proses</button>
					<input type="reset" value="Reset">
				</td>
			</tr>



		</table>

	</form>
	<h2></h2>

</body>

<script>
	alert('Selamat Datang, Pastikan mengisi semua komponen yang ada');
</script>

</html>