<?php
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page 17</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        caption
        {
            font-size: 5vw;
            text-align: center;
            caption-side: top;
        }
        table
        {
            border: 1px solid black;
            border-radius: 1vw;
            width: 70vw;
            border-spacing: 8vw 1vw;
            margin-left: auto;
            margin-right: auto;
        }
        th
        {
            text-align: center;
            font-weight: bold;
            font-size: 1.5vw;
        }
        td
        {
            border: 1px solid black;
            text-align: center;
            border-radius: 10px;
        }
        a
        {
            text-decoration: none;
            font-weight: bold;
        }
        a:visited
        {
            color: black;
        }
        .onoffswitch {
            position: relative; width: 90px;
            -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
        }
        .onoffswitch-checkbox {
            display: none;
        }
        .onoffswitch-label {
            display: block; overflow: hidden; cursor: pointer;
            border: 2px solid darkgrey; border-radius: 20px;
        }
        .onoffswitch-inner {
            display: block; width: 200%; margin-left: -100%;
            transition: margin 0.3s ease-in 0s;
        }
        .onoffswitch-inner:before, .onoffswitch-inner:after {
            display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
            font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
            box-sizing: border-box;
        }
        .onoffswitch-inner:before {
            content: "ON";
            padding-left: 10px;
            background-color: green; color: white;
            text-align: left;
        }
        .onoffswitch-inner:after {
            content: "OFF";
            padding-right: 10px;
            background-color: red; color: white;
            text-align: right;
        }
        .onoffswitch-switch {
            display: block; width: 18px; margin: 6px;
            background: white;
            position: absolute; top: 0; bottom: 0;
            right: 56px;
            border: 2px solid darkgrey; border-radius: 20px;
            transition: all 0.3s ease-in 0s;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
            margin-left: 0;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
            right: 0px;
        }
        </style>
        </head>
<body>


<table>
    <caption> Luminositée </caption>
    <tr>
        <th>
            IdCapteur:
        </th>
        <th>
            Admin:
        </th>
        <th>
            <div class="onoffswitch">
                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>

        </th>
        <td>
            <a href="pagemodifier-ajouter.html">Modifier</a>
        </td>
    </tr>
    <tr>
        <th>
            Place:
        </th>
        <th>
            Etat:
        </th>

    </tr>
</table>
<table style="margin-top: 2vw">
    <tr>
        <td><a href="pagemodifier-ajouter.html">+</a></td>
        <th style="text-align: left">Ajouter un capteur</th>
    </tr>
</table>
</body>
