# Contributing to Wp From scratch
reference : [Angular Contributing](https://github.com/angular/angular/blob/22b96b9/CONTRIBUTING.md)

 - [Workflow](#wk)
 - [Branch](#branch)
 - [Commit Message Format](#cmf)
 - [Coding Standard](#cs)
 - [Merge / Rebase](#mr)


# <a name="wk"></a> Workflow
We use Git Flow. [ref 1](https://www.supinfo.com/articles/single/4192-utiliser-gitflow), [ref 2](https://jp-lambert.me/git-gitflow-et-lint%C3%A9gration-continue-pour-les-nuls-a0b2f0b7c788)


# <a name="branch"></a> Branch
For each User Story you need to create a branch.

```
<Type>/<Sprint><Task Numbert> - <Definition of the Task in english>
```

exemple:

```
chore/0416-upgrade-plugins
fix/0417-megamenu-bug-display
```

# <a name="cmf"></a> Commit Message Format

We have very precise rules over how our git commit messages can be formatted.

Each commit message consists of a header, a body and a footer. The header has a special format that includes a type, a scope and a subject :

```
<type>(<scope>): <subject>
<BLANK LINE>
<body>
<BLANK LINE>
<footer>
```

exemple:

```
fix(megamenu): call the function get_megamenu
style(megamenu): change indentation
refactor(megamenu): change function name get_megamenu
```

### Type

* **fix:** A bug fix
* **feat:** A new feature
* **chore:** An upgrade like plugins, wordpress or also php for exemple
* **style:** Changes that do not affect the meaning of the code (white-space, formatting, missing semi-colons, etc)
* **perf:** A code change that improves performance
* **refact:** A code change that neither fixes a bug nor adds a feature
* **docs:** Documentation only changes

### Scope

The scope should be the name of the feature affected.

The following is the exemple list of scopes:
 * **form**
 * **megamenu**
 * **landing**
 * **header**
 * **slider**
 * **readme**

# <a name="cs"></a> Coding Standard

All Variables, Comments, Function, Commits, Branch MUST be written in English !
When you set a variable write it with the full word:

```
<!-- Not recommended -->
<div class="b btnS fL">

<!-- Recommended -->
<div class="bold buttonSmall fontLarge">

// Not recommended
function gt_ct(){}

// Recommended
function get_city(){}
```

## PHP [ref](https://www.php-fig.org/psr/psr-2/)

 * Code MUST use 4 spaces for indenting, not tabs.
 * Opening braces for methods MUST go on the next line, and closing braces MUST go on the next line after the body.
 * Methods and Functions names MUST be declared in camelCase
 * At the header file you must put ```if ( !defined('ABSPATH')) exit;```

## CSS / HTML [ref](https://google.github.io/styleguide/htmlcssguide.html)

 * Always use HTTPS (https:) for images and other media files, style sheets, and scripts, unless the respective files are not available over HTTPS.
  ```
  <!-- Not recommended: omits the protocol -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- Not recommended: uses HTTP -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- Recommended -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  ```
 * Code MUST use 2 spaces for indenting, not tabs. If you mix html and PHP use 4 spaces.
 * Use only lowercase for attributes
 ```
  <!-- Not recommended -->
  <A HREF="/">Home</A>

  <!-- Recommended -->
  <img src="google.png" alt="Google">

  /* Not recommended */
  color: #E5E5E5;

  /* Recommended */
  color: #e5e5e5;
 ```
 * Remove trailing white spaces. (Trailing white spaces are unnecessary and can complicate diffs.)
 * Use a new line for every block, list, or table element, and indent every such child element.
 * When quoting attributes values, use double quotation marks.

# <a name="mr"></a> Merge / Rebase

After you finish to commit all you modifications into your branch, follow this steps:

  1. Make sure you are up to date in local **dev**
  <br> ```git checkout dev```
  <br> ```git pull --rebase origin dev```

  2. If you get modifications rebase it into your branch and push it (optional if you are up to date)
  <br> ```git checkout <your branch>```
  <br> ```git rebase dev```
  <br> ```git push```

  3. Merge your branch into dev
  <br> ```git checkout dev```
  <br> ```git merge <your branch>```
  <br> ```git push origin dev```

  1. Make sure you are up to date in local **recette**
  <br> ```git checkout recette```
  <br> ```git pull --rebase origin recette```

  4. Merge dev into recette
  <br> ```git checkout recette```
  <br> ```git merge dev```
  <br> ```git push origin recette```