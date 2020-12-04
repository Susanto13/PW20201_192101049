<!doctype html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	<!-- Bootstrap CSS -->
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
	<title>UTS | Florensia Hotel &copy;Susanto</title>

	<style>
		.padTop {
			padding-top: 20px;
		}

		.formPosition {
			background-color: #009cde;
			padding: 20px;
			border-radius: 5px;
		}

		.formStyle {
			padding-top: 10px;
		}

		.divClass {
			padding-bottom: 30px;
			text-align: center;
			color: #343a40;
		}

		/* Output */
		.padTop2 {
			padding-top: 40px;
		}

		.JFlorensia {
			text-align: center;
		}

		.tableBorder {
			border-radius: 10px;
		}
	</style>

</head>

<body>
	<div class='container padTop'>
		<div class='col-md-12'>
			<div class='row'>
				<div class='col-md-3'></div>
				<div class='col-md-6 formPosition'>
					<form class='formStyle' action='<?php ($_SERVER['PHP_SELF']); ?>' method='post'>
						<div class='divClass'>
							<h3>Florensia Hotel</h3>
						</div>

						<div class='form-row'>
							<div class='form-group col-md-12'>
								<label for='inputEmail4'>Nama</label>
								<input type='text' class='form-control' name='inputNama' placeholder='Susanto'>
							</div>

							<div class='form-group col-md-12'>
								<label for='inputKBooking'>Kode Booking</label>
								<select name='inputKBooking' class='form-control'>
									<option selected>Pilih Kode...</option>
									<option value='AL02102'>AL02102</option>
									<option value='BG03025'>BG03025</option>
									<option value='CR02111'>CR02111</option>
									<option value='KM03075'>KM03075</option>
								</select>
							</div>

							<div class='form-group col-md-6'>
								<label for='JOrang'>Jumlah Orang</label>
								<input type='number' class='form-control' name='inputJOrang'>
							</div>

							<div class='form-group col-md-6'>
								<label for='inputPassword4'>Lama (Hari)</label>
								<input type='number' class='form-control' name='inputHari'>
							</div>

							<div class='form-group col-md-12'>
								<label for='inputKJPembayaran'>Jenis Pembayaran</label>
								<select name='inputKJPembayaran' class='form-control'>
									<option selected>Jenis Pembayaran...</option>
									<option value='Kartu Kredit'>Kartu Kredit</option>
									<option value='Debit'>Debit</option>
									<option value='Cash'>Cash</option>
								</select>
							</div>
						</div>

						<button type='submit' class='btn btn-dark'>Proses</button>
						<button type='delete' class='btn btn-danger'><a href='index.php' style='color: white;'>Hapus</a></button>
					</form>
				</div>
				<div class='col-md-3'></div>
			</div>
		</div>

		<?php
		error_reporting(0);
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$inputNama = $_POST['inputNama'];
			$inputKBooking = $_POST['inputKBooking'];
			$inputJOrang = $_POST['inputJOrang'];
			$inputHari = $_POST['inputHari'];
			$inputKJPembayaran = $_POST['inputKJPembayaran'];
			$kamar = substr($inputKBooking, 0, -5);
			$namaKamar = '';
			$hargaKamar = '';
			$nomor = substr($inputKBooking, 4);
			$lama = '';
			$potonganTambahan = '';
			$lantai = substr($inputKBooking, 2, -3);
			$biayaSpringBadTambahan = '';
			$totalBiaya = '';
			$totalHarga = '';

			if ($kamar == 'AL') {
				$namaKamar = 'Alamanda';
				$hargaKamar = 450000;
			} elseif ($kamar == 'BG') {
				$namaKamar = 'Bougenvile';
				$hargaKamar = 350000;
			} elseif ($kamar == 'CR') {
				$namaKamar = 'Crysan';
				$hargaKamar = 375000;
			} elseif ($kamar == 'KM') {
				$namaKamar = 'Kemuning';
				$hargaKamar = 425000;
			}

			if ($inputJOrang > 2) {
				$biayaSpringBadTambahan = 75000;
			} else {
				$biayaSpringBadTambahan = 0;
			}

			$totalHarga = $hargaKamar + $biayaSpringBadTambahan;

			if ($inputKJPembayaran == 'Kartu Kredit') {
				$potonganTambahan = (2 / 100) * $totalHarga;
				$totalBiaya = $totalHarga + $potonganTambahan;
			} elseif ($inputKJPembayaran == 'Debit') {
				$potonganTambahan = (1.5 / 100) * $totalHarga;
				$totalBiaya = $totalHarga - $potonganTambahan;
			} else {
				$potonganTambahan = 0;
				$totalBiaya = $totalHarga;
			}

			echo "
				<div style='padding-left: 180px; padding-top: 30px;'>
			<div>
				<div>
					<div style='padding-left: 240px;'>
						<h3>Florensia Hotel &copy;Susanto</h3>
					</div>
					<table style='text-align: center; background-color: #3f9c35; border-radius: 5px; padding: 10px;'>
						<tbody>
							<tr>
								<th style='width: 160px;'>Nama</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$inputNama</td>

								<th style='width: 160px;'>Kode Booking</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$inputKBooking</td>
							</tr>
							<tr>
								<th style='width: 160px;'>Nama Kamar</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$namaKamar </td>

								<th style='width: 160px;'>Lantai</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$lantai</td>
							</tr>
							<tr>
								<th style='width: 160px;'>Nomor</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$nomor</td>

								<th style='width: 160px;'>Jumlah</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$inputJOrang Orang</td>
							</tr>
							<tr>
								<th style='width: 160px;'>Lama</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$inputHari Hari</td>

								<th style='width: 160px;'>Jenis Pembayaran</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$inputKJPembayaran</td>
							</tr>
							<tr>
								<th style='width: 160px;'>Potongan / Tambahan</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$potonganTambahan<potonganTambahan/td>

								<th style='width: 160px;'>Biaya Spring Bad Tambahan</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>$biayaSpringBadTambahan</td>
							</tr>
							<tr>
								<th style='width: 160px;'>Total Biaya Keseluruhan</th>
								<td style='width: 5px;'>:</td>
								<td style='width: 200px'>Rp. $totalBiaya</td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>";
		}
		?>
	</div>
	<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
	<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'></script>
</body>

</html>