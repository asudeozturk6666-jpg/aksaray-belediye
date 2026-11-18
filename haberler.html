<?php
require_once 'db.php';
// Veritabanından haberleri çekme (En son eklenen en üstte)
$stmt = $db->query("SELECT * FROM haberler ORDER BY id DESC");
$haberler = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Aksaray Belediyesi - Son Haberler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2 class="mb-4 border-bottom pb-2">Belediye Duyuruları ve Haberler</h2>
        <div class="row">
            <?php foreach ($haberler as $haber): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="<?= htmlspecialchars($haber['resim'] ?? 'assets/img/default.jpg') ?>" class="card-img-top" alt="Haber Resmi" style="height: 200px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($haber['baslik']) ?></h5>
                        <p class="card-text text-muted small"><?= mb_substr(strip_tags($haber['icerik']), 0, 100) ?>...</p>
                        <a href="haber-detay.php?id=<?= $haber['id'] ?>" class="btn btn-outline-primary mt-auto">Devamını Oku</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>