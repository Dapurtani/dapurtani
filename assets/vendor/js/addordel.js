$(document).ready(function () {
	// untuk tombol tambah
	$('.tambah').click(function () {
		var tambah = $(this).siblings('#jumlahstok').attr("value");
		var jumlah = parseInt(tambah) + parseInt(1);

		if (tambah == 1) {
			// untuk menambah jumlah stok
			$(this).siblings('#jumlahstok').attr("value", jumlah);
		} else {
			// untuk menambah jumlah stok
			$(this).siblings('#jumlahstok').attr("value", jumlah);
		}
	});

	// untuk kurang
	$('.kurang').click(function () {
		var kurang = $(this).siblings("#jumlahstok").val();
		var tes = parseInt(kurang) - parseInt(1);
		if (kurang == 1) {
			$(this).siblings("#jumlahstok").attr("value", 1);
		} else {
			$(this).siblings("#jumlahstok").attr("value", tes);
		}
	});
});
