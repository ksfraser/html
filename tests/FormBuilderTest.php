<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\Form\FormBuilder;
use Ksfraser\HTML\Elements\HtmlInput;
use Ksfraser\HTML\Elements\HtmlSelect;
use Ksfraser\HTML\Elements\HtmlTextarea;

/**
 * Tests for FormBuilder
 */
class FormBuilderTest extends TestCase
{
    private FormBuilder $form;

    protected function setUp(): void
    {
        $this->form = new FormBuilder();
    }

    // ------------------------------------------------------------------
    // withData() — immutability
    // ------------------------------------------------------------------

    public function testWithDataReturnsDifferentInstance(): void
    {
        $bound = $this->form->withData(['name' => 'Alice']);
        $this->assertNotSame($this->form, $bound);
    }

    public function testOriginalUnboundAfterWithData(): void
    {
        $this->form->withData(['name' => 'Alice']); // discard result
        // original still unbound — no value for 'name'
        $input = $this->form->text('name');
        $this->assertStringNotContainsString('value=', $input->getHtml());
    }

    public function testWithDataAcceptsArrayAccess(): void
    {
        $data = new ArrayObject(['city' => 'Ottawa']);
        $bound = $this->form->withData($data);
        $input = $bound->text('city');
        $this->assertStringContainsString('value="Ottawa"', $input->getHtml());
    }

    // ------------------------------------------------------------------
    // text()
    // ------------------------------------------------------------------

    public function testTextReturnsHtmlInput(): void
    {
        $input = $this->form->text('username');
        $this->assertInstanceOf(HtmlInput::class, $input);
    }

    public function testTextHasTypeText(): void
    {
        $input = $this->form->text('username');
        $this->assertStringContainsString('type="text"', $input->getHtml());
    }

    public function testTextHasNameAttribute(): void
    {
        $input = $this->form->text('username');
        $this->assertStringContainsString('name="username"', $input->getHtml());
    }

    public function testTextPreFillsFromData(): void
    {
        $bound = $this->form->withData(['username' => 'jdoe']);
        $input = $bound->text('username');
        $this->assertStringContainsString('value="jdoe"', $input->getHtml());
    }

    public function testTextFallsBackToDefault(): void
    {
        $input = $this->form->text('username', 'guest');
        $this->assertStringContainsString('value="guest"', $input->getHtml());
    }

    public function testTextDataOverridesDefault(): void
    {
        $bound = $this->form->withData(['username' => 'alice']);
        $input = $bound->text('username', 'guest');
        $this->assertStringContainsString('value="alice"', $input->getHtml());
        $this->assertStringNotContainsString('value="guest"', $input->getHtml());
    }

    public function testTextNoValueWhenNoDataAndNoDefault(): void
    {
        $input = $this->form->text('username');
        $this->assertStringNotContainsString('value=', $input->getHtml());
    }

    // ------------------------------------------------------------------
    // email()
    // ------------------------------------------------------------------

    public function testEmailHasTypeEmail(): void
    {
        $input = $this->form->email('addr');
        $this->assertStringContainsString('type="email"', $input->getHtml());
    }

    public function testEmailPreFillsFromData(): void
    {
        $bound = $this->form->withData(['addr' => 'a@b.com']);
        $input = $bound->email('addr');
        $this->assertStringContainsString('value="a@b.com"', $input->getHtml());
    }

    // ------------------------------------------------------------------
    // password()
    // ------------------------------------------------------------------

    public function testPasswordHasTypePassword(): void
    {
        $input = $this->form->password('pw');
        $this->assertStringContainsString('type="password"', $input->getHtml());
    }

    public function testPasswordNeverPreFilled(): void
    {
        $bound = $this->form->withData(['pw' => 'secret123']);
        $input = $bound->password('pw');
        $this->assertStringNotContainsString('value=', $input->getHtml());
    }

    // ------------------------------------------------------------------
    // hidden()
    // ------------------------------------------------------------------

    public function testHiddenHasTypeHidden(): void
    {
        $input = $this->form->hidden('csrf');
        $this->assertStringContainsString('type="hidden"', $input->getHtml());
    }

    public function testHiddenUsesExplicitDefault(): void
    {
        $input = $this->form->hidden('csrf', 'tok123');
        $this->assertStringContainsString('value="tok123"', $input->getHtml());
    }

    public function testHiddenPreFillsFromData(): void
    {
        $bound = $this->form->withData(['csrf' => 'dynTok']);
        $input = $bound->hidden('csrf');
        $this->assertStringContainsString('value="dynTok"', $input->getHtml());
    }

    // ------------------------------------------------------------------
    // number()
    // ------------------------------------------------------------------

    public function testNumberHasTypeNumber(): void
    {
        $input = $this->form->number('qty');
        $this->assertStringContainsString('type="number"', $input->getHtml());
    }

    public function testNumberPreFillsFromData(): void
    {
        $bound = $this->form->withData(['qty' => '5']);
        $input = $bound->number('qty');
        $this->assertStringContainsString('value="5"', $input->getHtml());
    }

    // ------------------------------------------------------------------
    // select()
    // ------------------------------------------------------------------

    public function testSelectReturnsHtmlSelect(): void
    {
        $sel = $this->form->select('color', ['r' => 'Red', 'g' => 'Green']);
        $this->assertInstanceOf(HtmlSelect::class, $sel);
    }

    public function testSelectContainsOptions(): void
    {
        $sel = $this->form->select('color', ['r' => 'Red', 'g' => 'Green']);
        $html = $sel->getHtml();
        $this->assertStringContainsString('Red', $html);
        $this->assertStringContainsString('Green', $html);
    }

    public function testSelectPreSelectsFromData(): void
    {
        $bound = $this->form->withData(['color' => 'g']);
        $sel = $bound->select('color', ['r' => 'Red', 'g' => 'Green']);
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="g" selected>', $html);
        $this->assertStringNotContainsString('<option value="r" selected>', $html);
    }

    public function testSelectFallsBackToDefault(): void
    {
        $sel = $this->form->select('color', ['r' => 'Red', 'g' => 'Green'], 'r');
        $html = $sel->getHtml();
        $this->assertStringContainsString('<option value="r" selected>', $html);
    }

    // ------------------------------------------------------------------
    // textarea()
    // ------------------------------------------------------------------

    public function testTextareaReturnsHtmlTextarea(): void
    {
        $ta = $this->form->textarea('bio');
        $this->assertInstanceOf(HtmlTextarea::class, $ta);
    }

    public function testTextareaHasNameAttribute(): void
    {
        $ta = $this->form->textarea('bio');
        $this->assertStringContainsString('name="bio"', $ta->getHtml());
    }

    public function testTextareaPreFillsFromData(): void
    {
        $bound = $this->form->withData(['bio' => 'I am a developer']);
        $ta = $bound->textarea('bio');
        $this->assertStringContainsString('I am a developer', $ta->getHtml());
    }

    public function testTextareaFallsBackToDefault(): void
    {
        $ta = $this->form->textarea('bio', 'Tell us about yourself');
        $this->assertStringContainsString('Tell us about yourself', $ta->getHtml());
    }

    public function testTextareaEmptyWhenNoDataAndNoDefault(): void
    {
        $ta = $this->form->textarea('bio');
        $html = $ta->getHtml();
        // Should render <textarea name="bio"></textarea>
        $this->assertStringContainsString('<textarea', $html);
        $this->assertStringContainsString('</textarea>', $html);
    }
}
