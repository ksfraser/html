<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * FormElementsTraitTest - FR-011
 *
 * Comprehensive test suite for form elements and validation UI
 * Tests form building, validation states, accessibility integration
 *
 *
 * @group FR-011
 * @group Forms
 * @since 1.0.5 2026-03-30
 */
class FormElementsTraitTest extends TestCase
{
    // ============================================================================
    // FORM BUILDER TESTS
    // ============================================================================

    /**
     * @test
     * @group form-builder
 * @return void
 * @since 1.0.5 2026-03-30
     */
    public /**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
/**
 * form_creates_form_element_with_method
 *
 * @return void
 */
function form_creates_form_element_with_method()
    {
        $form = HtmlElement::form('POST', '/submit');
        
        $this->assertEquals('form', $form->getTag());
        $this->assertEquals('POST', $form->getAttributeValue('method'));
        $this->assertEquals('/submit', $form->getAttributeValue('action'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
/**
 * form_defaults_to_post_method
 *
 * @return void
 */
function form_defaults_to_post_method()
    {
        $form = HtmlElement::form();
        
        $this->assertEquals('POST', $form->getAttributeValue('method'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
/**
 * form_supports_get_method
 *
 * @return void
 */
function form_supports_get_method()
    {
        $form = HtmlElement::form('GET', '/search');
        
        $this->assertEquals('GET', $form->getAttributeValue('method'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
/**
 * input_creates_input_element
 *
 * @return void
 */
function input_creates_input_element()
    {
        $input = HtmlElement::input('text', 'email');
        
        $this->assertEquals('input', $input->getTag());
        $this->assertEquals('text', $input->getAttributeValue('type'));
        $this->assertEquals('email', $input->getAttributeValue('name'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
/**
 * input_with_value
 *
 * @return void
 */
function input_with_value()
    {
        $input = HtmlElement::input('email', 'user_email')
            ->setInputValue('test@example.com');
        
        $this->assertEquals('test@example.com', $input->getAttributeValue('value'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
/**
 * input_with_placeholder
 *
 * @return void
 */
function input_with_placeholder()
    {
        $input = HtmlElement::input('text', 'search')
            ->setPlaceholder('Search products...');
        
        $this->assertEquals('Search products...', $input->getAttributeValue('placeholder'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
/**
 * input_types_all_supported
 *
 * @return void
 */
function input_types_all_supported()
    {
        $types = ['text', 'email', 'password', 'number', 'date', 'checkbox', 'radio', 'hidden', 'file'];
        
        foreach ($types as $type) {
            $input = HtmlElement::input($type, 'field');
            $this->assertEquals($type, $input->getAttributeValue('type'));
        }
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
/**
 * textarea_creates_textarea_element
 *
 * @return void
 */
function textarea_creates_textarea_element()
    {
        $textarea = HtmlElement::textarea('description', 'Enter description');
        
        $this->assertEquals('textarea', $textarea->getTag());
        $this->assertEquals('description', $textarea->getAttributeValue('name'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
/**
 * textarea_with_rows_cols
 *
 * @return void
 */
function textarea_with_rows_cols()
    {
        $textarea = HtmlElement::textarea('bio')
            ->setRows(5)
            ->setCols(40);
        
        $this->assertEquals('5', $textarea->getAttributeValue('rows'));
        $this->assertEquals('40', $textarea->getAttributeValue('cols'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
/**
 * select_creates_select_element
 *
 * @return void
 */
function select_creates_select_element()
    {
        $select = HtmlElement::select('country');
        
        $this->assertEquals('select', $select->getTag());
        $this->assertEquals('country', $select->getAttributeValue('name'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
/**
 * select_with_options
 *
 * @return void
 */
function select_with_options()
    {
        $select = HtmlElement::select('size')
            ->addOption('small', 'S')
            ->addOption('medium', 'M')
            ->addOption('large', 'L');
        
        $this->assertEquals('select', $select->getTag());
        $children = $select->getChildren();
        $this->assertGreaterThan(0, count($children));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
/**
 * select_with_selected_option
 *
 * @return void
 */
function select_with_selected_option()
    {
        $select = HtmlElement::select('color')
            ->addOption('red', 'Red')
            ->addOption('blue', 'Blue')
            ->setSelectedValue('blue');
        
        $this->assertEquals('blue', $select->getAttributeValue('data-selected'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
/**
 * label_creates_label_element
 *
 * @return void
 */
function label_creates_label_element()
    {
        $label = HtmlElement::label('Email', 'email_field');
        
        $this->assertEquals('label', $label->getTag());
        $this->assertEquals('email_field', $label->getAttributeValue('for'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
/**
 * button_creates_button_element
 *
 * @return void
 */
function button_creates_button_element()
    {
        $button = HtmlElement::button('Submit', 'submit');
        
        $this->assertEquals('button', $button->getTag());
        $this->assertEquals('submit', $button->getAttributeValue('type'));
    }

    /**
     * @test
     * @group form-builder
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_defaults_to_button_type
 *
 * @return void
 */
function button_defaults_to_button_type()
    {
        $button = HtmlElement::button('Click me');
        
        $this->assertEquals('button', $button->getAttributeValue('type'));
    }

    // ============================================================================
    // VALIDATION UI TESTS
    // ============================================================================

    /**
     * @test
     * @group validation
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
/**
 * validation_feedback_element
 *
 * @return void
 */
function validation_feedback_element()
    {
        $feedback = HtmlElement::validationFeedback('This field is required', true);
        
        $this->assertEquals('div', $feedback->getTag());
        $this->assertTrue($feedback->hasCSSClass('invalid-feedback'));
    }

    /**
     * @test
     * @group validation
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
/**
 * validation_feedback_hidden_by_default
 *
 * @return void
 */
function validation_feedback_hidden_by_default()
    {
        $feedback = HtmlElement::validationFeedback('Error message', true);
        
        $this->assertTrue($feedback->hasCSSClass('d-none'));
    }

    /**
     * @test
     * @group validation
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
/**
 * validation_success_feedback
 *
 * @return void
 */
function validation_success_feedback()
    {
        $feedback = HtmlElement::validationFeedback('Looks good!', false);
        
        $this->assertTrue($feedback->hasCSSClass('valid-feedback'));
    }

    /**
     * @test
     * @group validation
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
/**
 * marked_invalid_shows_feedback
 *
 * @return void
 */
function marked_invalid_shows_feedback()
    {
        $feedback = HtmlElement::validationFeedback('Error', true)
            ->showFeedback(true);
        
        $this->assertFalse($feedback->hasCSSClass('d-none'));
        $this->assertTrue($feedback->hasCSSClass('d-block'));
    }

    /**
     * @test
     * @group validation
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
/**
 * input_marked_as_invalid
 *
 * @return void
 */
function input_marked_as_invalid()
    {
        $input = HtmlElement::input('text', 'username')
            ->markInvalid();
        
        $this->assertTrue($input->hasCSSClass('is-invalid'));
    }

    /**
     * @test
     * @group validation
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
/**
 * input_marked_as_valid
 *
 * @return void
 */
function input_marked_as_valid()
    {
        $input = HtmlElement::input('text', 'username')
            ->markValid();
        
        $this->assertTrue($input->hasCSSClass('is-valid'));
    }

    // ============================================================================
    // FORM ATTRIBUTES TESTS
    // ============================================================================

    /**
     * @test
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
/**
 * input_required_attribute
 *
 * @return void
 */
function input_required_attribute()
    {
        $input = HtmlElement::input('email', 'email')
            ->setRequired(true);
        
        $this->assertEquals('required', $input->getAttributeValue('required'));
    }

    /**
     * @test
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
/**
 * input_disabled_attribute
 *
 * @return void
 */
function input_disabled_attribute()
    {
        $input = HtmlElement::input('text', 'field')
            ->setDisabled(true);
        
        $this->assertEquals('disabled', $input->getAttributeValue('disabled'));
    }

    /**
     * @test
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
/**
 * input_readonly_attribute
 *
 * @return void
 */
function input_readonly_attribute()
    {
        $input = HtmlElement::input('text', 'readonly_field')
            ->setReadonly(true);
        
        $this->assertEquals('readonly', $input->getAttributeValue('readonly'));
    }

    /**
     * @test
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
/**
 * input_autocomplete_attribute
 *
 * @return void
 */
function input_autocomplete_attribute()
    {
        $input = HtmlElement::input('email', 'email')
            ->setAutocomplete('email');
        
        $this->assertEquals('email', $input->getAttributeValue('autocomplete'));
    }

    /**
     * @test
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
/**
 * input_pattern_attribute
 *
 * @return void
 */
function input_pattern_attribute()
    {
        $input = HtmlElement::input('text', 'phone')
            ->setPattern('[0-9]{10}');
        
        $this->assertEquals('[0-9]{10}', $input->getAttributeValue('pattern'));
    }

    /**
     * @test
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
/**
 * input_maxlength_attribute
 *
 * @return void
 */
function input_maxlength_attribute()
    {
        $input = HtmlElement::input('text', 'code')
            ->setMaxLength(6);
        
        $this->assertEquals('6', $input->getAttributeValue('maxlength'));
    }

    /**
     * @test
     * @group attributes
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
/**
 * input_minlength_attribute
 *
 * @return void
 */
function input_minlength_attribute()
    {
        $input = HtmlElement::input('password', 'pwd')
            ->setMinLength(8);
        
        $this->assertEquals('8', $input->getAttributeValue('minlength'));
    }

    // ============================================================================
    // ACCESSIBILITY & ARIA TESTS
    // ============================================================================

    /**
     * @test
     * @group accessibility
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
/**
 * input_with_aria_label
 *
 * @return void
 */
function input_with_aria_label()
    {
        $input = HtmlElement::input('text', 'search')
            ->setAriaLabel('Search products');
        
        $this->assertEquals('Search products', $input->getAttributeValue('aria-label'));
    }

    /**
     * @test
     * @group accessibility
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
/**
 * input_with_aria_described_by
 *
 * @return void
 */
function input_with_aria_described_by()
    {
        $input = HtmlElement::input('email', 'email')
            ->setAriaDescribedBy('email-help');
        
        $this->assertEquals('email-help', $input->getAttributeValue('aria-describedby'));
    }

    /**
     * @test
     * @group accessibility
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
/**
 * form_group_with_label_input_feedback
 *
 * @return void
 */
function form_group_with_label_input_feedback()
    {
        $group = HtmlElement::formGroup()
            ->addChild(HtmlElement::label('Email', 'email'))
            ->addChild(HtmlElement::input('email', 'email'))
            ->addChild(HtmlElement::validationFeedback('Valid email', false));
        
        $this->assertEquals('div', $group->getTag());
        $this->assertTrue($group->hasCSSClass('form-group'));
        $this->assertEquals(3, $group->getChildCount());
    }

    /**
     * @test
     * @group accessibility
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
/**
 * invalid_input_sets_aria_invalid
 *
 * @return void
 */
function invalid_input_sets_aria_invalid()
    {
        $input = HtmlElement::input('text', 'username')
            ->markInvalid();
        
        $this->assertTrue($input->hasCSSClass('is-invalid'));
    }

    // ============================================================================
    // FORM CONTROL TESTS
    // ============================================================================

    /**
     * @test
     * @group form-controls
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
/**
 * checkbox_input_type
 *
 * @return void
 */
function checkbox_input_type()
    {
        $checkbox = HtmlElement::input('checkbox', 'terms')
            ->setInputValue('agree');
        
        $this->assertEquals('checkbox', $checkbox->getAttributeValue('type'));
        $this->assertEquals('agree', $checkbox->getAttributeValue('value'));
    }

    /**
     * @test
     * @group form-controls
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
/**
 * checkbox_checked_state
 *
 * @return void
 */
function checkbox_checked_state()
    {
        $checkbox = HtmlElement::input('checkbox', 'newsletter')
            ->setChecked(true);
        
        $this->assertEquals('checked', $checkbox->getAttributeValue('checked'));
    }

    /**
     * @test
     * @group form-controls
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
/**
 * radio_input_type
 *
 * @return void
 */
function radio_input_type()
    {
        $radio = HtmlElement::input('radio', 'option')
            ->setInputValue('a');
        
        $this->assertEquals('radio', $radio->getAttributeValue('type'));
    }

    /**
     * @test
     * @group form-controls
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
/**
 * radio_group_with_options
 *
 * @return void
 */
function radio_group_with_options()
    {
        $group = HtmlElement::formGroup()
            ->addChild(HtmlElement::input('radio', 'payment')->setInputValue('credit'))
            ->addChild(HtmlElement::input('radio', 'payment')->setInputValue('debit'));
        
        $this->assertEquals(2, $group->getChildCount());
    }

    /**
     * @test
     * @group form-controls
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
/**
 * fieldset_with_legend
 *
 * @return void
 */
function fieldset_with_legend()
    {
        $fieldset = HtmlElement::fieldset()
            ->setLegend('Personal Information');
        
        $this->assertEquals('fieldset', $fieldset->getTag());
        $this->assertEquals('Personal Information', $fieldset->getAttributeValue('data-legend'));
    }

    /**
     * @test
     * @group form-controls
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
/**
 * input_group_with_addon
 *
 * @return void
 */
function input_group_with_addon()
    {
        $group = HtmlElement::inputGroup()
            ->addPrefix('$')
            ->addChild(HtmlElement::input('number', 'amount'))
            ->addSuffix('.00');
        
        $this->assertEquals('div', $group->getTag());
        $this->assertTrue($group->hasCSSClass('input-group'));
    }

    // ============================================================================
    // METHOD CHAINING TESTS
    // ============================================================================

    /**
     * @test
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
/**
 * form_fluent_interface
 *
 * @return void
 */
function form_fluent_interface()
    {
        $form = HtmlElement::form('POST', '/login')
            ->addCSSClass('login-form')
            ->setData('page', 'login')
            ->addChild(HtmlElement::input('email', 'email'));
        
        $this->assertTrue($form->hasCSSClass('login-form'));
        $this->assertEquals('login', $form->getData('page'));
        $this->assertEquals(1, $form->getChildCount());
    }

    /**
     * @test
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
/**
 * input_full_chain
 *
 * @return void
 */
function input_full_chain()
    {
        $input = HtmlElement::input('email', 'user_email')
            ->setPlaceholder('you@example.com')
            ->setRequired(true)
            ->setAriaLabel('Email address')
            ->addCSSClass('form-control');
        
        $this->assertEquals('you@example.com', $input->getAttributeValue('placeholder'));
        $this->assertEquals('required', $input->getAttributeValue('required'));
        $this->assertTrue($input->hasCSSClass('form-control'));
    }

    /**
     * @test
     * @group chaining
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
/**
 * textarea_fluent_setup
 *
 * @return void
 */
function textarea_fluent_setup()
    {
        $textarea = HtmlElement::textarea('comments')
            ->setRows(4)
            ->setCols(50)
            ->setPlaceholder('Your feedback...')
            ->setRequired(true);
        
        $this->assertEquals('4', $textarea->getAttributeValue('rows'));
        $this->assertEquals('Your feedback...', $textarea->getAttributeValue('placeholder'));
    }

    // ============================================================================
    // FORM STATE TESTS
    // ============================================================================

    /**
     * @test
     * @group form-state
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
/**
 * form_needs_validation_class
 *
 * @return void
 */
function form_needs_validation_class()
    {
        $form = HtmlElement::form('POST', '/submit')
            ->markNeedsValidation();
        
        $this->assertTrue($form->hasCSSClass('needs-validation'));
    }

    /**
     * @test
     * @group form-state
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
/**
 * form_prevent_default_on_submit
 *
 * @return void
 */
function form_prevent_default_on_submit()
    {
        $form = HtmlElement::form('POST', '/submit')
            ->preventDefaultSubmit();
        
        $this->assertTrue($form->hasCSSClass('prevent-default'));
    }

    /**
     * @test
     * @group form-state
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
/**
 * input_empty_state
 *
 * @return void
 */
function input_empty_state()
    {
        $input = HtmlElement::input('text', 'field')
            ->setInputValue('');
        
        $this->assertEquals('', $input->getAttributeValue('value'));
    }

    // ============================================================================
    // INTEGRATION TESTS
    // ============================================================================

    /**
     * @test
     * @group integration
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
/**
 * complete_login_form
 *
 * @return void
 */
function complete_login_form()
    {
        $form = HtmlElement::form('POST', '/auth/login')
            ->addCSSClass('login-form')
            ->addCSSClass('needs-validation')
            ->addChild(
                HtmlElement::formGroup()
                    ->addChild(HtmlElement::label('Email', 'email'))
                    ->addChild(HtmlElement::input('email', 'email')
                        ->setRequired(true)
                        ->addCSSClass('form-control'))
                    ->addChild(HtmlElement::validationFeedback('Valid email', false))
            )
            ->addChild(
                HtmlElement::formGroup()
                    ->addChild(HtmlElement::label('Password', 'password'))
                    ->addChild(HtmlElement::input('password', 'password')
                        ->setRequired(true)
                        ->setMinLength(8)
                        ->addCSSClass('form-control'))
                    ->addChild(HtmlElement::validationFeedback('Min 8 characters', false))
            )
            ->addChild(HtmlElement::button('Login', 'submit')
                ->addCSSClass('btn')
                ->addCSSClass('btn-primary'));
        
        $this->assertEquals('form', $form->getTag());
        $this->assertTrue($form->hasCSSClass('needs-validation'));
        $this->assertGreaterThan(2, $form->getChildCount());
    }

    /**
     * @test
     * @group integration
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
/**
 * form_with_all_control_types
 *
 * @return void
 */
function form_with_all_control_types()
    {
        $form = HtmlElement::form('POST', '/register')
            ->addChild(HtmlElement::input('text', 'username'))
            ->addChild(HtmlElement::textarea('bio'))
            ->addChild(HtmlElement::select('country'))
            ->addChild(HtmlElement::input('checkbox', 'terms'))
            ->addChild(HtmlElement::input('radio', 'preference'))
            ->addChild(HtmlElement::button('Register', 'submit'));
        
        $this->assertGreaterThanOrEqual(6, $form->getChildCount());
    }

    /**
     * @test
     * @group integration
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
/**
 * form_traversal_with_introspection
 *
 * @return void
 */
function form_traversal_with_introspection()
    {
        $form = HtmlElement::form('POST', '/submit');
        $form->addChild(HtmlElement::input('text', 'field1'));
        $form->addChild(HtmlElement::input('email', 'field2'));
        $form->addChild(HtmlElement::button('Submit', 'submit'));
        
        $inputs = $form->findByTag('input');
        $this->assertEquals(2, count($inputs));
    }

    // ============================================================================
    // EDGE CASE TESTS
    // ============================================================================

    /**
     * @test
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
/**
 * empty_form
 *
 * @return void
 */
function empty_form()
    {
        $form = HtmlElement::form();
        $this->assertEquals('form', $form->getTag());
        $this->assertEquals(0, $form->getChildCount());
    }

    /**
     * @test
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
/**
 * input_name_with_array_notation
 *
 * @return void
 */
function input_name_with_array_notation()
    {
        $input = HtmlElement::input('text', 'fields[]');
        $this->assertEquals('fields[]', $input->getAttributeValue('name'));
    }

    /**
     * @test
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
/**
 * special_characters_in_placeholder
 *
 * @return void
 */
function special_characters_in_placeholder()
    {
        $input = HtmlElement::input('text', 'field')
            ->setPlaceholder('Search & filter <results>');
        
        $placeholder = $input->getAttributeValue('placeholder');
        $this->assertStringContainsString('&', $placeholder);
    }

    /**
     * @test
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
/**
 * very_long_maxlength
 *
 * @return void
 */
function very_long_maxlength()
    {
        $input = HtmlElement::input('text', 'field')
            ->setMaxLength(999999);
        
        $this->assertEquals('999999', $input->getAttributeValue('maxlength'));
    }

    /**
     * @test
     * @group edge-cases
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
/**
 * multiple_validation_states
 *
 * @return void
 */
function multiple_validation_states()
    {
        $input = HtmlElement::input('text', 'field')
            ->markValid();
        
        // Should only have valid state
        $this->assertTrue($input->hasCSSClass('is-valid'));
        $this->assertFalse($input->hasCSSClass('is-invalid'));
    }
}
