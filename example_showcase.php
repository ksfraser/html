<?php
// Example Showcase Page for Ksfraser\HTML classes
require_once __DIR__ . '/vendor/autoload.php';

use Ksfraser\HTML\HtmlDoc;
use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlAttribute;
use Ksfraser\HTML\Elements\HtmlString;
use Ksfraser\HTML\Elements\HtmlForm;
use Ksfraser\HTML\Elements\HtmlScriptJS;
use Ksfraser\HTML\Elements\HtmlScriptJSON;
use Ksfraser\HTML\Elements\HtmlScriptVBScript;
use Ksfraser\HTML\Elements\HtmlScriptTypeScript;
    use Ksfraser\HTML\Elements\HtmlHeading1;
    use Ksfraser\HTML\Elements\HtmlHeading2;
    use Ksfraser\HTML\Elements\HtmlHeading3;
    use Ksfraser\HTML\Elements\HtmlHeading4;
    use Ksfraser\HTML\Elements\HtmlHeading5;
    use Ksfraser\HTML\Elements\HtmlHeading6;
        use Ksfraser\HTML\Button\HtmlButton;
    use Ksfraser\HTML\Elements\HtmlInputButton;
        use Ksfraser\HTML\FAButtons\ViewLoanActionButton;
    use Ksfraser\HTML\FAButtons\EditTypeActionButton;
    use Ksfraser\HTML\FAButtons\EditLoanActionButton;
    use Ksfraser\HTML\FAButtons\EditFrequencyActionButton;
    use Ksfraser\HTML\FAButtons\DeleteTypeActionButton;
    use Ksfraser\HTML\FAButtons\DeleteFrequencyActionButton;
    use Ksfraser\HTML\Elements\HtmlTable;
    use Ksfraser\HTML\Elements\HtmlTableRow;
    use Ksfraser\HTML\Elements\HtmlTableHeaderCell;
    use Ksfraser\HTML\Elements\HtmlTableRowCell;
    use Ksfraser\HTML\Elements\HtmlInput;
    use Ksfraser\HTML\Elements\HtmlSelect;
    use Ksfraser\HTML\Attributes\HtmlNameValue;
    use Ksfraser\HTML\Elements\HtmlOption;
    use Ksfraser\HTML\Elements\HtmlA;
    use Ksfraser\HTML\Elements\HtmlEmail;
    use Ksfraser\HTML\Factory\ViewLink;
    use Ksfraser\HTML\Factory\ListLink;
    use Ksfraser\HTML\Factory\EditLink;
    use Ksfraser\HTML\Factory\DeleteLink;
    use Ksfraser\HTML\Factory\CreateLink;
    use Ksfraser\HTML\Factory\AddLink;
    use Ksfraser\HTML\Elements\HtmlDiv;
    use Ksfraser\HTML\Formatting\HtmlB;
    use Ksfraser\HTML\Formatting\HtmlBold;
    use Ksfraser\HTML\Formatting\HtmlItalic;
    use Ksfraser\HTML\Formatting\HtmlStrong;
    use Ksfraser\HTML\Formatting\HtmlEm;
    use Ksfraser\HTML\Elements\HtmlMark;
    use Ksfraser\HTML\Elements\HtmlSmall;
    use Ksfraser\HTML\Elements\HtmlUl;
    use Ksfraser\HTML\Elements\HtmlOl;
    use Ksfraser\HTML\Elements\HtmlLi;
    use Ksfraser\HTML\Rows\LoanTypeTableRow;
    use Ksfraser\HTML\Rows\LoanSummaryTableRow;
    use Ksfraser\HTML\Rows\InterestFreqTableRow;
    use Ksfraser\HTML\Elements\HtmlImg;
    use Ksfraser\HTML\Elements\HtmlHr;  
        use Ksfraser\HTML\Elements\HtmlPre;
        use Ksfraser\HTML\Elements\HtmlPreformatted;    
    use Ksfraser\HTML\Elements\HtmlComment;
use Ksfraser\HTML\Attributes\HtmlStyleList;
        use Ksfraser\HTML\Typescript\HtmlTypeScriptString;
        use Ksfraser\HTML\VBScript\HtmlVBScriptString;
                use Ksfraser\HTML\Elements\HtmlSpan;
        use Ksfraser\HTML\Formatting\HtmlParagraph;
        use Ksfraser\HTML\Formatting\HtmlP;
        use Ksfraser\HTML\Elements\HtmlRaw;
        use Ksfraser\HTML\Formatting\HtmlSup;
        use Ksfraser\HTML\Formatting\HtmlSub;
        use Ksfraser\HTML\Elements\HtmlIns;
        use Ksfraser\HTML\Elements\HtmlDel;
use Ksfraser\HTML\Elements\HtmlTableHead;
        use Ksfraser\HTML\Elements\HtmlTableBody;
        use Ksfraser\HTML\Elements\HtmlTableFoot;
        use Ksfraser\HTML\Elements\HtmlTableCaption;
        use Ksfraser\HTML\Elements\HtmlDl;
        use Ksfraser\HTML\Elements\HtmlDt;
        use Ksfraser\HTML\Elements\HtmlDd;
        use Ksfraser\HTML\Elements\HtmlScript;
        use Ksfraser\HTML\Elements\HtmlStyle;
        use Ksfraser\HTML\Elements\HtmlMeta;

// Generate opening structure
$doc = new HtmlDoc();
$head = new Ksfraser\HTML\Elements\HtmlHead(new HtmlString(''));
$body = new Ksfraser\HTML\Elements\HtmlBody(new HtmlString(''));
$html = new Ksfraser\HTML\Elements\HtmlHtml(new HtmlString(''));
$html->addNested($head)->addNested($body);
$doc->addNested($html);

$meta = new Ksfraser\HTML\Elements\HtmlMeta(new HtmlString(''));
$meta->setAttribute('charset', 'UTF-8');
$title = new Ksfraser\HTML\Elements\HtmlTitle(new HtmlString('HTML Library Showcase'));
$link = new Ksfraser\HTML\Elements\HtmlExternalCSS();
$link->setHref('assets/css/modal.css');
$scriptInline = new HtmlScriptJS(new \Ksfraser\HTML\Javascript\HtmlJSString('function showAlert(msg) { alert(msg); }'));
$scriptExternal = new HtmlScriptJS(new \Ksfraser\HTML\Javascript\HtmlJSString(''));
$scriptExternal->setAttribute('src', 'assets/js/report-viewer.js');

$styleBody = new HtmlStyle(new HtmlString('body { font-family: Arial, sans-serif; margin: 2em; }'));
$styleTable = new HtmlStyle(new HtmlString('.showcase-table { border-collapse: collapse; width: 60%; margin-bottom: 2em; } .showcase-table th, .showcase-table td { border: 1px solid #888; padding: 0.5em 1em; } .showcase-table th { background: #eee; }'));
$styleBtn = new HtmlStyle(new HtmlString('.btn { padding: 0.5em 1em; border: none; border-radius: 3px; cursor: pointer; } .btn-primary { background: #007bff; color: #fff; } .btn-secondary { background: #6c757d; color: #fff; }'));
$head->addNested($meta)
     ->addNested($title)
     ->addNested($link)
     ->addNested($styleBody)
     ->addNested($styleTable)
     ->addNested($styleBtn)
     ->addNested($scriptExternal)
     ->addNested($scriptInline);

     $html->setAttribute('lang', 'en'); 
    $html->addNested($head);
    $h1_1 = new HtmlHeading1(new HtmlString('HTML Library Showcase'));
    $body->addNested($h1_1);

    $h2_1 = new HtmlHeading2(new HtmlString('Headers'));
    $body->addNested($h2_1);
    $h1_2 = new HtmlHeading1(new HtmlString('Header Level 1 (HtmlHeading1)'));
    $body->addNested($h1_2);
    $h2_2 = new HtmlHeading2(new HtmlString('Header Level 2 (HtmlHeading2)'));
    $body->addNested($h2_2);
    $h3_2 = new HtmlHeading3(new HtmlString('Header Level 3 (HtmlHeading3)'));
    $body->addNested($h3_2);
    $h4_2 = new HtmlHeading4(new HtmlString('Header Level 4 (HtmlHeading4)'));
    $body->addNested($h4_2);
    $h5_2 = new HtmlHeading5(new HtmlString('Header Level 5 (HtmlHeading5)'));
    $body->addNested($h5_2);
    $h6_2 = new HtmlHeading6(new HtmlString('Header Level 6 (HtmlHeading6)'));
    $body->addNested($h6_2);

    $h2_3 = new HtmlHeading2(new HtmlString('Buttons'));
    $body->addNested($h2_3);
    $button1 = new HtmlButton(new HtmlString('Primary Button'));
    $button1->addCSSClass('btn')->addCSSClass('btn-primary')->setAttribute('onclick', 'showAlert(\'Primary Button Clicked!\')');
    $body->addNested($button1);

    $button2 = new HtmlInputButton('button', new HtmlString('Secondary InputButton'));
    $button2->addCSSClass('btn')->addCSSClass('btn-secondary')->setAttribute('onclick', 'showAlert(\'Secondary InputButton Clicked!\')');
    $body->addNested($button2);
    // FA Buttons

    $body->addNested(new ViewLoanActionButton('View'));
    $body->addNested(new EditTypeActionButton('Edit Type'));
    $body->addNested(new EditLoanActionButton('Edit Loan'));
    $body->addNested(new EditFrequencyActionButton('Edit Frequency'));
    $body->addNested(new DeleteTypeActionButton('Delete Type'));
    $body->addNested(new DeleteFrequencyActionButton('Delete Frequency'));
    

    $h2_4 = new HtmlHeading2(new HtmlString('Table'));
    $body->addNested($h2_4);
    $row1 = new HtmlTableRow(new HtmlString(''));
    $row1->addNested(new HtmlTableHeaderCell(new HtmlString('Name')))->addNested(new HtmlTableHeaderCell(new HtmlString('Value')));
    $row2 = new HtmlTableRow(new HtmlString(''));
    $row2->addNested(new HtmlTableRowCell(new HtmlString('Row 1')))->addNested(new HtmlTableRowCell(new HtmlString('Value 1')));
    $row3 = new HtmlTableRow(new HtmlString(''));
    $row3->addNested(new HtmlTableRowCell(new HtmlString('Row 2')))->addNested(new HtmlTableRowCell(new HtmlString('Value 2')));
    $table = new HtmlTable(new HtmlString(''));
    $table->addNested($row1)->addNested($row2)->addNested($row3)->addCSSClass('showcase-table');
    $body->addNested($table);

    $h2_5 = new HtmlHeading2(new HtmlString('Form'));
    $body->addNested($h2_5);
    $form = new HtmlForm(new HtmlString(''));
    $form->setMethod('post')->setAction('/submit')->setId('demoForm')->addCSSClass('showcase-form');
    $input = new HtmlInput(new HtmlString(''), 'text');
    $input->setAttribute('name', 'demo_input')->setAttribute('placeholder', 'Enter something');
    $select = new HtmlSelect(new HtmlNameValue('demo_select'));
    $select->addOption(new HtmlOption('1', 'Option 1'))->addOption(new HtmlOption('2', 'Option 2'));
    $submit = new HtmlButton(new HtmlString('Submit'));
    $submit->addCSSClass('btn')->addCSSClass('btn-primary')->setAttribute('type', 'submit');
    $form->append($input, $select, $submit);
    $body->addNested($form);

    $h2_6 = new HtmlHeading2(new HtmlString('Custom CSS, Div, and JS'));
    $body->addNested($h2_6);

    $div1 = new HtmlDiv(new HtmlString('This is a div with custom CSS.'));
    $div1->addCSSClass('btn-primary')->setAttribute('style', 'padding:1em; color:white; background:#007bff; margin-bottom:1em;');
    $body->addNested($div1);
    $div2 = new HtmlDiv(new HtmlString('This is a secondary styled div.'));
    $div2->addCSSClass('btn-secondary')->setAttribute('style', 'padding:1em; color:white; background:#6c757d;');
    $body->addNested($div2);
    $p = new HtmlParagraph(new HtmlString('This page uses <code>modal.css</code> and <code>report-viewer.js</code> from the assets directory.'));
    $body->addNested($p);

    $h2_7 = new HtmlHeading2(new HtmlString('Links & Action Links'));
    $body->addNested($h2_7);
    $link = new HtmlA(new HtmlString('Visit Example'));
    $link->addCSSClass('btn')->addCSSClass('btn-primary');
    $body->addNested($link);
    $email = new HtmlEmail(new HtmlString('Email Us'));
    $body->addNested($email);
    // Action Links
    $body->addNested(new ViewLink('View'));
    $body->addNested(new ListLink('List'));
    $body->addNested(new EditLink('Edit'));
    $body->addNested(new DeleteLink('Delete'));
    $body->addNested(new CreateLink('Create'));
    $body->addNested(new AddLink('Add'));
    

    $h2_8 = new HtmlHeading2(new HtmlString('Formatting'));
    $body->addNested($h2_8);
    $b = new HtmlB(new HtmlString('Bold Text'));
    $strong = new HtmlStrong(new HtmlString('Strong Text'));
    $italic = new HtmlItalic(new HtmlString('Italic (HtmlItalic)'));
    $em = new HtmlEm(new HtmlString('Emphasized Text'));
    $mark = new HtmlMark(new HtmlString('Highlighted Text'));
    $small = new HtmlSmall(new HtmlString('Small Text'));
    $body->addNested($b);
    $body->addNested($strong);
    $body->addNested($italic);
    $body->addNested($em);
    $body->addNested($mark);
    $body->addNested($small);
    
    $h2_9 = new HtmlHeading2(new HtmlString('Lists'));  
    $body->addNested($h2_9);
    
    $ul = new HtmlUl(new HtmlString(''));
    $ul->addNested(new HtmlLi(new HtmlString('Unordered Item 1')));
    $ul->addNested(new HtmlLi(new HtmlString('Unordered Item 2')));
    $ol = new HtmlOl(new HtmlString(''));
    $ol->addNested(new HtmlLi(new HtmlString('Ordered Item 1')));
    $ol->addNested(new HtmlLi(new HtmlString('Ordered Item 2')));
    $body->addNested($ul);
    $body->addNested($ol);

    $h2_10 = new HtmlHeading2(new HtmlString('Table Rows'));
    $body->addNested($h2_10);
    // Provide sample data objects for each row builder
    $loanType = (object)[ 'id' => 1, 'name' => 'Fixed', 'description' => 'Fixed Rate Loan' ];
    $loanSummary = (object)[ 'id' => 101, 'summary' => 'Loan Summary', 'details' => 'Details about the loan' ];
    $interestFreq = (object)[ 'id' => 201, 'frequency' => 'Monthly' ];
    $body->addNested((new LoanTypeTableRow())->build($loanType));
    $body->addNested((new LoanSummaryTableRow())->build($loanSummary));
    $body->addNested((new InterestFreqTableRow())->build($interestFreq));
    $h2_11 = new HtmlHeading2(new HtmlString('Images'));
    $body->addNested($h2_11);

    $img = new HtmlImg(new HtmlString(''));
    $img->setAttribute('alt', 'Placeholder Image')->setAttribute('style', 'margin:1em 0;');
    $body->addNested($img);

    $h2_12 = new HtmlHeading2(new HtmlString('Horizontal Rule'));
    $body->addNested($h2_12);
    $hr = new HtmlHr(new HtmlString(''));
    $body->addNested($hr);

    $h2_13 = new HtmlHeading2(new HtmlString('Preformatted & Code'));
    $body->addNested($h2_13);
    $pre = new HtmlPre(new HtmlString("Line 1\n    Line 2\n        Line 3"));
    $preformatted = new HtmlPreformatted(new HtmlString("Preformatted block\n  Indented line"));
    $body->addNested($pre);
    $body->addNested($preformatted);

    $h2_14 = new HtmlHeading2(new HtmlString('HTML Comment'));
    $body->addNested($h2_14);
    $comment = new HtmlComment('This is a comment, not visible in rendered HTML.');
    $body->addNested($comment);


        $h2_15 = new HtmlHeading2(new HtmlString('Description List'));
        $body->addNested($h2_15);
        $dl = new HtmlDl(new HtmlString(''));
        $dl->addNested(new HtmlDt(new HtmlString('Term 1')));
        $dl->addNested(new HtmlDd(new HtmlString('Definition 1')));
        $dl->addNested(new HtmlDt(new HtmlString('Term 2')));
        $dl->addNested(new HtmlDd(new HtmlString('Definition 2')));
        $body->addNested($dl);

        $h2_16 = new HtmlHeading2(new HtmlString('Table Sections'));
        $body->addNested($h2_16);
        $thead = new HtmlTableHead(new HtmlString('Table Head'));
        $tbody = new HtmlTableBody(new HtmlString('Table Body'));
        $tfoot = new HtmlTableFoot(new HtmlString('Table Foot'));
        $caption = new HtmlTableCaption(new HtmlString('Table Caption'));
        $body->addNested($caption);
        $body->addNested($thead);
        $body->addNested($tbody);
        $body->addNested($tfoot);
        

        $h2_15 = new HtmlHeading2(new HtmlString('Script & Style'));
        $body->addNested($h2_15);
        $script = new HtmlScriptJS(new \Ksfraser\HTML\Javascript\HtmlJSString('console.log("Hello from HtmlScript!");'));
        $style = new HtmlStyle(new HtmlString('body { background: #f9f9f9; }'));
        $body->addNested($script);
        $body->addNested($style);
        // Script Language Examples
        $body->addNested(new HtmlScriptTypeScript(new HtmlTypeScriptString('let x: number = 5;')));
        $body->addNested(new HtmlScriptVBScript(new HtmlVBScriptString('MsgBox "Hello VBScript!"')));
        

        $h2_14 = new HtmlHeading2(new HtmlString('Span, Paragraph, and Raw HTML'));
        $body->addNested($h2_14);
        $span = new HtmlSpan(new HtmlString('This is a span.'));
        $p = new HtmlP(new HtmlString('This is a paragraph.'));
        $raw = new HtmlRaw('<b>This is raw HTML (bold)</b>');
        $body->addNested($span);
        $body->addNested($p);
        $body->addNested($raw);
        
        $h2_15 = new HtmlHeading2(new HtmlString('Attribute Value Objects'));
        $body->addNested($h2_15);
        
        
        $styleList = new Ksfraser\HTML\Attributes\HtmlStyleList();
        $styleList->addAttribute(new Ksfraser\HTML\Elements\StyleAttribute('color: red;'));
        $styleList->addAttribute(new Ksfraser\HTML\Elements\StyleAttribute('font-weight: bold;'));
        $divStyled = new Ksfraser\HTML\Elements\HtmlDiv(new Ksfraser\HTML\Elements\HtmlString('Styled with daisy-chained HtmlStyleList'));
        $divStyled->setAttribute('style', $styleList->getStyleString());
        $body->addNested($divStyled);
        

        $h2_16 = new HtmlHeading2(new HtmlString('Subscript, Superscript, and Miscellaneous'));
        $body->addNested($h2_16);
        $sup = new HtmlSup(new HtmlString('Superscript'));
        $sub = new HtmlSub(new HtmlString('Subscript'));
        $ins = new HtmlIns(new HtmlString('Inserted Text'));
        $del = new HtmlDel(new HtmlString('Deleted Text'));
        $body->addNested($sup);
        $body->addNested($sub);
        $body->addNested($ins);
        $body->addNested($del);

        $doc->toHtml();
