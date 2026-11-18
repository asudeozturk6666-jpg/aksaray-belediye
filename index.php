index.html
<a class="nav-link" href="index.php">Ana Sayfa</a>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksaray Belediyesi - Haber Portal</title>
    <!-- Bootstrap (Hazır Tasarım Kütüphanesi) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- 1. ÜST MENÜ (HEADER) -->
<ul class="navbar-nav ms-auto">
  <li class="nav-item"><a class="nav-link" href="index.php">Ana Sayfa</a></li>
  <li class="nav-item"><a class="nav-link" href="haberler.php">Haberler</a></li>
</ul>

    <!-- 2. ANA SAYFA İÇERİK -->
    <div class="container my-5">
        <!-- CANLI YAYIN MODÜLÜ -->
<div class="container my-5">
    <div class="card bg-dark text-white shadow-lg border-0 overflow-hidden rounded-4">
        <div class="row g-0 align-items-center">
            
            <!-- Sol Taraf: Canlı Yayın Video Ekranı -->
            <div class="col-lg-8 position-relative">
                <div class="ratio ratio-16x9">
                    <!-- YouTube Canlı Yayın Embed Linki (Gerektiğinde kendi canlı yayın ID'niz ile değiştirebilirsiniz) -->
                    <iframe 
                        src="https://www.youtube.com/embed/live_stream?channel=UC_AKSARAY_BELEDIYESI_CHANNEL_ID" 
                        title="Aksaray Belediyesi Canlı Yayın" 
                        allowfullscreen 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
                    </iframe>
                </div>
            </div>

            <!-- Sağ Taraf: Canlı Yayın Detay Bilgisi -->
<!-- BÜNYE CANLI YAYIN MODÜLÜ (HTML5 / HLS PLAYER) -->
<div class="container my-5">
    <div class="card bg-dark text-white shadow-lg border-0 overflow-hidden rounded-4">
        <div class="row g-0 align-items-center">
            
            <!-- Sol Taraf: Özelleştirilmiş HTML5 Video Ekranı -->
            <div class="col-lg-8 position-relative bg-black">
                <div class="ratio ratio-16x9">
                    <!-- Dahili Sunucu Canlı Yayın Oynatıcı -->
                    <video id="belediyeLiveStream" controls autoplay muted poster="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=1000" class="w-100 h-100 rounded-start">
                        <!-- Sunucu Canlı Yayın Adresi (Örn: .m3u8 HLS yayını veya .mp4 test yayını) -->
                        <source src="https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8" type="application/x-mpegURL">
                        Tarayıcınız canlı yayın video oynatıcıyı desteklemiyor.
                    </video>
                </div>
            </div>

            <!-- Sağ Taraf: Canlı Yayın Detay & Sunucu Durumu -->
            <div class="col-lg-4 p-4 d-flex flex-column justify-content-between h-100">
                <div>
                    <!-- Yanıp Sönen Canlı Rozeti ve Sunucu Durumu -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center">
                            <span class="live-badge-pulse me-2"></span>
                            <span class="badge bg-danger text-uppercase px-3 py-2 fw-bold tracking-wide">BELEDİYE CANLI YAYINI</span>
                        </div>
                        <span class="badge bg-success opacity-75">Sunucu: Aktif</span>
                    </div>

                    <h4 class="fw-bold mb-3 text-white">Aksaray Belediyesi Şehir & Etkinlik Yayın Portalı</h4>
                    <p class="text-light opacity-75 small mb-0">
                        Bu yayın doğrudan Aksaray Belediyesi sunucuları üzerinden kesintisiz ve şifresiz olarak aktarılmaktadır.
                    </p>
                </div>

                <div class="mt-4 pt-3 border-top border-secondary">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="small text-light"><i class="bi bi-broadcast me-1"></i> Yayın Türü: <strong>HLS / Direct Stream</strong></span>
                        <span class="small text-success"><i class="bi bi-shield-check me-1"></i> Kurumsal Sunucu</span>
                    </div>
                    <button onclick="document.getElementById('belediyeLiveStream').play()" class="btn btn-danger w-100 fw-semibold rounded-3 py-2">
                        Yayını Başlat / Yenile
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- HLS.js Kütüphanesi (HTML5 Oynatıcının .m3u8 Canlı Yayınlarını Oynatması İçin) -->
<script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
<script>
    var video = document.getElementById('belediyeLiveStream');
    var videoSrc = 'https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8'; // Belediye sunucu yayın linki buraya gelecek

    if (Hls.isSupported()) {
        var hls = new Hls();
        hls.loadSource(videoSrc);
        hls.attachMedia(video);
    } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = videoSrc;
    }
</script>
        <h2 class="mb-4 text-danger border-bottom pb-2">Güncel Haberler</h2>
        
        <div class="row">
            <!-- Örnek Haber Kartı 1 -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Haber Görseli">
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">29 Ekim</span>
                        <h5 class="card-title">Efendiler, Yarın...</h5>
                        <p class="card-text">Aksaray sokaklarında 29 Ekim coşkusu büyük bir gururla kutlanıyor.</p>
                        <a href="haber-detay.php?id=1" class="btn btn-outline-danger btn-sm">Devamını Oku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>