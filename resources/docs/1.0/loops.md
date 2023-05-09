# Loop Statements

---

## Overview

In Snowball, loop statements allow you to repeat a block of code multiple times based on a condition. In this document, we'll go over how to use loop statements in Snowball.

## Types of Loops

There are three types of loop statements in Snowball: `while`, `for` and `foreach`.

### while Loop

The `while` loop repeats a block of code as long as a certain condition is true.

```rust
while [condition] {
    [code block]
}
```

### do while Loop

This is exactly the same as a `while loop` except it executes the instructions `before` it checks the condition.

```rust
do {
    [code block]
} while [condition];
```

### for Loop

The `for` loop is used to iterate with an initialization, a condition, and an expression repeated after each iteration.

```rust
for [initialization]; [condition]; [expression] {
    [code block]
}
```

here's an example:

```rust
for let i = 0; i < size; i++ {
    ...
}
```

### foreach Loop

The `foreach` loop is used to iterate over an `Iterator`.

```typescript
foreach [identifier] of [expression] {
    [code block]
}
```

Under the hood, it will look something like this:

```rust
for let [identifier] = iterator.start(); [identifier] != iterator.end(); iterator++ {
    ...
}
```