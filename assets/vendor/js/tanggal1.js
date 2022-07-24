var getwaktu = new Date();
var tahun    = getwaktu.getFullYear();

// untuk menampilkan tahun
document.getElementById('gettahun').innerHTML = tahun;

// metode get
function reloadwaktu() {

  var getwaktu = new Date();

  // untuk jam
  var jam    = getwaktu.getHours();
  var menit  = getwaktu.getMinutes();
  var detik  = getwaktu.getSeconds();

  // untuk waktu
  document.getElementById('getwaktu').innerHTML = jam + "." + menit + "." + detik;

}

// untuk nama hari dan bulan
var hari     = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
var bulan    = ['January', 'February', 'March', 'April', 'Mey', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// untuk tanggal
var _hari      = getwaktu.getDay();
var gettanggal = getwaktu.getDate();
var _bulan     = getwaktu.getMonth();
var gettahun   = getwaktu.getFullYear();

// untuk mengambil bulan wilayah indonesia
var gethari  = hari[_hari];
var getbulan = bulan[_bulan];

// untuk menampilkan tanggal pengiriman
var setwaktu = new Date();

var hari    = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
var bulan    = ['January', 'February', 'March', 'April', 'Mey', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

// untuk waktu pemesanan
var tanggall = gettanggal + " " + getbulan + " " + gettahun;

// untuk waktu pengiriman
setwaktu.setDate(gettanggal + 1);

var settanggal_p = setwaktu.getDate();
var sethari_p    = setwaktu.getDay();
var settanggal_p = setwaktu.getDate();
var setbulan_p   = setwaktu.getMonth();

var hari_p  = hari[sethari_p];
var bulan_p = bulan[setbulan_p];

var tanggall_p = settanggal_p + " " + bulan_p + " " + gettahun;

// jquery
$(document).ready(function () {

  $('#inputtanggal').val(tanggall);
  $('#inputtanggal_p').val(tanggall_p);

});

document.getElementById('getwaktupengiriman1').innerHTML = hari_p + ", " + settanggal_p + " " + bulan_p + " " + gettahun;
document.getElementById('getwaktupengiriman2').innerHTML = hari_p + ", " + settanggal_p + " " + bulan_p + " " + gettahun;
document.getElementById('getharipengiriman').innerHTML = hari_p;
