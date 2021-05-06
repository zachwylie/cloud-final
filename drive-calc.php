<!DOCTYPE html>
<html>
    <head>
        <title>Drive Size Calculator</title>
    </head>
    <body>
        <h1><strong>Drive Size Calculator</strong></h1>
        <p>A calculator that takes the advertised size of a hard disk and returns the actual amount of storage on the disk.</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            Enter advertised disk size:
            <input type="text" name="size" size=4>
            <select name="unit"> <option value="kilobytes">KB</option> <option value="megabytes">MB</option> <option value="gigabytes">GB</option> <option value="terabytes">TB</option>
            <br/>
            <input type="submit" name="Calculate"/>
        </form>

        <?php

        if (array_key_exists('size', $_GET))
        {
            $unit = $_GET['unit'];
            $size = $_GET['size'];
            $sizeLen = strlen($_GET['size']);

            if(($sizeLen) > 0) && (is_numeric($_GET['size'])))
            {
                if ($unit == "kilobytes")
                {
                    print "<p>The actual size of your drive is:</p>";
                    $real_size = ($size*1000) / 1024;
                    number_format ( float $real_size , int $decimals = 2 , string|null $decimal_separator = "." , string|null $thousands_separator = "," ) : string
                    print "<p><strong>$real_size KB</strong></p>";
                }

                if ($unit == "megabytes")
                {
                    print "<p>The actual size of your drive is:</p>";
                    $real_size = ($size*1000000) / 1024 / 1024;
                    number_format ( float $real_size , int $decimals = 2 , string|null $decimal_separator = "." , string|null $thousands_separator = "," ) : string
                    print "<p><strong>$real_size MB</strong></p>";
                }

                if ($unit == "gigabytes")
                {
                    print "<p>The actual size of your drive is:</p>";
                    $real_size = ($size*1000000000) / 1024 / 1024 / 1024;
                    number_format ( float $real_size , int $decimals = 2 , string|null $decimal_separator = "." , string|null $thousands_separator = "," ) : string
                    print "<p><strong>$real_size GB</strong></p>";
                }

                if ($unit == "terabytes")
                {
                    print "<p>The actual size of your drive is:</p>";
                    $real_size = ($size*1000000000000) / 1024 / 1024 / 1024 / 1024;
                    number_format ( float $real_size , int $decimals = 2 , string|null $decimal_separator = "." , string|null $thousands_separator = "," ) : string
                    print "<p><strong>$real_size TB</strong></p>";
                }
            }
            else
            {
                echo "<span style = \"color:red\">*Please enter a valid disk size.</span>";
            }
        }

        ?>
    </body>
</html> 