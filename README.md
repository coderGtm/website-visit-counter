# website-visit-counter
This code can count the number of times your webpage is visited and saves the results in a text file.

# Usage
Firstly, create a txt file for storing the number of visits.It is recommended that you create this file out of the scope of public_html to prevent others from reading it. When creating the file, add only this in it:
`~0~`

**Exactly as it is...and save it.**

Now, Place the counter.php code in your index.php page and change the $filename variable to point to the text file. Save it and you're done...

Now whenever someone visits the index.php of your site, the text in the txt file will get updated. Focus on the number between the "`~`"s. Thats the actual visit count.
