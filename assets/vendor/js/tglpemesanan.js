// untuk nama hari dan bulan
var hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
var bulan = ['January', 'February', 'March', 'April', 'Mey', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// untuk tanggal
var _hari = getwaktu.getDay();
var gettanggal = getwaktu.getDate();
var _bulan = getwaktu.getMonth();
var gettahun = getwaktu.getFullYear();

// untuk mengambil bulan wilayah indonesia
var gethari = hari[_hari];
var getbulan = bulan[_bulan];

// mengambil waktu pembayaran sekarang
document.getElementById('getwaktupembayaran').innerHTML = gethari + ", " + gettanggal + " " + getbulan + " " + gettahun;
