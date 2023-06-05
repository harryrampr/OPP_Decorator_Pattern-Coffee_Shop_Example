## Decorator Pattern (OOP) - Coffee Shop Example

We are sharing some simple PHP code, showing the use of
the [Decorator Pattern](https://en.wikipedia.org/wiki/Decorator_pattern). You will see how modern
versions of PHP, supporting Classes and Abstract Classes, make it easy to implement the Decorator Pattern using this
language.

You can find the PHP 8.1 code
at [/app/src](https://github.com/harryrampr/OPP_Decorator_Pattern-Coffee_Shop_Example/tree/master/app/src), there is
testing at [/tests](https://github.com/harryrampr/OPP_Decorator_Pattern-Coffee_Shop_Example/tree/master/app/tests)
directory. HTML output with Tailwind CSS can be found
at [/app/public](https://github.com/harryrampr/OPP_Decorator_Pattern-Coffee_Shop_Example/tree/master/app/public)
directory.

### About the Pattern

The Decorator pattern is a structural design pattern
in [object-oriented programming](https://en.wikipedia.org/wiki/Object-oriented_programming) that allows behavior to be
added to an object dynamically at runtime by wrapping it in a decorator object. It provides a flexible alternative to
subclassing for extending the functionality of an object by adding new behaviors without modifying its structure or
existing code.

### History

The Decorator pattern is one of the 23 design patterns documented in the book ["Design Patterns: Elements of Reusable
Object-Oriented Software"](https://en.wikipedia.org/wiki/Design_Patterns), often referred to as the Gang of Four (GoF)
book. Published in 1994, the book was authored by Erich Gamma, Richard Helm, Ralph Johnson, and John Vlissides, who are
commonly known as the Gang of Four.

The Gang of Four introduced the Decorator pattern as a solution to the problem of adding additional responsibilities or
behaviors to an object dynamically without the need for subclassing. The pattern's concept draws inspiration from the
principles of composition and separation of concerns in object-oriented programming.

While the Decorator pattern was formally introduced by the Gang of Four, the idea of dynamically extending the behavior
of objects predates their book. The concept of decorators or wrappers can be traced back to earlier software engineering
practices, such as the use of mixins in programming languages
like [Lisp](https://en.wikipedia.org/wiki/Lisp_(programming_language)) and the
concept of [aspect-oriented programming](https://en.wikipedia.org/wiki/Aspect-oriented_programming).

### Intent

The intent of the Decorator pattern is to enable the addition of new functionalities or responsibilities to an object
dynamically without affecting other objects of the same class. It allows for the flexible composition of objects by
wrapping them in decorator objects, which can add new behaviors or modify existing ones at runtime. This promotes code
reusability, modularity, and the Open-Closed Principle, as it allows behavior to be added or modified without modifying
the underlying objects.

### Structure

- **Component:** Represents the base interface or abstract class that defines the common operations or functionalities
  of
  objects that decorators can extend.
- **Concrete Component:** Implements the base interface or abstract class, representing the original object to which
  decorators can be added.
- **Decorator:** Represents the abstract class or interface that defines the common interface for decorators. It
  maintains a
  reference to a Component object and delegates calls to it.
- **Concrete Decorators:** Inherit from the Decorator class and provide specific implementations of additional
  behaviors. They
  wrap the Component object and extend its functionality.

### How it Works

1. The Component interface or abstract class defines the common operations or functionalities that objects and
   decorators share.
2. The Concrete Component class implements the Component interface or abstract class, representing the original object
   to which decorators can be added. It provides the base functionality.
3. The Decorator class is an abstract class or interface that maintains a reference to a Component object and conforms
   to the Component interface. It acts as a wrapper for the Component and provides a common interface for all
   decorators.
4. Concrete Decorators inherit from the Decorator class and provide specific implementations of additional behaviors.
   They extend the functionality of the Component by adding or modifying its behavior.
5. Decorators can be stacked or layered to add multiple behaviors to the Component. Each decorator wraps the previous
   decorator or the Concrete Component itself.
6. At runtime, the client can create and use decorators by wrapping the original Component object with one or more
   decorators. The decorators transparently extend the behavior of the Component, providing additional functionalities.

### Benefits

- Allows the dynamic addition of behaviors or responsibilities to objects without modifying their structure.
- Offers a flexible alternative to subclassing, promoting code reusability and modularity.
- Enables the composition of objects with different combinations of behaviors at runtime.
- Follows the [Open-Closed Principle](https://en.wikipedia.org/wiki/Open%E2%80%93closed_principle) by allowing new
  behaviors to be added without modifying existing code.
- Allows decorators to be stacked or layered, providing a high level of flexibility in behavior extension.
- Enhances code maintainability by separating concerns and avoiding a proliferation of subclasses.

### Applications

- **Graphical User Interfaces (GUIs):** GUI frameworks often use the Decorator pattern to add additional features or
  behaviors to UI components. For example, decorators can be used to add borders, shadows, or tooltips to buttons or
  windows.

- **Input/Output Streams:** The Decorator pattern is frequently employed in handling input/output streams to add
  functionality such as compression, encryption, or buffering. Decorators can be stacked to provide multiple layers of
  functionality while maintaining a consistent stream interface.

- **Logging*** and Monitoring: Decorators can be utilized in logging and monitoring systems to add logging or monitoring
  capabilities to various components or methods. This allows for the transparent collection of information about the
  system's behavior without modifying the existing code.

- **Caching:** Decorators can be employed in caching systems to add caching functionality to expensive operations or
  data retrieval methods. By wrapping these operations with decorators, caching behavior can be added without modifying
  the core logic.

- **Security and Authentication:** Decorators can be used in security systems to add authentication or authorization
  checks to certain operations or components. Decorators can intercept method calls and validate the user's credentials
  or permissions before allowing the operation to proceed.

- **Text Processing and Formatting:** Decorators are well-suited for text processing tasks where different formatting
  options need to be applied to text. Decorators can add behaviors like bold, italic, underline, or color formatting to
  text objects or strings.

- **Web Development:** In web development, decorators can be utilized to add functionality to web components, such as
  adding validation, authorization, or caching to specific routes or endpoints in a web application.

- **Game Development:** The Decorator pattern finds application in game development, particularly for adding special
  abilities or behaviors to game characters or objects. Decorators can wrap the base game objects and provide additional
  functionalities like enhanced movement, increased attack power, or temporary invincibility.

- **Image Processing:** Decorators can be used in image processing applications to add filters or transformations to
  images. Decorators can stack different image processing operations, allowing for complex and customizable
  transformations.

Data Transformation: Decorators can be employed in data transformation pipelines to add transformations or preprocessing
steps to data. Each decorator can perform a specific transformation or manipulation, and decorators can be stacked to
create a chain of transformations.

### Other Examples

An example of the Decorator pattern is a text editor application that supports various formatting options. The Component
interface represents the base text functionality, with methods like "writeText" and "getText." The Concrete Component
class implements these methods, providing the basic text editing capabilities. The Decorator abstract class defines the
common interface for decorators and maintains a reference to a Component object. Concrete decorators, such as
BoldDecorator and ItalicDecorator, inherit from the Decorator class and add specific formatting behaviors. For instance,
the BoldDecorator adds bold formatting to the text, while the ItalicDecorator adds italic formatting. Decorators wrap
the Component object and delegate calls to it, adding their specific formatting before or after the call. At runtime,
the client can create a text editor instance and dynamically add decorators to apply different formatting styles to the
text, such as boldAn example of the Decorator pattern is a text editor application that supports various formatting
options. The Component interface represents the base text functionality, with methods like "writeText" and "getText."
The Concrete Component class implements these methods, providing the basic text editing capabilities. The Decorator
abstract class defines the common interface for decorators and maintains a reference to a Component object. Concrete
decorators, such as BoldDecorator and ItalicDecorator, inherit from the Decorator class and add specific formatting
behaviors. For instance, the BoldDecorator adds bold formatting to the text, while the ItalicDecorator adds italic
formatting. Decorators wrap the Component object and delegate calls to it, adding their specific formatting before or
after the call. At runtime, the client can create a text editor instance and dynamically add decorators to apply
different formatting styles to the text, such as bold.