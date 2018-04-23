<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
include ('config.php');
$nama_pengguna=$_GET['nama_pengguna'];
$query="SELECT*FROM pengguna";
$result=mysql_query($query);
$num=mysql_num_rows($result);
mysql_close();
?>
 <div id='calc-contain'>
  
          <form name="calculator">
            
            <input type="text" name="answer" />
            <br>
            
            <input type="button" value=" 1 " onclick="calculator.answer.value += '1'" />
            <input type="button" value=" 2 " onclick="calculator.answer.value += '2'" />
            <input type="button" value=" 3 " onclick="calculator.answer.value += '3'" />
            <input type="button" value=" + " onclick="calculator.answer.value += '+'" />
            <br/>
            
            <input type="button" value=" 4 " onclick="calculator.answer.value += '4'" />
            <input type="button" value=" 5 " onclick="calculator.answer.value += '5'" />
            <input type="button" value=" 6 " onclick="calculator.answer.value += '6'" />
            <input type="button" value=" - " onclick="calculator.answer.value += '-'" />
            </br>
          
            <input type="button" value=" 7 " onclick="calculator.answer.value += '7'" />
            <input type="button" value=" 8 " onclick="calculator.answer.value += '8'" />
            <input type="button" value=" 9 " onclick="calculator.answer.value += '9'" />
            <input type="button" value=" x " onclick="calculator.answer.value += '*'" />
            </br>
        
            <input type="button" value=" c " onclick="calculator.answer.value = ''" />
            <input type="button" value=" 0 " onclick="calculator.answer.value += '0'" />
            <input type="button" value=" = " onclick="calculator.answer.value = eval(calculator.answer.value)" />
            <input type="button" value=" / " onclick="calculator.answer.value += '/'" />
            </br>
  
    
          </form>
		  </div>

  <h4><b>Isikan Borang dibawah</b></h4>
 <hr>
<form id="form" method="post" action="pros_insert.php">
Catatan :
<input type="textfield" placeholder="Catatan anda ?" type="text" name="catatan" value=""/><br>
Nama Pelanggan:
<input name="nama_pengguna" value="<?php echo $nama_pengguna;?>"/>
<input type="submit" value="Hantar"></button>
</form>
</body>
</html>