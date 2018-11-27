## P3 Peer Review

+ Reviewer's name: Sishir Yeety
+ Reviwee's name: Steve Cordova
+ URL to Reviewe's P3 Github Repo URL: *<https://github.com/cordovas/p3>*

*Answer the following questions in regards to the student's project you are reviewing. REMOVE THE INSTRUCTIONS FOR EACH PROMPT when complete. We should only see YOUR ANSWERS.*

## 1. Interface

+ Initial impressions were very positive. Site layout is clean and understandable. I even loaded it up on my mobile device, and the interface worked well there too. I particularly liked the gif image under the heading. Make me chuckle a little.
+ There were no parts of the interface that I found confusing or did not work as I expected. For my other review, the website didn't really have a solid description of what it did, but this one
does. Clear and to the point. Nice job!
+ One part of the interface that I thought worked really well was the interface itself. There is no excess or clutter anywhere. I also like how you clearly said which fields were required.
+ One suggestion I have would be to expand upon the description of the website. For example, more
information about the random number qty field and what you mean about when it outputs `odds of winning`. This might be a little confusing for some people who might not know what is going on.
+ Some other suggestions: Different title for the website. `Lottery App!` doesn't really
explain its function to me or other people. Maybe make the output text in the banners a little larger. On my phone, it looked a little small. Even bolding the odds and lucky numbers could
go a long way to make it easier to read. Other than that, I have nothing else to suggest for the
interface. You nailed it!

## 2. Functional testing

+ First thing I did was put all the pages through the w3validator. No errors anywhere!
+ I accessed it using Safari on my iOS device. All pages loaded and worked as expected.
+ I tried accessing the website on my computer using two different browsers; Safari and Chrome. No differences to the website between the two.
+ Tried to access the "hidden" project files on the DigitalOcean server (outside of the public folder) and it did not work. Production Server's permissions were set up properly.
+ Tried to access a URL that didn't exist, such as `url/abc` or `url/101010` and it doesn't do anything. It just shows the 404 error screen. No custom routing or pages were done. Would be nice to see you add it to this website.
+ Tried to submit page with no numbers entered and it properly displayed the red text telling me that the total numbers field is required.
+ Tried to type in negative, symbols, and letters into the minutes/seconds fields. Properly threw error messages for user to correct their input. It also kept the invalid inputs after going through validation, however it doesn't keep the selection from the dropdown and the checkbox at the button. Should be fixed.
+ Found an issue when I tried non-integer numbers in the total numbers field and it accepted the input. For example, I put in `12.3` and it calculated it, even though technically it should not be taking partial numbers, only positive integers. Should be fixed.
+ Tried to submit valid inputs and it showed all the inputted field values, even after submitting.

## 3. Code: Routes

+ Went through the routes file. There are two routes and they make perfect sense to me.
+ Tried to directly access the `/search-process` route and it doesn't do anything. Makes sense because it is routing to the controller, which does the calculations, and passes it back to the views.
+ There are no pieces of code in this file that should be happening in a controller!
+ I like how all the calculations were streamlined into one controller and cleanly organized. Maybe some comments about what the code is doing would be helpful, but that's really it.
+ Other than that, the project creator used the ideal Route/controller organization.

## 4. Code: Views

+ Template inheritance is properly used. Master blade and header blade file are in the layout folder.
+ There are some extraneous files on the views folder that should be deleted. Makes it hard to follow. For example, `test.blade.php` and `welcome.blade.php` are unused and are in the root `resources/views` folder. Also, inside the `layouts` folder, there is a `master.blade.php` and `master2.blade.php`. Why are there two? Dump the redundant files and make everything simpler to understand. I think your entire website can be done in 1-2 views. No reason to have all these files.
+ There are no separation of concerns on any view files. Everything that needed to be in blade is in blade.
+ Everything in PHP that can be done in blade was done in blade properly.
+ They did not use any syntax/techniques that were unfamiliar with me.
+ Other than the extra view files, everything else was well done!

## 5. Code: General

+ All code looks correctly formatted, properly commented, and cleanly done.
+ All proper techniques from class were used. No inconsistencies to note from the course notes, other than some lines going above the character limit, but that was noted in the readme and didn't seem to be avoidable.
+ Comments in the controller file would've been useful for readers to understand your code.
+ The part of their code that I was found the most interesting and took me a little time to figure out was the set up (and functions) of the controller file. For example,
I didn't understand some parts of the code, so I had to go and look it up. They were able to cram multiple different functions into one large controller file. I like how streamlined it was.
+ After looking through this project, I realized that I could improve my own code a little, especially when it comes to streamlining my controller files. The author of this project did a great job putting everything into one file. Great job!

## 6. Misc

+ It was a pleasure to read through your code and learn a few things from someone who seems to be more advanced than me, inside the Controller file, for example.
+ I think you did a great job with the project and followed all the requirements properly. The only suggestions I have for improvements is comments across your code and fix the small issues, such as the validation issues (especially the non-integer number values issue in the first field) and redundant/extraneous view files. Other than that, great job! Good luck for the rest of the semester.
