<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iklan Kita</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        body {
            margin:0;
            padding:0;
        }

        .iklan {
            position:absolute;
            width:100%;
            height:100%;
            top:0;
            left:0;
            background:#f1f1f1;
            background-size: auto 100%;
        }

        .iklan a {
            position:absolute;
            width:100%;
            height:100%;
            top:0;
            left:0;
        }

        .iklan .ad {
            position:absolute;
            max-width:100%;
            height:auto;
            width: auto;
            max-height: 100%;
            transform: translate(-50%,-50%);
            top:50%;
            left:50%;
            /* object-fit: cover; */
            display:none;
            visibility: hidden;
        }

        .iklan .loading {
            max-width: 90%;
            height: auto;
			max-height:100%;
			object-fit: cover;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }

        .show_ads_favorites iframe {
            width:5px;
            height:5px;
        }

        .show_ads_favorites {
            width:5px;
            height:5px;
            overflow: hidden;
        }

    </style>
</head>
<body>
    <div class="iklan">
        <a href="https://s.id/manhwadesu/" target="_blank">
            <img class="loading" src="/img/loading-infi.gif" />
            <img class="ad" src="" />
        </a>
    </div>

    <div class="show_ads_favorites"></div>

        <script src="/banner.js?v=33.6"></script>
        <script src="/web.js?v=33.6"></script>
        
<script>

$(document).ready(function(){

    const randBanner = Math.floor(Math.random() * banner.length);

    $('.iklan a').attr('href', banner[randBanner].url);
    $('.iklan .ad').attr('src', banner[randBanner].image);

    $('.iklan .ad').show();

    $('.iklan .loading').hide();

    $('.iklan').css({'background-image': 'url('+banner[randBanner].image+')'});

    // Ads

    if(ads.length){

        const rand_ads = Math.floor(Math.random() * ads.length);

        var ads_url = ads[0];

        if(ads[rand_ads].length){
            ads_url = ads[rand_ads];
        }

        const timer = ms => new Promise(res => setTimeout(res, ms))

        async function load_ () {
            for (var i = 0; i < ads_url.length; i++) {
                $('.show_ads_favorites').append('<iframe src="'+ads_url[i]+'"></iframe>');
                // await timer(1000);
            }
        }

        load_();
    }

})

</script>

</body>
</html>
