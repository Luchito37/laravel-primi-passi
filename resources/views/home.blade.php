


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HELLO WORLD</title>

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
                    <p class="flex-center paragraphSize">This is your Homepage !!</p>
                    <p class="flex-center paragraphSize"> Now choose a link for navigate on the website :</p>
                </div>
                <div>
                    <ul class="styleList">
                        @foreach ($homeLinks as $link)
                            <li>
                                <a class="styleLinkHome" href="#">{{$link['link']}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>
