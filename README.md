# Codeigniter Helper Multibytes Compatibilty

It's a simple helper for keep working your code if the server don't have installed multibyte functions library


## The Problem
```
A PHP Error was encountered
Severity: Error
Message:  Call to undefined function mb_XXXXXX()
```

## The Basic Solution

- Copy **multibytes_helper.php** into the **application/helpers** directory 

- Edit **application/config/autoload.php** file and load **multibytes** helper

<img title="Load helper editing autoload.php file" src="https://raw.githubusercontent.com/jodacame/Codeignter-Helper-Multibytes-Compatibility/master/example.png">

## Supported Functions 

- mb_strtolower
- mb_strtoupper
- mb_strlen
- mb_substr
- mb_strpos

## Requirements

- Codeigniter installed

**This is a very basic solution for keep running in production your software**
