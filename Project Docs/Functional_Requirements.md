# Functional Requirements

## FR-001: Create and Render HTML Elements

- Description: The library provides classes for rendering HTML elements with support for nested content and attributes
- Inputs: Tag name, content (nested elements), attributes
- Outputs: HTML string representation of the element
- Rules/constraints:
  - Each HTML tag must be represented by a corresponding class implementing HtmlElementInterface
  - Classes must support the fluent interface pattern for method chaining
  - Elements can contain other elements (nested/child elements) recursively
  - __toString() must return the complete HTML representation
- Error handling: Invalid HTML attribute names must throw InvalidArgumentException
- Acceptance tests (high level):
  - Create element with tag name
  - Add nested elements and render recursively
  - Convert to HTML string via __toString()

## FR-002: Manage HTML Attributes

- Description: Attributes can be added to elements and rendered as part of the tag
- Inputs: Attribute name, attribute value (string or HtmlElementInterface)
- Outputs: Rendered attribute in format: name="value"
- Rules/constraints:
  - Attribute names must start with a letter and contain only letters, digits, hyphens, or underscores
  - Attributes are grouped in HtmlAttributeList for management
  - Multiple attributes of the same name are replaced (not duplicated)
  - Attribute values can be HtmlElementInterface objects that recursively render
- Error handling: Invalid attribute names throw InvalidArgumentException
- Acceptance tests (high level):
  - Add valid attribute to element
  - Reject invalid attribute names
  - Replace duplicate attribute names
  - Render multiple attributes in HTML

## FR-003: Support Fluent Interface for Building Elements

- Description: Elements support method chaining for fluent API
- Inputs: Method calls chaining operations
- Outputs: Self reference for continued chaining
- Rules/constraints:
  - addNested() returns self
  - addAttribute() returns self
  - setAttribute() returns self
  - addAttributeObject() returns self
  - addCSSClass() returns self
- Error handling: Methods do not throw during chaining
- Acceptance tests (high level):
  - Chain multiple addNested(), setAttribute() calls
  - Build complex element structures in one fluent chain

## FR-004: Manage Child Elements (Nested Content)

- Description: Elements support hierarchical composition with recursive rendering
- Inputs: HtmlElementInterface objects to nest
- Outputs: Complete HTML with all nested elements rendered
- Rules/constraints:
  - nested array stores child elements
  - addNested() accepts HtmlElementInterface
  - getHtml() recursively renders all nested elements
  - Nested elements render inside parent tags
- Error handling: Invalid nested types are handled gracefully
- Acceptance tests (high level):
  - Add multiple child elements
  - Render hierarchy with correct nesting
  - Recursive rendering of deeply nested structures

## FR-005: Support Empty HTML Elements

- Description: Some HTML elements have no closing tags (empty/void elements)
- Inputs: Element type indicator
- Outputs: Self-closing HTML format if needed
- Rules/constraints:
  - $empty flag indicates if element is empty/void
  - Empty elements render without closing tag
  - Support for elements like img, br, hr, input, etc.
- Error handling: Proper handling of empty vs non-empty elements
- Acceptance tests (high level):
  - Render void elements without closing tags
  - Render normal elements with closing tags

## FR-006: Support CSS Class Management (Enhanced)

- Description: Provide convenient methods for managing CSS classes beyond basic setAttribute
- Inputs: Class name(s), condition flag for conditional classes
- Outputs: Element with updated class attribute
- Rules/constraints:
  - addCSSClass() adds single or multiple classes
  - Classes are deduplicated in the class attribute
  - Option for batch operations: addCSSClasses(['class1', 'class2'])
  - Conditional classes: ->addCSSClass('active', $isActive)
- Error handling: Empty or invalid class names are ignored
- Acceptance tests (high level):
  - Add single and multiple classes
  - Prevent duplicate classes
  - Conditionally add classes based on boolean flag

## FR-007: Support Event Handler Attributes (Future Enhancement)

- Description: Convenience methods for common JavaScript event handlers
- Inputs: JavaScript code string
- Outputs: Properly formatted event attribute
- Rules/constraints:
  - Methods like onClick(), onChange(), onSubmit(), etc.
  - Maps to onclick, onchange, onsubmit attributes
  - Ergonomic alternative to setAttribute('onclick', 'code')
  - Could return self for method chaining
- Error handling: Invalid event handler names raise exceptions
- Acceptance tests (high level):
  - Create button with onClick handler
  - Chain multiple event handlers
  - Render event attributes correctly

## FR-008: Support Data Attributes (Future Enhancement)

- Description: Convenient API for adding HTML data-* attributes
- Inputs: Attribute key and value
- Outputs: data-key="value" attribute
- Rules/constraints:
  - setData(key, value) or data(key, value) method
  - Supports multiple data attributes
  - Common pattern for JavaScript integration
  - Batch operations: setDataAttributes(['key1' => 'val1', 'key2' => 'val2'])
- Error handling: Empty or invalid data keys are rejected
- Acceptance tests (high level):
  - Add single and multiple data attributes
  - Render with data- prefix
  - Chain with other fluent methods

## FR-009: Support ARIA Attributes (Future Enhancement)

- Description: Accessibility attributes for semantic markup
- Inputs: ARIA attribute name and value
- Outputs: Properly formatted ARIA attribute
- Rules/constraints:
  - Methods like setAriaLabel(), setRole(), setAriaDescribedBy()
  - Validates ARIA attribute names
  - Supports aria-* attributes
  - Important for accessibility compliance
- Error handling: Invalid ARIA attribute names throw exceptions
- Acceptance tests (high level):
  - Add ARIA attributes to form elements
  - Combine with standard attributes
  - Validate ARIA compliance patterns

## FR-010: Element Introspection (Future Enhancement)

- Description: Query and inspect element state after construction
- Inputs: Query operations
- Outputs: Element data or nested elements
- Rules/constraints:
  - getNested() or getChildren() to retrieve child elements
  - getAttributes() to retrieve all attributes
  - getAttributeValue(name) to get specific attribute
  - findNested(callable) to filter nested elements
- Error handling: Non-existent queries return empty array or null
- Acceptance tests (high level):
  - Retrieve nested elements from parent
  - Query attributes by name
  - Filter nested elements by criteria

## FR-011: HTML Validation and Nesting Rules (Future Enhancement)

- Description: Validate HTML element nesting to prevent invalid structures
- Inputs: Child element to nest
- Outputs: Validation result or exception
- Rules/constraints:
  - Define element-specific allowed children (e.g., <p> cannot contain <div>)
  - Warn or prevent invalid nesting patterns
  - Support content model validation per HTML5 spec
  - ConfigurabIe validation strictness (warn vs error)
- Error handling: Invalid nesting throws HtmlNestingException or logs warning
- Acceptance tests (high level):
  - Prevent <div> inside <p>
  - Prevent <tr> outside <table>
  - Allow valid nesting combinations
  - Configurable validation modes

## FR-012: Element Cloning (Future Enhancement)

- Description: Create deep copies of elements with all attributes and nested content
- Inputs: Source element
- Outputs: Clone with identical structure and attributes
- Rules/constraints:
  - clone() or cloneElement() method
  - Deep copy of nested elements
  - Preserve all attributes
  - Support for element templates/reuse
- Error handling: Graceful handling of non-cloneable nested objects
- Acceptance tests (high level):
  - Clone simple element
  - Clone element with nested children
  - Modify clone without affecting original
  - Template reuse via cloning

## FR-013: Conditional Rendering (Future Enhancement)

- Description: Helper methods for rendering content conditionally
- Inputs: Boolean condition and content
- Outputs: Element with content, or empty element
- Rules/constraints:
  - renderIf($condition) method
  - renderUnless($condition) method
  - Alternative: nested conditionals in template
  - Could support ternary-like syntax
- Error handling: Invalid conditions handled gracefully
- Acceptance tests (high level):
  - Show element when condition is true
  - Hide element when condition is false
  - Chain conditional methods

## FR-014: List/Iterator Rendering (Future Enhancement)

- Description: Helper for rendering collections of items
- Inputs: Array of items, callback to create elements
- Outputs: Multiple nested elements, one per item
- Rules/constraints:
  - renderList($items, $callback) or similar
  - Callback receives item and index
  - Returns HtmlElementInterface from callback
  - Supports filtering and transformation
- Error handling: Empty lists render no content
- Acceptance tests (high level):
  - Render list items from array
  - Access item and index in callback
  - Filter items during rendering
  - Transform items in rendering

## FR-015: Media Query and Responsive Image Support (Future Enhancement)

- Description: Support responsive image and media features
- Inputs: Image sources, media queries, sizes
- Outputs: Picture, img with srcset, media attributes
- Rules/constraints:
  - Image class supports srcset attribute
  - Picture class for multiple sources
  - Source elements with media queries
  - Sizes attribute support
  - preload, decoding attributes
- Error handling: Invalid image sources handled gracefully
- Acceptance tests (high level):
  - Create responsive image with srcset
  - Create picture element with fallback
  - Specify media queries for sources
  - Render sizes attribute

## FR-016: Lazy Loading and Performance Attributes (Future Enhancement)

- Description: Support modern loading and performance attributes
- Inputs: Attribute configuration
- Outputs: Element with appropriate attributes
- Rules/constraints:
  - loading="lazy" support for images/iframes
  - fetchpriority attribute
  - decoding attribute (async/sync/auto)
  - defer/async for scripts
  - Could support helper methods
- Error handling: Invalid attribute values validated
- Acceptance tests (high level):
  - Add lazy loading to images
  - Set fetch priority on resources
  - Control script execution timing
  - Render performance attributes correctly

## Requirements Update (2026-02-20)

- Introduced HtmlScriptLanguage as an abstract base for script content wrappers.
- Created HtmlJSString, HtmlJsonString, HtmlTypeScriptString, HtmlVBScriptString classes for semantic clarity and type safety.
- Updated HtmlScript to require HtmlScriptLanguage for content, supporting multiple scripting languages.
- Moved script language wrappers to dedicated directories (Javascript, Json, Typescript, VBScript).
- Added unit tests for HtmlJSString.
- Updated documentation and usage examples to reflect new structure and requirements.

## Requirements Update (2026-03-26)

- Analyzed existing library against other HTML generation libraries (Pug, Blade, Twig, etc.)
- Identified common features in competing libraries
- Added 11 future enhancement requirements (FR-006 through FR-016)
- Core functionality (FR-001 through FR-005) complete and production-ready
- Enhancements are optional/nice-to-have organized by priority and complexity

### Complete Requirement Summary:
- **Core Requirements (FR-001 to FR-005)**: ✅ Fully Implemented
  - Element creation, attributes, fluent interface, nesting, empty elements
  
- **Phase 1 Enhancements (FR-006 to FR-010)**: 🎯 Recommended Next Phase
  - Enhanced CSS class management, event handlers, data attributes, ARIA support, introspection
  
- **Phase 2 Enhancements (FR-011 to FR-016)**: 📋 Future Roadmap
  - Validation, cloning, conditionals, iteration, responsive images, performance attributes

