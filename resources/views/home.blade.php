@extends('layout.app')

@section('content')
    <header>
        <h1 class="has-text-centered has-text-weight-bold is-size-1	"> CPS530 Term Project</h1>
      </header>
      <div class="columns is-variable is-2-mobile is-0-tablet is-3-desktop is-8-widescreen is-1-fullhd">
        <div class="column">
            <div class="box mx-6 mt-6">
                <div class="card-content">
                    <h1 class="has-text-centered has-text-weight-bold is-size-4">Frontend Framework</h1>
                </div>
            </div>
          <div class="box mx-6">
            <div class="card-content">
              <div class="content">
                <div class="box">
                  <img src="https://bulma.io/images/bulma-logo.png" class="has-text-centered">
              </div>
                <h3>Popularity</h3> 
                  Bulma is a lightweight CSS framework that sits amongst the highest in its class.
                  On <a href="https://webtechsurvey.com/technology/bulma">Web Tech Survey</a> it was listed as #13 in the UI Framework market. 
                  Bulma is used in over 17k websites and has over 40k stars on <a href="https://github.com/jgthms/bulma">Github</a>.
                  <br>
                <h3>Strengths</h3>
                <ul>
                    <li>Simple</li>
                    <li>Modular</li>
                    <li>100% responsive</li>
                    <li>CSS only</li>
                </ul>
                <h3>Weaknesses</h3> 
                <ul>
                    <li>No JavaScript</li>
                    <li>Limited customization</li>
                </ul>
                <h3>Developer usage</h3> 
                  <p>Bulma is a popular alternative to BootStrap among developers. Both are responsive by design and are mobile compatible. 
                    Thus, the learning curve for Bulma is short especially when familiar with BootStrap. Since Bulma is simple and does  
                    not involve JavaScript, it lacks complicated elements and is primarily used to create minimalistic web pages. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column">
            <div class="box mx-6 mt-6">
                <div class="card-content">
                    <h1 class="has-text-centered has-text-weight-bold is-size-4">Backend Framework</h1>
                </div>
            </div>
          <div class="box mx-6">
            <div class="card-content">
              <div class="content">
                <div class="box p-0">
                  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" class="has-text-centered" width="690px">
               </div>
                <h3>Popularity</h3> 
                    Laravel is the most popular PHP framework. <a href="https://www.jetbrains.com/lp/devecosystem-2020/php/">JetBrains</a> states as of 2020,
                    50% of PHP Developers use Laravel. 
                    Laravel is used in over 700k websites as shown on <a href="https://trends.builtwith.com/websitelist/Laravel">BuiltWith</a> and has over 60k stars on <a href="https://github.com/laravel/laravel">Github</a>.
                <h3>Strengths</h3>
                <ul>
                    <li>Built-in authentication</li>
                    <li>Simple routing </li>
                    <li>Database migration</li>
                </ul>
                <h3>Weaknesses</h3> 
                <ul>
                    <li>Slower than competitors</li>
                    <li>Steep learning curve</li>
                </ul>
                <h3>Developer usage</h3> 
                <p> Developers who use PHP are most likely to use Laravel, as its the language's most popular framework and 
                  readily provides templates for multi-page sites. Laravel has many built-in components facilitating the creation
                  of any type of website. However, its most popular component is it's built-in authentication. So, Laravel 
                  is mostly user authentication pages for access to larger sites.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection