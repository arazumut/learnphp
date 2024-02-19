<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <?php
    const title = "popüler kuslar";
    $kategpriler = array ("youtube","chatgbt","btk akademi","blackbox AI","udemy");
    $kurslar = array(
        "1" => array(
            "baslık" => "php kursu",
            "altbaslık" => "sıfırdan ileri seviyeye php kursu",
            "resim" => "türkbayrak.jpg",
            "yayıntarihi" => "01.12.2004",
            "yorum" => "10",
            "beğeni" => "300"




        ),
        "2" => array(
            "baslık" => "pyhton kursu",
            "altbaslık" => "sıfırdan ileri seviyeye pyhton kursu",
            "resim" => "Başlıksız.jpg",
            "yayın" => "08.01.2007",
            "yorum" => "600",
            "beğeni" => "400"




        )
        );
    $kurs1_baslık = "php kursu";
    $kurs1_altbaslık = "sıfırdan ileri seviyeye php kursu";
    $kurs1_resim = "türkbayrak.jpg"; 
    $kurs1_yayıntarihi = "01.12.2004";
    $kurs1_yorum = "10";
    $kurs1_beğeni = "300";

    
    $kurs2_başlık = "pyhton kursu";
    $kurs2_altbaşlık = "sıfıdan ileriye seviye pyhton kursu";
    $kurs2_resim = "Başlıksız.png";
    $kurs2_yayın = "08.01.2007";
    $kurs2_yorum = "600";
    $kurs2_beğeni = "400";

    ?>
    <style>
        body {
            background-color: aquamarine;
        }
        .col3{
            background-color: black;
            right: 10px;
        }
        .col9{
            background-color: red;
        }
        .cardtext{
            font-family:Arial, Helvetica, sans-serif;
            font-style: italic; 
            font-size: medium;
            color: black;
        }
        .cardtitle{
            font-family:Arial, Helvetica, sans-serif;
            font-style:unset; 
            font-size: medium;
            color: yellow;

        
        }
    </style>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
              <div class="list-group" style="width: 15rem;" >
                
                <a href="https://www.youtube.com/" class="list-group-item list-group-item-action"><?php echo $kategpriler[0]?></a>
                <a href="https://chat.openai.com/" class="list-group-item list-group-item-action"><?php echo $kategpriler[1]?></a>
                <a href="https://www.btkakademi.gov.tr/" class="list-group-item list-group-item-action"><?php echo $kategpriler[2]?></a>
                <a href="https://www.blackbox.ai/" class="list-group-item list-group-item-action"><?php echo $kategpriler[3]?></a>
                <a href="https://www.udemy.com/" class="list-group-item list-group-item-action"><?php echo $kategpriler[4]?></a>
                
                
              </div>
            </div>
            <div class="col-9"></div>
        </div>
        <div class="card mb-3">
            <div class="row"></div>
            <div class="col-4">
                <img src="php.png" alt="" class="img-fluid rounded-start">
            </div>

            <div class="col9">
            <div class="card-body">
                <h5 class="cardtitle">Kamil Umut Araz</h5>
                <p class="cardtext">PHP kursuna hoşgeldiniz. Ben Kamil Umut Araz. Sizinle bu kursta beraber olacağiz</p>
            </div>
            </div>
        </div>
    </div>
<br><br><br>
<body>
    <div class="container my-3">
        <div class="card mb-3">
            <div class="row"></div>
            <div class="col-3">
                <img src="Başlıksız.png" alt="" class="img-fluid rounded-start">

            </div>
                
            <div class="col-9">
            <div class="card-body">
                <h5 class="card-title">Kamil Umut Araz</h5>
                <p class="card-text">PHP kursuna hoşgeldiniz. Ben Kamil Umut Araz. Sizinle bu kursta beraber olacağiz</p>
                <p>
                    <span class="badge rounded-pill text-bg-primary">
                        beğeni:1000
                     </span>
                     <span class="badge rounded-pill text-bg-danger">
                        yorum:500
                     </span>
                     
                     

                </p>
            </div>
            </div>
        </div>
    </div>

</body>

</html>