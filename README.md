Moive Theater
=========

Introduction
---------

The purpose of this project is to create an online movie theater web application. Several functions are presented in the project. From customer perspective, new movies will be available to them and customer will be able to search a movie and reserve seats for the time they select. From movie theater perspective, the official is able to manage the details of movie, ticket, customer, show timing. It manages all the necessary administrative functions. Few assumptions will be made based upon real world situation. First of all, user registration is only limited to the regular customer and website administrator will be given the only account without registering themselves. Second, each user is only allowed to buy limited number of tickets for each specific movie. Meanwhile, it is designed to allow customers to add only one movie at a time to the shopping cart. If there is a movie in the shopping needed to be checkout, user will not be able to add another one. All these limitations and constraints are considered for the fairness and anti-speculation.

Database Design
-----------
The whole database design is strictly followed by the 3NF standard. Information will be stored accordingly and separately to achieve the robustness and completeness. As project statement requires the soft deletion, the team utilizes a delete flag inside the movie relation to realize so. As either pages load, administrator edits or user requests, as long as delete flag is on, it will not be in consideration. Administrator is allowed to create, read, modify and delete a
movie. As long as a movie is decided to be removed, delete flag will be on but it will still be inside database. All the time it schedules to show will be deleted physically so it could release the time it takes. The SQL statement we used to create database is in the [SQL](https://github.com/momodidi119/Movie-Theater/tree/master/sql) Folder.

![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/database.png)

Languages and Frameworks for Implementation
-------------------
For the front end, CSS, HTML and JAVASCRIPT is used to build up the general layout and appearance of the website. To make the website presented in a more beautiful and professional way, bootstrap is used. For the easiness of frontend and backend communication, the team utilizes the functions brought by jQuery and mainly its element selection and ajax function. Backend is heavily relied on the PHP languages and it is used to connect frontend with database and process the requested data. Relational database design is used for the reason that it could better present the relations and make it easier for storing data and information.

Functions of Movie Theater
---------------
1. index.htmlTODO
   1. Details: admin edit modal, still missing room and time information
   2. Need:
      1. API for extracting carousel picture information
      2. API for extracting what's new picture information
      3. API for extracting Coming Next picture information (tentative, maybe not have coming next section anymore)
      4. API for extracting Top Select picture information (tentative, maybe not have top select section anymore)
      5. API for extracting food&drink picture and content information
Implement of login and register.
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/login.png)
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/register.png)
2. movie.html
   1. Need:
      1. API for extracting a specific movie information, including
         1.  movie name
         2. release date
         3. duration
         4. off date
         5. category
         6. director
         7. rate
         8. movie mid-picture url
      2. API for this specific movie's stage pictures (multiple pictures)
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/movie_page.png)    
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/movie_image_setting.png)   
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/modify_delete_movie.png)   
3. shoppingCart.html
   1. Details:
      1. need to add event to proceed to checkout button, send information back to DB
      2. need to add event to "Buy a Ticket", send information back to DB
   2. Need:
      1. API for extracting order for a specific user, including
         1. movie small-picture url
         2. movie name
         3. category
         4. that movie's ticket price (senior, adult, child)
         5. that movie's ticket quantity (seinor, adult, child)
      2. API for changing seat numbers after user proceed to checkout, information (sent back to backend) including
         1. movie name
         2. ticket number regard to ticket type (senior_ticket_amount, adult_ticket_amount, child_ticket_amount)
      3. API for getting back available time for a specific movie 
         1. input 1: date ---- year-month-day
         2. input 2: movie name
         3. return type should follow only show time ---- 12:40pm etc
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/shopping_cart.png)
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/food_view.png)
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/buy_ticket.png)
4. search.html
   1. Details:
      1. search recommendation: when one letter is typed, it should have suggestion
      2. add event to search button
      3. add event to each categories
      4. add event to "Buy A Ticket" button on each movie -- will go to its movie.html
      5. paging
   2. Need:
      1. API for extracting movie information by Category. Return information should include
         1. movie middle image url (should be array)
         2. movie description (maybe)
      2. API for taking letters of search text for search recommendation
      3. API for search button, should return
         1. movie middle image url
         2. movie descriotion (maybe)
![image](https://github.com/momodidi119/Movie-Theater/blob/master/readmeImages/search_view.png)
