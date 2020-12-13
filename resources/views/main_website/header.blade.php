<!DOCTYPE html>
<html lang="en">
    <head>
        @yield('head')
        <link href="/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
            #menu-outer {
                height: 84px;
                background: url(images/bar-bg.jpg) repeat-x;
            }
            
            .table {
                display: table;   /* Allow the centering to work */
                margin: 0 auto;
            }
            
            ul#horizontal-list {
                min-width: 696px;
                list-style: none;
                padding-top: 20px;
                }
            ul#horizontal-list li {
                    display: inline;
                    margin-left: 15px;
                    color:#007f7f

                }
                ul#horizontal-list li a{
                    color:#007f7f

                }
              
                .vl {
                border-left: 6px solid #007f7f;
                height: 500px;
                }

        </style>
    </head>

    <body>
        <nav style="top: 27px;
            margin-bottom: 27px;
            background: #fff;
            border-radius: 0;
            border-bottom: 1px solid #a6a6a6;
            position: relative;
            min-height: 50px;
            ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a><img height="100px" width="150px" src="\img\afnan_logo.jpg"></a>
                    </div>
                    <div class="col-sm-8">
                        <div id="menu-outer">
                            <div class="table">
                                <ul id="horizontal-list">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="#">Our Product</a></li>
                                <li><a href="#">Our Partner</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="{{route('contact-us')}}">Contat Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
        