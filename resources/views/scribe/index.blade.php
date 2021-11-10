<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.15.0.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.15.0.js") }}"></script>

</head>

<body data-languages="[]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: November 10 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-flightsapi">Display groups of flights.</h2>

<p>
</p>



<span id="example-requests-GETapi-flightsapi">
<blockquote>Example request:</blockquote>

</span>

<span id="example-responses-GETapi-flightsapi">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;flights&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;cia&quot;: &quot;GOL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;G3-1701&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;07:40&quot;,
            &quot;arrivalTime&quot;: &quot;09:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 50,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;cia&quot;: &quot;AZUL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;AD-1111&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;07:40&quot;,
            &quot;arrivalTime&quot;: &quot;09:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 50,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;cia&quot;: &quot;LATAM&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;LA-2222&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;07:40&quot;,
            &quot;arrivalTime&quot;: &quot;09:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 50,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;cia&quot;: &quot;GOL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;G3-3333&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;08:40&quot;,
            &quot;arrivalTime&quot;: &quot;10:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 100,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;cia&quot;: &quot;AZUL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;AD-4444&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;08:40&quot;,
            &quot;arrivalTime&quot;: &quot;10:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 100,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;cia&quot;: &quot;LATAM&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;LA-5555&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;08:40&quot;,
            &quot;arrivalTime&quot;: &quot;10:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 100,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;cia&quot;: &quot;GOL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;G3-6616&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;12:40&quot;,
            &quot;arrivalTime&quot;: &quot;14:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 120,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;cia&quot;: &quot;GOL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;G3-7777&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;18:40&quot;,
            &quot;arrivalTime&quot;: &quot;20:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 150,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;cia&quot;: &quot;LATAM&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;LA-5555&quot;,
            &quot;origin&quot;: &quot;BSB&quot;,
            &quot;destination&quot;: &quot;CNF&quot;,
            &quot;departureDate&quot;: &quot;30/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
            &quot;departureTime&quot;: &quot;08:40&quot;,
            &quot;arrivalTime&quot;: &quot;10:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 150,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 0,
            &quot;inbound&quot;: 1,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;cia&quot;: &quot;AZUL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;AD-6606&quot;,
            &quot;origin&quot;: &quot;BSB&quot;,
            &quot;destination&quot;: &quot;CNF&quot;,
            &quot;departureDate&quot;: &quot;30/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
            &quot;departureTime&quot;: &quot;08:40&quot;,
            &quot;arrivalTime&quot;: &quot;10:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 150,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 0,
            &quot;inbound&quot;: 1,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;cia&quot;: &quot;GOL&quot;,
            &quot;fare&quot;: &quot;1AF&quot;,
            &quot;flightNumber&quot;: &quot;G3-8888&quot;,
            &quot;origin&quot;: &quot;BSB&quot;,
            &quot;destination&quot;: &quot;CNF&quot;,
            &quot;departureDate&quot;: &quot;30/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
            &quot;departureTime&quot;: &quot;08:40&quot;,
            &quot;arrivalTime&quot;: &quot;10:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 200,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 0,
            &quot;inbound&quot;: 1,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;cia&quot;: &quot;GOL&quot;,
            &quot;fare&quot;: &quot;4DA&quot;,
            &quot;flightNumber&quot;: &quot;G3-9999&quot;,
            &quot;origin&quot;: &quot;BSB&quot;,
            &quot;destination&quot;: &quot;CNF&quot;,
            &quot;departureDate&quot;: &quot;30/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
            &quot;departureTime&quot;: &quot;20:40&quot;,
            &quot;arrivalTime&quot;: &quot;22:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 1000,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 0,
            &quot;inbound&quot;: 1,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;cia&quot;: &quot;LATAM&quot;,
            &quot;fare&quot;: &quot;4DA&quot;,
            &quot;flightNumber&quot;: &quot;LA-9897&quot;,
            &quot;origin&quot;: &quot;BSB&quot;,
            &quot;destination&quot;: &quot;CNF&quot;,
            &quot;departureDate&quot;: &quot;30/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
            &quot;departureTime&quot;: &quot;20:40&quot;,
            &quot;arrivalTime&quot;: &quot;22:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 1000,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 0,
            &quot;inbound&quot;: 1,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;cia&quot;: &quot;GOL&quot;,
            &quot;fare&quot;: &quot;4DA&quot;,
            &quot;flightNumber&quot;: &quot;G3-9897&quot;,
            &quot;origin&quot;: &quot;BSB&quot;,
            &quot;destination&quot;: &quot;CNF&quot;,
            &quot;departureDate&quot;: &quot;30/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
            &quot;departureTime&quot;: &quot;20:40&quot;,
            &quot;arrivalTime&quot;: &quot;22:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 1200,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 0,
            &quot;inbound&quot;: 1,
            &quot;duration&quot;: &quot;1:20&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;cia&quot;: &quot;AZUL&quot;,
            &quot;fare&quot;: &quot;4DA&quot;,
            &quot;flightNumber&quot;: &quot;AD-1234&quot;,
            &quot;origin&quot;: &quot;CNF&quot;,
            &quot;destination&quot;: &quot;BSB&quot;,
            &quot;departureDate&quot;: &quot;29/01/2021&quot;,
            &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
            &quot;departureTime&quot;: &quot;20:40&quot;,
            &quot;arrivalTime&quot;: &quot;22:00&quot;,
            &quot;classService&quot;: 3,
            &quot;price&quot;: 500,
            &quot;tax&quot;: 36,
            &quot;outbound&quot;: 1,
            &quot;inbound&quot;: 0,
            &quot;duration&quot;: &quot;1:20&quot;
        }
    ],
    &quot;groups&quot;: [
        {
            &quot;uniqueId&quot;: 7741,
            &quot;totalPrice&quot;: 200,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 9,
                        &quot;cia&quot;: &quot;LATAM&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;LA-5555&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 150,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;cia&quot;: &quot;AZUL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;AD-6606&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 150,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 1,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-1701&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;07:40&quot;,
                        &quot;arrivalTime&quot;: &quot;09:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 50,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 2,
                        &quot;cia&quot;: &quot;AZUL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;AD-1111&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;07:40&quot;,
                        &quot;arrivalTime&quot;: &quot;09:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 50,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 3,
                        &quot;cia&quot;: &quot;LATAM&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;LA-2222&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;07:40&quot;,
                        &quot;arrivalTime&quot;: &quot;09:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 50,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        },
        {
            &quot;uniqueId&quot;: 5213,
            &quot;totalPrice&quot;: 250,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 11,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-8888&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 200,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 1,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-1701&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;07:40&quot;,
                        &quot;arrivalTime&quot;: &quot;09:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 50,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 2,
                        &quot;cia&quot;: &quot;AZUL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;AD-1111&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;07:40&quot;,
                        &quot;arrivalTime&quot;: &quot;09:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 50,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 3,
                        &quot;cia&quot;: &quot;LATAM&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;LA-2222&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;07:40&quot;,
                        &quot;arrivalTime&quot;: &quot;09:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 50,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        },
        {
            &quot;uniqueId&quot;: 3647,
            &quot;totalPrice&quot;: 270,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 9,
                        &quot;cia&quot;: &quot;LATAM&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;LA-5555&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 150,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 10,
                        &quot;cia&quot;: &quot;AZUL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;AD-6606&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 150,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 7,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-6616&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;12:40&quot;,
                        &quot;arrivalTime&quot;: &quot;14:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 120,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        },
        {
            &quot;uniqueId&quot;: 6020,
            &quot;totalPrice&quot;: 300,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 11,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-8888&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 200,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 4,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-3333&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 100,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 5,
                        &quot;cia&quot;: &quot;AZUL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;AD-4444&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 100,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 6,
                        &quot;cia&quot;: &quot;LATAM&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;LA-5555&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 100,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        },
        {
            &quot;uniqueId&quot;: 9081,
            &quot;totalPrice&quot;: 320,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 11,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-8888&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 200,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 7,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-6616&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;12:40&quot;,
                        &quot;arrivalTime&quot;: &quot;14:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 120,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        },
        {
            &quot;uniqueId&quot;: 4955,
            &quot;totalPrice&quot;: 350,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 11,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-8888&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;08:40&quot;,
                        &quot;arrivalTime&quot;: &quot;10:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 200,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 8,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;1AF&quot;,
                        &quot;flightNumber&quot;: &quot;G3-7777&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;18:40&quot;,
                        &quot;arrivalTime&quot;: &quot;20:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 150,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        },
        {
            &quot;uniqueId&quot;: 7045,
            &quot;totalPrice&quot;: 1500,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 12,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;4DA&quot;,
                        &quot;flightNumber&quot;: &quot;G3-9999&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;20:40&quot;,
                        &quot;arrivalTime&quot;: &quot;22:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 1000,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    },
                    {
                        &quot;id&quot;: 13,
                        &quot;cia&quot;: &quot;LATAM&quot;,
                        &quot;fare&quot;: &quot;4DA&quot;,
                        &quot;flightNumber&quot;: &quot;LA-9897&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;20:40&quot;,
                        &quot;arrivalTime&quot;: &quot;22:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 1000,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 15,
                        &quot;cia&quot;: &quot;AZUL&quot;,
                        &quot;fare&quot;: &quot;4DA&quot;,
                        &quot;flightNumber&quot;: &quot;AD-1234&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;20:40&quot;,
                        &quot;arrivalTime&quot;: &quot;22:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 500,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        },
        {
            &quot;uniqueId&quot;: 9429,
            &quot;totalPrice&quot;: 1700,
            &quot;group&quot;: {
                &quot;inbound&quot;: [
                    {
                        &quot;id&quot;: 14,
                        &quot;cia&quot;: &quot;GOL&quot;,
                        &quot;fare&quot;: &quot;4DA&quot;,
                        &quot;flightNumber&quot;: &quot;G3-9897&quot;,
                        &quot;origin&quot;: &quot;BSB&quot;,
                        &quot;destination&quot;: &quot;CNF&quot;,
                        &quot;departureDate&quot;: &quot;30/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;30/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;20:40&quot;,
                        &quot;arrivalTime&quot;: &quot;22:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 1200,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 0,
                        &quot;inbound&quot;: 1,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ],
                &quot;outbound&quot;: [
                    {
                        &quot;id&quot;: 15,
                        &quot;cia&quot;: &quot;AZUL&quot;,
                        &quot;fare&quot;: &quot;4DA&quot;,
                        &quot;flightNumber&quot;: &quot;AD-1234&quot;,
                        &quot;origin&quot;: &quot;CNF&quot;,
                        &quot;destination&quot;: &quot;BSB&quot;,
                        &quot;departureDate&quot;: &quot;29/01/2021&quot;,
                        &quot;arrivalDate&quot;: &quot;29/01/2021&quot;,
                        &quot;departureTime&quot;: &quot;20:40&quot;,
                        &quot;arrivalTime&quot;: &quot;22:00&quot;,
                        &quot;classService&quot;: 3,
                        &quot;price&quot;: 500,
                        &quot;tax&quot;: 36,
                        &quot;outbound&quot;: 1,
                        &quot;inbound&quot;: 0,
                        &quot;duration&quot;: &quot;1:20&quot;
                    }
                ]
            }
        }
    ],
    &quot;totalGroups&quot;: 8,
    &quot;totalFlights&quot;: 15,
    &quot;cheapestPrice&quot;: 200,
    &quot;cheapestGroup&quot;: 7741
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-flightsapi" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-flightsapi"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-flightsapi"></code></pre>
</span>
<span id="execution-error-GETapi-flightsapi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-flightsapi"></code></pre>
</span>
<form id="form-GETapi-flightsapi" data-method="GET"
      data-path="api/flightsapi"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-flightsapi', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-flightsapi"
                    onclick="tryItOut('GETapi-flightsapi');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-flightsapi"
                    onclick="cancelTryOut('GETapi-flightsapi');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-flightsapi" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/flightsapi</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = [];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>