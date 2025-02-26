<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body  class="bg-grey-800 flex items-center justify-center h-screen">
    <?php
    $nomer1 = "";
    $nomer2 = "";
    $operator = "";
    $hasil = "";

    if(isset($_POST['hitung'])) {
        $nomer1 = $_POST['nomer1'];
        $nomer2 = $_POST['nomer2'];
        $operator = $_POST['operator'];


        switch ($operator) {
            case 'tambah':
                $hasil = $nomer1 + $nomer2;
                break;
            case 'kurang':
                  $hasil = $nomer1 - $nomer2;
                break  ;
            case 'kali':
                  $hasil = $nomer1 * $nomer2;
                break  ; 
            case 'bagi':
                  $hasil = $nomer1 / $nomer2;   
                  break  ;    
        }
    }
    ?>
  <div class="bg-white p-8 rounded-lg shadow-xl w-96  ">
    <h2 class="text-2xl font-semibold text-center mb-4">Kalkulator</h2>
    <form action="" method="POST">
        <input type="number" name="nomer1" class="w-full p-3 mb-4 border border-red-900 rounded-md text-center"autocomplete="off" placeholder="masukkan Bilangan pertama" value="<?php echo $nomer1 ?>">
        <input type="number" name="nomer2" class="w-full p-3 mb-4 border border-red-900 rounded-md text-center"autocomplete="off" placeholder="masukkan Bilangan kedua" value="<?php echo $nomer2 ?>">
        <select name="operator" class="w-full p-3 mb-4 border border-red-900 rounded-md">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
        </select>    
        <input type="submit" name="hitung" value="hitung" class="w-full p-3 mb-4 bg-red-400 border border-red-700 rounded-md hover:bg-red-800  hover:shadow-lg hover:shadow-red-900/90"p>
        <input type="text" name="hasil" class="w-full p-3 mb-4 border border-red-900 rounded-md text-center transition duration-150 ease-in-out" readonly value="<?php echo $hasil; ?>"></input>
         
    </form>
  </div>
    </form>
    </h1>
  </body>
</html>