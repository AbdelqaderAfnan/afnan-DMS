
@extends('main_website.header')
@section('head')
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
    }
</style>
@endsection
@section('content')
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
                        <a><img height="100px" width="150px" src="\img\afnan_logo.png"></a>
                    </div>
                    <div class="col-sm-8">
                        <div id="menu-outer">
                            <div class="table">
                                <ul id="horizontal-list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Our Product</a></li>
                                <li><a href="#">Our Partner</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contat Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <p>test</p>
        </div>
        <div class="col-sm-4">
            <p>test</p>
        </div>
        <div class="col-sm-4">
            <p>test</p>
        </div>
    </div>
</div>
@extends('main_website.footer')