# Task

A customer approached us to build a web blogging platform.

The homepage will show all the blog posts to everyone visiting the web. Any user will be able to register in the platform, login to a private area to see the posts he created and, if they want, create new ones. They won't be able to edit or delete them.

The blog posts will only contain a title, description and publication date. The users should be able to sort them by publication_date.

Also, the customer is using another blogging platform and she wants us to auto import the posts created there and add them to our new blogging platform, for that reason, she provided us the following REST api endpoint that returns the new posts https://sq1-api-test.herokuapp.com/posts. 

The posts from this feed should be saved under a designated, system-created user, 'admin'.

Our customer is a very popular blogger, who generates between 2 and 3 posts an hour. The site which powers the feed linked above is a very popular one (several million visitors a month), and we are expecting a similar level of traffic on our site. One of our goals is to minimise the strain put on our system during traffic peaks, while also minimising the strain we put on the feed server.

# Hosting

You can see the results of this task here: https://test-task-pixelsoft.antalogic.dev

# User creations
* Admin:
    * Email: zigi@gmail.com
    * Password: 12345678
    
* Guest:
    * Email: guest@gmail.com
    * Password: 12345678

