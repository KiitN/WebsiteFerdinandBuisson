<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <style>
            body{
                background: #222;
            }
            h1, h2, h3, p, em{
                color: white;
            }
            h1{
                text-decoration:underline;
                text-align:center;
            }
            .sous-titre{
                font-size: 30px;
            }
            .news{
                background:#444;
                padding: 20px;
                margin-bottom:10px;
                min-width: 200px;
                min-height:100px;
                transition: ease-in-out 0.3s;
            }
            .news:hover{
                background: #333;
            }
            .news h3, h2{
                margin-left:50px;
                font-size: 20px;
            }
            .news p{
                margin-left: 55px;
                font-size: 20px;
            }
            .hist{
                border: 5px dotted black;
                margin-top:30px;
            }
            a{
                color: white;
                text-decoration: underline;
                transition: ease-in-out 0.2s;
            }
            a:hover{
                color: #777;
            }
            form{
                display: flex;
                flex-direction: column;
            }
            form input, textarea, button{
                background: #333;
            }
            form #name{
                width: 300px;
                height: 30px;
                margin-bottom: 20px;
                font-size: 20px;
                color: white;
            }
            form #text{
                margin-bottom: 20px;
                font-size: 15px;
                color: white;
                resize: none;
            }
            form #button{
                width: 300px;
                height: 30px;
                font-size: 20px;
                color: white;
            }
        </style>
    </head>

    <body>
        <?= $content ?>
    </body>
</html>