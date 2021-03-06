<?php

require_once 'database/connexion.php';
require_once 'database/query/query.php';

sendMessage();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/main.css" />
  <link rel="stylesheet" href="style/glider.min.css">
  <link href="style/hamburgers.css" rel="stylesheet">
  <title>Quentin Rulleau Portfolio</title>
</head>

<body>
<?php
  include 'component/header.php';
?>

  <div class="container">
    <section id="home">
      <p class="blue sf">Hi my name is</p>
      <h2>
        Quentin Rulleau <br /><span class="grey"
        >I build things for the web.</span
        >
      </h2>
      <p class="grey">
        I’m a web developer specializing in front end development. Making
        beautiful design and animated interface. Currently, i’m studing at
        <a class="blue link" href="#">St-Vincent</a> looking for an internship
        at the end of school year
      </p>
      <a class="button" href="#work">Checkout my work !</a>
    </section>

    <section id="work">
      <div class="d-flex flex-start">
        <h3><span class="blue">02.</span> Some things i've built</h3>
        <span class="line"></span>
      </div>
      <section>
        <div class="right grid">
          <div class="description-project">
            <h4 class="blue sf">Featured Project | August 2020</h4>
            <h5>InLive With</h5>
            <div class="text-description">
              <p>Freelance project, shopping tunnel developed with Nuxt.Js for <a class="blue link" target="_blank" href="https://inlivewith.com/">inliveWith</a>, the backend was developed in Symfony and we used tailwind for the UI design. We used Click up to manage the project and github too</p>
            </div>
            <div class="d-flex flex-end">
              <p class="language sf">Nuxt.js</p>
              <p class="language sf">Symfony</p>
              <p class="language sf">Tailwind</p>
              <p class="language sf">SASS</p>
              <p class="language sf">Click Up</p>
            </div>
            <div class="flex-end">
              <a href="https://demo-inlive.netlify.app/" target="_blank">
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="#ccd6f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="#ccd6f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </a>
            </div>
          </div>
          <div class="img-project">
            <a href="https://demo-inlive.netlify.app/" class="background-blue" target="_blank">
              <img src="img/project-thumbnail/inliveWith.jpg" alt="">
            </a>
          </div>
        </div>
        <div class="left grid">
          <div class="description-project">
            <h4 class="blue sf">Featured Project | July 2020</h4>
            <h5>Paladins French Tournament</h5>
            <div class="text-description">
              <p>Personal project to promote the e-sport on the <a class="blue link" target="_blank" href="https://www.paladins.com/">Paladins video game</a>. I used Vue.JS 3, homemade SCSS. I also used Click Up & Github to manage the project</p>
            </div>
            <div class="d-flex flex-start">
              <p class="language sf">Vue 3</p>
              <p class="language sf">SCSS</p>
              <p class="language sf">HTML</p>
              <p class="language sf">Click Up</p>
              <p class="language sf">Github</p>
            </div>
            <div class="d-flex flex-start">
              <a href="https://github.com/qrulleau/NewTournamentPaladins" target="_blank"><i class="fab fa-github"></i></a>
              <a href="https://paladinsfrenchtournament.fr/" target="_blank">
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="#ccd6f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="#ccd6f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </a>
            </div>
          </div>
          <div class="img-project">
            <a href="https://paladinsfrenchtournament.fr/" class="background-blue" target="_blank">
              <img src="img/project-thumbnail/paladins-tournament.jpg" target="_blank" alt="">
            </a>
          </div>
        </div>
      </section>

      <section class="archive">
        <h3 class="text-center">Other noteworthy Projects</h3>
        <div class="text-center">
          <a class="blue link sf" href="https://github.com/qrulleau?tab=repositories">View the archive</a>
        </div>
        <div class="small-container">
          <div class="glider-contain">
            <div class="glider">
              <div class="card">
                <div class="d-flex">
                  <img src="img/icon/folder.svg" alt="">
                  <a href="https://github.com/qrulleau/restaurant-project" target="blank">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </div>
                <h6>Fake Restaurant</h6>
                <p class="light-grey">
                  Building a small application to discover and learn Vue.js ecosystem
                </p>
                <div class="d-flex flex-start">
                  <p class="language sf">Vue.JS</p>
                  <p class="language sf">SCSS</p>
                  <p class="language sf">HTML</p>
                </div>
              </div>
              <div class="card">
                <div class="d-flex">
                  <img src="img/icon/folder.svg" alt="">
                  <a href="https://github.com/qrulleau/LaravelAPIBackend" target="blank">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </div>
                <h6>Laravel API</h6>
                <p class="light-grey">
                  Creation of an API backend with Laravel to link with a Vue application
                </p>
                <div class="d-flex flex-start">
                  <p class="language sf">Laravel</p>
                  <p class="language sf">PHP</p>
                </div>
              </div>
              <div class="card">
                <div class="d-flex">
                  <img src="img/icon/folder.svg" alt="">
                  <a href="https://github.com/qrulleau/SmallFrontForApi" target="blank">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </div>
                <h6>Front with laravel API</h6>
                <p class="light-grey">
                  Dashboard create with a laravel API to discover backend framework
                </p>
                <div class="d-flex flex-start">
                  <p class="language sf">Vue.js</p>
                  <p class="language sf">Postman</p>
                  <p class="language sf">SCSS</p>
                </div>
              </div>
              <div class="card">
                <div class="d-flex">
                  <img src="img/icon/folder.svg" alt="">
                  <a href="https://github.com/qrulleau/MarkDown-ReactJs" target="blank">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </div>
                <h6>MarkeDown React.Js</h6>
                <p class="light-grey">
                  Small app create with React to display formatted content with markdown
                </p>
                <div class="d-flex flex-start">
                  <p class="language sf">React.JS</p>
                  <p class="language sf">HTML</p>
                  <p class="language sf">CSS</p>
                </div>
              </div>
              <div class="card">
                <div class="d-flex">
                  <img src="img/icon/folder.svg" alt="">
                  <a href="https://qrulleau.github.io/" target="blank">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    BLOUPBERRY<path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </div>
                <h6>Main Portfolio</h6>
                <p class="light-grey">
                  Latest portfolio i made with basic web language to optimize load time.
                </p>
                <div class="d-flex flex-start">
                  <p class="language sf">HTML</p>
                  <p class="language sf">CSS</p>
                </div>
              </div>
              <div class="card">
                <div class="d-flex">
                  <img src="img/icon/folder.svg" alt="">
                  <a href="https://github.com/qrulleau/Todo-list-practice-js" target="blank">
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.84692 10.36C8.21403 10.848 8.68239 11.2518 9.22024 11.544C9.75809 11.8362 10.3528 12.0099 10.9642 12.0534C11.5755 12.097 12.1891 12.0093 12.7633 11.7963C13.3375 11.5833 13.859 11.25 14.2923 10.819L16.8568 8.26896C17.6353 7.4674 18.0661 6.39384 18.0564 5.27951C18.0467 4.16517 17.5971 3.09922 16.8047 2.31123C16.0122 1.52325 14.9402 1.07628 13.8196 1.0666C12.6989 1.05691 11.6193 1.48529 10.8132 2.25946L9.34286 3.71296" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M11.266 8.65997C10.8989 8.17196 10.4306 7.76816 9.89271 7.47597C9.35486 7.18378 8.7601 7.01002 8.14878 6.96649C7.53746 6.92295 6.92388 7.01066 6.34964 7.22365C5.77541 7.43665 5.25396 7.76996 4.82066 8.20097L2.25619 10.751C1.47763 11.5525 1.04682 12.6261 1.05656 13.7404C1.0663 14.8548 1.5158 15.9207 2.30826 16.7087C3.10071 17.4967 4.17271 17.9437 5.29337 17.9533C6.41403 17.963 7.49368 17.5346 8.29979 16.7605L9.76153 15.307" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </a>
                </div>
                <h6>Todo List JavaScript</h6>
                <p class="light-grey">
                  Todo List made with vanilla to learn JavaScripts ans ES6 featured
                </p>
                <div class="d-flex flex-start">
                  <p class="language sf">JavaScript</p>
                  <p class="language sf">HTML</p>
                  <p class="language sf">CSS</p>
                </div>
              </div>
            </div>
            
            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
          </div>
        </div>
        <div class="text-center">
          <a class="button" href="https://github.com/qrulleau?tab=repositories" target="_blank">Show more</a>
        </div>
      </section>

    </section>

    <section id="experience" class="thin-container">
      <div class="d-flex flex-start title">
        <h3><span class="blue sf">03.</span> Experience</h3>
        <span class="line"></span>
      </div>
      <div class="d-flex align-start bloc">
        <div class="d-flex column">
          <button class="sf business active-experience" value="pongo">Pongo</button>
          <button class="sf business" value="curioo">Curioo</button>
          <button class="sf business" value="hexium">Hexium</button>
          <button class="sf business" value="acfm">ACFM</button>
        </div>
        <div class="compagny active-tab" id="pongo">
          <h4 class="heavy-white">Work-study contract | Full Stack Developer <span class="blue">@Pongo</span></h4>
          <h5 class="sf">October 2020 - April 2021</h5>
          <div class="d-flex align-start">
            <i class="fas fa-caret-right blue"></i>
            <p>
              Worked as a work-study student, the main mission was to migrate
              an Angular App to a lighter language ( Vue 3 )
            </p>
          </div>
          <div class="d-flex flex-start">
            <i class="fas fa-caret-right blue"></i>
            <p>Creation of endpoint on the backoffice in Laravel</p>
          </div>          
        </div>
        <div class="compagny" id="curioo">
          <h4 class="heavy-white">Freelance | Front End Developer <span class="blue">@Curioo</span></h4>
          <h5 class="sf">September 2020</h5>
          <div class="d-flex align-start">
            <i class="fas fa-caret-right blue"></i>
            <p>
              the main mission was to create a nuxt application to a museun for an event about human experience.
            </p>
          </div>        
        </div>
        <div class="compagny" id="hexium">
          <h4 class="heavy-white">Freelance | Full Stack developer <span class="blue">@Hexium</span></h4>
          <h5 class="sf">August 2020</h5>
          <div class="d-flex align-start">
            <i class="fas fa-caret-right blue"></i>
            <p>
              Creation of a shopping tunnel to sell digital influence campaign 
              with Nuxt.Js
            </p>
          </div>      
        </div>
        <div class="compagny" id="acfm">
          <h4 class="heavy-white">InternShip | Front End developer <span class="blue">@ACFM</span></h4>
          <h5 class="sf">July 2019 - August 19 / Compiegne</h5>
          <div class="d-flex align-start">
            <i class="fas fa-caret-right blue"></i>
            <p>
              Worked as a trainee to validate my diploma. It was on a small compagny so i get a lot of mission
            </p>
          </div>
          <div class="d-flex flex-start">
            <i class="fas fa-caret-right blue"></i>
            <p>Redesign & development of a website with Figma and Wordpress</p>
          </div>
          <div class="d-flex flex-start">
            <i class="fas fa-caret-right blue"></i>
            <p>Setup paiement method & add content to a wordpress and i put it online</p>
          </div>
          <div class="d-flex flex-start">
            <i class="fas fa-caret-right blue"></i>
            <p>Manage newsletter with MailChimp</p>
          </div>   
        </div>
      </div>
    </section>

    <section id="about" class="small-container pt-100">
      <div class="d-flex flex-start">
        <h3><span class="blue">04.</span> About me</h3>
        <span class="line"></span>
      </div>
      <div class="d-flex align-start">
        <div class="description">
          <p>
            Hello! My name is Quentin and I enjoy creating things that live on
            the internet. I started web development perchance with my training
            as a <a class="blue link" href="#">web designer</a>, i discovered the basic of development and i
            fall in love of it. Since i try to do my best for becoming better
            and better despite several failures
          </p>
          <p>
            Fast-forward to today, and I’ve had the privilege of working at
            <a class="blue link" href="#">an marketing agency</a>,
            <a class="blue link" href="#">a start-up</a>,
            <a class="blue link" href="#">a small compagny</a>. My main focus
            these days is building beautiful interface with accesibility,
            Producing the most personal content for clients is one of my main
            goal as futur freelance.
          </p>
          <p>Here are a few technologies I’ve been working with recently:</p>
          <p></p>
          <div class="d-flex skill flex-start">
            <div class="column">
              <div class="d-flex flex-start">
                <i class="fas fa-caret-right blue"></i>
                <p>JavaScript (ES6+)</p>
              </div>
              <div class="d-flex flex-start">
                <i class="fas fa-caret-right blue"></i>
                <p>Vue</p>
              </div>
              <div class="d-flex flex-start">
                <i class="fas fa-caret-right blue"></i>
                <p>TypeScript</p>
              </div>
            </div>
            <div class="column">
              <div class="d-flex flex-start">
                <i class="fas fa-caret-right blue"></i>
                <p>HTML</p>
              </div>
              <div class="d-flex flex-start">
                <i class="fas fa-caret-right blue"></i>
                <p>CSS</p>
              </div>
              <div class="d-flex flex-start">
                <i class="fas fa-caret-right blue"></i>
                <p>Next.Js</p>
              </div>
            </div>
          </div>
        </div>
        <div class="profil-picture">
          <div>
            <img src="img/profil.jpg" alt="" class="test"/>
          </div>
        </div>
      </div>
      <div class="education thin-container">
        <h3 class="text-center">My education</h3>
        <div class="d-flex align-start">
          <div class="d-flex column">
            <button class="education-choice active-education" value="secondè_BTEC">BTEC</button>
            <button class="education-choice btec" value="first_BTEC" >BTEC</button>
            <button class="education-choice" value="GCE" >GCE</button>
          </div>
          <div class="pongo job active-tab" id="secondè_BTEC">
            <h4 class="blue">Associate's degree in Web development</h4>
            <h5>2020 - 2022</h5>
            <p>
              Currently Studying at high school
              <a class="blue link" href="#">Saint Vincent</a> in Senlis to get
              an associate's degree in Web development
            </p>
          </div>
          <div class="pongo job" id="first_BTEC">
            <h4 class="blue">Associate's degree in Webdesign</h4>
            <h5>2018 - 2019</h5>
            <p>
              I discover the world of a graphic designer with  
              <a class="blue link" target="_blank" href="https://www.media-management.fr/">Media Management</a> in Compiegne. It gived me the ability to use Adobe Photoshop for retouch photos, create illustration with Adobe Illustrator. Also create document with Adobe Indesign.
            </p>
            <p>Besides i also discover the world of developer, i learned the basic of web development with HTML, CSS and JavaScript with jquery. i made some wordpress and prestashop for creating e-commerce website</p>
          </div>
          <div class="pongo job" id="GCE">
            <h4 class="blue">High School diploma</h4>
            <h5>2017</h5>
            <p>
              I passed my high school diploma in 
              <a class="blue link" target="_blanck" href="https://jeanpaul2compiegne.fr/">Jean Paul 2</a> in Compiegne. It was a literature diploma.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="text-center extra-small-container">
      <h3 class="blue regular sf"><span>05.</span> What's next ?</h3>  
      <h4>Get in Touch</h4>
      <p class="grey">
        Although I’m not currently looking for any new opportunities, my inbox
        is always open. Whether you have a question or just want to say hi,
        I’ll try my best to get back to you!
      </p>
      <button class="button modal-button">Say hello</button>
    </section>
  </div>

  <?php
  require 'component/footer.php';
  ?>

  <div class="fixed-element mailto">
    <div class="d-flex column">
      <a class="sf regular mailto" href="mailto:quentin.rulleau@yahoo.com"
      >quentin.rulleau@yahoo.com</a
      >
      <span class="line"></span>
    </div>
  </div>
  <div class="fixed-element social-network">
    <div class="d-flex column">
      <div class="d-flex column">
        <a href="" class="icon"><i class="fas fa-moon"></i></a>
        <a href="https://www.linkedin.com/in/quentin-r-4b5822179/" class="icon" target="_blank">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://github.com/qrulleau" class="icon" target="_blank">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <span class="line"></span>
    </div>
  </div>
  <div class="modal">
    <div class="content">
      <div class="d-flex end">
        <i class="fas fa-times-circle white"></i>
      </div>
      <h3 class="text-center">Contact</h3>
      <form method="POST">
        <div>
          <div class="d-flex flex-start flex-baseline">
            <i class="far fa-user"></i>
            <label for="name">Name</label>
            
          </div>
          <input type="text" name="name" id="name" class="heavy-white" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $name ?>"/>
        </div>
        <div>
          <div class="d-flex flex-start flex-baseline">
            <i class="far fa-paper-plane"></i>
            <label for="name">Email</label>
            
          </div>
          <input type="email" name="email" id="email" class="heavy-white" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $email ?>" />
        </div>
        <div>
          <div class="d-flex flex-start flex-baseline">
            <i class="far fa-comment-alt"></i>
            <label for="name">Message</label>
            
          </div>
          <textarea class="heavy-white" name="message" id="message"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $message ?></textarea>
        </div>
        <div class="text-center submit">
          <p><?php echo $status ?></p>
        </div>
        <div class="text-center">
          <input type="submit" value="Submit" class="button">
        </div>
      </div>
    </form>
  </div>

  <script
  src="https://kit.fontawesome.com/c89df60d15.js"
  crossorigin="anonymous"
  ></script>
  <script src="script/glider.min.js"></script>
  <script src="script/main.js"></script>

</body>
</html>
