<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doktor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Doktor Bilgileri</h3>
            </div>
            <div class="card-body">
                @if(session('doctor'))
                <?php $doctor = session('doctor'); ?>
                <p><strong>Ad:</strong> {{ $doctor->name }}</p>
                <p><strong>Email:</strong> {{ $doctor->email }}</p>
                <p><strong>Uzmanlık Alanı</strong> {{ $doctor->department }}</p>

                <!-- Diğer bilgileri buraya ekleyebilirsiniz -->
                @else
                <p>Doktor bilgileri bulunamadı.</p>
                @endif
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3>Duyurular</h3>
            </div>
        </div>
    </div>
</body>
</html>
