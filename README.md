# E-Commerce-Website
E-Commerce-Website / Sephora / PHP JS HTML CSS

<img src="https://github.com/Meiji-Y/Sephora_Website/blob/main/sample%20images/ss1.JPG" width="700" height="500">







## Abstract
Our task was to build the Sephora online store from the ground up. We discovered that numerous tools have to be used in order to develop this site. In order to manage user behavior on the site and create a user-responsive interface, Javascript was utilized. MySQL was used for the database, and PHP was used for the database site connection. We realized the value of working in groups to build a website from the ground up and the significance of delegating tasks when building software in groups. As a result, we discovered that a website is divided into the front-end and the back-end, and that when working on this development, many groups have to collaborate seamlessly with one another.

<img src="https://github.com/Meiji-Y/Sephora_Website/blob/main/sample%20images/ss3.JPG" width="700" height="500">
## Keywords
CSS, HTML, JS, PHP
##  1.	Introduction
An online store is what our project is. This website, where ladies spend more time, provides cosmetics, personal care items, and other items related to beauty. There are many different products available, including new releases, eco-friendly goods, and products from popular brands. This website can be used as a blog page in addition to being an e-commerce site. A great resource for males is the blog section, which offers advice on grooming, skin care, body care, and other topics. It has not disregarded nearby store searches in addition to site searching, so it can display the Sephora location that is closest to you based on your location.
It has not disregarded nearby store searches in addition to site searches, so it can display the Sephora location that is closest to you based on your location. Additionally, the too-good-to-ignore online makeup area is captivating people' hearts by staying current with technology. By analyzing this drawback of online buying, which delays or prevents consumers from making a decision quickly, it provides a preview of how a product on the site will look on their faces with online makeup. Users feel more secure and can undoubtedly purchase the goods they truly desire in this way.
<img src="https://github.com/Meiji-Y/Sephora_Website/blob/main/sample%20images/ss2.JPG" width="700" height="500">
## Literature Review
We had several questions at the outset of the project, including how the process would work, how the task distribution in the group should be done, and where to start first, because we did not have a group of friends who had prior experience in web development. Each group member conducted extensive research first. The final step was to divide up the tasks, taking into account the overall skills and preferences of our group members. Although there were many resources on the internet, our schoolwork had some restrictions that made it quite challenging. The fact that no one had any prior web programming knowledge was also a major issue, but we were able to solve it with consistent effort, tenacity, and dedication.The fact that there was too much complexity in the site design was the biggest challenge we ran into. It was incredibly complicated, with different colors, text sizes, and features for each part. We overcame it with the help of the Internet resources and the lesson's contents.
##  2.	Methodology
First of all, we determined the functional requirements as we learned in the lessons to design a website as a group. While determining these requirements, we took into account the features that our teacher wanted from us. The main purpose in determining the requirements was to make the sharing part much more comfortable and to make sure that we met all the features our teacher wanted from us. We did the sharing as follows: İpek and Zeynep were mostly on the front-end side of the website, while Muhlis and Selin were on the back-end. İpek took care of the homepage, header and footer sections of the website, while Zeynep took care of the shopping cart and login sections. Muhlis took care of each category page of the site as well as adding the database and removing the products from the database. Selin took care of the product detail pages opened when clicking on the products and pulling them from the database.
In the homepage of the website, we wandered around to find out which button leads where, which category contains what, which photos are displayed where, is the page responsive, how is the header and footer view, and does the drop-down menu work in accordance with its purpose? Firstly, we researched how the header image would look like with the original website, and while adding the information with the html code, we contributed to the design of how it would look with the CSS code. Then, we created an unordered list for the drop-down menu as seen in the html code and filled the categories by paying attention to the text thickness. we added a js code to be user responsive. Then we chose the photos of the slider, which is a must for the homepages, and created the slider with HTML/CSS/JS code. Then we added a few product photos and footers to complete the homepage. 

We needed to host our pages on the internet and create a database connection, and for this we downloaded the WampServer software. WampServer allows us to use our computer as localhost. WampServer allows us to use mySQL and PHP. We designed the category pages, but that wasn't enough. We created a new table in MySQL, researched how to add photos to this table, and then added the following columns to the table: id, name, category, price, filename and stock. After designing each of the category pages and creating our table, it remains to connect them using PHP language. We pulled the data from the database using PHP and showed the products on their category pages. [2]
In adding the product to the cart, we created a new table called cart. When we press the add to cart button, if this product is not in the table, we add the features of our product to this new table we created ("INSERT INTO .... VALUES .....), if the product is in this table, that is, if it has been added to the cart before, we increase the quantity value." SET quantity = quantity + 1 WHERE id = $product_id";) On the cart page, we can also see the total price of all the products we have added to the cart. When calculating this total amount, we multiply the quantity and price values in the table and add them all.("SELECT SUM(quantity * price) AS total_fiyat FROM cart";). We can instantly change the quantity of the products in the cart and delete them from the cart, that is, from the cart table if we want. When the number of products in the cart changes, we add an action to the form we created so that it works synchronously, that is, simultaneously, in the total price, and we add a new PHP file to this action. It allows us to refresh our page every time we receive an input. (<form class="cart-form" method="POST" action= "/update-product-count.php">) In this way, when we send input from the page, the price is updated simultaneously.
<img src="https://github.com/Meiji-Y/Sephora_Website/blob/main/sample%20images/ss4.JPG" width="700" height="500">
##  3.	Results and Discussion
Project Management
Due to the complexity of the website creation process, we had certain challenges in allocating tasks among the group. Several courses' website building procedures and steps were examined. A balanced distribution of tasks was established to the group members as a consequence of thorough investigation. The work packages were thoughtfully and logically organized into learning and task-related components.
  
When we look at the original Sephora website, although our categories are less than the original due to our homework, its header, homepage product contents, cart and user login interface are almost the same.
<img src="https://github.com/Meiji-Y/Sephora_Website/blob/main/sample%20images/ss5.JPG" width="700" height="500">
## Limitations and Constraints
  Not using jquery and other languages has restricted many of our actions that we can easily do via javascript. We were able to pull the logos by importing a link from a logo kit page without using bootstrap.
4.	Future Considerations
We were able to construct this website quickly and present it as clearly as we could, which gave our entire group confidence. After completing this project, group members will approach web development in a more optimistic and knowledgeable manner. I appreciate everyone in my group for taking ownership of the project and contributing to it. I also recognize the importance of teamwork in business and on similar projects.
      5.Conclusion
All group members now have the answers to a variety of issues, including how to create a website, what actions should be taken first, how this process will continue, and what potential challenges might arise. The finest aspect of the job is that the group members enjoyed their time while working on the website and were eager to learn new things.


##  References 
1.	Başbayan, E., & Akademi, B.-G. (2022, October 18). HTML CSS ve JavaScript Ile E-Ticaret Sitesi Yapımı 2022. Udemy. Retrieved December 17, 2022, from https://www.udemy.com/course/html-css-javascript-ile-e-ticaret-sitesi-yapimi/

2.	“WampServer, La Plate-forme de développement web sous windows - apache, MySQL, PHP,” WampServer. [Online]. Available: https://www.wampserver.com/en/. [Accessed: 19-Dec-2022]. 
