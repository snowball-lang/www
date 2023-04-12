# Variables and mutability

---

## Overview

In Snowball, variables are used to store data values that can be used throughout your program. In this document, we'll go over how to declare variables in Snowball.

## Declaration Syntax

The syntax for declaring variables in Snowball is as follows:

- `let`: The keyword used to declare a new variable.
- `mut` (optional): Specifies that the variable is mutable, meaning its value can be changed.
- `identifier`: The name you choose for your variable, which must be unique within your program.
- `:` (optional): Used to specify the data type of the variable.
    - `<type>`: The data type of the variable. If no type is specified, the variable's type is inferred from the assigned value.
- `=` (optional): Used to assign a value to the variable.
    - `expression`: The value to be assigned to the variable.

## Examples

Here are some examples of how to declare variables in Snowball:

### Declare a variable with a given value

```rust
let x = 43
```

In this example, the variable `x` is declared with an initial value of `42`.

### Declare a variable with a given type


```rust
let y: String = "Hello, world!"
```

In this example, the variable `y` is declared with the data type `String` and an initial value of `"Hello, world!"`.

### Declare a mutable variable

```rust
let mut z = 3.14
```

In this example, the variable `z` is declared as mutable using the `mut` keyword and assigned an initial value of `3.14`.

## Conclusion

Declaring variables in Snowball is a simple process that allows you to create and store data values that can be used throughout your program. By understanding the syntax and components of variable declaration, you'll be able to write clean and efficient Snowball code.

## Notes

You can declare a variable but not assigned it, this is illegal! In snowball declaring a variable without assigment is considered illegal and it will throw ann error. Here's an example:

```rust
let mut b: i32;

meow(b) // error: it has been defined but not definitly assigned
b = 23 // now we can use it
```