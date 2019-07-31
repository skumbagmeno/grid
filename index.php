<?php 
$inote = '<svg role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zm144 418c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V118c0-3.3 2.7-6 6-6h42v36c0 6.6 5.4 12 12 12h168c6.6 0 12-5.4 12-12v-36h42c3.3 0 6 2.7 6 6z" class=""></path></svg>';
?>
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
                    <div class="row">
                        <div class="cell cell-1">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="mark"></span>
                            </label>
                        </div>
                        <div class="cell">
                            <div class="titolo sm blue light">CEEPORT SRL</div>
                        </div>
                        <div class="cell cell-1">
                            <div class="sm">12/02/2019</div>
                        </div>
                        <div class="cell cell-1">
                            <div class="sm">12/02/2019</div>
                        </div>
                        <div class="cell cell-1">
                            <div class="sm">1.254,00</div>
                        </div>
                        <div class="cell cell-1">
                            <div class="sm">124,00</div>
                        </div>
                        <div class="cell cell-1">
                            <div class="md blue light bold">1.584,00</div>
                        </div>
                        <div class="cell cell-1">
                            <div class="sm">0,00</div>
                        </div>
                        <div class="cell cell-1">
                            <select>
                                <option>Valore</option>
                            </select>
                        </div>
                        <div class="cell cell-1">
                            <div class="icon">
                                <?= $inote ?>
                            </div>
                        </div>
                        <div class="cell cell-2 aright">
                            <div class="button inline round green">
                                <div class="icon">
                                    <?= $inote ?>
                                </div>
                            </div>
                            <div class="button inline round blue">
                                <div class="icon">
                                    <?= $inote ?>
                                </div>
                            </div>
                            <div class="button inline round red">
                                <div class="icon">
                                    <?= $inote ?>
                                </div>
                            </div>
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