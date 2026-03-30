# Software Architecture Guide
## HTML Library Enhancements (FR-006 to FR-016)

**Created:** March 27, 2026  
**Version:** 1.0  
**Design Principles:** SOLID, Composition over Inheritance, Separation of Concerns  

---

## 1. Architectural Overview

### Current Architecture Assessment

**Existing Strengths:**
- ✅ Composite Pattern: Elements contain nested children
- ✅ Fluent Interface: Method chaining for ergonomics
- ✅ Interface Contract: HtmlElementInterface defines behavior
- ✅ Single Responsibility: Each element renders one tag
- ✅ Trait-Based Reuse: Common behavior via PHP traits

**Areas for Enhancement:**
- 🟨 CSS Management: Basic setAttribute() but lacks convenience methods
- 🟨 Event Handling: No abstraction for JavaScript integration
- 🟨 Data Attributes: Manual "data-" prefix management
- 🟨 ARIA Support: Validation needs architectural separation
- 🟨 Element Querying: No introspection/traversal methods
- 🟨 Validation: No form-level validation orchestration
- 🟨 Cloning: No element duplication mechanism
- 🟨 Performance: Potential rendering bottlenecks with complex trees

### Enhancement Architecture Strategy

```
HtmlElement (Base Class)
├── Core Methods (tag, nested, HTML output)
├── Trait: CSSManagementTrait          [FR-006]
├── Trait: EventHandlerTrait            [FR-007]
├── Trait: DataAttributeTrait           [FR-008]
├── Trait: AriaAttributeTrait           [FR-009]
├── Trait: ElementIntrospectionTrait    [FR-010]
├── Trait: ValidationTrait              [FR-011]
├── Trait: ElementCloningTrait          [FR-012]
├── Trait: ConditionalRenderingTrait    [FR-013]
├── Trait: IterationTrait               [FR-014]
├── Trait: ResponsiveImageTrait         [FR-016]
└── Support Classes (below)

HtmlAttribute & HtmlAttributeList (Existing)
│
├── EventHandler                        [NEW - FR-007]
│   └── Manages JavaScript event code
│
├── AriaValidator                       [NEW - FR-009]
│   ├── ARIA spec validation rules
│   └── Pattern enforcement rules
│
├── DataSerializer                      [NEW - FR-008]
│   └── JSON serialization for complex data
│
├── ElementValidator                    [NEW - FR-011]
│   ├── HTML5 form validation rules
│   └── Custom validation callbacks
│
├── ElementCloner                       [NEW - FR-012]
│   └── Deep clone with attribute preservation
│
├── ConditionalRenderer                 [NEW - FR-013]
│   ├── Conditional rendering logic
│   └── Template variable substitution
│
└── IterationRenderer                   [NEW - FR-014]
    ├── Loop over collections
    └── Row context variables
```

---

## 2. SOLID Principles Application

### Single Responsibility Principle (SRP)

**Problem:** If HtmlElement handles everything (CSS, events, ARIA, validation, cloning), it becomes a "God Object"

**Solution: Trait Separation**
```php
// ❌ DON'T: Put everything in HtmlElement
class HtmlElement
{
    public function addCSSClass() {} // CSS concern
    public function onClick() {}      // Event concern
    public function setData() {}      // Data concern
    public function setAriaLabel() {} // ARIA concern
    // ... 50+ more methods from different concerns
}

// ✅ DO: Use traits for each responsibility
trait CSSManagementTrait {
    public function addCSSClass() {}
    public function addClass() {}
    public function removeClass() {}
}

trait EventHandlerTrait {
    public function onClick() {}
    public function onChange() {}
}

class HtmlElement implements HtmlElementInterface
{
    use CSSManagementTrait;
    use EventHandlerTrait;
    // ... other concerns as separate traits
}
```

**Trait Responsibility Boundaries:**

| Trait | Responsibility | Methods |
|-------|---|---|
| CSSManagementTrait | CSS class operations | addCSSClass, addCSSClasses, removeClass, toggleClass, etc. |
| EventHandlerTrait | JavaScript event binding | onClick, onChange, onSubmit, onFocus, etc. |
| DataAttributeTrait | HTML data-* attributes | setData, setDataAttributes, getData, etc. |
| AriaAttributeTrait | ARIA attributes | setAriaLabel, setRole, setAriaDescribedBy, etc. |
| ElementIntrospectionTrait | Query/traverse elements | getNested, findNested, getAttributeValue, etc. |
| ValidationTrait | Form validation | addValidationRule, validateRequired, etc. |
| ElementCloningTrait | Element duplication | clone(), deepClone(), etc. |
| ConditionalRenderingTrait | Conditional rendering | renderIf(), renderUnless(), etc. |
| IterationTrait | Loop rendering | forEach(), map(), etc. |
| ResponsiveImageTrait | Responsive images | addSrcSet(), setSizes(), etc. |

### Open/Closed Principle (OCP)

**Problem:** Adding new features requires modifying HtmlElement

**Solution: Trait Extension**
```php
// Original HtmlElement is closed for modification
class HtmlElement implements HtmlElementInterface
{
    // Core methods only
}

// New feature added via trait (open for extension)
trait CustomBehaviorTrait
{
    public function customMethod() {}
}

// Existing code unchanged
class HtmlDiv extends HtmlElement {}

// New element with custom behavior
class CustomDiv extends HtmlElement
{
    use CustomBehaviorTrait;
}
```

**Extension Points:**
- New traits for new features
- Element subclasses for specialized elements
- Custom validators/serializers as separate classes
- Middleware-style attribute processors

### Liskov Substitution Principle (LSP)

**Problem:** Subclasses must be substitutable for their parent

**Solution: Interface Contract**
```php
// ✅ All HTML elements implement same interface
interface HtmlElementInterface
{
    public function getHtml(): string;
    public function addNested(HtmlElementInterface $element): self;
    public function setAttribute(string $name, $value): self;
}

// Any HtmlElementInterface can be used interchangeably
$elements = [
    new HtmlDiv(),
    new HtmlSpan(),
    new HtmlButton(),
];

foreach ($elements as $element) {
    echo $element->getHtml(); // Works for all types
}

// ❌ DON'T: Break LSP by adding incompatible methods
class BrokenElement implements HtmlElementInterface
{
    // Throws exception for getHtml() - violates contract!
    public function getHtml(): string
    {
        throw new Exception("Not implemented");
    }
}
```

**Enforcement:**
- All HTML element classes implement HtmlElementInterface
- Trait methods don't change method signatures
- All traits return $this for chaining (expected behavior)
- Error conditions follow same exception patterns

### Interface Segregation Principle (ISP)

**Problem:** Forcing clients to depend on interfaces they don't use

**Solution: Segregated Interfaces**
```php
// ❌ DON'T: One huge interface
interface HtmlElementInterface
{
    // Everyone must implement ALL these
    public function addCSSClass($class): self;
    public function onClick($handler): self;
    public function setData($key, $value): self;
    public function setAriaLabel($label): self;
    public function getNested(): array;
}

// ✅ DO: Segregate by capability
interface Renderable {
    public function getHtml(): string;
}

interface Nestable {
    public function addNested(HtmlElementInterface $element): self;
}

interface Attributable {
    public function setAttribute(string $name, $value): self;
}

interface CSSable {
    public function addCSSClass(string $class, bool $condition = true): self;
}

interface JavaScriptable {
    public function onClick(string $handler): self;
}

// Base element only implements required interfaces
class HtmlElement implements Renderable, Nestable, Attributable
{
    // Core functionality
}

// Extended elements implement additional interfaces
class HtmlButton extends HtmlElement implements JavaScriptable, CSSable
{
    use EventHandlerTrait;
    use CSSManagementTrait;
}

// Clients only depend on interfaces they need
function renderElement(Renderable $element) {
    return $element->getHtml();
}

function addStyleToElement(CSSable $element) {
    $element->addCSSClass('styled');
}
```

### Dependency Inversion Principle (DIP)

**Problem:** HtmlElement depends on concrete implementations

**Solution: Inject Dependencies**
```php
// ❌ DON'T: Hard-code dependencies
class HtmlElement
{
    public function __construct()
    {
        $this->attributeList = new HtmlAttributeList(); // Concrete
        $this->validator = new HtmlValidator();          // Concrete
    }
}

// ✅ DO: Inject dependencies
interface AttributeListInterface
{
    public function setAttribute(HtmlAttribute $attr): void;
}

interface ValidatorInterface
{
    public function validate(string $name, $value): bool;
}

class HtmlElement implements HtmlElementInterface
{
    private AttributeListInterface $attributeList;
    private ValidatorInterface $validator;
    
    public function __construct(
        AttributeListInterface $attributeList = null,
        ValidatorInterface $validator = null
    ) {
        $this->attributeList = $attributeList ?? new HtmlAttributeList();
        $this->validator = $validator ?? new HtmlValidator();
    }
}

// Testing: use mock implementations
$mockValidator = $this->createMock(ValidatorInterface::class);
$element = new HtmlElement(null, $mockValidator);
```

---

## 3. Design Patterns for Each Enhancement

### FR-006: CSS Management → Strategy Pattern

**Pattern:** Strategy for CSS operations
```php
interface CSSStrategy {
    public function apply(HtmlElement $element): void;
}

class AddCSSClassStrategy implements CSSStrategy
{
    public function __construct(private string $class) {}
    
    public function apply(HtmlElement $element): void
    {
        $element->addClass($this->class);
    }
}

class ConditionalCSSStrategy implements CSSStrategy
{
    public function __construct(
        private string $class,
        private bool $condition
    ) {}
    
    public function apply(HtmlElement $element): void
    {
        if ($this->condition) {
            $element->addClass($this->class);
        }
    }
}

// Usage
trait CSSManagementTrait
{
    private array $cssStrategies = [];
    
    public function addCSSClass(string $class, bool $condition = true): self
    {
        $strategy = $condition
            ? new AddCSSClassStrategy($class)
            : new ConditionalCSSStrategy($class, $condition);
        
        $strategy->apply($this);
        return $this;
    }
}
```

### FR-007: Event Handlers → Observer Pattern

**Pattern:** Store and render event listeners
```php
class EventHandler
{
    private string $event;
    private string $code;
    private bool $preventDefault = false;
    
    public function __construct(string $event, string $code)
    {
        $this->event = $event;
        $this->code = $code;
    }
    
    public function getHtml(): string
    {
        $escaped = htmlspecialchars($this->code, ENT_QUOTES);
        return sprintf('%s="%s"', $this->event, $escaped);
    }
}

trait EventHandlerTrait
{
    private array $eventHandlers = [];
    
    public function onClick(string $code): self
    {
        return $this->addEventHandler('onclick', $code);
    }
    
    protected function addEventHandler(string $event, string $code): self
    {
        $handler = new EventHandler($event, $code);
        $this->eventHandlers[$event] = $handler;
        return $this;
    }
}
```

### FR-008: Data Attributes → Serialization Pattern

**Pattern:** Separate serialization concerns
```php
interface DataSerializer
{
    public function serialize($value): string;
    public function deserialize(string $serialized): mixed;
}

class JsonDataSerializer implements DataSerializer
{
    public function serialize($value): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
    
    public function deserialize(string $serialized): mixed
    {
        return json_decode($serialized, associative: true);
    }
}

trait DataAttributeTrait
{
    private DataSerializer $serializer;
    private array $data = [];
    
    public function __construct()
    {
        $this->serializer = new JsonDataSerializer();
    }
    
    public function setData(string $key, mixed $value): self
    {
        $this->data[$key] = $value;
        
        $serialized = is_array($value) || is_object($value)
            ? $this->serializer->serialize($value)
            : (string)$value;
        
        $dataKey = 'data-' . str_replace('_', '-', $key);
        return $this->setAttribute($dataKey, $serialized);
    }
    
    public function getData(string $key): mixed
    {
        return $this->data[$key] ?? null;
    }
}
```

### FR-009: ARIA Attributes → Validator Pattern

**Pattern:** Validate against rules before rendering
```php
class AriaValidator
{
    private const VALID_ROLES = [
        'alert', 'alertdialog', 'button', 'checkbox', 'columnheader',
        'dialog', 'menuitem', 'option', 'progressbar', 'radio',
        // ... full list from ARIA spec
    ];
    
    private const ARIA_PROPERTIES = [
        'aria-label', 'aria-labelledby', 'aria-describedby',
        'aria-live', 'aria-hidden', 'aria-pressed',
        // ... full list
    ];
    
    public function validateRole(string $role): bool
    {
        return in_array($role, self::VALID_ROLES);
    }
    
    public function validateProperty(string $property): bool
    {
        return in_array($property, self::ARIA_PROPERTIES);
    }
}

trait AriaAttributeTrait
{
    private AriaValidator $ariaValidator;
    
    public function __construct()
    {
        $this->ariaValidator = new AriaValidator();
    }
    
    public function setRole(string $role): self
    {
        if (!$this->ariaValidator->validateRole($role)) {
            throw new InvalidArgumentException("Invalid ARIA role: {$role}");
        }
        return $this->setAttribute('role', $role);
    }
    
    public function setAriaLabel(string $label): self
    {
        return $this->setAttribute('aria-label', $label);
    }
}
```

### FR-010: Element Introspection → Visitor Pattern

**Pattern:** Traverse and query elements
```php
interface ElementVisitor
{
    public function visit(HtmlElementInterface $element): void;
}

class FindByTagVisitor implements ElementVisitor
{
    private string $tagName;
    private array $found = [];
    
    public function __construct(string $tagName)
    {
        $this->tagName = $tagName;
    }
    
    public function visit(HtmlElementInterface $element): void
    {
        if ($element->getTag() === $this->tagName) {
            $this->found[] = $element;
        }
        
        foreach ($element->getNested() as $child) {
            $this->visit($child);
        }
    }
    
    public function getFound(): array
    {
        return $this->found;
    }
}

trait ElementIntrospectionTrait
{
    public function findNested(callable $filter): array
    {
        return array_filter($this->getNested(), $filter);
    }
    
    public function findByTag(string $tagName): array
    {
        $visitor = new FindByTagVisitor($tagName);
        $visitor->visit($this);
        return $visitor->getFound();
    }
    
    public function getNested(): array
    {
        return $this->nested ?? [];
    }
    
    public function getAttributeValue(string $name): ?string
    {
        return $this->attributeList->getValue($name);
    }
}
```

### FR-011: Element Validation → Chain of Responsibility

**Pattern:** Chain validators for complex validation
```php
interface Validator
{
    public function validate(HtmlElementInterface $element): ValidationResult;
}

class RequiredValidator implements Validator
{
    public function validate(HtmlElementInterface $element): ValidationResult
    {
        if ($element->getAttribute('required') !== null) {
            return ValidationResult::valid();
        }
        return ValidationResult::invalid('Field is required');
    }
}

class ValidationChain
{
    private array $validators = [];
    
    public function add(Validator $validator): self
    {
        $this->validators[] = $validator;
        return $this;
    }
    
    public function validate(HtmlElementInterface $element): ValidationResult
    {
        foreach ($this->validators as $validator) {
            $result = $validator->validate($element);
            if (!$result->isValid()) {
                return $result;
            }
        }
        return ValidationResult::valid();
    }
}

trait ValidationTrait
{
    private ValidationChain $validationChain;
    
    public function addValidationRule(Validator $validator): self
    {
        $this->validationChain->add($validator);
        return $this;
    }
    
    public function validate(): ValidationResult
    {
        return $this->validationChain->validate($this);
    }
}
```

### FR-012: Element Cloning → Prototype Pattern

**Pattern:** Clone with deep copy of nested elements
```php
trait ElementCloningTrait
{
    public function clone(): HtmlElementInterface
    {
        return $this->deepClone();
    }
    
    private function deepClone(): HtmlElementInterface
    {
        // Create new instance
        $cloned = new self();
        
        // Copy all attributes
        if (isset($this->attributeList)) {
            foreach ($this->attributeList->getAll() as $attr) {
                $cloned->addAttributeObject(clone $attr);
            }
        }
        
        // Deep clone nested elements
        if (isset($this->nested)) {
            foreach ($this->nested as $child) {
                if ($child instanceof HtmlElementInterface && method_exists($child, 'deepClone')) {
                    $cloned->addNested($child->deepClone());
                } else {
                    $cloned->addNested(clone $child);
                }
            }
        }
        
        return $cloned;
    }
}
```

### FR-013: Conditional Rendering → Decorator Pattern

**Pattern:** Wrap rendering with conditions
```php
class ConditionalRenderer
{
    private HtmlElementInterface $element;
    private Closure $condition;
    
    public function __construct(HtmlElementInterface $element, Closure $condition)
    {
        $this->element = $element;
        $this->condition = $condition;
    }
    
    public function getHtml(): string
    {
        if (($this->condition)()) {
            return $this->element->getHtml();
        }
        return '';
    }
}

trait ConditionalRenderingTrait
{
    public function renderIf(bool $condition): HtmlElementInterface
    {
        if (!$condition) {
            // Return empty element or null representation
            return new HtmlString('');
        }
        return $this;
    }
}
```

### FR-014: Iteration → Iterator Pattern

**Pattern:** Iterate over collections and render
```php
class IterationRenderer
{
    private HtmlElementInterface $template;
    private iterable $collection;
    private Closure $renderer;
    
    public function __construct(
        HtmlElementInterface $template,
        iterable $collection,
        Closure $renderer
    ) {
        $this->template = $template;
        $this->collection = $collection;
        $this->renderer = $renderer;
    }
    
    public function getHtml(): string
    {
        $html = '';
        foreach ($this->collection as $item) {
            $rendered = ($this->renderer)($this->template, $item);
            $html .= $rendered->getHtml();
        }
        return $html;
    }
}

trait IterationTrait
{
    public function forEach(iterable $collection, Closure $renderer): HtmlElementInterface
    {
        return new IterationRenderer($this, $collection, $renderer);
    }
}
```

---

## 4. Architectural Constraints and Guidelines

### Backward Compatibility

**Rule:** No breaking changes to existing API
```php
// ✅ DO: Add new methods without changing existing ones
class HtmlElement
{
    // Existing method - unchanged
    public function addNested(HtmlElementInterface $element): self
    
    // New convenience method - adds without breaking existing
    public function addNestedElements(array $elements): self
}

// ❌ DON'T: Change signatures of existing methods
class HtmlElement
{
    // Would break all existing code!
    public function addNested(HtmlElementInterface $element, $newParam = null): self
}
```

**Strategy:**
- New features as new methods only
- New traits via composition (use statement)
- New parameters use default values
- Version compatibility matrix in documentation

### Performance Constraints

**Memory Usage:**
- Large element trees (1000+ elements): < 10MB
- Attribute storage: O(n) linear with attribute count
- No circular references that prevent garbage collection

**Rendering Speed:**
- Simple elements (10-100): < 1ms
- Complex trees (1000+): < 100ms
- No regexes in hot rendering path

**Optimization Points:**
```php
// Lazy evaluation: don't build unless needed
trait CSSManagementTrait
{
    private ?string $classCache = null;
    
    private function buildClassAttribute(): string
    {
        if ($this->classCache === null) {
            // Build class string only once
            $this->classCache = implode(' ', $this->classes);
        }
        return $this->classCache;
    }
}

// String building: use arrays then implode
// ❌ DON'T: Concatenation in loop
$html = '';
foreach ($attrs as $attr) {
    $html .= $attr->getHtml();  // Creates new string each iteration
}

// ✅ DO: Collect in array, implode once
$htmlParts = [];
foreach ($attrs as $attr) {
    $htmlParts[] = $attr->getHtml();
}
$html = implode(' ', $htmlParts);
```

### Testing Architecture

**Unit Test Structure:**
```
tests/Unit/
├── Traits/
│   ├── CSSManagementTraitTest.php
│   ├── EventHandlerTraitTest.php
│   └── ...
├── Validators/
│   ├── AriaValidatorTest.php
│   └── ElementValidatorTest.php
├── Serializers/
│   └── JsonDataSerializerTest.php
└── Integration/
    └── TraitInteractionTest.php
```

**Integration Test Strategy:**
```php
// Test traits work together
class TraitInteractionTest extends TestCase
{
    public function testCSSAndEventsWorkTogether(): void
    {
        $button = new HtmlButton();
        $result = $button
            ->addCSSClass('btn')
            ->onClick('handleClick()')
            ->addCSSClass('primary');
        
        $this->assertSame($button, $result);
        $html = (string)$button;
        $this->assertStringContainsString('class="btn primary"', $html);
        $this->assertStringContainsString('onclick=', $html);
    }
}
```

---

## 5. Extension Points and Future-Proofing

### Adding New Features (Template)

**When adding a new feature (e.g., FR-015):**

1. **Define the Concern:**
   ```php
   // What responsibility does this feature have?
   // → Async rendering or lazy loading
   ```

2. **Create Trait + Support Classes:**
   ```php
   // LazyLoadingTrait in src/Traits/
   trait LazyLoadingTrait {
       public function setLazy(bool $lazy): self {}
   }
   
   // LazyLoadRenderer in src/Rendering/
   class LazyLoadRenderer {
       public function render(): string {}
   }
   ```

3. **Update Base Class:**
   ```php
   class HtmlElement implements HtmlElementInterface
   {
       use LazyLoadingTrait;  // Add trait
   }
   ```

4. **Write Tests:**
   ```php
   // tests/Unit/Traits/LazyLoadingTraitTest.php
   class LazyLoadingTraitTest extends TestCase {}
   ```

5. **Document:**
   ```php
   /**
    * Enable lazy loading for this element
    * @return self
    */
   public function setLazy(bool $lazy): self
   ```

### Plugin Architecture (Future Consideration)

```php
// Support third-party extensions
interface HtmlElementPlugin
{
    public function register(HtmlElement $element): void;
}

class CustomComponentPlugin implements HtmlElementPlugin
{
    public function register(HtmlElement $element): void
    {
        // Add custom methods via composition or new trait
    }
}

// Usage
$element = new HtmlDiv();
$plugin = new CustomComponentPlugin();
$plugin->register($element);
$element->customMethod();
```

---

## 6. Architecture Review Checklist

### Before Implementing Any Feature

- ✅ **SRP:** Does each class/trait have single responsibility?
- ✅ **OCP:** Can feature be added without modifying existing code?
- ✅ **LSP:** Do all elements remain substitutable?
- ✅ **ISP:** Are clients forced to depend on methods they don't use?
- ✅ **DIP:** Do we depend on abstractions or concrete classes?
- ✅ **Backward Compatibility:** Does existing code still work?
- ✅ **Performance:** Will this impact rendering speed/memory?
- ✅ **Testability:** Can this feature be unit tested?
- ✅ **Documentation:** Is the design pattern clear?

### Code Review Questions

1. **Responsibility:** What does this class/trait do? (Should be answerable in one sentence)
2. **Cohesion:** Do all methods in this trait work toward same goal?
3. **Coupling:** Does this depend on concrete classes or interfaces?
4. **Reusability:** Could another element use this trait?
5. **Maintainability:** Would another developer understand this?
6. **Testability:** Can each method be tested independently?
7. **Performance:** Any N+1 queries or repeated string building?
8. **Security:** Does this escape output properly?

---

## 7. Recommended Implementation Order

**Phase 1 (Enhancements):**
1. **FR-006: CSS Management** - Foundation for styling (Strategy)
2. **FR-007: Events** - JavaScript integration (Observer)
3. **FR-008: Data Attributes** - JS binding data (Serialization)
4. **FR-009: ARIA** - Accessibility (Validator)
5. **FR-010: Introspection** - Element querying (Visitor)

**Phase 2 (Advanced Features):**
6. **FR-011: Validation** - Form validation (Chain of Responsibility)
7. **FR-012: Cloning** - Element duplication (Prototype)
8. **FR-013: Conditionals** - Conditional rendering (Decorator)
9. **FR-014: Iteration** - Loop rendering (Iterator)

**Phase 3 (Performance & UX):**
10. **FR-015: Performance** - Rendering optimization
11. **FR-016: Responsive Images** - Picture/srcset support

**Reasoning:**
- Phase 1 builds foundational capabilities
- Phase 2 adds advanced features on secure foundation
- Phase 3 optimizes based on real usage patterns

---

## 8. Architecture Validation Examples

### Example 1: CSS Management Feature (FR-006)

**Architecture Review:**

✅ **Single Responsibility**
- CSSManagementTrait: Only manages CSS classes
- HtmlElement: Still handles core rendering

✅ **Open/Closed**
- New trait doesn't modify HtmlElement class body
- Existing code and tests unchanged

✅ **Liskov Substitution**
- All elements implement HtmlElementInterface
- CSSManagementTrait returns $this automatically

✅ **Interface Segregation**
- Trait-based: only include in elements needing CSS
- No forced dependencies

✅ **Dependency Inversion**
- Uses abstract HtmlAttributeList interface
- No hard dependency on concrete classes

**Implementation** (Simplified):
```php
trait CSSManagementTrait
{
    public function addCSSClass(string $class, bool $condition = true): self
    {
        if (!$condition || empty(trim($class))) {
            return $this;
        }
        
        // Implementation details...
        return $this;
    }
}

class HtmlElement implements HtmlElementInterface
{
    use CSSManagementTrait;
    // ... rest of implementation
}

// ✅ Can use CSS methods
$div = new HtmlDiv();
$div->addCSSClass('container')->addCSSClass('active');

// ✅ Element still works normally
echo $div->getHtml();
```

### Example 2: Event Handler Feature (FR-007)

**Architecture Review:**

✅ **Strategy Pattern Applied**
- EventHandler class handles rendering logic
- Trait manages collection

✅ **Separation of Concerns**
- Event code storage: EventHandler class
- Method chaining: EventHandlerTrait
- Element rendering: HtmlElement

✅ **Extensibility**
- New event types added without modifying HtmlElement
- Custom EventHandler subclasses possible

**Implementation** (Simplified):
```php
class EventHandler
{
    public function __construct(
        private string $event,
        private string $code
    ) {
        $this->validateEvent($event);
    }
    
    public function getHtml(): string
    {
        $escaped = htmlspecialchars($this->code, ENT_QUOTES);
        return "{$this->event}=\"{$escaped}\"";
    }
}

trait EventHandlerTrait
{
    private array $handlers = [];
    
    public function onClick(string $code): self
    {
        $this->handlers['onclick'] = new EventHandler('onclick', $code);
        return $this;
    }
    
    protected function renderEventHandlers(): string
    {
        return implode(' ', array_map(
            fn($handler) => $handler->getHtml(),
            $this->handlers
        ));
    }
}
```

---

## Summary: Architecture Principles

| Principle | Application | Benefit |
|-----------|---|---|
| **SRP** | One trait per concern | Easy to maintain, test, extend |
| **OCP** | Add traits, don't modify base | Backward compatible |
| **LSP** | All elements implement interface | Polymorphic usage |
| **ISP** | Segregated interfaces via traits | Flexible element composition |
| **DIP** | Depend on abstractions | Testable, mockable code |
| **Composition** | Traits over inheritance | Mixins, flexible combinations |
| **Patterns** | Use established GoF patterns | Familiar, proven solutions |
| **Constraints** | No breaking changes | Production stability |
| **Performance** | Lazy evaluation, caching | Fast rendering |
| **Testability** | Isolated concerns | 95%+ coverage achievable |

Apply these principles consistently throughout Phases 1-3 enhancement work.
