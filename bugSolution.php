function foo(x) {
  if (x === null || x === undefined) {
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

console.log(baz()); // Output: 0