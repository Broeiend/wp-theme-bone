## Wordpress bone structure

Requirements: 
+ [Compass](http://compass-style.org/) 
+ [Sass gem](http://rubygems.org/gems/sass) 
+ [Susy gem](http://rubygems.org/search?utf8=%E2%9C%93&query=susy)  

-or-

+ [CodeKit](http://incident57.com/codekit/) *(which contains all of the above)*


------------
### CSS Architecture

0. **Normalize** (included in functions enqueued css) = HTML 5 ready alternative to CSS reset. See [Normalize](http://necolas.github.io/normalize.css/)

1. **css3** (compass include) = Cross-browser mixins for CSS properties introduced in CSS3. See [Compass CSS3](http://compass-style.org/reference/compass/css3/)
2. **susy** (compass include) = Grid structure. See [Susy](http://susy.oddbird.net/guides/#start-basic)
3. **base** (_base.scss) = 
4. **layout** (_layout.scss) = Defining the grid. 
5. **modules** (_modules.scss) = The reusable, modular parts of the design. 

1 t/m 5 are compiled (:compressed) into style.css

*Note: Css architecture based on SMACSS: http://smacss.com/*


