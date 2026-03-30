# Test-Driven Development Implementation Guide
## HTML Library Enhancements (FR-006 to FR-016)

**Created:** March 27, 2026  
**Version:** 1.0  
**Target Coverage:** 95%+ unit test coverage  
**Testing Framework:** PHPUnit  

---

## 1. TDD Principles for HTML Library

### Core TDD Cycle: Red → Green → Refactor

**Red Phase:** Write a failing test first
```php
public function testAddCSSClassesBatchOperation()
{
    $element = new HtmlDiv();
    $element->addCSSClasses(['btn', 'btn-primary', 'btn-lg']);
    
    $this->assertStringContainsString('class="btn btn-primary btn-lg"', (string)$element);
}
```

**Green Phase:** Implement minimal code to pass
```php
public function addCSSClasses(array $classes): self
{
    foreach ($classes as $class) {
        $this->addCSSClass($class);
    }
    return $this;
}
```

**Refactor Phase:** Improve code while maintaining passing tests
```php
public function addCSSClasses(array $classes): self
{
    array_walk($classes, fn($class) => $this->addCSSClass($class));
    return $this;
}
```

### Key Principles
- **Write Tests First:** Never write implementation code without a failing test
- **One Test Per Behavior:** Each test verifies a single, specific behavior
- **Fast Feedback:** Tests run in milliseconds, not seconds
- **Descriptive Names:** Test names clearly describe what is being tested
- **Comprehensive Coverage:** Include happy path, edge cases, and error conditions

---

## 2. Test Structure for HTML Library Features

### File Organization
```
tests/
├── Unit/
│   ├── CSSManagementTraitTest.php
│   ├── EventHandlerTraitTest.php
│   ├── DataAttributeTraitTest.php
│   ├── AriaAttributeTraitTest.php
│   ├── ElementIntrospectionTest.php
│   ├── ValidationTraitTest.php
│   ├── ElementCloningTest.php
│   ├── ConditionalRenderingTraitTest.php
│   ├── IterationTraitTest.php
│   └── ResponsiveImageTraitTest.php
├── Integration/
│   ├── CSSWithEventsTest.php
│   ├── DataWithAriaTest.php
│   ├── FormValidationIntegrationTest.php
│   └── ResponsiveComponentsTest.php
└── Fixtures/
    ├── HtmlMarkupFixtures.php
    └── TestDataProviders.php
```

### Naming Convention
- **Unit Tests:** `{Feature}TraitTest` or `{Feature}Test`
- **Test Methods:** `test{Behavior}` (verb-first, describing action)
- **Data Providers:** `{Feature}DataProvider`
- **Fixtures:** `get{Feature}Fixture` or `create{Feature}Sample`

### Example Test Structure
```php
<?php

namespace Ksfraser\HTML\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlDiv;
use Ksfraser\HTML\HtmlButton;

class CSSManagementTraitTest extends TestCase
{
    private HtmlDiv $element;

    protected function setUp(): void
    {
        $this->element = new HtmlDiv();
    }

    // Happy Path Tests
    public function testAddSingleCSSClass(): void
    {
        $result = $this->element->addCSSClass('btn');
        $this->assertSame($this->element, $result);
        $this->assertStringContainsString('class="btn"', (string)$this->element);
    }

    // Edge Case Tests
    public function testAddCSSClassWithEmptyString(): void
    {
        $this->element->addCSSClass('');
        $this->assertStringNotContainsString('class=""', (string)$this->element);
    }

    // Error Condition Tests
    public function testAddInvalidCSSClassThrowsException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->element->addCSSClass('invalid@class');
    }

    // Integration Tests
    public function testCSSClassesPreservedWithOtherAttributes(): void
    {
        $this->element
            ->addCSSClass('btn')
            ->setAttribute('id', 'my-button')
            ->addCSSClass('primary');
        
        $html = (string)$this->element;
        $this->assertStringContainsString('class="btn primary"', $html);
        $this->assertStringContainsString('id="my-button"', $html);
    }
}
```

---

## 3. Test Patterns for Each Feature

### FR-006: CSS Class Management

**Test Categories:**
1. **Addition Tests**
   - Add single class
   - Add multiple classes (batch)
   - Add class with condition true/false
   - Chain add operations

2. **Deduplication Tests**
   - Prevent duplicate classes
   - Verify final class attribute contains unique values
   - Test class order preservation

3. **Remove/Toggle Tests**
   - Remove existing class
   - Remove non-existent class (no error)
   - Toggle class on/off
   - Force toggle with parameter

4. **Edge Cases**
   - Empty class names
   - Whitespace in class names
   - Very long class names (1000+ chars)
   - Special characters in class names

**Test Data Provider Example:**
```php
public function classNameDataProvider(): array
{
    return [
        'valid single class' => ['btn', true],
        'valid with hyphens' => ['btn-primary', true],
        'valid with numbers' => ['col-md-6', true],
        'invalid with spaces' => ['btn primary', false],
        'invalid with symbols' => ['btn@primary', false],
        'empty string' => ['', false],
    ];
}

#[DataProvider('classNameDataProvider')]
public function testCSSClassValidation(string $class, bool $shouldPass): void
{
    if (!$shouldPass) {
        $this->expectException(InvalidArgumentException::class);
    }
    
    $this->element->addCSSClass($class);
    $this->assertTrue(true); // Test passed without exception
}
```

### FR-007: Event Handler Methods

**Test Categories:**
1. **Handler Registration Tests**
   - onClick() adds onclick attribute
   - onChange() adds onchange attribute
   - All standard events (focus, blur, keypress, etc.)

2. **Multiple Handlers Tests**
   - Multiple handlers on same event (if supported)
   - Verify both handlers execute
   - Handler order preservation

3. **Escaping Tests**
   - JavaScript code properly escaped
   - Quotes within handlers escaped
   - Line breaks preserved

4. **Chaining Tests**
   - Event methods return $this
   - Chain with CSS methods
   - Chain with data attributes

**Example Tests:**
```php
public function testOnClickHandlerReturnsElement(): void
{
    $result = $this->element->onClick("alert('clicked')");
    $this->assertSame($this->element, $result);
}

public function testOnClickHandlerRendersCorrectly(): void
{
    $this->element->onClick("alert('clicked')");
    $html = (string)$this->element;
    $this->assertStringContainsString("onclick=", $html);
}

public function testEventHandlersChainWithCSSClasses(): void
{
    $result = $this->element
        ->addCSSClass('btn')
        ->onClick("handleClick()")
        ->addCSSClass('active');
    
    $this->assertSame($this->element, $result);
    $html = (string)$this->element;
    $this->assertStringContainsString('class="btn active"', $html);
    $this->assertStringContainsString('onclick=', $html);
}
```

### FR-008: Data Attributes

**Test Categories:**
1. **Single Data Attribute Tests**
   - Set simple string value
   - Set numeric value
   - Set boolean value
   - Retrieve data value

2. **Batch Operations Tests**
   - setDataAttributes() with array
   - Multiple data attributes rendered
   - Order preservation

3. **Complex Value Tests**
   - Nested array to JSON serialization
   - Object serialization
   - Special characters in values
   - HTML escaping in JSON

4. **Chaining Tests**
   - Data methods chainable
   - Mix with other fluent methods

**Example Tests:**
```php
public function testSetDataAttributeRendersWithPrefix(): void
{
    $this->element->setData('itemId', 123);
    $this->assertStringContainsString('data-item-id="123"', (string)$this->element);
}

public function testSetDataAttributeWithComplexValue(): void
{
    $this->element->setData('config', ['theme' => 'dark', 'size' => 'large']);
    $html = (string)$this->element;
    $this->assertStringContainsString('data-config=', $html);
    $this->assertStringContainsString('theme', $html);
}

public function testGetDataAttributeReturnsOriginalValue(): void
{
    $expected = ['key' => 'value'];
    $this->element->setData('original', $expected);
    $actual = $this->element->getData('original');
    $this->assertEquals($expected, $actual);
}
```

### FR-009: ARIA Attributes

**Test Categories:**
1. **ARIA Attribute Setting Tests**
   - setAriaLabel() renders aria-label
   - setAriaDescribedBy() renders aria-describedby
   - setRole() renders role attribute

2. **Validation Tests**
   - Invalid ARIA names throw exception
   - Valid ARIA names accepted
   - ARIA spec compliance

3. **Pattern Validation Tests**
   - Modal pattern (role + aria-label)
   - Alert pattern (role + aria-live)
   - Combination validation

4. **Chaining Tests**
   - ARIA methods chainable
   - Mix with standard attributes

**Example Tests:**
```php
public function testSetAriaLabelRendersCorrectly(): void
{
    $this->element->setAriaLabel('Close dialog');
    $this->assertStringContainsString('aria-label="Close dialog"', (string)$this->element);
}

public function testInvalidAriaAttributeThrowsException(): void
{
    $this->expectException(InvalidArgumentException::class);
    $this->element->setAriaInvalid('some-value');
}

public function testAriaPatternValidation(): void
{
    // Modal pattern validation
    $this->element->setRole('dialog')->setAriaLabel('modal');
    // Should pass validation without exception
    $this->assertTrue(true);
}
```

### FR-010: Element Introspection

**Test Categories:**
1. **Retrieval Tests**
   - getNested() returns array of children
   - getAttributeValue() returns attribute string
   - getAttribute() returns HtmlAttribute object

2. **Query Tests**
   - findNested() with callable filter
   - findNested() empty results
   - Traversal helpers

3. **Edge Cases**
   - Query with no matches
   - Query with multiple matches
   - Query on element with no children

**Example Tests:**
```php
public function testGetNestedReturnsChildElements(): void
{
    $span = new HtmlSpan('text');
    $this->element->addNested($span);
    
    $nested = $this->element->getNested();
    $this->assertCount(1, $nested);
    $this->assertSame($span, $nested[0]);
}

public function testFindNestedWithFilter(): void
{
    $this->element->addNested(new HtmlDiv());
    $this->element->addNested(new HtmlSpan());
    $this->element->addNested(new HtmlDiv());
    
    $divs = $this->element->findNested(fn($elem) => $elem instanceof HtmlDiv);
    $this->assertCount(2, $divs);
}

public function testGetAttributeValueReturnsString(): void
{
    $this->element->setAttribute('id', 'test-id');
    $value = $this->element->getAttributeValue('id');
    $this->assertEquals('test-id', $value);
}
```

---

## 4. Test Fixtures and Helpers

### Reusable Fixture Factory
```php
<?php

namespace Ksfraser\HTML\Tests\Fixtures;

use Ksfraser\HTML\HtmlDiv;
use Ksfraser\HTML\HtmlButton;
use Ksfraser\HTML\HtmlForm;

class HtmlMarkupFixtures
{
    public static function createSimpleButton(): HtmlButton
    {
        return new HtmlButton('Click me');
    }

    public static function createStyledButton(): HtmlButton
    {
        return (new HtmlButton('Submit'))
            ->addCSSClasses(['btn', 'btn-primary'])
            ->setAttribute('type', 'submit');
    }

    public static function createAccessibleForm(): HtmlForm
    {
        $form = new HtmlForm();
        $form->setAriaLabel('Login form')
            ->setAttribute('method', 'POST');
        return $form;
    }

    public static function createComplexComponent(): HtmlDiv
    {
        $div = new HtmlDiv();
        $div->addCSSClasses(['card', 'shadow'])
            ->setAttribute('id', 'main-card')
            ->setData('component', 'card')
            ->setAriaLabel('Main content');
        return $div;
    }
}
```

### Test Data Provider Registry
```php
<?php

namespace Ksfraser\HTML\Tests\Fixtures;

class TestDataProviders
{
    public static function validCSSClasses(): array
    {
        return [
            'btn' => ['btn'],
            'btn-primary' => ['btn-primary'],
            'col-md-6' => ['col-md-6'],
            'multiple-words' => ['multiple-words'],
        ];
    }

    public static function invalidCSSClasses(): array
    {
        return [
            'space separated' => ['space separated'],
            'special@symbols' => ['special@symbols'],
            'unicode-✓' => ['unicode-✓'],
        ];
    }

    public static function validAriaRoles(): array
    {
        return array_map(fn($role) => [$role], [
            'alert', 'alertdialog', 'button', 'dialog', 'menuitem',
            'option', 'progressbar', 'radio', 'tab', 'tabpanel',
        ]);
    }

    public static function htmlAttributeValues(): array
    {
        return [
            'string' => ['simple value'],
            'numeric' => ['123'],
            'special chars' => ['data-123-abc'],
            'empty' => [''],
        ];
    }
}
```

---

## 5. Coverage Goals and Metrics

### Target Coverage by Feature
- **FR-006 (CSS Management):** 95%+ code coverage
  - Happy path: 100%
  - Edge cases: 85%
  - Error conditions: 100%

- **FR-007 (Events):** 90%+ code coverage
  - Handler registration: 100%
  - Event types: 95%
  - Chaining: 100%

- **FR-008 (Data Attributes):** 92%+ code coverage
  - Simple setters: 100%
  - Batch operations: 90%
  - JSON serialization: 85%

- **FR-009 (ARIA):** 93%+ code coverage
  - Attribute setting: 100%
  - Validation: 95%
  - Pattern rules: 85%

- **FR-010 (Introspection):** 88%+ code coverage
  - Basic retrieval: 100%
  - Queries: 85%
  - Edge cases: 80%

### Running Coverage Reports
```bash
# Generate coverage report
phpunit --coverage-html coverage tests/

# Check minimum coverage threshold
phpunit --coverage-text --whitelist=src/ tests/

# Fail build if coverage drops below 95%
phpunit --coverage-text --coverage-clover coverage.xml \
    --fail-on-coverage-below 95 tests/
```

---

## 6. Continuous Integration with TDD

### Pre-Commit Hook
```php
#!/usr/bin/env php
<?php
// .git/hooks/pre-commit

$output = shell_exec('cd ' . __DIR__ . ' && phpunit tests/ --fail-on-incomplete --fail-on-skipped 2>&1');

if (strpos($output, 'FAILURES') !== false || 
    strpos($output, 'ERRORS') !== false) {
    echo "Tests failed. Commit blocked.\n";
    echo $output;
    exit(1);
}

echo "✓ All tests passed\n";
exit(0);
```

### CI Pipeline (GitHub Actions Example)
```yaml
name: Tests
on: [push, pull_request]

jobs:
  test:
    runs-on: ubuntu-latest
    strategy:
      matrix:
        php-version: ['7.3', '7.4', '8.0', '8.1', '8.2']

    steps:
      - uses: actions/checkout@v3
      - uses: shivammathur/setup-php@v2
        with:
          php-version: ${{ matrix.php-version }}
      
      - run: composer install
      - run: phpunit --coverage-clover coverage.xml --fail-on-incomplete
      - run: vendor/bin/php-code-sniffer --standard=PSR12 src/
```

---

## 7. TDD Workflow for Each Enhancement Phase

### Phase 1 Enhancement Cycle (FR-006 to FR-010)

**Week 1: FR-006 CSS Management**
1. Day 1: Write all CSS management tests (→ RED)
2. Day 2: Implement CSS methods (→ GREEN)
3. Day 3: Refactor and edge case handling
4. Day 4: Review and documentation

**Week 2: FR-007 Events + FR-008 Data**
1. Days 1-2: Write event handler tests and implementation
2. Days 3-4: Write data attribute tests and implementation
3. Day 5: Integration testing between features

**Week 3: FR-009 ARIA + FR-010 Introspection**
1. Days 1-2: ARIA attribute tests and implementation
2. Days 3-4: Introspection tests and implementation
3. Day 5: Integration tests across all Phase 1 features

### Daily TDD Cycle
```
09:00 - Write failing tests (Red)
        └─ 30 min: Write 3-5 failing tests
10:00 - Implement minimal code (Green)
        └─ 30 min: Make tests pass
11:00 - Refactor code (Refactor)
        └─ 30 min: Improve implementation
11:30 - Review and commit (Repeat)
        └─ 15 min: Code review, atomic commit
```

---

## 8. Debugging Test Failures

### Assertion Helpers
```php
// When assertion fails, provide clear diagnostic
public function testCSSClassRendering(): void
{
    $this->element->addCSSClass('btn');
    $html = (string)$this->element;
    
    $this->assertStringContainsString(
        'class="btn"',
        $html,
        "Element HTML does not contain expected class attribute.\n" .
        "Actual HTML: " . $html
    );
}

// Use custom matchers for complex assertions
$this->assertThat(
    $html,
    new \PHPUnit\Framework\Constraint\StringContains('data-itemid'),
    'Data attribute not found in HTML output'
);
```

### Common Test Failures and Solutions

| Failure Pattern | Root Cause | Solution |
|---|---|---|
| Assertion fails with `class=""` | Empty classes not filtered | Implement empty string check in addCSSClass |
| HTML output includes extra spaces | Whitespace in rendering | Trim attribute values before output |
| Tests pass locally, fail in CI | Environment difference | Check PHP version, ensure cross-platform paths |
| Mock expectations not met | Wrong method call order | Use InOrder expectation in mock setup |

---

## 9. Best Practices and Checklist

### Before Implementing a Feature
- ✅ Write at least 3 failing tests (happy path, edge case, error)
- ✅ Define acceptance criteria in test names
- ✅ Create test fixture for this feature
- ✅ Plan test data providers for parameterized tests

### While Implementing
- ✅ Run tests every 5-10 minutes
- ✅ Implement one test passing at a time
- ✅ NO implementation without failing test
- ✅ Commit after each test passes
- ✅ Keep implementation simple (no premature optimization)

### After Implementation
- ✅ Run full test suite (all tests must pass)
- ✅ Check code coverage meets target (95%+)
- ✅ Refactor for clarity and performance
- ✅ Write documentation examples from tests
- ✅ Run tests one more time before PR

### Test Review Checklist
- ✅ Each test has single responsibility
- ✅ Descriptive test names (no `test1`, `test2`)
- ✅ No `setUp()` side effects that hide test behavior
- ✅ Assertions are specific (not generic `assertTrue($something)`)
- ✅ Edge cases and error conditions tested
- ✅ No skipped or incomplete tests
- ✅ Tests run in < 100ms (fast feedback)
- ✅ No interdependencies between tests (order-independent)

---

## 10. Code Examples: Complete TDD Feature

### Feature: Add CSS Classes (FR-006)

**Step 1: Write Failing Tests**
```php
<?php
namespace Ksfraser\HTML\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Ksfraser\HTML\HtmlDiv;

class CSSClassManagementTest extends TestCase
{
    // Test 1: Basic batch add
    public function testAddCSSClassesAddsBatchOfClasses(): void
    {
        $element = new HtmlDiv();
        $result = $element->addCSSClasses(['btn', 'btn-primary']);
        
        $this->assertSame($element, $result);
        $this->assertStringContainsString('btn', (string)$element);
        $this->assertStringContainsString('btn-primary', (string)$element);
    }
    
    // Test 2: Conditional add
    public function testAddCSSClassWithConditionTrue(): void
    {
        $element = new HtmlDiv();
        $element->addCSSClass('active', true);
        
        $this->assertStringContainsString('class="active"', (string)$element);
    }
    
    // Test 3: Conditional add false
    public function testAddCSSClassWithConditionFalse(): void
    {
        $element = new HtmlDiv();
        $element->addCSSClass('active', false);
        
        $this->assertStringNotContainsString('active', (string)$element);
    }
}
```

**Step 2: Implement Minimal Code (Tests Pass)**
```php
class HtmlElement implements HtmlElementInterface
{
    public function addCSSClasses(array $classes): self
    {
        foreach ($classes as $class) {
            $this->addCSSClass($class);
        }
        return $this;
    }
    
    public function addCSSClass(string $class, bool $condition = true): self
    {
        if (!$condition || empty($class)) {
            return $this;
        }
        
        $existing = $this->getAttribute('class')?->getValue() ?? '';
        $classes = array_filter(explode(' ', $existing));
        $classes[] = $class;
        
        return $this->setAttribute('class', implode(' ', array_unique($classes)));
    }
}
```

**Step 3: Refactor for Quality**
```php
class HtmlElement implements HtmlElementInterface
{
    private const CLASS_DELIMITER = ' ';
    
    public function addCSSClasses(array $classes): self
    {
        array_walk(
            $classes,
            fn(string $class): null => $this->addCSSClass($class) ?? null
        );
        return $this;
    }
    
    public function addCSSClass(string $class, bool $condition = true): self
    {
        if (!$condition || empty(trim($class))) {
            return $this;
        }
        
        $classes = $this->extractCurrentClasses();
        $classes[] = $class;
        
        return $this->setAttribute('class', implode(self::CLASS_DELIMITER, array_unique($classes)));
    }
    
    private function extractCurrentClasses(): array
    {
        $classAttribute = $this->getAttributeValue('class') ?? '';
        return array_filter(explode(self::CLASS_DELIMITER, $classAttribute));
    }
}
```

**Step 4: Document with Test Examples**
```php
/**
 * Add multiple CSS classes at once, auto-deduplicating
 * 
 * @param array $classes List of class names to add
 * @return self
 * 
 * @example
 * $div = new HtmlDiv();
 * $div->addCSSClasses(['btn', 'btn-primary', 'btn-lg'])
 *     ->setAttribute('type', 'button');
 * // Renders: <div class="btn btn-primary btn-lg" type="button"></div>
 */
public function addCSSClasses(array $classes): self
```

---

## Summary

This TDD approach ensures:
- **Quality:** 95%+ test coverage catches bugs early
- **Documentation:** Tests serve as living documentation
- **Refactoring Safety:** Can refactor with confidence
- **Faster Development:** Failing fast saves time
- **Maintainability:** Well-tested code is easier to modify
- **Collaboration:** Tests clarify requirements for team

Start with Phase 1 features (FR-006 to FR-010) using this guide, then apply patterns to Phase 2 and 3 features.
