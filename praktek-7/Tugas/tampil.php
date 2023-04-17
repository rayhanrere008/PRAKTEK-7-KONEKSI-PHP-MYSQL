<head>
    <title>Buku Tamu</title>
</head>
<center>

<body>
    <h1>DAFTAR TAMU</h1>
    <h2>UPN Veteran Jawa Timur</h2>
    <hr>    
    <table border=1>
    <?php
     $conn=mysqli_connect("localhost","root","","db_buku_tamu");
     $sql= "SELECT nama, email, isi from buku_tamu";
     $hasil = mysqli_query ($conn, $sql);

     $row=mysqli_fetch_row($hasil); 

     echo "<tr>  <td>No
                 <td>Nama
                 <td>Email
                 <td>Isi";
     if ($row)
     { 
       $n=1; 
       do
          {
           list ($nama, $email, $isi)=$row;
           echo "<tr><td>$n
                     <td>$nama
                     <td>$email
                     <td>$isi";
           $n=$n+1;  
          }
       while ($row=mysqli_fetch_row($hasil));
     } 
     else
     {
     echo "<tr><td colspan=7> <center>Tidak ada data";
     }
    
    mysqli_close($conn);
    ?>