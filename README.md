Moive Theater
=========

Introduction
---------

The purpose of this project is to create an online movie theater web application. Several functions are presented in the project. From customer perspective, new movies will be available to them and customer will be able to search a movie and reserve seats for the time they select. From movie theater perspective, the official is able to manage the details of movie, ticket, customer, show timing. It manages all the necessary administrative functions. Few assumptions will be made based upon real world situation. First of all, user registration is only limited to the regular customer and website administrator will be given the only account without registering themselves. Second, each user is only allowed to buy limited number of tickets for each specific movie. Meanwhile, it is designed to allow customers to add only one movie at a time to the shopping cart. If there is a movie in the shopping needed to be checkout, user will not be able to add another one. All these limitations and constraints are considered for the fairness and anti-speculation.

1. index.html
   1. TODO
      1. admin edit modal, still missing room and time information
   2. Need:
      1. API for extracting carousel picture information
      2. API for extracting what's new picture information
      3. API for extracting Coming Next picture information (tentative, maybe not have coming next section anymore)
      4. API for extracting Top Select picture information (tentative, maybe not have top select section anymore)
      5. API for extracting food&drink picture and content information
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
3. shoppingCart.html
   1. TODO
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

4. search.html
   1. TODO:
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

