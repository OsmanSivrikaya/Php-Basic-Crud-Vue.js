<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.10/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>
<style>
    @font-face {
        font-family: 'Memphis';
        src: url(./wwwroot/css/Poppins-Bold.ttf);
    }

    body {
        font-family: 'Memphis', sans-serif;
        background: linear-gradient(180deg, rgba(145,31,138,1) 0%, rgba(126,35,153,1) 17%, rgba(116,45,143,1) 33%, rgba(98,16,135,1) 52%, rgba(202,23,217,1) 100%);
    }

    #Anasayfa {
        height: 950px;
        width: 100%;
        background-image: url("./wwwroot/img/arkaplan.jpg");
    }

    @media (max-height: 490px) {
        #Anasayfa {
            height: 850px;
            width: 100%;
            background-image: url("./wwwroot/img/arkaplan.jpg");
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
        font-size: 10px;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 45px;
        background: linear-gradient(90deg, rgba(13,0,12,1) 0%, rgba(42,25,47,1) 46%, rgba(86,75,87,1) 100%);
        color: white;
        text-align: center;
    }

    input {
        border-radius: 0 !important;
        background: rgba(0, 0, 0, 0.5) !important;
    }

    ::placeholder {
        color: white !important;
        opacity: 1;
        font-size: 12px;
    }

    .basvur {
        border-radius: 0px;
    }


    .title-word {
        animation: color-animation 4s linear infinite;
    }

    .title-word-1 {
        --color-1: #DF8453;
        --color-2: #3D8DAE;
        --color-3: #E4A9A8;
    }

    .title-word-2 {
        --color-1: #DBAD4A;
        --color-2: #ACCFCB;
        --color-3: #17494D;
    }

    .title-word-3 {
        --color-1: #ACCFCB;
        --color-2: #E4A9A8;
        --color-3: #ACCFCB;
    }

    .title-word-4 {
        --color-1: #3D8DAE;
        --color-2: #DF8453;
        --color-3: #E4A9A8;
    }

    @keyframes color-animation {
        0% {
            color: var(--color-1)
        }

        32% {
            color: var(--color-1)
        }

        33% {
            color: var(--color-2)
        }

        65% {
            color: var(--color-2)
        }

        66% {
            color: var(--color-3)
        }

        99% {
            color: var(--color-3)
        }

        100% {
            color: var(--color-1)
        }
    }

    /* Here are just some visual styles. 🖌 */

    .container {
        display: grid;
        place-items: center;
        text-align: center;
        height: 100vh
    }

    .title {
        font-family: "Montserrat", sans-serif;
        font-weight: 800;
        font-size: 8.5vw;
        text-transform: uppercase;
    }

    .dark-blue-bg {
        background-color: #121222;
        height: 30%;
    }

    .container{
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .bubbles{
        position: relative;
        display:flex;
    }

    .bubbles span {
        position: relative;
        width: 30px;
        height: 30px;
        background: #4fc3dc;
        margin: 0 4px;
        border-radius: 50%;
        box-shadow:0 0 0 10px #4fc3dc44,
        0 0 50px #4fc3dc,
        0 0 100px #4fc3dc;
        animation: animate 15s linear infinite;
        animation-duration: calc(255s / var(--i)) ;
    }

    .bubbles span:nth-child(even){
        background: #ff2d75;
        box-shadow: 0 0 0 10px #ff2d7544,
        0 0 50px #ff2d75,
        0 0 50px #ff2d75;
    }

    @keyframes animate {
        0%
        {
            transform: translateY(100vh) scale(0);
        }
        100%
        {
            transform: translateY(-100vh) scale(1);
        }
    }
</style>

<body>
    <div id="Anasayfa">
        <div class="bubbles" v-for="item in sayi ">
            
        </div>
        <div class="ml-5 mr-5 text-center" style="border-bottom-left-radius: 10%;">
            <nav class="navbar navbar-expand-lg navbar-dark"
                style="border-bottom-left-radius: 50%;border-bottom-right-radius: 50%;">
                <a class="navbar-brand" href="#">Etkinlik</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
                <h2 class="title">
                    <span class="title-word title-word-1">Öğrenci</span>
                    <span class="title-word title-word-2">Kariyeri</span>
                </h2>
            </div>
        </div>

        <div class="row m-5 alt">
            <div class="col-md-6 text-center m-auto animate__animated animate__tada">
                <a style="background: rgba(0,0,0,0.5) !important; width: 50%; color:white;" class="btn btn basvur"
                    href="#app">BAŞVUR</a>
            </div>
        </div>
    </div>

    <section class="dark-blue-bg pt-50 pb-50">
        <div>&nbsp;</div>
    </section>


    <div id="app" class="m-5">
        <div class="container" style="color:white; font-size: 12px;">
            <h1 class="text-center" class="font-size:10px !important;"> ETKİNLİK KAYIT </h1>
            <hr class="mb-4" style="width: 10%; height: 3px; background: linear-gradient(45deg, rgba(245, 0, 87, 1) 0%, rgba(255, 138, 101, 1) 100%);">
            <form v-on:submit.prevent="OgrenciEkle" class="m-auto" style="width: 70%;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGEI1" name="Ad" placeholder="Ad" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGEI2" name="Soyad" placeholder="Soyad"
                                required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" class="form-control" id="formGEI3" name="Telefon"
                                pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Telefon" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="formGEI4" name="Email" placeholder="Email"
                                required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="formGEI5">OKUL</label>
                    <select id="formGEI5" class="form-control" v-model="okul" name="OkulId" required>
                        <option v-for="veri in okulArray" v-bind:value="veri.Id">
                            {{veri.OkulAdi}}
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGEI5">BÖLÜM</label>
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
        <p>ETKİNLİK <span style="color:gray">@2023</span></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="./islem/islem.js"></script>
</body>

</html>