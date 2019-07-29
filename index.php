<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="grid.css">
    </head>
    <body>
        <div class="container">
            <div class="grid">
                <?php
                for ($i = 0; $i < 20; $i++) { ?>
                    <div class="row bg-red">
                        <div class="cell cell-1 bg-green">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="mark"></span>
                            </label>
                        </div>
                        <div class="cell cell-3">
                            <div class="titolo lg">CEEPORT SRL</div>
                        </div>
                    </div>
                <?php
                } ?>
            </div>
        </div>







        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>