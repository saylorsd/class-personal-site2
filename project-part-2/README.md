# Personal Site
## CS152 Final Project

You can check out how it looks without having to fork and build it yourself [right here!](http://saylorsd.github.io/personal-site2/)

[Part 1](https://github.com/saylorsd/personal-site)  
[Project Plan for Part 2](https://gist.github.com/saylorsd/94458549a81be76645e180b9f53b8aa9)

I decided to make an entirely new repo since I needed to significantly change the file structure when moving to using plain CSS to SASS.  
I also went from using multiple php pages to one large HTML page. 

## Notes
* While I didn't change much of the copy in the site, I did do some significant restyling and refactoring of code.  I also added a bunch of js functions, especially AJAX stuff.  
* The site is now one long page.  
* I removed all PHP code from my site and replaced that functionality and added more functionality with JavaScript. This way I could host the site for free on github.  
* I made a mini API to replace the database functionality in part 1. The contact form now sends a POST request to the mini api which, in turn, stores the data on a flat file and returns how many entries are in it.  
* I also make a slightly more sophisticated API call within the projects section of my site.  
* The maps in Part One where in an iframe, which I replaced by using CartoDB.js to draw it after the page loads.  
* I added some smooth scrolling, added some code that makes the foundation top-bar stick to the top.  
