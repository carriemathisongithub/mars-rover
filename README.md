# Thank you

Thank you for allowing me to take this test and for considering me for the open position as back-end developer at Werkspot.

# Credits

I couldn't have done this test without the help from these sources:

1. http://php.net
1. https://github.com/Maykonn/mars-rover-technical-challenge-php
1. https://medium.com/funeralzone/a-better-way-of-writing-value-objects-in-php-d4e224de133
1. https://codete.com/blog/value-objects/

I appreciate the second link is "the answer" to this challenge. I've taken the liberty to be inspired and borrow parts of their solution.

# Verify input vs. output

As stated in the requirements, the verification is satisfied with a unit testing framework.

I've written quite a few unit tests, but the one that verifies the input vs. the output is `tests/ReadFromInputTest.php`.

# Difficulties and questions

I've failed to attach the plateau to the rover (or rover squad). In doing so, I came up with a few questions related to the plateau:

1. What happens if I reach an out-of-bound co-ordinate?
1. What could have been the purpose of the plateau when attached to the rover (or rover squad) aside from verifying a rover doesn't "escape" the boundaries?

If the above questions would've been clear in the instructions, I would've attached the plateau to the individual rovers and verified it's boundaries with every `Move` command, throwing an `\Exception` when it would've crossed the border.

# Before I programmed anything

... I first drew two plateaus and added their respective X and Y co-ordinates based on the given input. I then, by hand, verified the output so I understood how the movement would've worked. I've e-mailed this file since GitHub won't show it (shows 404 when uploaded).
