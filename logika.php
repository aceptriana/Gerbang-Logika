
<?php 

echo "\033[37;1m###################################################\n";
echo "\033[34;1m#           Dibuat Oleh : Acep Gans'z             #\n";
echo "\033[34;1m#           WhatsApp    : 085797616471            #\n";
echo "\033[34;1m#  Gerbang Logika - TKJ BlackHat - Thanks Micin   #\n";
echo "\033[37;1m###################################################\n";
echo "\033[32;1m1. Gerbang AND\n";
echo "\033[35;1m2. Gerbang OR\n";
echo "\033[36;1m3. Gerbang NOT\n";
echo "\033[31;1m4. Gerbang NAND\n";
echo "\033[37;1m5. Gerbang NOR\n";
echo "\033[34;1m6. Gerbang X-OR (Exclusive OR)\n";
echo "\033[33;1m7. Gerbang X-NOR (Exlusive NOR)\n";
echo "Pilih = ";
$pil = trim(fgets(STDIN));
if ($pil == '1') {
	sleep(2);
	print("\033[37;1mGerbang AND memerlukan 2 atau lebih Masukan (Input) untuk menghasilkan hanya 1 Keluaran (Output). Gerbang AND akan menghasilkan Keluaran (Output) Logika 1 jika semua masukan (Input) bernilai Logika 1 dan akan menghasilkan Keluaran (Output) Logika 0 jika salah satu dari masukan (Input) bernilai Logika 0. Simbol yang menandakan Operasi Gerbang Logika AND adalah tanda titik (“.”) atau tidak memakai tanda sama sekali. Contohnya : Z = X.Y atau Z = XY.\n");
	exit();
} if ($pil == '2') {
	sleep(2);
	print("\033[34;1mGerbang OR memerlukan 2 atau lebih Masukan (Input) untuk menghasilkan hanya 1 Keluaran (Output). Gerbang OR akan menghasilkan Keluaran (Output) 1 jika salah satu dari Masukan (Input) bernilai Logika 1 dan jika ingin menghasilkan Keluaran (Output) Logika 0, maka semua Masukan (Input) harus bernilai Logika 0.\n");
	exit();
} if ($pil == '3') {
	sleep(2);
	print("Gerbang NOT hanya memerlukan sebuah Masukan (Input) untuk menghasilkan hanya 1 Keluaran (Output). Gerbang NOT disebut juga dengan Inverter (Pembalik) karena menghasilkan Keluaran (Output) yang berlawanan (kebalikan) dengan Masukan atau Inputnya. Berarti jika kita ingin mendapatkan Keluaran (Output) dengan nilai Logika 0 maka Input atau Masukannya harus bernilai Logika 1. Gerbang NOT biasanya dilambangkan dengan simbol minus (“-“) di atas Variabel Inputnya.\n");
	exit();
} if ($pil == '4') {
	sleep(2);
	print("Arti NAND adalah NOT AND atau BUKAN AND, Gerbang NAND merupakan kombinasi dari Gerbang AND dan Gerbang NOT yang menghasilkan kebalikan dari Keluaran (Output) Gerbang AND. Gerbang NAND akan menghasilkan Keluaran Logika 0 apabila semua Masukan (Input) pada Logika 1 dan jika terdapat sebuah Input yang bernilai Logika 0 maka akan menghasilkan Keluaran (Output) Logika 1.\n");
	exit();
} if ($pil == '5') {
	sleep(2);
	print("Arti NOR adalah NOT OR atau BUKAN OR, Gerbang NOR merupakan kombinasi dari Gerbang OR dan Gerbang NOT yang menghasilkan kebalikan dari Keluaran (Output) Gerbang OR. Gerbang NOR akan menghasilkan Keluaran Logika 0 jika salah satu dari Masukan (Input) bernilai Logika 1 dan jika ingin mendapatkan Keluaran Logika 1, maka semua Masukan (Input) harus bernilai Logika 0.\n");
	exit();
} if ($pil == '6') {
	sleep(2);
	print("X-OR adalah singkatan dari Exclusive OR yang terdiri dari 2 Masukan (Input) dan 1 Keluaran (Output) Logika. Gerbang X-OR akan menghasilkan Keluaran (Output) Logika 1 jika semua Masukan-masukannya (Input) mempunyai nilai Logika yang berbeda. Jika nilai Logika Inputnya sama, maka akan memberikan hasil Keluaran Logika 0.\n");
	exit();
} if ($pil == '7') {
	sleep(2);
	print("Seperti Gerbang X-OR,  Gerban X-NOR juga terdiri dari 2 Masukan (Input) dan 1 Keluaran (Output). X-NOR adalah singkatan dari Exclusive NOR dan merupakan kombinasi dari Gerbang X-OR dan Gerbang NOT. Gerbang X-NOR akan menghasilkan Keluaran (Output) Logika 1 jika semua Masukan atau Inputnya bernilai Logika yang sama dan akan menghasilkan Keluaran (Output) Logika 0 jika semua Masukan atau Inputnya bernilai Logika yang berbeda. Hal ini merupakan kebalikan dari Gerbang X-OR (Exclusive OR).\n");
	exit();
} else {
	print("KU TONJOK BAPAK KAU MONYET\n");
	exit();
}

?>
