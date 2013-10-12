addingup-statamic
=================

A wee plugin that adds up

If you have an entry that has some numeric meta data,  eg scores, and you want to add them up, you can do it like this:

    {{ addingup:sum numbers="{{ strength }} {{ speed }} {{ lasors }} {{ invincibility }}" }}
    
Which is probably possible using the lex template language, but i couldn't see how.     
