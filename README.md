# Learning tdd using php

# Environment

This project use docker for instantiate a php cli container. 

## Installation

Run this command to initialize the php container:

```bash
make initialize
```

## Running a kata

Run this command to test a kata:

```bash
make test KATA=<kata folder name>
```

For example, you can test fizz-buzz kata running this command:

```bash
make test KATA=fizz-buzz
```

## Code coverage of a kata

You can run this command to check the code coverage in a kata:

```bash
make coverage KATA=<kata folder name>
```

or if you prefers a colorized output

```bash
make test-coverage-color KATA=<kata folder name>
```

For example, for fizz-buzz kata these are the commands:

```bash
make coverage KATA=fizz-buzz
```

or

```bash
make coverage-color KATA=fizz-buzz
```

# Katas

For more information, read the README file in each kata folder.

## Fizz Buzz

Good kata to start learning TDD

# TDD

TDD is bassed in RED - GREEN - REFACTOR cycle. 

![TDD cycle](https://blog.codium.team/img/tdd-cycle.png)

When doing TDD I will respect the following rules:

- Write a test that fails before adding business logic.
- Do not write more production code than necessary to pass a unit test.
- Do not refactor if I have a test in red.

## Development notes

I will use these emojis in commit messages to show the steps of the cycle

- 🔴: tests fails
- 🟢: test passes
- 🔵: refactor
