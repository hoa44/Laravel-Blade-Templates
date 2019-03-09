@extends('layouts.landing')
@section('content')
    <div class="jumbotron text-center">
        <div class="container">

            <h1>IS601-NJIT Laravel Blade Template Engine Exercise</h1>
            <p>This assignment is for week #2, It's a simple web page deployed to Heroku and is version controlled in my GitHub repo setup for IS601.  This weeks exercise provided a basic foundation for better understanding the Heroku platform, using formatting templates such as bootstrap and learning to use GitHub combined with the IDE PhpStorm.</p>
            <a type="button" class="btn btn-lg btn-primary" href="https://github.com/heroku/php-getting-started"><span class="glyphicon glyphicon-download"></span> Heroku Example Source on GitHub</a>
            <a type="button" class="btn btn-lg btn-primary" href="https://github.com/hoa44/IS601"><span class="glyphicon glyphicon-fire"></span> Hubbard's IS601 GitHub Repo</a>
        </div>
    </div>


    <div class="container">

        <div class="row align-items-center">
            <div class="col">
                <p>The table below includes a selection of commits from my GitHub repository, there were many more commits made during this exercise because I was experimenting and practicing trying to learn how to use PhpStorm and GitHub.  This table is basically a selection of GitHub history outlining my effort to complete the 2nd weeks assignment for IS601. </p>

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
                <td><a href="https://github.com/hoa44/IS601/commit/9158ad6dada5c760aab83d809624ac4cbfc17d8d">9158ad6</a></td>
                <td>Testing commit with basic table added to index.twig</td>
                <td>Feb 2, 2019</td>
                <td><a href="https://github.com/hoa44/IS601/blob/9158ad6dada5c760aab83d809624ac4cbfc17d8d/web/views/index.twig">index.twig</a></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a href="https://github.com/hoa44/IS601/commit/3ac06decaff11668ddb765e11bab1f09093667a6">3ac06de</a></td>
                <td>Going to push to Heroku and Git</td>
                <td>Feb 3, 2019</td>
                <td><a href="https://github.com/hoa44/IS601/blob/3ac06decaff11668ddb765e11bab1f09093667a6/web/views/index.twig">index.twig</a></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a href="https://github.com/hoa44/IS601/commit/2c066a7e42f1cd3607426a44772faf266b16eb5d">2c066a7</a></td>
                <td>Updating table with GitHub details</td>
                <td>Feb 4, 2019</td>
                <td><a href="https://github.com/hoa44/IS601/blob/2c066a7e42f1cd3607426a44772faf266b16eb5d/web/views/index.twig">index.twig</a></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><a href="https://github.com/hoa44/IS601/commit/79c1568d332806325b2b183a39df5f392641ff56">79c1568</a></td>
                <td>Expand to 5 rows and update description of assignment.</td>
                <td>Feb 4, 2019</td>
                <td><a href="https://github.com/hoa44/IS601/blob/79c1568d332806325b2b183a39df5f392641ff56/web/views/index.twig">index.twig</a></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td><a href="https://github.com/hoa44/IS601/commit/bd6fdbcc2d62f843208c139ba6b2694ea36f9017">bd6fdbc</a></td>
                <td>Final cleanup and changing colors.</td>
                <td>Feb 4, 2019</td>
                <td><a href="https://github.com/hoa44/IS601/blob/bd6fdbcc2d62f843208c139ba6b2694ea36f9017/web/views/index.twig">index.twig</a></td>
            </tr>
            </tbody>
        </table>


        <div class="row">
            <div class="col-sm-6">
                <p>The table above includes a breakdown of the key commits to my GitHub repository.  It is basically a table my GitHub history outlining my effort to complete the 2nd weeks assignment.  You can view my entire commit history for this assignment <a href="https://github.com/hoa44/IS601/commits/master">here.</a></p>

            </div>
            <div class="col-sm-6">
                <p>I have worked with web app version control systems designed for classical engineering, and manufacturing environments that manage the development efforts of mechanical and electrical designers.  These systems manage large file content in binary formats instead of text based code, and involve significant hosting infrastructures in the cloud or on premises.  I am amazed that Heroku platform has pretty much abstracted away the entire hosting infrastructure knowledge required to deploy web applications securely.  In this scenario, the developer doesn't need to concern themselves with all the gory details of web server setup, hardware, tls certs, authentication etc.  This great for rapid development of web applications, but it does create a low barrier to entry for acquiring development staff that don't need to know how to deal with all the back end pieces.

            </div>
        </div>
    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

        <!-- Three columns of text below the carousel -->






@stop