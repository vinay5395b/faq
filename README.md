#faq Chatbot with Dialogflow

1. As a user, I can register and login so that I can click on the chat icon and start a conversation with the faq chatbot.
2. As a user, I want to ask the chatbot for information about different programming languages like php and javascript (limited to only these two at present).
3. As a user, I want to ask about installation for programming languages and Laravel framework, so that the chatbot can give links to the websites for installation guides.
4. As a user, I want to get information about the chatbot by asking a question like 'who are you?', so that the chatbot gives information about itself.
5. As a user, I can ask the chatbot for knock knock jokes, so that the bot engages the user in a knock knock joke.
6. As a user, I want to greet the chatbot, so that it greets me back.
7. As a user, if I ask the chat bot any question not defined in it's learning algorithm, it will reply with a negative reply like 'Say that one more time?'.

Heroku link: https://miniproj-3.herokuapp.com/

##Sample conversation
sampleconvo

#me
hello

#bot default
Hello! What's your name?

#me
john

#bot default
John, how may I help you?

#me
what is php?

#bot default
PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly. Would you want to know more about it?

#me
yes

#bot default
Great! I have a link which can help you with that. Here you go- http://php.net/manual/en/faq.general.php

#me
how to install it?

#bot default
Here are some links. Select one according to your OS

Linux OS- http://php.net/manual/en/install.unix.debian.php
Windows OS- http://php.net/manual/en/install.windows.php
Mac OS- http://php.net/manual/en/install.macosx.php

#me
how to install laravel?

#bot default
Okay! This link will help you with that- https://laravel.com/docs/5.7

#me
tell me a knock knock joke

#bot default
Knock knock

#me
whos there?

#bot default
yah

#me
yah who?

#bot default
No thanks, I use Google! ;)

#me
haha

#bot default
Glad I can make you laugh.

#me
who are you?

#bot default
I am Jarvis, a FAQ chatbot. I am here to answer your questions.

#me
when is my WSD final submission due?

#bot default
I didn't get that. Can you say it again?

#me
Goodbye

#bot default
Bye-bye!
