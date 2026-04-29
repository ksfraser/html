<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Form\FormBuilder;
use Ksfraser\HTML\Elements\HtmlInput;
use Ksfraser\HTML\Elements\HtmlLabel;

/**
 * Tests for FormBuilder expanded methods:
 * label(), checkbox(), radio(), date(), search(), range(), file(),
 * model() / endModel()
 */
class FormBuilderExpandedTest extends TestCase
{
    private FormBuilder $form;

    protected function setUp(): void
    {
        $this->form = new FormBuilder();
    }

    // -----------------------------------------------------------------------
    // label()
    // -----------------------------------------------------------------------

    public function testLabelReturnsHtmlLabel(): void
    {
        $label = $this->form->label('email', 'Email');
        $this->assertInstanceOf(HtmlLabel::class, $label);
    }

    public function testLabelHasForAttribute(): void
    {
        $label = $this->form->label('username', 'Username');
        $this->assertStringContainsString('for="username"', $label->getHtml());
    }

    public function testLabelHasText(): void
    {
        $label = $this->form->label('name', 'Full Name');
        $this->assertStringContainsString('Full Name', $label->getHtml());
    }

    // -----------------------------------------------------------------------
    // checkbox()
    // -----------------------------------------------------------------------

    public function testCheckboxReturnsHtmlInput(): void
    {
        $input = $this->form->checkbox('agree');
        $this->assertInstanceOf(HtmlInput::class, $input);
    }

    public function testCheckboxHasTypeCheckbox(): void
    {
        $input = $this->form->checkbox('agree');
        $this->assertStringContainsString('type="checkbox"', $input->getHtml());
    }

    public function testCheckboxHasNameAttribute(): void
    {
        $input = $this->form->checkbox('agree');
        $this->assertStringContainsString('name="agree"', $input->getHtml());
    }

    public function testCheckboxHasValueAttribute(): void
    {
        $input = $this->form->checkbox('agree', 'yes');
        $this->assertStringContainsString('value="yes"', $input->getHtml());
    }

    public function testCheckboxDefaultValueIsOne(): void
    {
        $input = $this->form->checkbox('agree');
        $this->assertStringContainsString('value="1"', $input->getHtml());
    }

    public function testCheckboxCheckedWhenDefaultTrue(): void
    {
        $input = $this->form->checkbox('agree', '1', true);
        $this->assertStringContainsString('checked', $input->getHtml());
    }

    public function testCheckboxNotCheckedWhenDefaultFalse(): void
    {
        $input = $this->form->checkbox('agree', '1', false);
        $this->assertStringNotContainsString('checked', $input->getHtml());
    }

    public function testCheckboxCheckedWhenBoundDataMatchesValue(): void
    {
        $bound = $this->form->withData(['subscribe' => '1']);
        $input = $bound->checkbox('subscribe', '1');
        $this->assertStringContainsString('checked', $input->getHtml());
    }

    public function testCheckboxNotCheckedWhenBoundDataMismatch(): void
    {
        $bound = $this->form->withData(['subscribe' => '0']);
        $input = $bound->checkbox('subscribe', '1');
        $this->assertStringNotContainsString('checked', $input->getHtml());
    }

    // -----------------------------------------------------------------------
    // radio()
    // -----------------------------------------------------------------------

    public function testRadioReturnsHtmlInput(): void
    {
        $input = $this->form->radio('gender', 'male');
        $this->assertInstanceOf(HtmlInput::class, $input);
    }

    public function testRadioHasTypeRadio(): void
    {
        $input = $this->form->radio('gender', 'male');
        $this->assertStringContainsString('type="radio"', $input->getHtml());
    }

    public function testRadioHasNameAttribute(): void
    {
        $input = $this->form->radio('gender', 'male');
        $this->assertStringContainsString('name="gender"', $input->getHtml());
    }

    public function testRadioHasValueAttribute(): void
    {
        $input = $this->form->radio('gender', 'female');
        $this->assertStringContainsString('value="female"', $input->getHtml());
    }

    public function testRadioCheckedWhenDefaultTrue(): void
    {
        $input = $this->form->radio('gender', 'male', true);
        $this->assertStringContainsString('checked', $input->getHtml());
    }

    public function testRadioNotCheckedWhenDefaultFalse(): void
    {
        $input = $this->form->radio('gender', 'male', false);
        $this->assertStringNotContainsString('checked', $input->getHtml());
    }

    public function testRadioCheckedWhenBoundDataMatchesValue(): void
    {
        $bound = $this->form->withData(['gender' => 'female']);
        $input = $bound->radio('gender', 'female');
        $this->assertStringContainsString('checked', $input->getHtml());
    }

    public function testRadioNotCheckedWhenBoundDataMismatch(): void
    {
        $bound = $this->form->withData(['gender' => 'female']);
        $input = $bound->radio('gender', 'male');
        $this->assertStringNotContainsString('checked', $input->getHtml());
    }

    // -----------------------------------------------------------------------
    // date()
    // -----------------------------------------------------------------------

    public function testDateReturnsHtmlInput(): void
    {
        $input = $this->form->date('dob');
        $this->assertInstanceOf(HtmlInput::class, $input);
    }

    public function testDateHasTypeDate(): void
    {
        $input = $this->form->date('dob');
        $this->assertStringContainsString('type="date"', $input->getHtml());
    }

    public function testDatePrefilledFromData(): void
    {
        $bound = $this->form->withData(['dob' => '2000-01-01']);
        $input = $bound->date('dob');
        $this->assertStringContainsString('value="2000-01-01"', $input->getHtml());
    }

    public function testDateUsesDefaultWhenNoData(): void
    {
        $input = $this->form->date('dob', '1990-06-15');
        $this->assertStringContainsString('value="1990-06-15"', $input->getHtml());
    }

    // -----------------------------------------------------------------------
    // search()
    // -----------------------------------------------------------------------

    public function testSearchReturnsHtmlInput(): void
    {
        $input = $this->form->search('q');
        $this->assertInstanceOf(HtmlInput::class, $input);
    }

    public function testSearchHasTypeSearch(): void
    {
        $input = $this->form->search('q');
        $this->assertStringContainsString('type="search"', $input->getHtml());
    }

    public function testSearchPrefilledFromData(): void
    {
        $bound = $this->form->withData(['q' => 'hello']);
        $input = $bound->search('q');
        $this->assertStringContainsString('value="hello"', $input->getHtml());
    }

    // -----------------------------------------------------------------------
    // range()
    // -----------------------------------------------------------------------

    public function testRangeReturnsHtmlInput(): void
    {
        $input = $this->form->range('volume');
        $this->assertInstanceOf(HtmlInput::class, $input);
    }

    public function testRangeHasTypeRange(): void
    {
        $input = $this->form->range('volume');
        $this->assertStringContainsString('type="range"', $input->getHtml());
    }

    public function testRangeHasMinAttribute(): void
    {
        $input = $this->form->range('volume', '0');
        $this->assertStringContainsString('min="0"', $input->getHtml());
    }

    public function testRangeHasMaxAttribute(): void
    {
        $input = $this->form->range('volume', null, '100');
        $this->assertStringContainsString('max="100"', $input->getHtml());
    }

    public function testRangeHasStepAttribute(): void
    {
        $input = $this->form->range('volume', '0', '100', '5');
        $this->assertStringContainsString('step="5"', $input->getHtml());
    }

    public function testRangeDefaultValue(): void
    {
        $input = $this->form->range('volume', '0', '100', '1', '50');
        $this->assertStringContainsString('value="50"', $input->getHtml());
    }

    public function testRangePrefilledFromData(): void
    {
        $bound = $this->form->withData(['volume' => '75']);
        $input = $bound->range('volume', '0', '100');
        $this->assertStringContainsString('value="75"', $input->getHtml());
    }

    // -----------------------------------------------------------------------
    // file()
    // -----------------------------------------------------------------------

    public function testFileReturnsHtmlInput(): void
    {
        $input = $this->form->file('avatar');
        $this->assertInstanceOf(HtmlInput::class, $input);
    }

    public function testFileHasTypeFile(): void
    {
        $input = $this->form->file('avatar');
        $this->assertStringContainsString('type="file"', $input->getHtml());
    }

    public function testFileHasNameAttribute(): void
    {
        $input = $this->form->file('avatar');
        $this->assertStringContainsString('name="avatar"', $input->getHtml());
    }

    public function testFileNeverPrefilledFromData(): void
    {
        $bound = $this->form->withData(['avatar' => '/uploads/photo.jpg']);
        $input = $bound->file('avatar');
        $this->assertStringNotContainsString('value=', $input->getHtml());
    }

    // -----------------------------------------------------------------------
    // model() / endModel()
    // -----------------------------------------------------------------------

    public function testModelReturnsDifferentInstance(): void
    {
        $bound = $this->form->model(['name' => 'Alice']);
        $this->assertNotSame($this->form, $bound);
    }

    public function testModelBindsData(): void
    {
        $bound = $this->form->model(['name' => 'Bob']);
        $input = $bound->text('name');
        $this->assertStringContainsString('value="Bob"', $input->getHtml());
    }

    public function testEndModelPopsModelStack(): void
    {
        $inner = $this->form->model(['name' => 'Inner']);
        $outer = $inner->endModel();
        // After popping, the name field should not be pre-filled
        $input = $outer->text('name');
        $this->assertStringNotContainsString('value=', $input->getHtml());
    }

    public function testEndModelIsFluentInterface(): void
    {
        $bound = $this->form->model(['x' => '1']);
        $result = $bound->endModel();
        $this->assertInstanceOf(FormBuilder::class, $result);
    }

    public function testNestedModels(): void
    {
        $level1 = $this->form->model(['field' => 'level1']);
        $level2 = $level1->model(['field' => 'level2']);
        $this->assertStringContainsString('value="level2"', $level2->text('field')->getHtml());
        $afterPop = $level2->endModel();
        $this->assertStringContainsString('value="level1"', $afterPop->text('field')->getHtml());
    }

    public function testEndModelOnUnboundFormReturnsUnbound(): void
    {
        // Calling endModel on an unbound form should not crash
        $result = $this->form->endModel();
        $this->assertInstanceOf(FormBuilder::class, $result);
        $input = $result->text('name');
        $this->assertStringNotContainsString('value=', $input->getHtml());
    }
}
