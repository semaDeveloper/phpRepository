<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#F44336">
    <img style="width: 60px; margin-right: 20px;" src="../sari.png" alt="logo" style="" />
    <a class="navbar-brand" href="index.php">MONDO DELLA PASTA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php"><b>Ana Sayfa</b></a>
            </li>


            <?php if(isset($_COOKIE["oturum"])){ ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php"><b>Mesajlar</b></a>
            </li>
            <?php } ?>


        </ul>
        <?php if(isset($_COOKIE["oturum"])){ ?>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-success" href="../cikis.php" role="button"><i class="fas fa-sign-out-alt"></i> Çıkış
                Yap</a>
        </form>
        <?php }else{ ?>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-success" href="../giris.php" role="button"><i class="fas fa-sign-out-alt"></i> Giriş
                Yap</a>
        </form>
        <?php } ?>
    </div>
</nav>