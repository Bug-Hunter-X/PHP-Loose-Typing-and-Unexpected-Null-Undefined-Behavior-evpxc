function foo(x) {
  if (x === null) {
    return 0;
  }
  return x + 1;
}

function bar() {
  return foo(null);
}

console.log(bar()); // Output: 0

function baz() {
  return foo(undefined);
}

console.log(baz()); // Output: NaN