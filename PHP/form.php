<!-- Vintya Dewi Anjani -->
<!-- 2000018209 -->
<!-- D -->

<html> 
<head>
    <title>Registration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="stylesheet" href="form.css">
</head> 
<body>
    <form action="connect.php" class="form" id="form" method="post">
    <div class="container">
        <h2><br>
            MY<br>
            GUEST<br>
            BOOK
        </h2>
        
        <div class="forms">
            <img src="form/userr.png" alt="">
            <!-- <input type="text"> defines a single-line text input field -->
            <input type="text" placeholder="Nama Lengkap" name="name" id="name">

            <img src="form/address.png" alt="">
            <input type="text" placeholder="Alamat" name="alamat" id="alamat">

            <img src="form/phone.png" alt="">
            <!-- The <input type="number"> defines a numeric input field -->
            <input type="number" placeholder="08-xxxxxxxxxxx" name="nomor" id="nomor">

            <br>
            <img src="form/gender.png" alt="">
            <select id="gender" name="gender"><br>
                <option value="" disabled selected>Masukkan Jenis Kelamin anda</option>
                <option value="lakilaki">Laki-Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <br>

            <img src="form/winner.png" alt=""><br>
            <input type="text" placeholder="Tulis prestasi anda di sini!" name="prestasi" id="prestasi">
            <br><br>

            <!-- <input type="submit"> defines a button for submitting form data to a form-handler -->
            <!-- <input type="reset"> defines a reset button that will reset all form values to their default values -->
            <input id="button" type="submit"> 
            <input id="button" type="reset">
        </div> 
    </div>

</body> 
</html>