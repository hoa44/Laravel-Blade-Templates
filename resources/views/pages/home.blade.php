@extends('layouts.landing')
@section('content')
    <div class="jumbotron text-center">
        <div class="container">

            <h1>IS601-NJIT Laravel Blade Template Engine Exercise</h1>
            <p>This assignment deals with getting familiar with setting up the Laravel Web Framework, It's a simple web page deployed to Heroku and is version controlled in my GitHub repo.  This weeks exercise provided a basic foundation for installing Laravel, and using the blade template engine to create a simple two page website.</p>
            <a type="button" class="btn btn-lg btn-primary" href="https://laravel.com/docs/5.8/blade"><span class="fab fa-laravel"></span> Blade Template Overview</a>
            <a type="button" class="btn btn-lg btn-primary" href="https://github.com/hoa44/Laravel-Blade-Templates"><span class="fab fa-github"></span> Hubbard's GitHub Repo</a>
        </div>
    </div>


    <div class="container">

        <div class="row align-items-center">
            <div class="col">
                <p>The table below includes a selection of commits from my GitHub repository. This table is a selection of GitHub history outlining my effort to complete this assignment. </p>

            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Git Commits by Hash</th>
                <th scope="col">Commit Comments</th>
                <th scope="col">Date</th>
                <th scope="col">Repo Point in Time</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="https://github.com/hoa44/Laravel-Blade-Templates/commit/408280fa842bdfa3a8a6471e6cb987f8c2bcc23d#diff-21c91d80d40ef7d1e5deb27735d58e18">408280f</a></td>
                <td>Laravel setup and deployed to Heroku</td>
                <td>March 4, 2019</td>
                <td><a href="https://github.com/hoa44/Laravel-Blade-Templates/blob/master/resources/views/welcome.blade.php">welcome.blade.php</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a href="https://github.com/hoa44/Laravel-Blade-Templates/commit/c82ce11108cf9665fde9a576e0628956a2173ba2#diff-e58a4bf04a6b95ea1c58f2676675e280">c82ce11</a></td>
                <td>First blade templates cloned from Prof Williams Github repo (showing the header)</td>
                <td>March 7, 2019</td>
                <td><a href="https://github.com/hoa44/Laravel-Blade-Templates/blob/c82ce11108cf9665fde9a576e0628956a2173ba2/resources/views/includes/header.blade.php">header.blade.php</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a href="https://github.com/hoa44/IS601/commit/2c066a7e42f1cd3607426a44772faf266b16eb5d">2c066a7</a></td>
                <td>Updating table with GitHub details</td>
                <td>Feb 4, 2019</td>
                <td><a href="https://github.com/hoa44/IS601/blob/2c066a7e42f1cd3607426a44772faf266b16eb5d/web/views/index.twig">index.twig</a></td>
            </tr>
            </tbody>
        </table>


        <div class="row">
            <div class="col-sm-6">
                <p>Lacus cras nibh himenaeos ipsum tempor consectetur sociosqu euismod gravida vulputate ultricies. Ipsum molestie dis purus dui venenatis. Accumsan duis netus in auctor feugiat pretium platea. Purus platea justo cum placerat ultricies ut ultrices mattis dictum ullamcorper fusce. Conubia commodo vel hac gravida sem neque leo hendrerit faucibus? Curae; lorem rhoncus sit dis sapien tortor integer tristique convallis orci. Quisque at platea fringilla magna curae; mauris proin rutrum malesuada pulvinar nisl. Commodo litora amet.
                    </p>

            </div>
            <div class="col-sm-6">
                <p>Faucibus nibh nec gravida. Porta sociosqu porttitor urna malesuada sociosqu vitae primis quisque risus primis blandit taciti. Posuere maecenas pretium lacinia ullamcorper proin fusce. Posuere lacus mollis platea gravida montes mattis. Non ullamcorper vel dignissim interdum maecenas non inceptos nulla fringilla amet senectus nostra. Metus sem quisque, venenatis vivamus placerat leo augue aptent. Tempor placerat leo egestas maecenas elementum amet elementum cum, dignissim mattis massa? Augue dolor tincidunt proin libero, auctor molestie parturient consequat sodales? Auctor ridiculus urna neque magna diam tincidunt aliquam. Pharetra lacus porta curabitur dapibus. Imperdiet sed a euismod nibh nullam suspendisse.
            </div>
        </div>
    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

        <!-- Three columns of text below the carousel -->






@stop