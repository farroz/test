<style>
body{
   background-color: beige;
    font-family:'Bebas Neue';
    font-size:16px;
}
</style>    

<html>
   <head><title>Belajar Form</title></head>
   <body>
<h1>Form pendaftaran Komunitas Game Project Re Mont </h1>
 <form action="register.php" method="POST">
 <fieldset>

<legend>User login info</legend>

<p><label for="idusername">Username:</label> <input id="idusername" type="text" name="username placeholder="username anda" /></p>

<p><label for="idemail">Email:</label> <input id="idemail" type="email" name="email" placeholder="alamat email" /></p>

<p><label for="idpassword">Password: </label> <input id="idpassword" type="password" name=" password" /></p>

</fieldset>

<fieldset>

<legend>Data diri</legend>

<p><label for="idalamat ">Alamat:</label> <input id="idalamat" type="text" name="alamat" placeholder="alamat rumah" /></p>

<p><label for="idtanggallahir">Tanggal lahir: </label> <input id="idtanggallahir" type="date" name="tanggallahir" /></p>

<p><label for="idusia">Usia:</label> <input id="idusia" type="number" name="usia" placeholder=

"usia anda" /></p>

<p><label>Jenis kelamin :</label>

<input type="radio" name="jenis kelamin" value="pria"> Pria

<input type="radio" name="jenis kelamin" value="wanita"> Wanita</p>
</fieldset>
<fieldset>

<legend>Kareer </legend>

<p><label for="idusername">Username:</label> <input id="idusername" type="text" name="username placeholder="username anda" /></p>

<p><label for="idemail">Email:</label> <input id="idemail" type="email" name="email" placeholder="alamat email" /></p>

<p><label for="idpassword">Password: </label> <input id="idpassword" type="password" name=" password" /></p>

</fieldset>
<fieldset>
   <p><label for="idagree">Saya bersedia mengikuti semua peraturan dari komunitas ini</label> <input type="checkbox" name="bersedia_ikut" value="ya" id="idagree"></p>
   <p><input type="reset" value="Reset"><input type="button" name="submit" value="submit"/></p>
</fieldset> 
</form>
</body>
</html>