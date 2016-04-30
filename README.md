# Personal Site
## CS152 Final Project

You can check out how it looks without having to fork and build it yourself [right here!](http://saylorsd.github.io/personal-site2/)

[Part 1](https://github.com/saylorsd/personal-site)  
[Project Plan for Part 2](https://gist.github.com/saylorsd/94458549a81be76645e180b9f53b8aa9)

I decided to make an entirely new repo since I needed to significantly change the file structure when moving to using plain CSS to SASS.  
I also went from using multiple php pages to one large HTML page. 

## Changes from Part 1
* While I didn't change much of the copy in the site, I did do some significant restyling and refactoring of code.  I also added a bunch of js functions, especially AJAX stuff.  
* The site is now one long page.  
* I removed all PHP code from my site and replaced that functionality and added more functionality with JavaScript. This way I could host the site for free on github.  
* I made a mini API to replace the database functionality in part 1.  
* The contact form now sends a POST request to the mini api which, in turn, stores the data on a flat file and returns how many entries are in it.  (This won't work on the github page since it can't run php, but does work if you fork and build a copy)
* I also make a slightly more sophisticated AJAX API call within the projects section of my site.  
* The maps in Part One where in an iframe, which I replaced by using CartoDB.js to draw it after the page loads.  This also uses AJAX to read the map info, from which I randomly select a map to display.
* I added some smooth scrolling, added some code that makes the foundation top-bar stick to the top.  

## Future potential changes
* I think in a future iteration, I would make html templates for each section, instead of having one long html file.
* I would hope by the time a part 3 would be due that I'd have more side projects to display, and maybe even some that the site could interact with instead of just displaying.
* While I did add some smooth scrolling for this one, I think in a future one I woudl add those cool paralax scrolling backgrounds that seem to be pretty hot right now.

## What I learned
* The biggest thing I learned between parts was javascript.
* Using jQuery to do AJAX and DOM manipulation is up there.
* I also, got a bit bette at styling (or so I'd like to think).  I think learning to use SASS helped.

## What I liked / Possible improvements
* I liked having the freedom to do what I wanted to as long as it demonstrated learning the topics from class.
* I liked that it really helped with gaining a deeper understanding of the topics from class.  The lectures were great, but there's nothing like hands on experience and make/fixing mistakes to really bring points home.
* While the freedom was great, it might have been nicer to have a stricter rubric, simply so that I could having a checklist of sorts and not worry about not doing something that you may have wanted us to do.

