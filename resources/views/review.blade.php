@extends('layout.app')

@section('content')
<header>
    <h1 class="has-text-centered has-text-weight-bold is-size-1	">Review</h1>
    <br>
</header>
<div class="columns">
    <div class="column">
        <div class="box">
            <div class="box">
                <img src="https://bulma.io/images/bulma-logo.png" class="has-text-centered">
            </div>
            <div class="box">
            Eldoss Jogy
                <figure style="position: relative;width: 5%;display:flex;">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                </figure>
            </div>
            <div class="box">
            Amin Nausin
                <figure style="position: relative;width: 5%;display:flex;">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                </figure>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="box">
        <div class="box">
                <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" class="has-text-centered" width="440px">
            </div>
            <div class="box" style="z-index: auto;">
            Eldoss Jogy
                <figure style="z-index: 2; position: relative; display:flex;width: 5%;">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                </figure>
            </div>
            <div class="box">
            Amin Nausin
                <figure style="position: relative;width: 5%;display:flex;">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(74%) sepia(79%) saturate(372%) hue-rotate(354deg) brightness(106%) contrast(94%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                    <img src="./img/star.svg" style="filter: invert(36%) sepia(20%) saturate(5%) hue-rotate(314deg) brightness(96%) contrast(20%) opacity(25%);">
                </figure>
            </div>
        </div>
    </div>
</div>
<div class="box mx-6"> 
    
    <div class="box mx-3 mt-3 mb-3">
        <h4 class="has-text-weight-bold is-size-4">Did they perform to your expectations?</h4><br>
        
        <div>
            <h5 class="has-text-weight-bold is-size-6">Bulma</h5>

            <ul>
                <li>
                    Bulma performed as expected, allowing quick and simple creation of pages with CSS designs.
                </li>
                <li>
                    The base version is limited and lacks simple features like rounded corners and custom colours.
                </li>
            </ul>
        </div>

        <div>
            <h5 class="has-text-weight-bold is-size-6">Laravel</h5>

            <ul><li>Also performed as expected</li></ul>
        </div>
    </div>

    <div class="box mx-3 mt-3 mb-3">
        <h4 class="has-text-weight-bold is-size-4">Were they difficult to install or configure?</h4><br>

        <div>
            <h5 class="has-text-weight-bold is-size-6">Bulma</h5>
            <ul>
                <li>
                    Using the base version of Bulma was very easy to install as it only consists of 1 css file. 
                </li>
                <li>
                    Using the customizable version is much more complicated as you need to install seperate libraries.
                </li>
                <li>
                    We have to configure external variables to have access to simple things like custom colours.
                </li>
            </ul>
        </div>

        <div>
            <h5 class="has-text-weight-bold is-size-6">Laravel</h5>

            <ul><li>Required 3+ prerequirements but other than that it was simple</li></ul>
        </div>
    </div>

    <div class="box mx-3 mt-3 mb-3">
        <h4 class="has-text-weight-bold is-size-4">Was it easy to create the page(s) with it?</h4><br>

        <div>
            <h5 class="has-text-weight-bold is-size-6">Both</h5>

            <ul>
                <li>
                    Using Bulma was rather nonintuitive but simple to implement.
                </li>
                <li>
                    In Laravel it is very easy to set up a new page. Adding the route and php page is quick and easy.
                </li>
            </ul>
        </div>
    </div>

    <div class="box mx-3 mt-3 mb-3">
        <h4 class="has-text-weight-bold is-size-4">Was the learning curve steep compared with regular HTML/CSS/JavaScript/PHP?</h4><br>

        <div>
            <h5 class="has-text-weight-bold is-size-6">Bulma</h5>

            <ul>
                <li>No it was similar to bootstrap</li>
            </ul>
        </div>
        
        <div>
            <h5 class="has-text-weight-bold is-size-6">Laravel</h5>

            <ul>
                <li>
                    Running a webpage through Laravel is very complicated in respect to the PHP we learned in class.
                </li>
                <li>
                    It has a very steep learning curve for someone with little to no experience developing web applications.
                </li>
                <li>
                    To implement a simple form we had to learn post routing and controllers.
                </li>
            </ul>
        </div>
    </div>

    <div class="box mx-3 mt-3 mb-3">
        <h4 class="has-text-weight-bold is-size-4">Would you have done things differently in retrospect?</h4><br>

        <ul><li>Would have liked to spend more time learing Laravel and actually understanding the structure of the framework.</li></ul>
    </div>

    <div class="box mx-3 mt-3 mb-3">
        <h4 class="has-text-weight-bold is-size-4">Did you regret your choice of frameworks?</h4><br>

        <ul><li>No, laravel has showed me how the backend handles databases, authenication, and website routing</li></ul>
    </div>
</div>
@endsection