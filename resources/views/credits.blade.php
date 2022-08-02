@extends('layout.app')

@section('content')
    <header>
      <h1 class="has-text-centered has-text-weight-bold is-size-1	">Meet the Team</h1>
    </header>
    <div class="columns is-variable is-2-mobile is-0-tablet is-3-desktop is-8-widescreen is-1-fullhd">
      <div class="column">
        <div class="card m-6">
          <div class="card-content">
            <div class="content">
              <div class="columns">
                <div class="column is-one-quarter image">
                  <img class ="roundcorner image" src="https://avatars.githubusercontent.com/u/77898541?v=4">
                </div>
                <div class="column">
                  <h1>Eldoss T. Jogy</h1>
                  <a class="button is-dark" href="https://github.com/eldossjogy">Github</a>
                </div>
              </div>  
              <div>
              <h3>Responsibilities</h3> 
              <ul>
                <li>Home Page</li>
                <li>Install Page</li>
                <li>Demo Page</li>
                <li>Review Page</li>
                <li>Credit Page</li>
              </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card m-6">
          <div class="card-content">
            <div class="content">
              <div class="columns">
                <div class="column is-one-quarter image">
                  <img class ="roundcorner image" src="https://avatars.githubusercontent.com/u/83550431?v=4">
                </div>
                <div class="column">
                  <h1>Amin Nausin</h1>
                  <a class="button is-dark" href="https://github.com/aminnausin">Github</a>
                </div>
              </div>  
              <div>
                <h3>Responsibilities</h3> 
                <ul>
                  <li>Tutorial Page</li>
                  <li>Demo Page</li>
                  <li>Review Page</li>
                  <li>Credit Page</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card m-6">
      <div class="card-content">
        <div class="content">
        <h1>References</h1>
        <ul>
          <li>
            <a href="https://bulma.io/documentation/">Bulma Documentation</a>
          </li>
          <li>
            <a href="https://www.youtube.com/watch?v=MFh0Fd7BsjE&t=2145s">Video on Laravel</a>
          </li>
          <li>
          <a href="https://devcenter.heroku.com/articles/getting-started-with-laravel">Heroku Laravel Documentation</a>
          </li>
          <li>
            <a href="https://devcenter.heroku.com/articles/getting-started-with-php#provision-a-database">Heroku PHP Documentation</a>
          </li>
        </ul>
        </div>
      </div>
    </div>
@endsection