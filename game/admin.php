<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/../common/sessions.php');

sess_start();
sess_enforce_login();
sess_enforce_admin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facebook CTF | Admin</title>
    <link rel="icon" type="image/png" href="static/img/favicon.png">
    <link rel="stylesheet" href="static/css/fb-ctf.css">

</head>
<body data-section="admin">

    <!--
     *
     * SVG icon sprite object
     *
     * gets loaded in via javascript
     *
    -->
    <div style="height: 0; width: 0; position: absolute; visibility: hidden" id="fb-svg-sprite"></div>


    <div class="fb-viewport admin-viewport">
        <!--
         * Main Admin section navigation
        -->
        <div id="fb-admin-nav" class="admin-nav-bar fb-row-container">

          <header class="admin-nav-header row-fixed">
            <h2>Game Admin</h2>
          </header>
          <nav class="admin-nav-links row-fluid">
            <ul>
              <li><a href="#setup-instructions">Setup Instructions</a></li>
              <li><a href="#game-configuration">Game Configuration</a></li>
              <li><a href="#team-management">Teams</a></li>
              <li><a href="#categories-management">Levels: Categories</a></li>
              <li><a href="#quiz-management">Levels: Quiz</a></li>
              <li><a href="#flags-management">Levels: Flags</a></li>
              <li><a href="#bases-management">Levels: Bases</a></li>
              <li><a href="#logo-management">Logos</a></li>
              <li><a href="#countries-management">Countries</a></li>
              <li><a href="#sessions">Sessions</a></li>
              <li><a href="#scoreboard">Scoreboard</a></li>
              <li><a href="#global-controls">Global Controls</a></li>
            </ul>

            <a href="#" class="fb-cta cta--yellow">Begin Game</a>
          </nav>

          <div class="admin-nav--footer row-fixed">

            <a href="/gameboard.php">Gameboard</a>
            <a href="#" class="js-prompt-logout">Logout</a>
            <a></a>

            <span class="branding-el"><svg class="icon icon--social-facebook"><use xlink:href="#icon--social-facebook" /></svg> <span class="has-icon">Powered By Facebook</span></span>

          </div>

        </div><!-- /end main navigation -->

        <!--
         * The main stuff
        -->
        <div id="fb-buildkit" class="fb-page fb-admin-main"></div><!-- #fb-buildkit -->

    </div><!-- .fb-viewport -->


    <script type="text/javascript" src="static/js/vendor/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="static/js/vendor/d3.min.js"></script>
    <script type="text/javascript" src="static/js/plugins.js"></script>
    <script type="text/javascript" src="static/js/fb-ctf.js"></script>
    <script type="text/javascript" src="static/js/admin-fb-ctf.js"></script>
    <script type="text/javascript" src="static/js/_buildkit.js"></script>

</body>
</html>
