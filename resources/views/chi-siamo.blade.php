<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CHI SIAMO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
            }

            .flex-center {
                align-items: center;
                display: flex;
                flex-direction: column
            }

            .title {
                font-size: 60px;
            }

            .styleList{
                justify-content: space-around;
                display: flex;
                font-size: 30px;
                list-style-type: none;
            }

            .styleLinkHome{
                color: orange;
                cursor: grabbing;
                text-decoration: none;
            }

            .paragraphSize{
                font-size: 50px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">
            

            <div>
                <div class="title m-b-md flex-center">
                    <h2>{{$titolo['firstword'] . " " . $titolo['lastword']}}</h2>
                    <p class="flex-center paragraphSize">We are the native of America</p>
                    <p class="flex-center paragraphSize"> Now follow us for make America great Again!</p>
                </div>
                <div>
                    <ul class="styleList">
                            <li>
                                <a class="styleLinkHome" href="{{ route("home")}}">Home</a>
                            </li>
                            <li>
                                <a class="styleLinkHome" href="{{ route("about_us")}}">Chi Siamo ?</a>
                            </li>
                            <li>
                                <a class="styleLinkHome" href="#">Florian è un Eroe</a>
                            </li>
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>