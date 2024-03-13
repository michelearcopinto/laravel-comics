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

        footer {
            .footer-links {
                background-image: url('{{ Vite::asset('resources/img/footer-bg.jpg') }}');
                background-size: cover;
                background-repeat: no-repeat;
                color: white;

                .container.upper-footer {
                    display: flex;
                    justify-content: space-between;

                    .texts-container {
                        .links-container {
                            padding-block: 40px 20px;
                            display: flex;
                            column-gap: 30px;


                            div {
                                flex-direction: column;

                                h2 {
                                    text-transform: uppercase;
                                    margin-bottom: 10px;
                                }

                                ul {

                                    li {
                                        margin-bottom: 4px;

                                        a {
                                            color: rgba($color: #ffffff, $alpha: 0.5);
                                            text-transform: capitalize;
                                        }
                                    }
                                }
                            }
                        }

                        .lower-footer {
                            padding-bottom: 40px;
                        }

                    }

                    figure {
                        background-image: url('{{ Vite::asset('resources/img/dc-logo-bg.png') }}');
                        background-position: 0 60%;
                        width: 563px;
                        height: 445px;
                    }
                }
            }

            .footer-accounts {
                padding-block: 25px;

                .container {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;

                    button {
                        text-transform: uppercase;
                        color: white;
                        padding: 10px;
                        font-weight: 700;
                    }

                    div {
                        display: flex;
                        align-items: center;
                        gap: 20px;

                        div {
                            display: flex;

                            figure {
                                cursor: pointer;
                            }
                        }
                    }
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

    <footer>
        @include('components.footer')
    </footer>
</body>

</html>
