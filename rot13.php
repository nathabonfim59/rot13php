#!/usr/bin/php

<?php

if (!isset($argv[1])) {
	display_short_help();
	return;
}

$paramiter = $argv[1];

$startsWith = substr($paramiter, 0, 7);

$isOptionalParamiter = strpos($startsWith, "-") ||
	   				   strpos($startsWith, "--");

if ($isOptionalParamiter) {
	switch ($startsWith) {

		case "-d":
		case "--decode":
			echo str_rot13($argv[2]);
			break;
		case "-e":
		case "--encode":
			echo str_rot13($argv[2]);
			break;
		case "-h":
		case "--help":
			display_help();
			break;
		default:
			display_short_help();
			break;
	}
}

function display_short_help() {
    echo "Usage: root13 [OPTION]... [STRING]\n----";
    echo "\nType -h for more information\n\n";
}

function display_help() {

    echo "Usage: root13 [OPTION]... [STRING]";
    echo "-----------------------";
    echo "Decode or encode a root13 string";
	echo "";
    echo "-d, --decode     Decode string";
    echo "-e, --encode     Encode string";


    echo "    --help       Display this help and exit";
    echo "    --version    Outuput version infomation and exit";

	echo "";
	echo "@author nathabonfim59 -> https://github.com/nathabonfim59";
	echo "Liscense MIT";
}


function display_version() {
	echo "root13 1.0.0";
	echo "Author  @nathabonfim59 -> https://github.com/nathabonfim59";
	echo "This software is licensed under MIT";
	
	echo <<< END
	The MIT License (MIT)

	Copyright (c) 2018 @nathabonfim59

	Permission is hereby granted, free of charge, to any person obtaining a copy
	of this software and associated documentation files (the "Software"), to deal
	in the Software without restriction, including without limitation the rights
	to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
	copies of the Software, and to permit persons to whom the Software is
	furnished to do so, subject to the following conditions:

	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.

	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
	SOFTWARE.
END;
	
	echo $license;
}
