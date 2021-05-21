<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>

<body>

    <table id="customers">
        <tr>
            <th>Ad Soyad</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Konu</th>
            <th>Mesaj</th>

        </tr>
        <?php 

include ("baglanti.php");
$sec="Select * From iletisim";
$sonuc=$baglan->query($sec);

if($sonuc->num_rows>0)
{
    while($cek=$sonuc->fetch_assoc())
    {
        echo "
        <tr>
            <td>".$cek['adsoyad']."</td>
            <td>".$cek['telefon']."</td>
            <td>".$cek['email']."</td>
            <td>".$cek['konu']."test</td>
            <td>".$cek['mesaj']."</td>
        </tr>
        
        
        ";
        
    }
}
else{
    echo"Veritabanında veri yok";
}

?>


    </table>

</body>

</html>