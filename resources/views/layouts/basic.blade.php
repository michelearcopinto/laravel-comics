<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/js/app.js')

    <style>
        header {
            nav {
                display: flex;
                align-items: center;
                justify-content: space-between;

                figure {
                    padding-block: 20px;
                }

                figure:hover {
                    cursor: pointer;
                }

                ul {
                    display: flex;
                    text-transform: uppercase;
                    font-weight: 700;

                    li {
                        line-height: 143px;
                        padding-inline: 10px;
                        font-size: 20px;
                    }

                    li:hover {
                        cursor: pointer;
                    }
                }
            }

            .jumbo-container {
                figure {
                    background-color: black;
                    color: white;
                    font-size: 30px;
                    font-weight: 700;
                    height: 350px;
                    overflow: hidden;
                }
            }
        }
    </style>

    @yield('style')
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <main>
        @yield('main_content')
    </main>
</body>

</html>
