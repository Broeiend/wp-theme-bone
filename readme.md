## Wordpress bone structure

Requirements: 
+ [Compass](http://compass-style.org/) 
+ [Sass gem](http://rubygems.org/gems/sass) 
+ [Susy gem](http://rubygems.org/search?utf8=%E2%9C%93&query=susy)  

-or-

+ [CodeKit](http://incident57.com/codekit/) *(which contains all of the above)*


------------
### OOCSS/SASS Architecture

**Normalize** (included in functions.php enqueued css) = HTML 5 ready alternative to CSS reset. See [Normalize](http://necolas.github.io/normalize.css/)

1. **css3** (compass include) = Cross-browser mixins for CSS properties introduced in CSS3. See [Compass CSS3](http://compass-style.org/reference/compass/css3/)
2. **susy** (compass include) = Grid structure. See [Susy](http://susy.oddbird.net/guides/#start-basic)
3. **base** (_base.scss) = 
4. **layout** (_layout.scss) = Defining the grid. 
5. **modules** (_modules.scss) = The reusable, modular parts of the design. 

1 t/m 5 are compiled (output_style:compressed) into style.css

*Note: Css architecture based on SMACSS: http://smacss.com/*


------------

> The purpose of OOCSS is to encourage code reuse and, ultimately, faster and more efficient stylesheets taht are easier to add and maintain.

------------


## Notes on Front-end architecture

### Don'ts:

1.1 Naming classes based on aesthetics: `.skyblue`, `.primary-green`, '.orange.bold', 'buttonBig' .  
*As the design changes, these variable names will increase complexity for making rapid changes.* 

But use: '.warning', 'primary', 'submenu', etc.



1.2 ... 

### Do's:

2.1 Content-independent class names.

2.2 Class names should communicate useful information to developers.

2.3 "Multi-class" patterns in combination with using @extends:

> If we have this html:

> ```
<button class="btn">Default</button>
<button class="btn-primary">Login</button>
<button class="btn-danger">Delete</button>
```

> Sass:

> ```
%btn {
    padding:10px 15px;
    font-size:12px;
}
.btn {
    @extend %btn;
}
.btn-primary {
    @extend %btn;
    background-color:green;
}
.btn-danger {
    @extend %btn;
    background-color:red;
}

> ```
*Note the `%`. Which is called the* [placeholder selector](http://sass-lang.com/documentation/file.SASS_REFERENCE.html#placeholders).

> Outputs this CSS:

> ```
.btn, .btn-primary, .btn-danger {
  padding: 10px 15px;
  font-size: 12px;
}
.btn-primary {
  background-color: green;
}
.btn-danger {
  background-color: red;
}
```
> Experiment with this [example](http://sassmeister.com/gist/7083618)

2.2 Class names should communicate useful information to developers.







