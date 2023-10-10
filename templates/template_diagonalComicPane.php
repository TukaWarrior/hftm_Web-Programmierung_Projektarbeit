<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template_diagonalComicPane</title>

    <style>
        .container_skewed-panel {
            width: 300px;
            height: 200px;
            position: relative;
        }

        .skewed-panel-right {
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            border-style: solid;
            border-color: #000000;
            position: relative;
            transform: skew(-15deg);
            box-shadow: 4px 6px 6px -2px #000000;

            &::before {
                content: "";
                position: absolute;
                top: -0.2em;
                right: 1.7em;
                width: 100%;
                height: 100%;
                border-style: solid;
                border-color: #000;
                background-color: #ffffff;
                transform: skew(15deg);
            }

            &::after {
                content: "";
                position: absolute;
                right: 1.7em;
                width: 100%;
                height: 100%;
                background-color: #ffffff;
                transform: skew(15deg);
            }
        }

        .skewed-panel-right h1 {
            position: absolute;
            /* top: 50%; */
            /* left: 10%; */
            transform: skew(15deg);
            z-index: 1;
            /* Text is above the ::before and ::after elements */
        }
    </style>

</head>

<body>

    <div class="container_skewed-panel">
        <div class="skewed-panel-right">
            <div>
                <h1>Hello There</h1>
            </div>
        </div>
    </div>

</body>

</html>