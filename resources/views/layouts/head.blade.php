<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{url('templeteAssets/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{$title}}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    {{-- FONTS --}}
    <link rel="stylesheet" href="{{url('/fonts/fonts.css')}}">
    {{-- ICONS Font Awesonme --}}
    <link rel="stylesheet" href="{{url('/icons/css/all.min.css')}}">
    {{-- CSS Files --}}
    <link rel="stylesheet" href="{{url('css/modification.css')}}">
    <link href="{{url('/templeteAssets/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('/templeteAssets/assets/css/now-ui-kit.css?v=1.2.0')}}" rel="stylesheet" />
    {{--Animate Scroll--}}
    <script src="{{url('/js/jquery.js')}}"></script>
    <script>
        {{--TODO identificar por secao e ativar botao--}}
        function showbotaoTopo() {
            if (document.getElementById("botaoTopo").style.display === "none") {
                document.getElementById("botaoTopo").style.display = "block";
            }
        }
        function hiddenbotaoTopo() {
            if (document.getElementById("botaoTopo").style.display === "block") {
                document.getElementById("botaoTopo").style.display = "none";
            }
        }
    </script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
            });
        });
    </script>
</head>