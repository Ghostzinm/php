<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Álbum de músicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <header class="bg-light">
        <h1 class="text-center fw-bold p-2">Álbum de músicas</h1>
    </header>

    <main class="container d-flex justify-content-center w-100">
        <section class="bg-light w-100 p-3" style="max-width: 500px; border-radius: 8px;">
            <form action="./upload.php" method="POST" enctype="multipart/form-data">
                <div class="mb-2">
                    <label for="txtAlbum" class="form-label">Nome do álbum</label>
                    <input type="text" id="txtAlbum" name="txtAlbum" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="txtMusica" class="form-label">Nome da música</label>
                    <input type="text" id="txtMusica" name="txtMusica" class="form-control" required>
                </div>
                <div class="mb-2">
                    <label for="txtArquivo" class="form-label">Arquivo da música</label>
                    <input type="file" id="txtArquivo" name="txtArquivo" accept="audio/*" class="form-control" required>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-success w-100">Cadastrar música</button>
                </div>
            </form>
        </section>
    </main>

</body>

</html>
