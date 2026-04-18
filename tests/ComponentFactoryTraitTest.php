<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlElement;

/**
 * ComponentFactoryTraitTest - FR-012
 *
 * Comprehensive test suite for Bootstrap component factory methods
 * Tests component creation, styling, states, and accessibility
 *
 *
 * @group FR-012
 * @group Components
 * @since 1.0.5 2026-03-30
 */
class ComponentFactoryTraitTest extends TestCase
{
    // ============================================================================
    // BUTTON COMPONENT TESTS
    // ============================================================================

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since 1.0.5 2026-03-30
     */
    public /**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
/**
 * button_primary_creates_button_with_correct_classes
 *
 * @return void
 */
function button_primary_creates_button_with_correct_classes()
    {
        $button = HtmlElement::buttonPrimary('Click Me');
        
        $this->assertEquals('button', $button->getTag());
        $this->assertTrue($button->hasCSSClass('btn'));
        $this->assertTrue($button->hasCSSClass('btn-primary'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
/**
 * button_primary_defaults_to_button_type
 *
 * @return void
 */
function button_primary_defaults_to_button_type()
    {
        $button = HtmlElement::buttonPrimary('Click');
        
        $this->assertEquals('button', $button->getAttributeValue('type'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
/**
 * button_success_creates_button_with_success_class
 *
 * @return void
 */
function button_success_creates_button_with_success_class()
    {
        $button = HtmlElement::buttonSuccess('Save');
        
        $this->assertTrue($button->hasCSSClass('btn'));
        $this->assertTrue($button->hasCSSClass('btn-success'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
/**
 * button_danger_creates_button_with_danger_class
 *
 * @return void
 */
function button_danger_creates_button_with_danger_class()
    {
        $button = HtmlElement::buttonDanger('Delete');
        
        $this->assertTrue($button->hasCSSClass('btn'));
        $this->assertTrue($button->hasCSSClass('btn-danger'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
/**
 * button_warning_creates_button_with_warning_class
 *
 * @return void
 */
function button_warning_creates_button_with_warning_class()
    {
        $button = HtmlElement::buttonWarning('Warning');
        
        $this->assertTrue($button->hasCSSClass('btn'));
        $this->assertTrue($button->hasCSSClass('btn-warning'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
/**
 * button_info_creates_button_with_info_class
 *
 * @return void
 */
function button_info_creates_button_with_info_class()
    {
        $button = HtmlElement::buttonInfo('Info');
        
        $this->assertTrue($button->hasCSSClass('btn'));
        $this->assertTrue($button->hasCSSClass('btn-info'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
/**
 * button_secondary_creates_button_with_secondary_class
 *
 * @return void
 */
function button_secondary_creates_button_with_secondary_class()
    {
        $button = HtmlElement::buttonSecondary('Cancel');
        
        $this->assertTrue($button->hasCSSClass('btn'));
        $this->assertTrue($button->hasCSSClass('btn-secondary'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
/**
 * button_large_adds_size_class
 *
 * @return void
 */
function button_large_adds_size_class()
    {
        $button = HtmlElement::buttonPrimary('Large Button')
            ->addCSSClass('btn-lg');
        
        $this->assertTrue($button->hasCSSClass('btn-lg'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
/**
 * button_small_adds_size_class
 *
 * @return void
 */
function button_small_adds_size_class()
    {
        $button = HtmlElement::buttonPrimary('Small Button')
            ->addCSSClass('btn-sm');
        
        $this->assertTrue($button->hasCSSClass('btn-sm'));
    }

    /**
     * @test
     * @group components
     * @group buttons
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
/**
 * button_submit_type_sets_correct_type_attribute
 *
 * @return void
 */
function button_submit_type_sets_correct_type_attribute()
    {
        $button = HtmlElement::buttonPrimary('Submit', 'submit');
        
        $this->assertEquals('submit', $button->getAttributeValue('type'));
    }

    // ============================================================================
    // CARD COMPONENT TESTS
    // ============================================================================

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
/**
 * card_creates_card_container_with_correct_classes
 *
 * @return void
 */
function card_creates_card_container_with_correct_classes()
    {
        $card = HtmlElement::card();
        
        $this->assertEquals('div', $card->getTag());
        $this->assertTrue($card->hasCSSClass('card'));
    }

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
/**
 * card_header_creates_header_element
 *
 * @return void
 */
function card_header_creates_header_element()
    {
        $header = HtmlElement::cardHeader('Card Title');
        
        $this->assertEquals('div', $header->getTag());
        $this->assertTrue($header->hasCSSClass('card-header'));
    }

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
/**
 * card_body_creates_body_element
 *
 * @return void
 */
function card_body_creates_body_element()
    {
        $body = HtmlElement::cardBody('Card content');
        
        $this->assertEquals('div', $body->getTag());
        $this->assertTrue($body->hasCSSClass('card-body'));
    }

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
/**
 * card_footer_creates_footer_element
 *
 * @return void
 */
function card_footer_creates_footer_element()
    {
        $footer = HtmlElement::cardFooter('Card Footer');
        
        $this->assertEquals('div', $footer->getTag());
        $this->assertTrue($footer->hasCSSClass('card-footer'));
    }

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
/**
 * card_with_image_adds_image_class
 *
 * @return void
 */
function card_with_image_adds_image_class()
    {
        $image = HtmlElement::cardImage('image.jpg', 'Card image');
        
        $this->assertEquals('img', $image->getTag());
        $this->assertTrue($image->hasCSSClass('card-img-top'));
        $this->assertEquals('image.jpg', $image->getAttributeValue('src'));
    }

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
/**
 * card_text_creates_text_element
 *
 * @return void
 */
function card_text_creates_text_element()
    {
        $text = HtmlElement::cardText('This is card text');
        
        $this->assertEquals('p', $text->getTag());
        $this->assertTrue($text->hasCSSClass('card-text'));
    }

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
/**
 * card_title_creates_title_element
 *
 * @return void
 */
function card_title_creates_title_element()
    {
        $title = HtmlElement::cardTitle('Card Title');
        
        $this->assertTrue($title->hasCSSClass('card-title'));
    }

    /**
     * @test
     * @group components
     * @group cards
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
/**
 * card_subtitle_creates_subtitle_element
 *
 * @return void
 */
function card_subtitle_creates_subtitle_element()
    {
        $subtitle = HtmlElement::cardSubtitle('Card Subtitle');
        
        $this->assertTrue($subtitle->hasCSSClass('card-subtitle'));
    }

    // ============================================================================
    // ALERT COMPONENT TESTS
    // ============================================================================

    /**
     * @test
     * @group components
     * @group alerts
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
/**
 * alert_primary_creates_alert_with_correct_classes
 *
 * @return void
 */
function alert_primary_creates_alert_with_correct_classes()
    {
        $alert = HtmlElement::alertPrimary('Alert message');
        
        $this->assertEquals('div', $alert->getTag());
        $this->assertTrue($alert->hasCSSClass('alert'));
        $this->assertTrue($alert->hasCSSClass('alert-primary'));
    }

    /**
     * @test
     * @group components
     * @group alerts
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
/**
 * alert_success_creates_alert_with_success_class
 *
 * @return void
 */
function alert_success_creates_alert_with_success_class()
    {
        $alert = HtmlElement::alertSuccess('Success message');
        
        $this->assertTrue($alert->hasCSSClass('alert'));
        $this->assertTrue($alert->hasCSSClass('alert-success'));
    }

    /**
     * @test
     * @group components
     * @group alerts
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
/**
 * alert_warning_creates_alert_with_warning_class
 *
 * @return void
 */
function alert_warning_creates_alert_with_warning_class()
    {
        $alert = HtmlElement::alertWarning('Warning message');
        
        $this->assertTrue($alert->hasCSSClass('alert'));
        $this->assertTrue($alert->hasCSSClass('alert-warning'));
    }

    /**
     * @test
     * @group components
     * @group alerts
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
/**
 * alert_danger_creates_alert_with_danger_class
 *
 * @return void
 */
function alert_danger_creates_alert_with_danger_class()
    {
        $alert = HtmlElement::alertDanger('Error message');
        
        $this->assertTrue($alert->hasCSSClass('alert'));
        $this->assertTrue($alert->hasCSSClass('alert-danger'));
    }

    /**
     * @test
     * @group components
     * @group alerts
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
/**
 * alert_info_creates_alert_with_info_class
 *
 * @return void
 */
function alert_info_creates_alert_with_info_class()
    {
        $alert = HtmlElement::alertInfo('Info message');
        
        $this->assertTrue($alert->hasCSSClass('alert'));
        $this->assertTrue($alert->hasCSSClass('alert-info'));
    }

    /**
     * @test
     * @group components
     * @group alerts
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
/**
 * alert_dismissible_adds_dismissible_class
 *
 * @return void
 */
function alert_dismissible_adds_dismissible_class()
    {
        $alert = HtmlElement::alertSuccess('Dismissible alert', true);
        
        $this->assertTrue($alert->hasCSSClass('alert-dismissible'));
    }

    /**
     * @test
     * @group components
     * @group alerts
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
/**
 * alert_sets_role_attribute
 *
 * @return void
 */
function alert_sets_role_attribute()
    {
        $alert = HtmlElement::alertPrimary('Alert');
        
        $this->assertEquals('alert', $alert->getAttributeValue('role'));
    }

    // ============================================================================
    // BADGE COMPONENT TESTS
    // ============================================================================

    /**
     * @test
     * @group components
     * @group badges
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
/**
 * badge_primary_creates_badge_with_correct_classes
 *
 * @return void
 */
function badge_primary_creates_badge_with_correct_classes()
    {
        $badge = HtmlElement::badgePrimary('New');
        
        $this->assertEquals('span', $badge->getTag());
        $this->assertTrue($badge->hasCSSClass('badge'));
        $this->assertTrue($badge->hasCSSClass('badge-primary'));
    }

    /**
     * @test
     * @group components
     * @group badges
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
/**
 * badge_success_creates_badge_with_success_class
 *
 * @return void
 */
function badge_success_creates_badge_with_success_class()
    {
        $badge = HtmlElement::badgeSuccess('Active');
        
        $this->assertTrue($badge->hasCSSClass('badge'));
        $this->assertTrue($badge->hasCSSClass('badge-success'));
    }

    /**
     * @test
     * @group components
     * @group badges
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
/**
 * badge_danger_creates_badge_with_danger_class
 *
 * @return void
 */
function badge_danger_creates_badge_with_danger_class()
    {
        $badge = HtmlElement::badgeDanger('Alert');
        
        $this->assertTrue($badge->hasCSSClass('badge'));
        $this->assertTrue($badge->hasCSSClass('badge-danger'));
    }

    /**
     * @test
     * @group components
     * @group badges
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
/**
 * badge_warning_creates_badge_with_warning_class
 *
 * @return void
 */
function badge_warning_creates_badge_with_warning_class()
    {
        $badge = HtmlElement::badgeWarning('Pending');
        
        $this->assertTrue($badge->hasCSSClass('badge'));
        $this->assertTrue($badge->hasCSSClass('badge-warning'));
    }

    /**
     * @test
     * @group components
     * @group badges
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
/**
 * badge_info_creates_badge_with_info_class
 *
 * @return void
 */
function badge_info_creates_badge_with_info_class()
    {
        $badge = HtmlElement::badgeInfo('Info');
        
        $this->assertTrue($badge->hasCSSClass('badge'));
        $this->assertTrue($badge->hasCSSClass('badge-info'));
    }

    /**
     * @test
     * @group components
     * @group badges
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
/**
 * badge_secondary_creates_badge_with_secondary_class
 *
 * @return void
 */
function badge_secondary_creates_badge_with_secondary_class()
    {
        $badge = HtmlElement::badgeSecondary('Secondary');
        
        $this->assertTrue($badge->hasCSSClass('badge'));
        $this->assertTrue($badge->hasCSSClass('badge-secondary'));
    }

    /**
     * @test
     * @group components
     * @group badges
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
/**
 * badge_pill_adds_pill_class
 *
 * @return void
 */
function badge_pill_adds_pill_class()
    {
        $badge = HtmlElement::badgePrimary('Pill', true);
        
        $this->assertTrue($badge->hasCSSClass('badge-pill'));
    }

    // ============================================================================
    // MODAL COMPONENT TESTS
    // ============================================================================

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
/**
 * modal_creates_modal_container_with_correct_classes
 *
 * @return void
 */
function modal_creates_modal_container_with_correct_classes()
    {
        $modal = HtmlElement::modal('modalId');
        
        $this->assertEquals('div', $modal->getTag());
        $this->assertTrue($modal->hasCSSClass('modal'));
        $this->assertEquals('modalId', $modal->getAttributeValue('id'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
/**
 * modal_sets_role_attribute
 *
 * @return void
 */
function modal_sets_role_attribute()
    {
        $modal = HtmlElement::modal('test');
        
        $this->assertEquals('dialog', $modal->getAttributeValue('role'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
/**
 * modal_dialog_creates_dialog_wrapper
 *
 * @return void
 */
function modal_dialog_creates_dialog_wrapper()
    {
        $dialog = HtmlElement::modalDialog();
        
        $this->assertEquals('div', $dialog->getTag());
        $this->assertTrue($dialog->hasCSSClass('modal-dialog'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
/**
 * modal_content_creates_content_wrapper
 *
 * @return void
 */
function modal_content_creates_content_wrapper()
    {
        $content = HtmlElement::modalContent();
        
        $this->assertEquals('div', $content->getTag());
        $this->assertTrue($content->hasCSSClass('modal-content'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
/**
 * modal_header_creates_header_element
 *
 * @return void
 */
function modal_header_creates_header_element()
    {
        $header = HtmlElement::modalHeader('Modal Title');
        
        $this->assertEquals('div', $header->getTag());
        $this->assertTrue($header->hasCSSClass('modal-header'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
/**
 * modal_body_creates_body_element
 *
 * @return void
 */
function modal_body_creates_body_element()
    {
        $body = HtmlElement::modalBody('Modal body content');
        
        $this->assertEquals('div', $body->getTag());
        $this->assertTrue($body->hasCSSClass('modal-body'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
/**
 * modal_footer_creates_footer_element
 *
 * @return void
 */
function modal_footer_creates_footer_element()
    {
        $footer = HtmlElement::modalFooter();
        
        $this->assertEquals('div', $footer->getTag());
        $this->assertTrue($footer->hasCSSClass('modal-footer'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
/**
 * modal_xlarge_adds_xlarge_class
 *
 * @return void
 */
function modal_xlarge_adds_xlarge_class()
    {
        $dialog = HtmlElement::modalDialog('xl');
        
        $this->assertTrue($dialog->hasCSSClass('modal-xl'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
/**
 * modal_large_adds_large_class
 *
 * @return void
 */
function modal_large_adds_large_class()
    {
        $dialog = HtmlElement::modalDialog('lg');
        
        $this->assertTrue($dialog->hasCSSClass('modal-lg'));
    }

    /**
     * @test
     * @group components
     * @group modals
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
/**
 * modal_small_adds_small_class
 *
 * @return void
 */
function modal_small_adds_small_class()
    {
        $dialog = HtmlElement::modalDialog('sm');
        
        $this->assertTrue($dialog->hasCSSClass('modal-sm'));
    }

    // ============================================================================
    // NAVBAR COMPONENT TESTS
    // ============================================================================

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
/**
 * navbar_creates_navbar_with_correct_classes
 *
 * @return void
 */
function navbar_creates_navbar_with_correct_classes()
    {
        $navbar = HtmlElement::navbar();
        
        $this->assertEquals('nav', $navbar->getTag());
        $this->assertTrue($navbar->hasCSSClass('navbar'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
/**
 * navbar_dark_adds_dark_class
 *
 * @return void
 */
function navbar_dark_adds_dark_class()
    {
        $navbar = HtmlElement::navbar('dark');
        
        $this->assertTrue($navbar->hasCSSClass('navbar-dark'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
/**
 * navbar_light_adds_light_class
 *
 * @return void
 */
function navbar_light_adds_light_class()
    {
        $navbar = HtmlElement::navbar('light');
        
        $this->assertTrue($navbar->hasCSSClass('navbar-light'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
/**
 * navbar_bg_primary_adds_background_class
 *
 * @return void
 */
function navbar_bg_primary_adds_background_class()
    {
        $navbar = HtmlElement::navbar(null, 'primary');
        
        $this->assertTrue($navbar->hasCSSClass('bg-primary'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
/**
 * navbar_brand_creates_brand_element
 *
 * @return void
 */
function navbar_brand_creates_brand_element()
    {
        $brand = HtmlElement::navbarBrand('My Brand');
        
        $this->assertEquals('span', $brand->getTag());
        $this->assertTrue($brand->hasCSSClass('navbar-brand'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
/**
 * navbar_nav_creates_nav_list
 *
 * @return void
 */
function navbar_nav_creates_nav_list()
    {
        $nav = HtmlElement::navbarNav();
        
        $this->assertEquals('ul', $nav->getTag());
        $this->assertTrue($nav->hasCSSClass('navbar-nav'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
/**
 * navbar_item_creates_list_item
 *
 * @return void
 */
function navbar_item_creates_list_item()
    {
        $item = HtmlElement::navbarItem('Link');
        
        $this->assertEquals('li', $item->getTag());
        $this->assertTrue($item->hasCSSClass('nav-item'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
/**
 * navbar_link_creates_navigation_link
 *
 * @return void
 */
function navbar_link_creates_navigation_link()
    {
        $link = HtmlElement::navbarLink('Home', '/');
        
        $this->assertEquals('a', $link->getTag());
        $this->assertTrue($link->hasCSSClass('nav-link'));
        $this->assertEquals('/', $link->getAttributeValue('href'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
/**
 * navbar_link_active_adds_active_class
 *
 * @return void
 */
function navbar_link_active_adds_active_class()
    {
        $link = HtmlElement::navbarLink('Current', '/', true);
        
        $this->assertTrue($link->hasCSSClass('active'));
    }

    /**
     * @test
     * @group components
     * @group navbars
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
/**
 * navbar_toggler_creates_toggle_button
 *
 * @return void
 */
function navbar_toggler_creates_toggle_button()
    {
        $toggler = HtmlElement::navbarToggler();
        
        $this->assertEquals('button', $toggler->getTag());
        $this->assertTrue($toggler->hasCSSClass('navbar-toggler'));
        $this->assertEquals('button', $toggler->getAttributeValue('type'));
    }

    // ============================================================================
    // PAGINATION COMPONENT TESTS
    // ============================================================================

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
/**
 * pagination_creates_pagination_element
 *
 * @return void
 */
function pagination_creates_pagination_element()
    {
        $nav = HtmlElement::pagination();
        
        $this->assertEquals('nav', $nav->getTag());
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
/**
 * pagination_list_creates_list_element
 *
 * @return void
 */
function pagination_list_creates_list_element()
    {
        $list = HtmlElement::paginationList();
        
        $this->assertEquals('ul', $list->getTag());
        $this->assertTrue($list->hasCSSClass('pagination'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
/**
 * pagination_item_creates_list_item
 *
 * @return void
 */
function pagination_item_creates_list_item()
    {
        $item = HtmlElement::paginationItem();
        
        $this->assertEquals('li', $item->getTag());
        $this->assertTrue($item->hasCSSClass('page-item'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
/**
 * pagination_item_active_adds_active_class
 *
 * @return void
 */
function pagination_item_active_adds_active_class()
    {
        $item = HtmlElement::paginationItem(true);
        
        $this->assertTrue($item->hasCSSClass('active'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
/**
 * pagination_item_disabled_adds_disabled_class
 *
 * @return void
 */
function pagination_item_disabled_adds_disabled_class()
    {
        $item = HtmlElement::paginationItem(false, true);
        
        $this->assertTrue($item->hasCSSClass('disabled'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
/**
 * pagination_link_creates_link_element
 *
 * @return void
 */
function pagination_link_creates_link_element()
    {
        $link = HtmlElement::paginationLink('1', '/page/1');
        
        $this->assertEquals('a', $link->getTag());
        $this->assertTrue($link->hasCSSClass('page-link'));
        $this->assertEquals('/page/1', $link->getAttributeValue('href'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
/**
 * pagination_link_previous_creates_previous_link
 *
 * @return void
 */
function pagination_link_previous_creates_previous_link()
    {
        $link = HtmlElement::paginationPrevious('/page/1');
        
        $this->assertTrue($link->hasCSSClass('page-item'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
/**
 * pagination_link_next_creates_next_link
 *
 * @return void
 */
function pagination_link_next_creates_next_link()
    {
        $link = HtmlElement::paginationNext('/page/3');
        
        $this->assertTrue($link->hasCSSClass('page-item'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
/**
 * pagination_large_adds_size_class
 *
 * @return void
 */
function pagination_large_adds_size_class()
    {
        $list = HtmlElement::paginationList('lg');
        
        $this->assertTrue($list->hasCSSClass('pagination-lg'));
    }

    /**
     * @test
     * @group components
     * @group pagination
 * @return void
 * @since v1.0.5 2026-04-14
     */
    public /**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
/**
 * pagination_small_adds_size_class
 *
 * @return void
 */
function pagination_small_adds_size_class()
    {
        $list = HtmlElement::paginationList('sm');
        
        $this->assertTrue($list->hasCSSClass('pagination-sm'));
    }
}
