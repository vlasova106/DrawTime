<html>

<head>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript">

    </script>
    <style>

        body {
            margin:0px !important;
            -webkit-touch-callout: none;
            -webkit-text-size-adjust: none;
            -webkit-user-select: none;
            padding-top: 20px;
            padding-left: 20px;
            background-color: #282828 !important;
        }

        .sfx-canvas {
            display: none;
        }

        .drawr-toolbox {
            border-radius: 0px !important;
        }

        .timer {
            position: absolute;
            top: 1vw;
            right: 5vw;
            color: #E9E9E9;
            padding: 6px;
            background-color: rgba(0, 0, 0, 0.4);
        }

        #ref {
            position: absolute;
            top: 1vw;
            right: 5vw;
            border: #F1F2F8 solid 5px;
            height: 49vw;
        }

        #drawr-container {
            position: absolute;
            top: 1vw;
            left: 5vw;
            width: 49vw;
            height: 49vw;
        }

        #pause, #play, #quit {
            width: 45px;
            height: 45px;
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.4);
        }

        #pause, #play {
            position: absolute;
            top: 5vw;
            right: 5vw;
        }

        #quit {
            position: absolute;
            top: 8vw;
            right: 5vw;
        }

        #quitModal {
            position: absolute;
            top: 18vw;
            right: 30vw;
            height: 110px;
            width: 40vw;
            color: #FFFFFF;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
        }

    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="jquery.drawr.combined.js"></script>

</head>

<body>



<div id="drawr-container">
    <canvas class="demo-canvas drawr-test1" id="demo-canvas"></canvas>
</div>

<img src="" id="ref">
<input type="file" id="file-picker" style="display:none;">

<h2 class="text-right timer"> Time:
    <span id="minutes">0</span>
    :
    <span id="seconds">0</span>
</h2>

<img src="img/pause.png" id="pause" onclick="pause()">
<img src="img/play.png" id="play" onclick="pause()">


<img src="img/x.png" id="quit" onclick="quit()">

<div id="quitModal">
    <h2 class="text-center">Вы уверены, что хотете завершить работу?</h2>
    <button type="button" class="btn btn-success" onclick="save_image();">Да</button>
    <button type="button" class="btn btn-danger" onclick="document.getElementById('quitModal').hidden = true;">Нет</button>
</div>

<a id="download" download="/files/myImage.jpg" href="" onclick="download_img(this);">Download to myImage.jpg</a>

<script src="welcome.blade.php"></script>

<script type="text/javascript">
    var cookieValue = document.cookie.replace(/(?:(?:^|.*;\s*)time\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    var img_num = document.cookie.replace(/(?:(?:^|.*;\s*)img\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    var type = document.cookie.replace(/(?:(?:^|.*;\s*)type\s*\=\s*([^;]*).*$)|^.*$/, "$1");
    var seconds = cookieValue*60;

    var ref=document.getElementById("ref");
    var img_src = "refs/"+type+"/"+img_num*-1+".jpg";
    ref.src=img_src;

    function delete_cookie(name) {
        document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }


    var name = "{{ Auth::user()->name }}";
    var a = 0;
    var b = 0;

    function save_image() {
        var imagedata = $("#drawr-container .demo-canvas").drawr("export","image/jpeg");
        var element = document.createElement('a');
        element.setAttribute('href', imagedata);
        element.setAttribute('download', name+".jpg");
        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
        document.cookie = "time="+-1+"";
        delete_cookie("img");
        delete_cookie("type");
    }


    $("#drawr-container .demo-canvas").drawr({
        "enable_tranparency" : false
    });

    $(".demo-canvas").drawr("start");

    var buttoncollection = $("#drawr-container .demo-canvas").drawr("button", {
        "icon":"mdi mdi-content-save mdi-24px"
    }).on("touchstart mousedown",function(){
        var imagedata = $("#drawr-container .demo-canvas").drawr("export","image/jpeg");
        var element = document.createElement('a');
        element.setAttribute('href', imagedata);// 'data:text/plain;charset=utf-8,' + encodeURIComponent("sillytext"));
        element.setAttribute('download', name+".jpg");
        element.style.display = 'none';
        document.body.appendChild(element);
        element.click();
        document.body.removeChild(element);
    });
    $("#file-picker")[0].onchange = function(){
        var file = $("#file-picker")[0].files[0];
        if (!file.type.startsWith('image/')){ return }
        var reader = new FileReader();
        reader.onload = function(e) {
            $("#drawr-container .demo-canvas").drawr("load",e.target.result);
        };
        reader.readAsDataURL(file);
    };

    $("#canvas").drawr({
        "undo_max_levels" : 10
    });

    $("#canvas").drawr({
        "canvas_width": 720,
        "canvas_height": 720
    });


    var isPause = -1;
    document.getElementById('play').hidden = true;

    function pause() {
        isPause*=-1;
        if (isPause == 1) {
            document.getElementById('play').hidden = false;
            document.getElementById('pause').hidden = true;
            document.getElementById('ref').style.filter = "blur(10px)";
            $(".demo-canvas").drawr("stop");

        }else {
            document.getElementById('play').hidden = true;
            document.getElementById('pause').hidden = false;
            document.getElementById('ref').style.filter = "blur(0px)";
            $(".demo-canvas").drawr("start");
            timer_func();
        }
    }

    document.getElementById('quitModal').hidden = true;
    function quit() {
        document.getElementById('quitModal').hidden = false;
    }

    function timer_func(){
        if (isPause == -1){
            a = seconds % 60;
            b=seconds;
            b = Math.trunc(b/60);

            if (a >= 0 && b >= 0){
                if (a<10) {
                    document.getElementById('seconds').innerHTML = "0"+a;
                }else {
                    document.getElementById('seconds').innerHTML = a;
                }

                if (b<10) {
                    document.getElementById('minutes').innerHTML = "0"+b;
                }else {
                    document.getElementById('minutes').innerHTML = b;
                }
            }

            if (seconds<=0){
                $(".demo-canvas").drawr("stop");
                save_image();
            }
            else {
                seconds--;
                setTimeout(timer_func, 1000);
            }
        }

        if (seconds<-10){
            document.location.replace("http://drawtime/home");
        }
    }

    timer_func();



    download_img = function(el) {
        var canvas = document.getElementById('demo-canvas');
        var imageURI = canvas.toDataURL("image/jpg");
        el.href = imageURI;
    }

</script>

</body>
</html>