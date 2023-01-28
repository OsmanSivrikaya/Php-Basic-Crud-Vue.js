<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.10/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>
    @font-face {
        font-family: 'Memphis';
        src: url(./wwwroot/css/Poppins-Bold.ttf);
    }

    body {
        font-family: 'Memphis', sans-serif;
        background: linear-gradient(90deg, rgba(25,25,28,1) 0%, rgba(81,81,84,1) 46%, rgba(36,3,30,1) 100%);
    }

    #Anasayfa {
        height: 950px;
        width: 100%;
        background-image: url("./wwwroot/img/arkaplan.jpg");
        border-bottom-left-radius: 10%;
        border-bottom-right-radius: 10%;
    }
    @media (max-height: 490px) {
        #Anasayfa {
        height: 850px;
        width: 100%;
        background-image: url("./wwwroot/img/arkaplan.jpg");
        border-bottom-left-radius: 10%;
        border-bottom-right-radius: 10%;
    }
    }
    .navbar-toggler-icon {
        width: 10px !important;
        height: 10px !important;
    }

    .navbar-toggler {
        padding: 0.01rem 0.55rem;
        margin-bottom: 0.90rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.3125rem;
        padding-bottom: 0.3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap;
    }

    .navbar-collapse {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .navbar {
        padding-bottom: 20px;
    }

    @media (max-width: 222px) {
        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 80px;
        }
    }

    input,
    select,
    button {
        background: rgba(0, 0, 0, 0.5) !important;
        color: white !important;
    }

    input:focus,
    select:focus {
        background: rgba(0, 0, 0, 0.5) !important;
        color: white !important;
    }

    .anabaslik {
        font-size: 72px;
        background: -webkit-linear-gradient(#eee, #333);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .ust {
        margin-top: 200px !important;
    }

    .alt {
        margin-bottom: 400px !important;
    }

    .footer {
        left: 0;
        bottom: 0;
        width: 100%;
        height: 45px;
        background-color: black;
        color: white;
        text-align: center;
    }
</style>

<body>
    <div id="Anasayfa">
        <div class="ml-5 mr-5 text-center" style="border-bottom-left-radius: 10%;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background: rgba(0,0,0,0.5) !important; border-bottom-left-radius: 50%;border-bottom-right-radius: 50%;">
                <a class="navbar-brand" href="#">Etkinlik</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Anasayfa <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#app">Başvur</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row m-5 ust">
            <div class="col-md-12 text-center m-auto">
                <h1 class="anabaslik" style=" font-size: 80px;">ÖĞRENCİ KARİYERİ</h1>
            </div>
        </div>

        <div class="row m-5 alt">
            <div class="col-md-6 text-center m-auto">
                <a style="background: rgba(0,0,0,0.5) !important; border-radius: 25px; width: 400px; color:white;" class="btn btn basvur" href="#app">BAŞVUR</a>
            </div>
        </div>
    </div>

    <div id="app" class="m-5">
        <div class="container" style="color:white;">
            <h1 class="text-center" class="font-size:10px !important;"> BAŞVURU FORMU </h1>
            <form v-on:submit.prevent="OgrenciEkle">
                <div class="form-group">
                    <label for="formGEI1">Ad</label>
                    <input type="text" class="form-control" id="formGEI1" name="Ad" placeholder="Ad" required>
                </div>
                <div class="form-group">
                    <label for="formGEI2">Soyad</label>
                    <input type="text" class="form-control" id="formGEI2" name="Soyad" placeholder="Soyad" required>
                </div>
                <div class="form-group">
                    <label for="formGEI3">Telefon</label>
                    <input type="tel" class="form-control" id="formGEI3" name="Telefon" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="5412223344" required>
                </div>
                <div class="form-group">
                    <label for="formGEI4">Mail</label>
                    <input type="email" class="form-control" id="formGEI4" name="Email" placeholder="mail@mail.com" required>
                </div>
                <div class="form-group">
                    <label for="formGEI5">Okul</label>
                    <select id="formGEI5" class="form-control" v-model="okul" name="OkulId" required>
                        <option v-for="veri in okulArray" v-bind:value="veri.Id">
                            {{veri.OkulAdi}}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGEI5">Bölüm</label>
                    <select id="formGEI5" class="form-control" name="BolumId" required>
                        <option v-for="veri in bolumArray" v-bind:value="veri.Id">
                            {{veri.BolumAdi}}
                        </option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="form-control btn btn">BAŞVUR</button>
                </div>

        </div>
        </form>
    </div>

    <div class="footer p-3">
        <p>ETKİNLİK</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./islem/islem.js"></script>
</body>

</html>