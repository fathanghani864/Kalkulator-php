<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body  class="bg-grey-800 flex items-center justify-center h-screen">

<?php
 
      $nilai_tugas ="";
      $nilai_uts = "";
      $nilai_uas = "";
      $hasil_akhir = "";


      if(isset($_POST['hitung'])) {
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nama = $_POST['nama'];

        $tugas = $nilai_tugas * 0.3; 
        $uas   = $nilai_uas * 0.4;
        $uts   = $nilai_uts * 0.3;;

        $hasil_akhir = $tugas + $uts + $uas;


        if($hasil_akhir >= 85 ){
          $status = 'A';
      }elseif ($hasil_akhir >= 70) {
          $status = 'B';
      }elseif ($hasil_akhir >=60) {
          $status = 'C';
      }elseif ($hasil_akhir >=50) {
        $status = 'D';
      }else {
        $status = 'E';
      };
      }
?>
  
  <div class="bg-white p-8 rounded-lg shadow-xl w-96 mr-5  ">
    <h2 class="text-2xl font-semibold text-center mb-4">Form input nilai siswa</h2>
    <form action="" method="POST">
      <label for="text1">nama siswa</label>
       <input type="text" name="nama" class="w-full p-3 mb-4 border border-red-900 rounded-md"autocomplete="off">
        <label for="text2">Nilai tugas</label>
        <input type="number" name="nilai_tugas" class="w-full p-3 mb-4 border border-red-900 rounded-md text-center"autocomplete="off">
        <label for="text3">nilai uts</label>
        <input type="number" name="nilai_uts" class="w-full p-3 mb-4 border border-red-900 rounded-md"autocomplete="off">
        <label for="text4">nilai uas</label>
        <input type="number" name="nilai_uas" class="w-full p-3 mb-4 border border-red-900 rounded-md text-center"autocomplete="off">
        <input type="submit" name="hitung" value="hitung" class="w-full p-3 mb-4 bg-red-400 border border-red-700 rounded-md hover:bg-red-800  hover:shadow-lg hover:shadow-red-900/90"p>
    </form>

    
  </div>
  <div class="">
  <div class="bg-white p-8 rounded-lg shadow-xl w-96  "  method="POST">
    <h2 class="text-2xl font-semibold text-center mb-4">hasil penilaian</h2>
    <form action="">
    <table class="border-collapse border border-gray-400 w-full">
  <thead class= "bg-gray-900 text-white">
    <tr>
      <th class="border border-gray-300 text-center">Nama</th>
      <th class="border border-gray-300 text-center">Nilai akhir</th>
      <th class="border border-gray-300 text-center">kategory</th>
    </tr>
  </thead>
 
    <tr>
      <td class="border border-gray-300 text-center"><?php echo $nama;?></td>
      <td class="border border-gray-300 text-center"><?php echo $hasil_akhir; ?></td>
      <td class="border border-gray-300 text-center"><?php echo $status; ?></td>
    </tr>
</table>
        
    </form>
   
  </div>
  <div class="button">
         <input type="submit" name="hasil akhir" value="hasil akhir" class="w-full p-3 mb-4 bg-red-400 border border-red-700 rounded-md hover:bg-red-800  hover:shadow-lg hover:shadow-red-900/90  mt-5" p>
         </div>
  </div>
  
  </body>
</html>


