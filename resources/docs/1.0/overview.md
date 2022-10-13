# 😼 Welcome to Snowball

---

First of all, what is snowball?

* Snowball is a low-weight, statically typed, object oriented programming language with garbage collector and module system.

What are some of it's advantages?

* TODO

Here is a little demonstration to show you how snowball feels like

```rust
import System

class Vector {

    priv x: Number;
    priv y: Number;

    pub construtor(x: Number, y: Number) {
        self.x, self.y = x, y;        
    }
    
    // JS equivalent: const __sum = (this, vec2) => new Vector(...)
    // overrides operator +
    pub operator +(vec2: Vector) Vector =
        new Vector(self.x + vec2.x, self.y + vec2.y)
    
    pub operator str() String {
        return "Vector(x=${self.x} y=${self.y})"
    } 
}

fn main() i32 {
    let vec1 = new Vector(1,2)
    let vec2 = new Vector(10,22)
    
    System.print((vec1 + vec2) as f32)
    return 0
}
```

### Guides: Jump right in

Follow our handy guides to get started on the basics as quickly as possible:

* [basic concepts](guides/basic-concepts.md)
* [object oriented programming](guides/object-oriented-programming.md)
* [advanced concepts](guides/advanced-concepts.md)


<!-- TODO: style this -->
<!-- <larecipe-feedback></larecipe-feedback> -->