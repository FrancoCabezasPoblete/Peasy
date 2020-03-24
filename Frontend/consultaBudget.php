    <?php
    $sql_cpu = "SELECT * FROM cpu WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_cpu);
    $gsent->execute();
    $cpu = $gsent->fetchAll();

    $sql_gab = "SELECT * FROM gabinete WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_gab);
    $gsent->execute();
    $gab = $gsent->fetchAll();

    $sql_gpu = "SELECT * FROM gpu WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_gpu);
    $gsent->execute();
    $gpu = $gsent->fetchAll();

    $sql_hdd = "SELECT * FROM hdd WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_hdd);
    $gsent->execute();
    $hdd = $gsent->fetchAll();

    $sql_placa = "SELECT * FROM placa WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_placa);
    $gsent->execute();
    $placa = $gsent->fetchAll();

    $sql_psu = "SELECT * FROM psu WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_psu);
    $gsent->execute();
    $psu = $gsent->fetchAll();

    $sql_ram = "SELECT * FROM ram WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_ram);
    $gsent->execute();
    $ram = $gsent->fetchAll();

    $sql_ssd = "SELECT * FROM ssd WHERE precio < $budget ORDER BY precio DESC";
    $gsent = $pdo->prepare($sql_ssd);
    $gsent->execute();
    $ssd = $gsent->fetchAll();
    ?>
