<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswas = [
            ['nis' => '0078983928', 'nik' => '3527032702070003', 'nama' => 'ACH. HUSAMUDDIN AL QUDSI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2007-02-27', 'jenis_kelamin' => 'L', 'alamat' => ''],
            ['nis' => '3086462678', 'nik' => '3527011802080001', 'nama' => 'AFDHOL ARIF SABANA', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-02-18', 'jenis_kelamin' => 'L', 'alamat' => 'JL KRAMAT II, JAWA TIMUR, SAMPANG, KARANG DALEM, 69214'],
            ['nis' => '0083843787', 'nik' => '3527070103080003', 'nama' => 'AHMAD MAULIDI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-03-01', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Kokon BUKER, JRENGIK, SAMPANG, JAWA TIMUR, 69272'],
            ['nis' => '0071943345', 'nik' => '3527034306076593', 'nama' => 'AMILDA', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2007-06-03', 'jenis_kelamin' => 'P', 'alamat' => 'DSN. GLISGIS, JAWA TIMUR, SAMPANG, GUNUNG MADDAH'],
            ['nis' => '0049431609', 'nik' => '3527032612046058', 'nama' => 'AMIR FAUWES', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2004-12-26', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Tambangan TANGGUMONG, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => '0092339501', 'nik' => '3527010809080003', 'nama' => 'ASROFUL RAMADHAN', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-09-08', 'jenis_kelamin' => 'L', 'alamat' => 'DSN . DISANAH TIMUR, JAWA TIMUR, SAMPANG, SRESEH, DISANAH, 69273'],
            ['nis' => '0077037453', 'nik' => '3527042401070003', 'nama' => 'ASRORIM', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2007-01-24', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Rosong BANJARTABULU, CAMPLONG, SAMPANG, JAWA TIMUR, 69281'],
            ['nis' => '0067114440', 'nik' => '3527034308060004', 'nama' => 'AYU WAHYUNI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2006-08-03', 'jenis_kelamin' => 'P', 'alamat' => 'sampang GUNUNG SEKAR, SAMPANG, JAWA TIMUR, 69262'],
            ['nis' => '0062122404', 'nik' => '3527130606060003', 'nama' => 'DANI AFANDI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2006-06-06', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Ragung Selatan RAGUNG, PANGARENGAN, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => '0071645773', 'nik' => '3527025807070002', 'nama' => 'DINDA ALFIN LAILA', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2007-07-18', 'jenis_kelamin' => 'P', 'alamat' => 'Dusun.Tonggoh Bere Pangongseyan PANGONGSEAN, TORJUN, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => '0099935205', 'nik' => '3527021103090001', 'nama' => 'AHMAD FAIZAL', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-03-11', 'jenis_kelamin' => 'L', 'alamat' => 'Dsn. Torjun Barat TORJUN, TORJUN, SAMPANG, JAWA TIMUR, 69271, 69271'],
            ['nis' => '0099897119', 'nik' => '3578162504090008', 'nama' => 'MOCHAMMAD ASYRAFUL MALIK', 'tempat_lahir' => 'SURABAYA', 'tanggal_lahir' => '2009-04-25', 'jenis_kelamin' => 'L', 'alamat' => 'Jl. Bulak Rukem 3/30 RT. 005 RW.005 WONOKUSUMO, SEMAMPIR, KOTA SURABAYA, JAWA TIMUR, 60154, 60154'],
            ['nis' => '3087892316', 'nik' => '3527021707080001', 'nama' => 'ARIL BAITUR RAHMAN', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-07-17', 'jenis_kelamin' => 'L', 'alamat' => 'Tambak Wedi Baru VIII/28 TAMBAK WEDI, KENJERAN, KOTA SURABAYA, JAWA TIMUR, 60126, 60126'],
            ['nis' => '0082225189', 'nik' => '3527021708080007', 'nama' => 'MOH. SYAFI\'IH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-08-17', 'jenis_kelamin' => 'L', 'alamat' => 'Desa Torjun TORJUN, TORJUN, SAMPANG, JAWA TIMUR, 69271, 69271'],
            ['nis' => '3098851912', 'nik' => '3527022711090002', 'nama' => 'MOHAMMAD ISMAIL', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-11-27', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Krestal TORJUN, TORJUN, SAMPANG, JAWA TIMUR, 69271, 69271'],
            ['nis' => '3096126899', 'nik' => '3527020705090004', 'nama' => 'MOHAMMAD MUHLIS', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-05-07', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Krestal TORJUN, TORJUN, SAMPANG, JAWA TIMUR, 69271, 69271'],
            ['nis' => '0084642168', 'nik' => '3527072709080001', 'nama' => 'SAHRUL MUBAROK', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-09-27', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Masjid BANCELOK, JRENGIK, SAMPANG, JAWA TIMUR, 69272, 69272'],
            ['nis' => '0065044870', 'nik' => '3527034604066357', 'nama' => 'MAMNUNAH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2006-01-11', 'jenis_kelamin' => 'P', 'alamat' => 'Dusun Prajjin BANYUMAS, SAMPANG, JAWA TIMUR, 69251, 69251'],
            ['nis' => '0097065592', 'nik' => '3527134405090002', 'nama' => 'SITI MAISATUL HUSNA', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-05-04', 'jenis_kelamin' => 'P', 'alamat' => 'Dusun Gubbu Timur RAGUNG, PANGARENGAN, SAMPANG, JAWA TIMUR, 69271, 69271'],
            ['nis' => '0085451761', 'nik' => '3527035812080001', 'nama' => 'SUCI WULANDARI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-12-18', 'jenis_kelamin' => 'P', 'alamat' => 'Dusun Tambangan TANGGUMONG, SAMPANG, JAWA TIMUR, 69251, 69251'],
            ['nis' => '3100866405', 'nik' => '3527012510100002', 'nama' => 'JALALUDDIN JAILANI AFANDI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2010-10-25', 'jenis_kelamin' => 'L', 'alamat' => ''],
            ['nis' => '3105567004', 'nik' => '3527013005100003', 'nama' => 'MUHAMMAD YAHYA', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2010-05-30', 'jenis_kelamin' => 'L', 'alamat' => 'Desa Disanah DISANAH, SRESEH, SAMPANG, JAWA TIMUR, 69273, 69273'],
            ['nis' => '0093829347', 'nik' => '3527135006090001', 'nama' => 'SOFIATUL JENNAH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-06-10', 'jenis_kelamin' => 'P', 'alamat' => ''],
            ['nis' => '0089174136', 'nik' => '3527070711080001', 'nama' => 'AHMAD ILHAM FIRDAUZ', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-11-07', 'jenis_kelamin' => 'L', 'alamat' => 'Jl. Kusuma Bangsa TANGGUMONG, SAMPANG, JAWA TIMUR, 69251, 69251'],
            ['nis' => '3102719997', 'nik' => '3527026306100001', 'nama' => 'RIZQIKA HASANAH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2010-06-23', 'jenis_kelamin' => 'P', 'alamat' => 'Dsn. Krestal TORJUN, TORJUN, SAMPANG, JAWA TIMUR, 69271, 69271'],
            ['nis' => '0097265079', 'nik' => '3527025808090002', 'nama' => 'IKA WATI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-08-18', 'jenis_kelamin' => 'P', 'alamat' => 'DSN JARGUT PATAPAN, TORJUN, SAMPANG, JAWA TIMUR, 69271, 69271'],
            ['nis' => '3093852330', 'nik' => '3527025104090004', 'nama' => 'INAYAH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-04-11', 'jenis_kelamin' => 'P', 'alamat' => 'Desa Pangongsean PANGONGSEAN, TORJUN, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => '0085371597', 'nik' => '3527030409080008', 'nama' => 'SALMAN ALFARISI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2008-09-04', 'jenis_kelamin' => 'L', 'alamat' => 'Dusun Tambangan , SAMPANG, JAWA TIMUR, 69216, 69216'],
        ];

        $siswa2 = [
            ['nis' => '0097808516', 'nik' => null, 'nama' => 'UMAR FARID', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => '2009-01-10', 'jenis_kelamin' => 'L', 'alamat' => null],
            ['nis' => '0082239379', 'nik' => '3527025802090002', 'nama' => 'ALFIATUN NISAK', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'Dsn. Kaseran PANGONGSEAN, TORJUN, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => null, 'nik' => null, 'nama' => 'DIANA KHOLIDA', 'tempat_lahir' => null, 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => null],
            ['nis' => '0076341899', 'nik' => '3527034602070003', 'nama' => 'ANISATUL LAILA', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'Dsn. Tambangan TANGGUMONG, SAMPANG, JAWA TIMUR, 69251'],
            ['nis' => '3088580035', 'nik' => '3527010508080001', 'nama' => 'BEDRUS SALAM', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'L', 'alamat' => 'DSN. DISANAH TIMUR DISANAH, SRESEH, SAMPANG, JAWA TIMUR, 69273'],
            ['nis' => '0071699450', 'nik' => '3527036809070001', 'nama' => 'ILMIATUS ZAHROH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'DESA GURDIBIH PASEYAN, SAMPANG, JAWA TIMUR, 69251'],
            ['nis' => '0073181543', 'nik' => '3172016211071005', 'nama' => 'INDAH RAMADANI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'Jl. Rawa Bebek PENJARINGAN, KOTA ADM. JAKARTA UTARA, DAERAH KHUSUS IBUKOTA JAKARTA, 14440'],
            ['nis' => '0086654442', 'nik' => '3527026605080001', 'nama' => 'IVA SAFITRI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'T. Barat PANGONGSEAN, TORJUN, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => '0077770589', 'nik' => '3527016805070002', 'nama' => 'LUTFIATUL HIMMAH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'Dsn. Labang LABANG, SRESEH, SAMPANG, JAWA TIMUR, 69272'],
            ['nis' => '3084510773', 'nik' => '3527021003080001', 'nama' => 'MOH. ANAS', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'L', 'alamat' => 'DSN. DUALAS PANGONGSEAN, TORJUN, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => '0074637677', 'nik' => '3527034909070004', 'nama' => 'MUFIDA AULIA', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'DSN BANDUNGAN TANGGUMONG, SAMPANG, JAWA TIMUR, 69216'],
            ['nis' => '0088315473', 'nik' => '3527125701080002', 'nama' => 'MUTMAINNATUL AMBAMI', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'DSN. SEMBUNG RABIYAN, KETAPANG, SAMPANG, JAWA TIMUR, 6920'],
            ['nis' => '0083775772', 'nik' => '3527024605080003', 'nama' => 'NANDA NURUL ISLAMIYAH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'Dsn. Gurbak PANGONGSEAN, TORJUN, SAMPANG, JAWA TIMUR, 69271'],
            ['nis' => '0084156907', 'nik' => '3527011103080003', 'nama' => 'NORHOLIS', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'L', 'alamat' => 'DSN LABANG DUSUN LABANG LABANG, SRESEH, SAMPANG, JAWA TIMUR, 69273'],
            ['nis' => '0078983712', 'nik' => '3578095505070001', 'nama' => 'RISKA RAHMADANI', 'tempat_lahir' => 'SURABAYA', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'Jl. Kusuma Bangsa Desa Tanggumong TANGGUMONG, SAMPANG, JAWA TIMUR, 69216'],
            ['nis' => '0075527923', 'nik' => '3527026306070000', 'nama' => 'WASILATUL FADALAH', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => null],
            ['nis' => '0083733918', 'nik' => '3175064603090007', 'nama' => 'AMINATUZ ZEHROK', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'KOMP. DPR JL. PALA BLOK J.3/15A PULO GEBANG CAKUNG JAKARTA TIMUR'],
            ['nis' => '0055341614', 'nik' => '3527130702050001', 'nama' => 'TAUFIQUR ROHMAN', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'L', 'alamat' => 'DUSUN GUBBU PANYIRANGAN PANGARENGAN'],
            ['nis' => '0087137792', 'nik' => '3527131810080000', 'nama' => 'MOH. IMAMUDDIN', 'tempat_lahir' => 'SAMPANG', 'tanggal_lahir' => null, 'jenis_kelamin' => 'L', 'alamat' => 'DUSUN CAPO RAGUNG PANGARENGAN'],
            ['nis' => '0077874049', 'nik' => '3578126911070001', 'nama' => 'ALIFIA NUR LAILI JAMI\'AH', 'tempat_lahir' => 'SURABAYA', 'tanggal_lahir' => null, 'jenis_kelamin' => 'P', 'alamat' => 'Dusun Dualas PANGONGSEAN, TORJUN, SAMPANG, JAWA TIMUR, 69271'],
        ];



        Siswa::insert($siswas);

        Siswa::insert($siswa2);
    }
}
