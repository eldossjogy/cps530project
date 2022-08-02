@extends('layout.app')

@section('content')
<main>
    <header>
        <h1 class="has-text-centered has-text-weight-bold is-size-1">How to Create a Forum</h1>
    </header>

    <div class="box mx-3 mt-3">
        <div class="card-content">
            <div class="content">
                The idea for our project's demo was to create a
                forumn page by making use of a database.
                You can type in your name and a message and then anyone
                loading the page will be able to see what you wrote.
            </div>
        </div>
    </div>
    
    <div class="columns box mx-3 mt-3">
        <div class="column box mx-3 mt-3">
            <article class="card-content">
                <h2 class="has-text-centered has-text-weight-bold is-size-3">Database Setup</h2>

                <div class="content has-text-left ">
                    <ul>
                        <li class="listpadded">
                            Firstly you require an accessible database. <br>

                            > For our demo, we used the built in postgress SQL database included with Heroku. 
                        </li>

                        <li class="listpadded">
                            Enter <code>heroku addons:create heroku-postgresql:hobby-dev</code> into the Heroku CLI opened in the directory of the project.
                            
                            <br>> it initializes a database for the project to use.
                        </li>

                        <li class="listpadded">
                            Parse the DATABASE_URL generated earlier to get all the credentials needed to access the database.              
                        </li>

                        <li class="listpadded">
                            Add each field into laravel's .env file to add them to the local environment.
                        </li>

                        <li class="listpadded">
                            In a Laravel controller, add 2 functions that interact with the database. 
                        </li>

                        <li class="listpadded">
                            Create the function index() that retrieves and displays all the messages stored in the database through the demo page.<br>
                            <code>
                                $messages=DB::connection('pgsql')->table('test_table')->get();<br>
                                return view('demo', ['messages' => $messages]);
                            </code>
                        </li>

                        <li class="listpadded">
                            Create the function store(Request $request) that stores the given username and message in 'request' into the database.<br>
                            <code>
                                $programs= DB::connection('pgsql')->table('test_table')->insert([<br>
                                &emsp; 'username' => $request->username,<br>
                                &emsp; 'msg' => $request->message,<br>
                                &emsp; 'time' => date("g:ia F d Y", strtotime('-5 hours', strtotime(now()))),<br>
                                ]);
                            </code>
                        </li>

                        <li class="listpadded">
                            To use these functions, implement them into the input forms of the PHP page.
                        </li>
                    </ul>
                </div>
            </article>
        </div>

        
        <div class="column box mx-3 mt-3">

            <article class="card-content">
                <h2 class="has-text-centered has-text-weight-bold is-size-3">PHP Setup</h2>

                <div class="content has-text-left ">
                            <ul>
                                <li class="listpadded">
                                    Create a demo page in PHP.<br>
                                    
                                    > This is where your messages will be sent and shown.
                                </li>
                                <li class="listpadded">
                                    Create an input form that has fields for a username and message.<br>

                                    <code>
                                        action="/demo" method="post"
                                    </code>
                                </li>
        
                                <li class="listpadded">
                                    Include your csrf token in the form so that it works with Laravel.<br>
                                    
                                    <code>
                                        (@)csrf<br>
                                        {{ csrf_field() }}
                                    </code>
                                </li>

                                <li class="listpadded">
                                    Set up each input field to have the right properties and names. <br>

                                    For example the username field:<br>
                                    <code>
                                        type="text" name="username" id="username" placeholder="Your Username"
                                    </code>
                                </li>

                                <li class="listpadded">
                                    Include a submit button at the bottom of the form to send the message to the database.
                                </li>
                            </ul>
                        </div>
                
            </article>

        </div>
    </div>
</main>

@endsection