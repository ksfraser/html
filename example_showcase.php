<?php
// Example Showcase Page for Ksfraser\HTML classes
require_once __DIR__ . '/vendor/autoload.php';

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlForm;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Library Showcase</title>
    <link rel="stylesheet" href="assets/css/modal.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 2em; }
        .showcase-table { border-collapse: collapse; width: 60%; margin-bottom: 2em; }
        .showcase-table th, .showcase-table td { border: 1px solid #888; padding: 0.5em 1em; }
        .showcase-table th { background: #eee; }
        .btn { padding: 0.5em 1em; border: none; border-radius: 3px; cursor: pointer; }
        .btn-primary { background: #007bff; color: #fff; }
        .btn-secondary { background: #6c757d; color: #fff; }
    </style>
    <script src="assets/js/report-viewer.js"></script>
    <script>
        function showAlert(msg) { alert(msg); }
    </script>
</head>
<body>
    <h1>HTML Library Showcase</h1>
    <h2>Headers</h2>
    <?php
    for ($i = 1; $i <= 6; $i++) {
        echo "<h$i>Header Level $i</h$i>\n";
    }
    ?>

    <h2>Buttons</h2>
    <?php
    $button1 = new HtmlElement(new HtmlString('Primary Button'));
    $button1->setTag('button')->addCSSClass('btn')->addCSSClass('btn-primary')->setAttribute('onclick', 'showAlert(\'Primary Button Clicked!\')');
    echo $button1->getHtml();

    $button2 = new HtmlElement(new HtmlString('Secondary Button'));
    $button2->setTag('button')->addCSSClass('btn')->addCSSClass('btn-secondary')->setAttribute('onclick', 'showAlert(\'Secondary Button Clicked!\')');
    echo $button2->getHtml();
    ?>

    <h2>Table</h2>
    <table class="showcase-table">
        <thead>
            <tr><th>Name</th><th>Value</th></tr>
        </thead>
        <tbody>
            <tr><td>Row 1</td><td>Value 1</td></tr>
            <tr><td>Row 2</td><td>Value 2</td></tr>
        </tbody>
    </table>

    <h2>Form</h2>
    <?php
    $form = new HtmlForm(new HtmlString(''));
    $form->setMethod('post')->setAction('/submit')->setId('demoForm')->addCSSClass('showcase-form');
    $input = new HtmlElement(new HtmlString(''));
    $input->setTag('input')->setAttribute('type', 'text')->setAttribute('name', 'demo_input')->setAttribute('placeholder', 'Enter something');
    $submit = new HtmlElement(new HtmlString('Submit'));
    $submit->setTag('button')->addCSSClass('btn')->addCSSClass('btn-primary')->setAttribute('type', 'submit');
    $form->append($input, $submit);
    echo $form->getHtml();
    ?>

    <h2>Custom CSS and JS</h2>
    <p>This page uses <code>modal.css</code> and <code>report-viewer.js</code> from the assets directory.</p>
</body>
</html>
