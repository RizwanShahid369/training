<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/15/16
 * Time: 5:47 AM
 *
 */

include('HTMLPageBuilder.php');
include('HTMLPageDirector.php');

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->GetPage();
writeln($page->showPage());
writeln('');

writeln('END TESTING BUILDER PATTERN');

function writeln($line_in) {
    echo $line_in."\n";
}

?>