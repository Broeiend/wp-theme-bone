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
3. **base** (_base.scss) = These are the defaults. Almost exlusively single element selectors.
4. **layout** (_layout.scss) = Divide the page into sections. Layouts hold one or more modules together. Defining the grid. 
5. **modules** (_modules.scss) = The reusable, modular parts of the design. They are the callouts, sidebar sections, product lists etc.

1 t/m 5 are compiled (output_style:compressed) into style.css

*Note: Css architecture based on SMACSS: http://smacss.com/*

------

## Notes on Front-end architecture

Terms:
- **SMACSS** - **S**calable and **M**odular **A**rcitecture for **CSS** is not a framework, but more a style guide. 
- **OOCSS** - **O**bject **O**riented **CSS**. The purpose of OOCSS is to encourage code reuse and, ultimately, faster and more efficient stylesheets that are easier to add and maintain.
- **Semantic classes** - 
- **Presentational classes** -
- **Aestetic classes** - 

---

## Don'ts:

1. Don't use ID's. Rather use classes than ID's for styling purposes. (The whole point for CSS is to create a Cascading Style Sheet)
2. Don't name classes based on aesthetics: `.skyblue`, `.primary-green`, '.orange.bold', 'buttonBig'. 
*As the design changes, these variable names will increase complexity for making rapid changes. If your class is called "blue" and you want to change it to red, you also have to edit the html.* 
Instead use: '.warning', 'primary', 'submenu', etc.
3. Don't write 'undo' rules (apart from the reset.css). For example uf you wanted almost all of you headings to have a border-bottom:

```
// Wrong
h2 {
	font-size 1.5em;
	margin-bottom: 1em;
	// add the border bottom
	padding-bottom: 1em;
	border-bottom: 1px solid red;
}
h2 .no-border { 
	padding-bottom: 0; border-bottom:none; 
}
```
In this case a new rule is added to undo previous rules: `.no-border { padding-bottom: 0; border-bottom:none; }`, but this is NOT ideal. It is much better to write sub-modules that add styles. 

```
// Right
/* default style */
h2 {
	font-size:1.5em;
	margin-bottom: 1em;
}
/* Only when border needed */
.headline {
	padding-bottom: 1em;
	border-bottom: 1px solid red;
}
```


## Do's:

1. Content-independent class names.

2. Abstract class names. 
*To make a text stand out of smaller text you might choose `<div class="largeText"></div>`. This is unsemantic. It is specifying. `<div class="stand_out"></div>` might be better here. Maybe in the future you may wish to choose a different style to make that text stand out that has nothing to do with the size of the text.*

3. Uncouple HTML and CSS 
*If a box uses a h2 or h3 as a heading `<div class="box"><h2>Box heading</h2></div>`, which you could style with `.box h2`. But what happens if the h2 changes to a h3? It would be better to add a class `<h2 class="box-heading">Box heading</h2>`. Now the HTML and CSS are more flexible.*

4. Class names should communicate useful information to developers.

5. Define formatting. 

**Multiline format** is preferred when using SASS. 
**Naming class convention** can include `dash-case`, `camelCase`, `underscore_case`. 

Most people (css tricks formatting poll) prefer `dash-case` for css naming convetion so you don't have to use the Shift key when writing the code. Also this naming convention can also be used in (for future) usage of the [BEM syntax](http://csswizardry.com/2013/01/mindbemding-getting-your-head-round-bem-syntax/).

Usage across languages:
- `dash-case` in HTML/CSS
- `camelCase` in Javascript
- `underscore_case` in PHP 

**Decleration formatting** can be used in a few methods, grouped by type (45%), randomly(39%), by alphabet(14%) or by line(2%). 


**Example:**

Stylesheet format: Use multiline format with indenting. (⋅⋅)
Css naming: dash-case (-)
Decleration formatting: by type (/* text */)


```
.selector-type {
⋅⋅/* Positioning */
⋅⋅position:absolute;
⋅⋅left:100px;
⋅⋅bottom:0px;

⋅⋅/* Display & Box Model */
⋅⋅display: inline-block;
⋅⋅overflow: hidden;
⋅⋅box-sizing: border-box;
⋅⋅width:100px;
⋅⋅height:100px;
⋅⋅padding:10px;
⋅⋅margin:10px;

⋅⋅/* Color */
⋅⋅background: #000;
⋅⋅color:#fff;

⋅⋅/* Text */
⋅⋅etc...
}


```

6. "Multi-class" patterns in combination with using @extends:

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


---

Sources:

Slides from Brisbane Web Designer Meetup 13 March 2013. by [Russ Weakley](http://www.slideshare.net/maxdesign/css-oocss-and-smacss)



