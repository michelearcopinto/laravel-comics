@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style>
        main {
            .comics-grid {
                background-color: $color-bg-list;
                color: white;
                text-transform: uppercase;
                padding-block: 50px;

            }

            .comics-grid>.container {
                position: relative;
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                row-gap: 50px;

                div:first-child {
                    position: absolute;
                    top: -72px;
                    left: -15px;
                    padding-inline: 30px;
                    padding-block: 8px;
                    user-select: none;
                }

                .comic-box {
                    width: calc((100% / 6) - 20px);

                    figure {
                        aspect-ratio: 1;
                        background-size: cover;
                        margin-bottom: 15px;
                        overflow: hidden;

                        &:hover {
                            cursor: pointer;
                            filter: brightness(50%);
                        }
                    }
                }
            }

            button {
                color: white;
                text-transform: uppercase;
                border: 0;
                padding-inline: 60px;
                padding-block: 12px;
                font-weight: 700;
                margin-inline: auto;

            }

            button:hover {
                cursor: pointer;
            }
        }
    </style>
@endsection

@section('main_content')
    <section class="comics-grid">
        <div class="container">
            <div class="blue-element">
                <h2>current series</h2>
            </div>
            @foreach ($comics as $comic)
                <div class="comic-box">
                    <figure>
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                    </figure>
                    <span>{{ $comic['title'] }}</span>
                </div>
            @endforeach
            <button class="blue-element">load more</button>
        </div>
    </section>



@endsection
