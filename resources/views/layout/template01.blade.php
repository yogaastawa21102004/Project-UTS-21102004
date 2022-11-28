  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Trying')</title>
    <link rel= "stylesheet" href="css/new2.css">
    

</head>
<body>
	</div>
    <div class="container m">
        <ul>
        <li><a href="/UTSweb1/public/syntax"><h3>Code</h3></a></li>
            <li><a href="/UTSweb1/public/alat"><h3>Komponen</h3></a></li>
            <li><a href="/UTSweb1/public/project"><h3>Project</h3></a></li>
            <li><a href="/UTSweb1/public"><h3>Beranda</h3></a></li>
            <div class="logo">
                <h1>Sensor and Transduser</h1>
            </div>
        </ul>
    </div>

    <div class="container w">
        <h2> @yield('Konten')</h2>
   
        
    </div>
    <div class="container s">
        <large> @yield('isi')</large>
       
        
    </div>
    
    </div>
    <div class="container footer">
    <small>Copyright &copy; 2022 - Dekogaa.COM. All Rights Reserved.</small>
    
    </div>


</body>
<div class="wrapper">
        <project id="home">
            <div class="prjt">
                <h6>Bel Otomatis berbasis Arduino UNO menggunakan sensor Avoidance Obstacle dan Buzzer Passive
</h6>
                <div class="gambar">
                   <img src="img/Belotomatis2.jpeg" style="width :650px;height: 450px;">   
                   <img src="img/Belotomatis1.jpeg" style="width :650px;height: 450px;">
                </div>
                <p>Bel Otomatis ini memiliki cara kerja yang sama seperti yang ada di flowchart yang di atas, dimana Ketika di ada tegangan maka sensor Avoid Dance Obstacle akan langsung mendeteksi obyek dan apabila obyek terdeteksi maka buzzer akan memberikan notifikasi suara dan apabila tidak terdeteksi adanya obyek maka Buzzer tidak akan berbunyi dan sensor Avoid akan kembali mendeteksi.
Konsep kerja ini bisa diaplikasikan pada Bel Otomatis di depan rumah dimana Ketika ada tamu yang diam di depan rumah maka sensor akan memberikan notifikasi nada ke pemilik rumah bahwa ada tamu di depan rumah dan tamu juga tidak perlu memencet bel Ketika ingin masuk.
                    </p>    
            </div>
        </project>
</html>