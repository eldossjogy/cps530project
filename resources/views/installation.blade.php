@extends('layout.app')

@section('content')
<header>
    <h1 class="has-text-centered has-text-weight-bold is-size-1">Installation</h1>
    <br>
</header>
<div class="box mx-6">
    <h1 class="has-text-weight-bold is-size-5">Installing Bulma:<h1>
    <h2>Option #1:<h2>
    <code class="mx-6">
        &lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"&gt;
    </code>
    <h2>Option #2:<h2>
    <ol>
        <li>Downloading Release from <a href="https://github.com/jgthms/bulma/releases">GitHub</a></li>
        <li>Inside the .zip file navigate to the CSS folder</li>
        <li>The <code>bulma.css</code> can be moved into your project's CSS folder, and bulma can be implemented </li>
        <li>Add <code>&lt;link rel="stylesheet" href="css/bulma.css"&gt;</code> to your html head section.</li>
    </ol>
</div>

<div class="box mx-6">
    <h1 class="has-text-weight-bold is-size-5">Installing Laravel on Windows:<h1>
    <ol>
        <li>Install a PHP/Apache development environment such as <a href="https://www.apachefriends.org/index.html">XAMPP</a> </li>
        <li>Install <a href="https://getcomposer.org/download/">Composer</a>, a PHP dependency manager</li>
        <li>Direct to <code>C:\xampp\htdocs</code> and create a new folder named Laravel</li>
        <li>Open a terminal inside the Laravel folder</li>
        <li>Run the command <code>composer create-project laravel/laravel --prefer-dist projectname</code>, where projectname is the name of your project. This will create a new Laravel project</li>
        <li>Redirect and open a terminal in the new projectname folder</li>
        <li>Run the command <code>php artisan serve</code>, this will open a local development server</li>
        <li>Open the link shown on the terminal (ex. <code>http://127.0.0.1:8000/</code> )</li>
    </ol>    
    <br>
    <p>This will redirect to the default landing page of your new laravel project.  Example of landing page:</p>
    <img style="border-radius: 25px;" src="./img/landingpage.png">
</div>
@endsection