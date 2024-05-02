<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            text-align: center;
        }
        h2 {
            margin-top: 20px;
        }
        .section {
            margin-top: 20px;
        }
        .section h3 {
            margin-bottom: 5px;
        }
        .section p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Curriculum Vitae</h1>
        <?php include 'data.php'; ?>
        
        <div class="section">
            <h2>Data Diri</h2>
            <img src="https://substackcdn.com/image/fetch/f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fbucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com%2Fpublic%2Fimages%2Fc123357d-c61e-44cd-bdd1-de6b4c3fb0b1_384x211.png" alt="">
            <p><strong>Nama:</strong> <?php echo $Data_Diri['nama']; ?></p>
            <p><strong>Usia:</strong> <?php echo $Data_Diri['usia']; ?></p>
            <p><strong>Phone:</strong> <?php echo $Data_Diri['phone']; ?></p>
            <p><strong>Alamat:</strong> <?php echo $Data_Diri['alamat']; ?></p>
            <p><strong>Makanan Kesukaan:</strong> <?php echo $Data_Diri['makanan kesukaan']; ?></p>
            <p><strong>Idol:</strong> <?php echo $Data_Diri['idol']; ?></p>
            <p><strong>Bias:</strong> <?php echo $Data_Diri['bias']; ?></p>
            <p><strong>Harapan:</strong> <?php echo $Data_Diri['harapan']; ?></p>
        </div>
        
        <div class="section">
            <h2>Pendidikan</h2>
            <?php foreach ($pendidikan as $edu): ?>
                <h3><?php echo $edu['Nama Sekolah']; ?></h3>
                <p><?php echo $edu['Tahun']; ?></p>
            <?php endforeach; ?>
        </div>
        
        <div class="section">
            <h2>Pengalaman</h2>
            <?php foreach ($pengalaman as $exp): ?>
                <h3><?php echo $exp['posisi']; ?></h3>
                <p><?php echo $exp['instansi']; ?></p>
                <p><?php echo $exp['tahun']; ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
 