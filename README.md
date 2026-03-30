# Ksfraser HTML Library

A powerful, trait-based PHP HTML generation library using SOLID principles, comprehensive trait composition, and test-first development (TDD).

## Overview

The Ksfraser HTML Library provides a fluent, type-safe interface for programmatically building HTML documents. It emphasizes:

- **Trait Composition**: Models feature responsibility through composable traits rather than class hierarchies
- **SOLID Principles**: Single Responsibility, Open/Closed, Liskov Substitution, Interface Segregation, Dependency Inversion
- **Fluent Interface**: Method chaining for intuitive element construction
- **Type Safety**: Strong typing with HtmlElementInterface and attribute validation
- **Accessibility**: Built-in ARIA support and semantic HTML5 elements
- **Extensibility**: Factory patterns for Bootstrap components and responsive utilities

## Quick Start

```php
use Ksfraser\HTML\HtmlElement;

// Create a button
$button = HtmlElement::buttonPrimary('Click Me');

// Build a card with header and body
$card = HtmlElement::card()
    ->addNested(HtmlElement::cardHeader('Title'))
    ->addNested(HtmlElement::cardBody('Content'));

// Responsive section with semantic elements
$article = HtmlElement::article()
    ->displayFlex()
    ->alignItemsCenter()
    ->addNested(HtmlElement::heading('Main Title', 1))
    ->addNested(HtmlElement::paragraph('Introduction text'));

// Render to HTML
echo $article;
```

## Features

### Phase 1: Core Infrastructure (FR-001 to FR-010)
- ✅ HTML element creation and rendering
- ✅ Attribute management with validation
- ✅ Fluent interface for method chaining
- ✅ Nested content composition
- ✅ Empty/void element support
- ✅ CSS class management (FR-006)
- ✅ Event handler attributes (FR-007)
- ✅ Data attributes for JavaScript integration (FR-008)
- ✅ ARIA accessibility attributes (FR-009)
- ✅ Element introspection and querying (FR-010)

### Phase 2: Enhanced Features (FR-011 to FR-014)
- ✅ **Form Elements & Validation UI** (FR-011): Form building with labels, inputs, textareas, selects, validation feedback
- ✅ **Component Factory Pattern** (FR-012): 100+ factory methods for Bootstrap components (buttons, cards, alerts, badges, modals, navbars, pagination)
- ✅ **Responsive Layout Utilities** (FR-013): 50+ utility methods for responsive design (display, sizing, spacing, flexbox, grid, borders)
- ✅ **HTML5 Semantic Elements** (FR-014): 60+ factory methods for semantic HTML5 structure (article, nav, header, footer, etc.)

## Integrated Traits

The HtmlElement class integrates 9 specialized traits providing focused responsibility:

1. **CSSManagementTrait** (FR-006)
   - 68+ tests | ~280 lines
   - CSS class management, conditional classes, bulk operations
   
2. **EventHandlerTrait** (FR-007)
   - 60+ tests | ~380 lines
   - JavaScript event handlers (onClick, onChange, onSubmit, etc.)
   
3. **DataAttributeTrait** (FR-008)
   - 50+ tests | ~220 lines
   - HTML5 data-* attributes for JavaScript integration
   
4. **AriaAttributeTrait** (FR-009)
   - 80+ tests | ~350 lines
   - WCAG accessibility attributes and validation
   
5. **ElementIntrospectionTrait** (FR-010)
   - 70+ tests | ~360 lines
   - Query nested elements, attributes, methods introspection
   
6. **FormElementsTrait** (FR-011)
   - 70+ tests | ~500 lines
   - Form building: form, input, textarea, select, label, button, fieldset
   - Validation states and feedback rendering
   
7. **ComponentFactoryTrait** (FR-012)
   - 60+ tests | ~400 lines
   - Bootstrap components: buttons, cards, alerts, badges, modals, navbars, pagination
   
8. **ResponsiveLayoutTrait** (FR-013)
   - 80+ tests | ~300 lines
   - Display, sizing, spacing, flexbox, grid, typography, borders
   
9. **SemanticElementsTrait** (FR-014)
   - 100+ tests | ~500 lines
   - HTML5 semantic elements: article, nav, header, footer, heading, paragraph, tables, etc.

## Architecture

All features are implemented as composable traits:

```
HtmlElement (Core)
├── CSSManagementTrait
├── EventHandlerTrait
├── DataAttributeTrait
├── AriaAttributeTrait
├── ElementIntrospectionTrait
├── FormElementsTrait
├── ComponentFactoryTrait
├── ResponsiveLayoutTrait
└── SemanticElementsTrait
```

## Requirements & Documentation

For detailed specifications and traceability:
- See [Functional Requirements](Project%20Docs/Functional_Requirements.md)
- See [Requirements Traceability Matrix](Project%20Docs/RTM.md)
- See [Architecture Guide](Project%20Docs/SOFTWARE_ARCHITECTURE_GUIDE.md)
- See [TDD Implementation Guide](Project%20Docs/TDD_IMPLEMENTATION_GUIDE.md)

## Testing

Run the comprehensive test suite with PHPUnit:

```bash
composer test
# or
php vendor/bin/phpunit
```

**Test Coverage:**
- 250+ unit and integration test methods
- Phase 1: ~350 tests across 5 traits
- Phase 2: ~250 tests across 4 traits
- 100% trait coverage for all composed features

## Requirements

- PHP >= 7.3
- PHPUnit >= 9.6 (dev)

## Installation

```bash
composer require ksfraser/html
```

## License

See [LICENSE](LICENSE) file for details.