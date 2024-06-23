<html>

<head>
    <TITLE>Responsive rotating gears with pure CSS</TITLE>
    <META name="Author" lang="it" content="Desirée Pucci">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
 #gear1, #gear2, #gear3, #gear4, #gear5{
    color: #888;
    display: block;
    float: left;
    position: absolute;
}

 .gear {
    color: #888;
    display: block;
    float: left;
    position: absolute;
}
            
#gear1 {
    top: 300px;
    left: 400px;
}
            
/* #gear2 {
    top: 90px;
    left: 90px;
}

#gear3 {
    top: 140px;
    left: 140px;
}

#gear4 {
    top: 190px;
    left: 190px;
}

#gear5 {
    top: 200px;
    left: 200px;
} */

.spin {
    -webkit-animation:spin 4s linear infinite;
    -moz-animation:spin 4s linear infinite;
    animation:spin 4s linear infinite;
}

.spin-back {
    -webkit-animation:spin-back 4s linear infinite;
    -moz-animation:spin-back 4s linear infinite;
    animation:spin-back 4s linear infinite;
}

@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

@-moz-keyframes spin-back { 100% { -moz-transform: rotate(-360deg); } }
@-webkit-keyframes spin-back { 100% { -webkit-transform: rotate(-360deg); } }
@keyframes spin-back { 100% { -webkit-transform: rotate(-360deg); transform:rotate(-360deg); } }

.fa-6x{
    font-size: 6em;
}
.fa-7x{
    font-size: 7em;
}
.fa-8x{
    font-size: 8em;
}
.fa-9x{
    font-size: 9em;
}
.fa-10x{
    font-size: 10em;
}
    </style>
</head>

<body>
    <div id="test">
        <i id="gear1" class="fa fa-5x fa-gear spin"></i>
    </div>

    <script>
        $(document).ready(function () {
            let i = 0;
            let top = 300;
            let left = 400;
            let lasttop = 300;
            let lastleft = 0;
            let lastpos = 0;
            
            $('body').click(function (e) { 
                e.preventDefault();
                let plusOrMinus = Math.random() < 0.5 ? -1 : 1;
                let number = 1 + Math.floor(Math.random() * 4);
                console.log('click');
                if(i == 0){
                i = 1;
                top = top + (plusOrMinus * 60);
                left = left + (plusOrMinus * 60);
                $('#test').append(`
                    <i class="gear fa fa-5x fa-gear spin" style="top:`+top+`px;left:`+left+`px"></i>
                `);
                }
                else
                {
                    i = 0;
                    top = top + (plusOrMinus * 60);
                    left = left + (plusOrMinus * 60);
                    $('#test').append(`
                        <i class="gear fa fa-5x fa-gear spin-back" style="top:`+top+`px;left:`+left+`px"></i>
                    `);
                }
                console.log('i='+i+
                '\ntop='+top+
                '\nleft='+left+
                '\nnumber='+number
                );
            });
        });
    </script>
</body>
</html>
