<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require_once("config/includes_head.php"); ?>
    <title>Biofiszki</title>
</head>
<body>
    <?php require_once("navbar.php"); ?>
    
    <div class="container main-container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card text-white bg-dark mb-3 flashcard unrotated">
                    <div class="card-header text-unrotated">Rośliny</div>
                    <div class="card-body text-unrotated">
                        <p class="card-text">No title flashcard. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-between mt-5">
            <div class="col-3 d-flex justify-content-start">
                <button type="button" class="btn btn-dark">Previous</button>
            </div>

            <div class="col-3 d-flex justify-content-end">
                <button type="button" class="btn btn-dark">Next</button>
            </div>
        </div>
    </div>

    <?php require_once("config/includes_body.php"); ?>
</body>
</html>