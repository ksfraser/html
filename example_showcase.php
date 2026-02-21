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
    use Ksfraser\HTML\Elements\HtmlHeading1;
    use Ksfraser\HTML\Elements\HtmlHeading2;
    use Ksfraser\HTML\Elements\HtmlHeading3;
    use Ksfraser\HTML\Elements\HtmlHeading4;
    use Ksfraser\HTML\Elements\HtmlHeading5;
    use Ksfraser\HTML\Elements\HtmlHeading6;
    echo (new HtmlHeading1(new HtmlString('Header Level 1 (HtmlHeading1)')))->getHtml();
    echo (new HtmlHeading2(new HtmlString('Header Level 2 (HtmlHeading2)')))->getHtml();
    echo (new HtmlHeading3(new HtmlString('Header Level 3 (HtmlHeading3)')))->getHtml();
    echo (new HtmlHeading4(new HtmlString('Header Level 4 (HtmlHeading4)')))->getHtml();
    echo (new HtmlHeading5(new HtmlString('Header Level 5 (HtmlHeading5)')))->getHtml();
    echo (new HtmlHeading6(new HtmlString('Header Level 6 (HtmlHeading6)')))->getHtml();
    ?>


    <h2>Buttons</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlButton;
    use Ksfraser\HTML\Elements\HtmlInputButton;
    $button1 = new HtmlButton(new HtmlString('Primary Button'));
    $button1->addCSSClass('btn')->addCSSClass('btn-primary')->setAttribute('onclick', 'showAlert(\'Primary Button Clicked!\')');
    echo $button1->getHtml();

    $button2 = new HtmlInputButton('button', new HtmlString('Secondary InputButton'));
    $button2->addCSSClass('btn')->addCSSClass('btn-secondary')->setAttribute('onclick', 'showAlert(\'Secondary InputButton Clicked!\')');
    echo $button2->getHtml();
    ?>


    <h2>Table</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlTable;
    use Ksfraser\HTML\Elements\HtmlTableRow;
    use Ksfraser\HTML\Elements\HtmlTableHeaderCell;
    use Ksfraser\HTML\Elements\HtmlTableRowCell;
    $row1 = new HtmlTableRow(new HtmlString(''));
    $row1->addNested(new HtmlTableHeaderCell(new HtmlString('Name')))->addNested(new HtmlTableHeaderCell(new HtmlString('Value')));
    $row2 = new HtmlTableRow(new HtmlString(''));
    $row2->addNested(new HtmlTableRowCell(new HtmlString('Row 1')))->addNested(new HtmlTableRowCell(new HtmlString('Value 1')));
    $row3 = new HtmlTableRow(new HtmlString(''));
    $row3->addNested(new HtmlTableRowCell(new HtmlString('Row 2')))->addNested(new HtmlTableRowCell(new HtmlString('Value 2')));
    $table = new HtmlTable(new HtmlString(''));
    $table->addNested($row1)->addNested($row2)->addNested($row3)->addCSSClass('showcase-table');
    echo $table->getHtml();
    ?>


    <h2>Form</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlInput;
    use Ksfraser\HTML\Elements\HtmlSelect;
    use Ksfraser\HTML\Attributes\HtmlNameValue;
    use Ksfraser\HTML\Elements\HtmlOption;
    $form = new HtmlForm(new HtmlString(''));
    $form->setMethod('post')->setAction('/submit')->setId('demoForm')->addCSSClass('showcase-form');
    $input = new HtmlInput(new HtmlString(''), 'text');
    $input->setAttribute('name', 'demo_input')->setAttribute('placeholder', 'Enter something');
    $select = new HtmlSelect(new HtmlNameValue('demo_select'));
    $select->addOption(new HtmlOption('1', 'Option 1'))->addOption(new HtmlOption('2', 'Option 2'));
    $submit = new HtmlButton(new HtmlString('Submit'));
    $submit->addCSSClass('btn')->addCSSClass('btn-primary')->setAttribute('type', 'submit');
    $form->append($input, $select, $submit);
    echo $form->getHtml();
    ?>


    <h2>Custom CSS, Div, and JS</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlDiv;
    $div1 = new HtmlDiv(new HtmlString('This is a div with custom CSS.'));
    $div1->addCSSClass('btn-primary')->setAttribute('style', 'padding:1em; color:white; background:#007bff; margin-bottom:1em;');
    echo $div1->getHtml();
    $div2 = new HtmlDiv(new HtmlString('This is a secondary styled div.'));
    $div2->addCSSClass('btn-secondary')->setAttribute('style', 'padding:1em; color:white; background:#6c757d;');
    echo $div2->getHtml();
    ?>
    <p>This page uses <code>modal.css</code> and <code>report-viewer.js</code> from the assets directory.</p>
</p>

    <h2>Links</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlA;
    use Ksfraser\HTML\Elements\HtmlEmail;
    $link = new HtmlA(new HtmlString('Visit Example'), 'https://example.com');
    $link->addCSSClass('btn')->addCSSClass('btn-primary');
    echo $link->getHtml();
    $email = new HtmlEmail(new HtmlString('Email Us'), 'info@example.com');
    echo $email->getHtml();
    ?>

    <h2>Formatting</h2>
    <?php
    use Ksfraser\HTML\Formatting\HtmlB;
    use Ksfraser\HTML\Formatting\HtmlBold;
    use Ksfraser\HTML\Formatting\HtmlItalic;
    use Ksfraser\HTML\Formatting\HtmlStrong;
    use Ksfraser\HTML\Formatting\HtmlEm;
    use Ksfraser\HTML\Elements\HtmlMark;
    use Ksfraser\HTML\Elements\HtmlSmall;
    $b = new HtmlB(new HtmlString('Bold Text'));
    $strong = new HtmlStrong(new HtmlString('Strong Text'));
    $italic = new HtmlItalic(new HtmlString('Italic (HtmlItalic)'));
    $em = new HtmlEm(new HtmlString('Emphasized Text'));
    $mark = new HtmlMark(new HtmlString('Highlighted Text'));
    $small = new HtmlSmall(new HtmlString('Small Text'));
    echo $b->getHtml() . ' ' . $strong->getHtml() . ' ' . $italic->getHtml() . ' ' . $em->getHtml() . ' ' . $mark->getHtml() . ' ' . $small->getHtml();
    ?>

    <h2>Lists</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlUl;
    use Ksfraser\HTML\Elements\HtmlOl;
    use Ksfraser\HTML\Elements\HtmlLi;
    $ul = new HtmlUl(new HtmlString(''));
    $ul->addNested(new HtmlLi(new HtmlString('Unordered Item 1')));
    $ul->addNested(new HtmlLi(new HtmlString('Unordered Item 2')));
    $ol = new HtmlOl(new HtmlString(''));
    $ol->addNested(new HtmlLi(new HtmlString('Ordered Item 1')));
    $ol->addNested(new HtmlLi(new HtmlString('Ordered Item 2')));
    echo $ul->getHtml();
    echo $ol->getHtml();
    ?>

    <h2>Images</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlImg;
    $img = new HtmlImg(new HtmlString(''), 'https://via.placeholder.com/100');
    $img->setAttribute('alt', 'Placeholder Image')->setAttribute('style', 'margin:1em 0;');
    echo $img->getHtml();
    ?>

    <h2>Horizontal Rule</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlHr;
    $hr = new HtmlHr(new HtmlString(''));
    echo $hr->getHtml();
    ?>

    <h2>Preformatted & Code</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlPre;
    use Ksfraser\HTML\Elements\HtmlPreformatted;
    $pre = new HtmlPre(new HtmlString("Line 1\n    Line 2\n        Line 3"));
    $preformatted = new HtmlPreformatted(new HtmlString("Preformatted block\n  Indented line"));
    echo $pre->getHtml();
    echo $preformatted->getHtml();
    ?>

    <h2>HTML Comment</h2>
    <?php
    use Ksfraser\HTML\Elements\HtmlComment;
    $comment = new HtmlComment('This is a comment, not visible in rendered HTML.');
    echo $comment->getHtml();
        ?>

        <h2>Description List</h2>
        <?php
        use Ksfraser\HTML\Elements\HtmlDl;
        use Ksfraser\HTML\Elements\HtmlDt;
        use Ksfraser\HTML\Elements\HtmlDd;
        $dl = new HtmlDl(new HtmlString(''));
        $dl->addNested(new HtmlDt(new HtmlString('Term 1')));
        $dl->addNested(new HtmlDd(new HtmlString('Definition 1')));
        $dl->addNested(new HtmlDt(new HtmlString('Term 2')));
        $dl->addNested(new HtmlDd(new HtmlString('Definition 2')));
        echo $dl->getHtml();
        ?>

        <h2>Table Sections</h2>
        <?php
        use Ksfraser\HTML\Elements\HtmlTableHead;
        use Ksfraser\HTML\Elements\HtmlTableBody;
        use Ksfraser\HTML\Elements\HtmlTableFoot;
        use Ksfraser\HTML\Elements\HtmlTableCaption;
        $thead = new HtmlTableHead(new HtmlString('Table Head'));
        $tbody = new HtmlTableBody(new HtmlString('Table Body'));
        $tfoot = new HtmlTableFoot(new HtmlString('Table Foot'));
        $caption = new HtmlTableCaption(new HtmlString('Table Caption'));
        echo $caption->getHtml();
        echo $thead->getHtml();
        echo $tbody->getHtml();
        echo $tfoot->getHtml();
        ?>

        <h2>Script & Style</h2>
        <?php
        use Ksfraser\HTML\Elements\HtmlScript;
        use Ksfraser\HTML\Elements\HtmlStyle;
        $script = new HtmlScript(null, 'console.log("Hello from HtmlScript!");');
        $style = new HtmlStyle('test', 'body { background: #f9f9f9; }');
        echo $script->getHtml();
        echo $style->getHtml();
        ?>

        <h2>Span, Paragraph, and Raw HTML</h2>
        <?php
        use Ksfraser\HTML\Elements\HtmlSpan;
        use Ksfraser\HTML\Elements\HtmlP;
        use Ksfraser\HTML\Elements\HtmlRaw;
        $span = new HtmlSpan(new HtmlString('This is a span.'));
        $p = new HtmlP(new HtmlString('This is a paragraph.'));
        $raw = new HtmlRaw('<b>This is raw HTML (bold)</b>');
        echo $span->getHtml();
        echo $p->getHtml();
        echo $raw->getHtml();
        ?>

        <h2>Attribute Value Objects</h2>
        <?php
        use Ksfraser\HTML\Attributes\HtmlStyleList;
        $styleList = new HtmlStyleList();
        $styleList->addAttribute(new Ksfraser\HTML\Elements\HtmlStyle('color', 'red'));
        $styleList->addAttribute(new Ksfraser\HTML\Elements\HtmlStyle('font-weight', 'bold'));
        $divStyled = new Ksfraser\HTML\Elements\HtmlDiv(new Ksfraser\HTML\Elements\HtmlString('Styled with daisy-chained HtmlStyleList'));
        $divStyled->setAttribute('style', $styleList->getAttributeValueString());
        echo $divStyled->getHtml();
        ?>

        <h2>Subscript, Superscript, and Miscellaneous</h2>
        <?php
        use Ksfraser\HTML\Formatting\HtmlSup;
        use Ksfraser\HTML\Formatting\HtmlSub;
        use Ksfraser\HTML\Elements\HtmlIns;
        use Ksfraser\HTML\Elements\HtmlDel;
        $sup = new HtmlSup(new HtmlString('Superscript'));
        $sub = new HtmlSub(new HtmlString('Subscript'));
        $ins = new HtmlIns(new HtmlString('Inserted Text'));
        $del = new HtmlDel(new HtmlString('Deleted Text'));
        echo $sup->getHtml();
        echo $sub->getHtml();
        echo $ins->getHtml();
        echo $del->getHtml();
    ?>
</body>
</html>
