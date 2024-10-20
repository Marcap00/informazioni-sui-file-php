<?php
$path = 'img/robo.png';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informazioni sui file</title>
    <!-- Bootstrap 5.3.3 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <?php if (file_exists($path)) : ?>
        <h1 class="text-center text-white my-3">INFORMAZIONI SUI FILE</h1>
        <table class="table table-striped table-hover border border-secondary">
            <tbody>
                <tr>
                    <th class="text-warning">Name</th>
                    <td><?= pathinfo($path, PATHINFO_BASENAME); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Size</th>
                    <td><?= filesize($path); ?> bytes</td>
                </tr>
                <tr>
                    <th class="text-warning">Folder</th>
                    <td><?= pathinfo($path, PATHINFO_DIRNAME); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Extension</th>
                    <td><?= pathinfo($path, PATHINFO_EXTENSION); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">Mime Type</th>
                    <td><?= mime_content_type($path); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">File Type</th>
                    <td><?= filetype($path); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">File Owner</th>
                    <td><?= fileowner($path); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">File Group</th>
                    <td><?= filegroup($path); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">File Permissions</th>
                    <td><?= fileperms($path); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">File Access Time</th>
                    <td><?= fileatime($path); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">File Creation Time</th>
                    <td><?= filectime($path); ?></td>
                </tr>
                <tr>
                    <th class="text-warning">File Modification Time</th>
                    <td><?= filemtime($path); ?></td>
                </tr>
            </tbody>
        </table>
        <?php else : ?>
        <h1 class="text-center text-white my-3">File non trovato</h1>
        <?php endif; ?>
    </div>

</body>

</html>