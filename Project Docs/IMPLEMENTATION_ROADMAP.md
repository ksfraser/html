# HTML Library Implementation Roadmap

**Created:** March 27, 2026  
**Version:** 1.0  
**Status:** Planning Phase

---

## Overview

This roadmap prioritizes the implementation of HTML library enhancements divided into phases. Current core functionality (FR-001 to FR-005) is production-ready. Enhancement phases are organized by implementation complexity, business value, and developer ergonomics.

---

## Phase 1: Enhanced Developer Experience (Medium Effort, High Value)
**Estimated Duration:** 2-3 weeks  
**Priority:** HIGH  
**Focus:** Improved fluent API and attribute management

### FR-006: Enhanced CSS Class Management
**Effort:** LOW | **Complexity:** LOW | **Impact:** HIGH

**Scope:**
- Implement `addCSSClasses(array $classes)` for batch operations
- Support conditional classes: `addCSSClass(string $class, bool $condition = true)`
- Auto-deduplication of class names
- Support `removeClass(string $class)` method
- Support `toggleClass(string $class, ?bool $force = null)`

**Implementation Tasks:**
1. Create enhanced CSS management trait or update HtmlElement
2. Implement batch add/remove logic
3. Add condition evaluation
4. Unit tests for all CSS operations
5. Update documentation with usage examples

**Dependencies:** None  
**Affects:** HtmlElement base class, all extending classes

**Acceptance Criteria:**
- `->addCSSClass('btn', true)->addClass('primary', $isPrimary)` works
- Duplicate classes prevented
- `getClassName()` returns deduplicated class attribute value
- 100% test coverage

---

### FR-007: Event Handler Methods
**Effort:** LOW | **Complexity:** LOW | **Impact:** MEDIUM

**Scope:**
- Implement event handler shortcut methods
- Support: onClick(), onChange(), onSubmit(), onFocus(), onBlur(), onKeyPress(), etc.
- Methods return self for chaining
- Support multiple handlers on same event (append)
- Basic validation of handler code

**Implementation Tasks:**
1. Create EventHandler trait with common events
2. Implement dynamic __call() for event delegation
3. Support both string code and callable handlers
4. Unit tests for event rendering
5. Documentation with examples

**Dependencies:** FR-006 (indirectly - uses setAttribute)  
**Affects:** All interactive elements (button, input, select, etc.)

**Acceptance Criteria:**
- `->onClick("alert('clicked')")` renders correctly
- Event handlers chainable with other methods
- Multiple handlers on same event supported
- Proper HTML escaping in event code

---

### FR-008: Data Attributes
**Effort:** LOW | **Complexity:** LOW | **Impact:** HIGH

**Scope:**
- Implement `setData(string $key, mixed $value)` method
- Support `setDataAttributes(array $data)` for batch
- Support `getData(string $key)` for retrieval
- Automatic "data-" prefix handling
- Support nested object serialization to JSON

**Implementation Tasks:**
1. Create DataAttribute trait
2. Implement setter/getter for data attributes
3. Handle JSON serialization for complex values
4. Unit tests for data attribute operations
5. Documentation with JS integration examples

**Dependencies:** None  
**Affects:** All elements needing JS integration

**Acceptance Criteria:**
- `->setData('itemId', 123)->setData('config', ['a' => 'b'])`
- Renders: `data-item-id="123" data-config='{"a":"b"}'`
- `getData('itemId')` returns original value
- Chainable with other fluent methods

---

### FR-009: ARIA Attributes
**Effort:** LOW | **Complexity:** MEDIUM | **Impact:** HIGH

**Scope:**
- Implement ARIA attribute helper methods
- Support: setAriaLabel(), setAriaLabelledBy(), setAriaDescribedBy(), setRole()
- Validate ARIA attribute names against spec
- Support common ARIA patterns (alert, modal, navigation, etc.)
- Warn on invalid combinations (e.g., role without proper attributes)

**Implementation Tasks:**
1. Create AriaAttribute trait with ARIA constants
2. Implement validation against ARIA spec
3. Create convenience methods for common patterns
4. Unit tests including invalid combinations
5. A11y guide documentation

**Dependencies:** FR-006 (attribute management)  
**Affects:** Form elements, interactive components

**Acceptance Criteria:**
- `->setAriaLabel('Close dialog')->setRole('button')`
- `->setAriaDescribedBy('error-message')`
- Invalid ARIA attributes throw exception
- ARIA validation warnings in documentation

---

### FR-010: Element Introspection
**Effort:** MEDIUM | **Complexity:** MEDIUM | **Impact:** MEDIUM

**Scope:**
- Implement `getNested()` or `getChildren()` methods
- Implement `getAttributeValue(string $name)` retrieval
- Implement `getAttribute(string $name)` returns HtmlAttribute object
- Implement `findNested(callable $filter)` for querying
- Support attribute iteration

**Implementation Tasks:**
1. Add getter methods to HtmlElement
2. Implement filtering/search capabilities
3. Add traversal helpers (nextSibling, parent refs if needed)
4. Unit tests for all query operations
5. Documentation with query examples

**Dependencies:** None (standalone enhancement)  
**Affects:** HtmlElement, debugging, dynamic modifications

**Acceptance Criteria:**
- `$element->getNested()` returns array of child elements
- `$element->getAttributeValue('class')` works
- `$element->findNested(fn($e) => $e instanceof HtmlButton)` returns matching elements
- No breaking changes to existing API

---

**Phase 1 Summary:**
- Improves developer experience significantly
- Enables more complex use cases
- Maintains backward compatibility
- Foundation for later phases

---

## Phase 2: Data Integrity & HTML Correctness (Higher Effort, High Value)
**Estimated Duration:** 3-4 weeks  
**Priority:** MEDIUM-HIGH  
**Focus:** Validation and correctness guarantees

### FR-011: HTML Validation and Nesting Rules
**Effort:** HIGH | **Complexity:** HIGH | **Impact:** HIGH

**Scope:**
- Define content models for all elements (per HTML5 spec)
- Validate on addNested() call
- Configurable validation strictness (off, warn, strict)
- Provide helpful error messages with suggestions
- Support metadata annotations for custom elements

**Implementation Tasks:**
1. Create HtmlContentModel class with specs for all elements
2. Implement content validation in HtmlElement::addNested()
3. Create HtmlNestingException for validation errors
4. Add configuration for validation level
5. Create comprehensive test suite
6. Documentation with validation examples

**Dependencies:** None  
**Affects:** All elements, nested composition

**Acceptance Criteria:**
- Prevent `<div>` inside `<p>` (throws/warns)
- Prevent `<tr>` outside `<tbody>` (throws/warns)
- Allow all valid HTML5 nesting combinations
- Validation level configurable globally or per-element
- Helpful error messages with fixes

---

### FR-012: Element Cloning
**Effort:** MEDIUM | **Complexity:** MEDIUM | **Impact:** MEDIUM

**Scope:**
- Implement `clone()` method for deep copying
- Support PHP's `__clone()` magic method
- Handle non-cloneable nested objects gracefully
- Support parameterized clones (partial cloning)
- Template pattern support

**Implementation Tasks:**
1. Implement HtmlElement::__clone() with deep copy
2. Handle attribute cloning
3. Handle nested element cloning recursively
4. Create clone() wrapper if needed
5. Unit tests for various clone scenarios
6. Documentation with template pattern examples

**Dependencies:** None  
**Affects:** All elements

**Acceptance Criteria:**
- `$clone = clone $element` creates fully independent copy
- Modifying clone doesn't affect original
- Nested elements also cloned deeply
- Use case: creating element templates

---

### FR-013: Conditional Rendering
**Effort:** MEDIUM | **Complexity:** MEDIUM | **Impact:** MEDIUM

**Scope:**
- Implement `renderIf(bool $condition)` method
- Implement `renderUnless(bool $condition)` method
- Support ternary patterns: `->renderIf($admin)->addCSSClass('admin-only')`
- Alternative: helper functions
- Support in nested context for lazy evaluation

**Implementation Tasks:**
1. Create ConditionalRenderingTrait
2. Implement renderIf/renderUnless with wrapper elements
3. Support conditional method return (self or null wrapper)
4. Handle null returns in nesting
5. Unit tests for conditional scenarios
6. Documentation with template patterns

**Dependencies:** FR-010 (optional, for introspection)  
**Affects:** All elements, template building

**Acceptance Criteria:**
- `->renderIf($isAdmin)` returns element or empty wrapper
- `->renderUnless($isGuest)` works as negation
- No output for false conditions
- Chainable for conditional chains

---

## Phase 3: Complex Use Cases & Performance (Higher Effort, Medium Value)
**Estimated Duration:** 3-4 weeks  
**Priority:** MEDIUM  
**Focus:** Advanced features and optimization

### FR-014: List/Iterator Rendering
**Effort:** MEDIUM | **Complexity:** MEDIUM | **Impact:** MEDIUM

**Scope:**
- Implement `renderList(array $items, callable $callback)` static/instance method
- Pass item and index to callback
- Callback returns HtmlElementInterface
- Support filtering: `renderList($items, $filter, $callback)`
- Support transformation pipeline
- Handle empty lists gracefully

**Implementation Tasks:**
1. Create ListRenderer utility class or HtmlElement method
2. Implement collection iteration
3. Support filter and map operations
4. Handle edge cases (empty lists, null items)
5. Create unit tests with various item types
6. Documentation with rendering examples

**Dependencies:** None  
**Affects:** Dynamic element generation from data

**Acceptance Criteria:**
- `HtmlElement::renderList($users, fn($user) => new HtmlLi($user->name))`
- Works with arrays, iterators, Traversable
- Filters applied before rendering
- Each item receives proper index

---

### FR-015: Media Query and Responsive Image Support
**Effort:** HIGH | **Complexity:** HIGH | **Impact:** MEDIUM

**Scope:**
- Enhanced HtmlImage class with srcset, sizes
- Picture element with multiple source options
- Source elements with media queries
- Support preload, decoding attributes
- Support aspect-ratio hints
- Lazy loading integration with FR-016

**Implementation Tasks:**
1. Enhance HtmlImage with responsive methods
2. Create HtmlPicture composite element
3. Create HtmlSource element for picture
4. Implement srcset/sizes parsing and validation
5. Create comprehensive test suite
6. Documentation with responsive image examples

**Dependencies:** FR-016 (lazy loading)  
**Affects:** Responsive images, performance

**Acceptance Criteria:**
- `$img->setSrcSet('mobile.jpg 320w, tablet.jpg 768w, desktop.jpg 1024w')`
- `HtmlPicture` with multiple sources and fallback
- Media queries in source elements
- Proper attribute rendering per spec

---

### FR-016: Lazy Loading and Performance Attributes
**Effort:** MEDIUM | **Complexity:** LOW | **Impact:** HIGH

**Scope:**
- Implement loading, fetchpriority, decoding attributes
- Support for images (loading="lazy")
- Support for iframes (loading="lazy")
- Support for scripts (defer, async)
- Helper methods: `->useLazyLoading()`, `->setFetchPriority('high')`
- Performance impact documentation

**Implementation Tasks:**
1. Create PerformanceAttributes trait
2. Implement helper methods for common patterns
3. Validate attribute values against spec
4. Add to relevant element classes
5. Unit tests for attribute rendering
6. Documentation with performance impact notes

**Dependencies:** None  
**Affects:** Images, iframes, scripts

**Acceptance Criteria:**
- `$img->useLazyLoading()->setFetchPriority('low')`
- Renders: `loading="lazy" fetchpriority="low"`
- Valid values enforced
- Performance recommendations documented

---

**Phase 3 Summary:**
- Enables advanced use cases
- Performance optimizations
- Better scalability for complex pages
- Some features may be higher priority in practice

---

## Implementation Sequence Recommendation

### If Developer Time is Limited (Start Here)
1. **FR-006**: CSS class management (quick win, high value)
2. **FR-008**: Data attributes (essential for JS integration)
3. **FR-010**: Element introspection (debugging support)
4. **FR-016**: Performance attributes (modern best practice)

### If Aiming for Complete Enhancement Suite
1. Phase 1 (FR-006 to FR-010) - 2-3 weeks
2. Phase 2 (FR-011 to FR-013) - 3-4 weeks
3. Phase 3 (FR-014 to FR-016) - 3-4 weeks

**Total Estimated:** 8-11 weeks for all enhancements

---

## Success Metrics

For each phase/feature:
- ✅ All acceptance criteria met
- ✅ 95%+ unit test coverage
- ✅ Zero breaking changes to existing API
- ✅ Documentation complete with examples
- ✅ All methods chainable where applicable
- ✅ Performance: no rendering slowdown > 5%

---

## Risk Assessment

| Feature | Risk | Mitigation |
|---------|------|-----------|
| FR-011 (Validation) | Overly strict breaking existing code | Make configurable, warn before error |
| FR-012 (Cloning) | Complex object graphs not cloneable | Handle gracefully, document limitations |
| FR-013 (Conditionals) | Could mask logic errors | Prefer explicit conditionals in caller |
| FR-014 (Lists) | Performance with large datasets | Optimize closure calls, provide benchmarks |
| FR-015 (Responsive) | Complexity in picture/source patterns | Clear API, good documentation |
| FR-016 (Performance) | Browser compatibility | Document browser support matrix |

---

## Maintenance & Support Plan

- Quarterly review of enhancement effectiveness
- Community feedback integration
- Performance monitoring in production
- Documentation updates as standards evolve
- Backward compatibility maintained across versions

---

## Notes

- All enhancements maintain backward compatibility
- Fluent interface preserved throughout
- No performance degradation allowed
- Test coverage remains at 95%+
- Documentation is comprehensive and includes examples
